<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Discount extends Model
{
    protected $primarykey = 'id';
    public $timestamps = false;
    protected $fillable = [
        'couponCode','discountAmount','UserId','discountType'
    ];
    protected $casts = [
        'id' => 'integer',
    ];
}
