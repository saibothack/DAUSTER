<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ServiceCoordinates extends Model
{
    protected $fillable = ['lat', 'lng', 'services_id', 'orden'];
}
