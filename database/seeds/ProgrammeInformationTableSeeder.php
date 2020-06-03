<?php

use Illuminate\Database\Seeder;
use \App\Model\ProgrammeInformation;

/**
 * Class ProgrammeInformationTableSeeder
 */
class ProgrammeInformationTableSeeder extends Seeder
{
    /** @var array $seeds */
    protected $seeds = [
        [
            'programme_name' => 'Programme One',
            'programme_description' => 'This is programme One',
            'programme_thumbnail' => 'http://www.example/image1.jpg',
            'start_time' => '2020-06-01 10:00:00',
            'end_time' => '2020-06-01 12:00:00',
            'duration' => 3600,
            'channel' => 1,
        ],
        [
            'programme_name' => 'Programme Two',
            'programme_description' => 'This is programme Two',
            'programme_thumbnail' => 'http://www.example/image2.jpg',
            'start_time' => '2020-06-01 12:00:00',
            'end_time' => '2020-06-01 14:00:00',
            'duration' => 3600,
            'channel' => 1,
        ],
        [
            'programme_name' => 'Programme Three',
            'programme_description' => 'This is programme Three',
            'programme_thumbnail' => 'http://www.example/image3.jpg',
            'start_time' => '2020-08-01 10:00:00',
            'end_time' => '2020-08-01 10:00:00',
            'duration' => 3600,
            'channel' => 1,
        ],
        [
            'programme_name' => 'Programme Four',
            'programme_description' => 'This is programme Four',
            'programme_thumbnail' => 'http://www.example/image4.jpg',
            'start_time' => '2020-08-01 15:00:00',
            'end_time' => '2020-08-01 16:00:00',
            'duration' => 3600,
            'channel' => 2,
        ],
        [
            'programme_name' => 'Programme Five',
            'programme_description' => 'This is programme Five',
            'programme_thumbnail' => 'http://www.example/image5.jpg',
            'start_time' => '2020-08-01 16:00:00',
            'end_time' => '2020-08-01 18:00:00',
            'duration' => 3600,
            'channel' => 2,
        ],
    ];

    /**
     * run.
     */
    public function run()
    {
        foreach($this->seeds as $seed) {
            ProgrammeInformation::insert($seed);
        }
    }
}
