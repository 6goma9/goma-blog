<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Manager extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'mail_address', 'password',
    ];
}
