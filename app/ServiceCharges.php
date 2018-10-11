<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ServiceCharges extends Model
{
    protected $fillable = ['charges_id', 'service_details_id', 'costs', 'status'];
}
