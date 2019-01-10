<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ServiceOthersCharge extends Model
{
    protected $fillable = ['name', 'price', 'description', 'services_id'];
}
