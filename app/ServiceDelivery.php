<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ServiceDelivery extends Model
{
    protected $fillable = ['companyName', 'name', 'surnames', 'phone', 'email', 'packages', 'description', 'orden', 'services_id'];
}
