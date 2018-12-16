<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $fillable = ['distance', 'time', 'subtotal', 'total', 'vehicle', 'paymentMethod', 'users_id'];
}
