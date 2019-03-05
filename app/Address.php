<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    protected $primarykey = 'id';
    public $timestamps = false;
    protected $casts = [
        'id' => 'integer',
    ];
}
