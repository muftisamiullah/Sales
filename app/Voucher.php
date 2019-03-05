<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Voucher extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'code','discountAmount',
    ];
    protected $primarykey = 'id';
    public $timestamps = false;
    //
    protected $casts = [
        'id' => 'integer',
    ];
}
 