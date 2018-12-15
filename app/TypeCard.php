<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TypeCard extends Model
{
    protected $fillable = ['name', 'icon', 'code', 'active'];

    public function scopeActive($query, $search)
    {
        if (!empty(trim($search))) {
            $query->where('active', $search);
        }
    }
}
