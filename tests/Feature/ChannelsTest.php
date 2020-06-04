<?php

use Tests\TestCase;

/**
 * Class ChannelsTest
 */
class ChannelsTest extends TestCase
{
    /**
     * testChannels.
     */
    public function testChannels()
    {
        $response = $this->getJson('/channels');

        $response
            ->assertStatus(200)
            ->assertJson([
                'data' => [
                    [
                        'channel_name' => 'Channel 1',
                        'channel_icon' => 'Icon 1'
                    ]
                ],
            ]);
    }

    /**
     * testProgrammeInformation.
     */
    public function testProgrammeInformation()
    {
        $response = $this->getJson('/channels/1/programmes/1');
        $response
            ->assertStatus(200)
            ->assertJson(
            [
                'data' => [
                    "id"=> 1,
                    "programme_name" => "Programme One",
                    "programme_description"=> "This is programme One",
                    "programme_thumbnail"=> "http://www.example/image1.jpg",
                    "start_time"=> 1591005600,
                    "end_time"=> 1591012800,
                    "duration"=> 3600,
                    "channel"=> 1,
                ]
            ]
        );
    }

    /**
     *
     */
    public function testProgrammeTimetable()
    {
        $response = $this->getJson('/channels/1/2020-06-01/America-New_York');
        $response
            ->assertStatus(200)
            ->assertJson(
            [
                'data' => [
                    0 => [
                        "id" => 1,
                        "programme_name" => "Programme 1",
                        "start_time" => 1591005600,
                        "end_time" => 1591012800,
                        "duration" => 3600
                    ]
                ]
            ]
        );
    }
}
