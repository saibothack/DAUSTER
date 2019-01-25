<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tracking extends Model
{
    protected $fillable = ['latitude', 'longitude', 'user_id', 'status'];

    public function scopeActive($query) {
        $query->where('status',  1);
    }
}
