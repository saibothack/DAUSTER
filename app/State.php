<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    protected $fillable = [
        'name', 'countries_id'
    ];

    public function scopeSearch($query, $search)
    {
        if (!empty(trim($search))) {
            $query->where('name', 'like', "%$search%");
        }
    }

    public function scopeCountry($query, $search)
    {
        if (!empty(trim($search))) {
            $query->where('countries_id', '=', $search);
        }
    }
}
