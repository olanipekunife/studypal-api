<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Matric extends Model
{
    //
    protected $fillable = [
        'matric',
        'faculty',
        'department',
        'level',
        'password'
    ];
}
