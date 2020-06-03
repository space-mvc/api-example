<?php

use Illuminate\Database\Seeder;
use \App\Model\Channel;

/**
 * Class ChannelsTableSeeder
 */
class ChannelsTableSeeder extends Seeder
{
    /** @var array $seeds */
    protected $seeds = [
        [
            'channel_name' => 'Channel 1',
            'channel_icon' => 'Icon 1',
        ],
        [
            'channel_name' => 'Channel 2',
            'channel_icon' => 'Icon 2',
        ],
        [
            'channel_name' => 'Channel 3',
            'channel_icon' => 'Icon 3',
        ],
        [
            'channel_name' => 'Channel 4',
            'channel_icon' => 'Icon 4',
        ],
        [
            'channel_name' => 'Channel 5',
            'channel_icon' => 'Icon 5',
        ],
        [
            'channel_name' => 'Channel 6',
            'channel_icon' => 'Icon 6',
        ],
        [
            'channel_name' => 'Channel 7',
            'channel_icon' => 'Icon 7',
        ],
        [
            'channel_name' => 'Channel 8',
            'channel_icon' => 'Icon 8',
        ],
        [
            'channel_name' => 'Channel 9',
            'channel_icon' => 'Icon 9',
        ],
        [
            'channel_name' => 'Channel 10',
            'channel_icon' => 'Icon 10',
        ],
    ];

    /**
     * run.
     */
    public function run()
    {
        foreach($this->seeds as $seed) {
            Channel::insert($seed);
        }
    }
}
