<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ServiceDetails extends Model
{
    protected $fillable = ['start_coordinates', 'end_coordinates', 'kilometers', 'time', 'status'];
}
