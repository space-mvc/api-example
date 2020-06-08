<?php

namespace App\Http\Controllers;

use App\Model\Channel;
use App\Model\ProgrammeInformation;
use App\Model\ProgrammeTimetable;
use Carbon\Carbon;
use Illuminate\Support\Facades\Validator;

/**
 * Class ChannelController
 *
 * @package App\Http\Controllers\Base
 */
class ChannelController extends Controller
{
    /**
     * getChannels.
     *
     * GET List of channels
     * Url /channels
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function getChannels()
    {
        try {

            $results = Channel::get();

            return response()->json(
                [
                    'data' => $results
                ]
            );

        } catch (\Exception $e) {

            return response()->json(
                [
                    'exception' => $e->getMessage()
                ]
            );
        }
    }

    /**
     * getProgrammeTimetable.
     *
     * GET Programme timetable for a selected channel, for a selected date and timezone.
     * Url /channels/{channel-uuid}/{date}/{timezone}
     *
     * @param $channelUuid
     * @param $date
     * @param $timezone
     * @return \Illuminate\Http\JsonResponse
     */
    public function getProgrammeTimetable($channelUuid, $date, $timezone = 'Europe-London')
    {
        try {
            $validator = Validator::make(
                [
                    'channel_uuid' => $channelUuid,
                    'date' => $date,
                    'timezone' => $timezone
                ],
                [
                    'channel_uuid' => 'required|integer',
                    'date' => 'required|date',
                    'timezone' => 'required',
                ]
            );

            if ($validator->fails()) {
                return response()->json(
                    [
                        'validation_errors' => $validator->errors()
                    ]
                );
            }

            $timezone = str_replace('-', '/', $timezone);

            $startTime = Carbon::createFromFormat('Y-m-d H:i:s', $date.' 00:00:00', $timezone);
            $endTime = Carbon::createFromFormat('Y-m-d H:i:s', $date.' 23:59:59', $timezone);

            $results = ProgrammeTimetable::
                where('start_time', '>=', $startTime)
                ->where('end_time', '<=', $endTime)
                ->get();

            return response()->json(
                [
                    'data' => $results,
                    'params'=> [
                        'start_time' => $startTime,
                        'end_time' => $endTime,
                        'timezone' => $timezone,
                    ]
                ]
            );

        } catch (\Exception $e) {

            return response()->json(
                [
                    'exception' => $e->getMessage()
                ]
            );
        }
    }

    /**
     * getProgrammeInformation.
     *
     * GET Programme information for a selected programme.
     * Url /channels/{channel-uuid}/programmes/{programme-uuid}
     *
     * @param $channelUuid
     * @param $programmeUuid
     * @return \Illuminate\Http\JsonResponse
     */
    public function getProgrammeInformation($channelUuid, $programmeUuid)
    {
        try {

            $validator = Validator::make(
                [
                    'channel_uuid' => $channelUuid,
                    'programme_uuid' => $programmeUuid,
                ],
                [
                    'channel_uuid' => 'required|integer',
                    'programme_uuid' => 'required|integer'
                ]
            );

            if ($validator->fails()) {
                return response()->json(
                    [
                        'validation_errors' => $validator->errors()
                    ]
                );
            }

            $result = ProgrammeInformation::where('channel', $channelUuid)->where('id', $programmeUuid)->first();

            return response()->json([
                'data' => $result
            ]);

        } catch (\Exception $e) {

            return response()->json(
                [
                    'exception' => $e->getMessage()
                ]
            );
        }
    }
}
