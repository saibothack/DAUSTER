<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Billing extends Model
{
    protected $fillable = ['RFC', 'name', 'street', 'exterior', 'interior', 'cp', 'colony', 'location', 'city', 'countries_id', 'states_id', 'users_id'];
}
