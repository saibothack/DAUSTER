<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ServiceChargesOthers extends Model
{
    protected $fillable = ['service_details_id', 'description', 'costs', 'status'];
}
