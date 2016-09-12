<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class data extends Model
{
    //
    protected $fillable = [
        'title',
        'body',
        'published_at'
    ];

}
