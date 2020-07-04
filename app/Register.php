<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Register extends Model
{
    protected $fillable = [
        'name_job', 
        'name_service', 
        'phone',
        'place_delivery',
        'speci',
        'prepayment',
        'reg_date'
    ];
}
