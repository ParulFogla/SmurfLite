<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    //
    protected $table = 'store';
    protected $fillable = [
        'title',
    ];
}
