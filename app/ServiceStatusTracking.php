<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ServiceStatusTracking extends Model
{
    protected $fillable = ['services_id', 'service_statuses_id', 'notes'];
}
