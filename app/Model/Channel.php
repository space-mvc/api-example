<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Channel
 *
 * @package App\Model
 */
class Channel extends Model
{
    /** @var string $table */
    protected $table = 'channels';

    /** @var array $guarded */
    protected $guarded = [''];

    /** @var array $casts */
    protected $casts = [
        'channel_name' => 'string',
        'channel_icon' => 'string'
    ];

}
