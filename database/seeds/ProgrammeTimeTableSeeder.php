<?php

use Illuminate\Database\Seeder;
use \App\Model\ProgrammeTimetable;

/**
 * Class ProgrammeTimeTableSeeder
 */
class ProgrammeTimeTableSeeder extends Seeder
{
    /** @var array $seeds */
    protected $seeds = [
        [
            'programme_name' => 'Programme 1',
            'start_time' => '2020-06-01 10:00:00',
            'end_time' => '2020-06-01 12:00:00',
            'duration' => 3600,
        ],
        [
            'programme_name' => 'Programme 2',
            'start_time' => '2020-06-01 12:00:00',
            'end_time' => '2020-06-01 13:00:00',
            'duration' => 3600,
        ],
        [
            'programme_name' => 'Programme 3',
            'start_time' => '2020-06-01 13:00:00',
            'end_time' => '2020-06-01 14:00:00',
            'duration' => 3600,
        ],
        [
            'programme_name' => 'Programme 4',
            'start_time' => '2020-06-01 15:00:00',
            'end_time' => '2020-06-01 16:00:00',
            'duration' => 3600,
        ],
        [
            'programme_name' => 'Programme 5',
            'start_time' => '2020-06-01 17:00:00',
            'end_time' => '2020-06-01 18:00:00',
            'duration' => 3600,
        ],
    ];

    /**
     * run.
     */
    public function run()
    {
        foreach($this->seeds as $seed) {
            ProgrammeTimetable::insert($seed);
        }
    }
}
