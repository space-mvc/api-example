<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ProgrammeTimetable
 *
 * @package App\Model
 */
class ProgrammeTimetable extends Model
{
    /** @var string $table */
    protected $table = 'programme_timetable';

    /** @var array $guarded */
    protected $guarded = [''];

    /** @var array $casts */
    protected $casts = [
        'programme_name' => 'string',
        'start_time' => 'timestamp',
        'end_time' => 'timestamp',
        'duration' => 'integer',
    ];

}
