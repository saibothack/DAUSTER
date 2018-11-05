<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    protected $fillable = ['street', 'exterior', 'interior', 'cp', 'location', 'countries_id', 'states_id', 'users_id'];
}
