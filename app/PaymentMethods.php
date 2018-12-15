<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PaymentMethods extends Model
{
    protected $fillable = ['name', 'card', 'type_cards_id', 'token', 'users_id', 'type_card'];

    public function scopeUserId($query, $search)
    {
        if (!empty(trim($search))) {
            $query->where('users_id', $search);
        }
    }
}
