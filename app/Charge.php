<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Charge extends Model
{
    protected $fillable = ['name', 'charge', 'default', 'vehicles_id', 'status'];

    public function scopeActive($query) {
        $query->where('status',  1);
    }

    public function scopeParent($query, $parent) {
        if (!empty(trim($parent))) {
            $query->where('vehicles_id', $parent);
        }
    }

    public function scopeSearch($query, $search)
    {
        if (!empty(trim($search))) {
            $query->where('name', 'like', "%$search%")
                ->orWhere('charge', 'like', "%$search%");
        }
    }
}
