<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $fillable = ['distance', 'time', 'subtotal', 'total', 'vehicles_id', 'paymentMethods_id', 'users_id', 'users_id_driver'];
}
