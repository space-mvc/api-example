<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ProgrammeInformation
 *
 * @package App\Model
 */
class ProgrammeInformation extends Model
{
    /** @var string $table */
    protected $table = 'programme_information';

    /** @var array $guarded */
    protected $guarded = [''];

    /** @var array $casts */
    protected $casts = [
        'programme_name' => 'string',
        'programme_description' => 'string',
        'programme_thumbnail' => 'string',
        'start_time' => 'timestamp',
        'end_time' => 'timestamp',
        'duration' => 'integer',
        'channel' => 'integer'
    ];

}
