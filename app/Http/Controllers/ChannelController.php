<?php

namespace App\Http\Controllers;

use App\Model\Channel;
use App\Model\ProgrammeInformation;
use Illuminate\Http\Request;

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
        $results = Channel::get();

        return response()->json(
            [
                'data' => $results
            ]
        );
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
    public function getProgrammeTimetable($channelUuid, $date, $timezone)
    {
        $results = Channel::get();

        return response()->json($results);
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
        $result = ProgrammeInformation::where('channel', $channelUuid)->where('id', $programmeUuid)->first();

        return response()->json([
            'data' => $result
        ]);
    }
}
