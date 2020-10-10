<?php

namespace App\Entities;

use Jenssegers\Mongodb\Eloquent\Model;

class Role extends Model
{
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'created_at', 'updated_at',
    ];
}
