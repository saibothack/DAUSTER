<?php

namespace App;

use Illuminate\Auth\MustVerifyEmail;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Contracts\Auth\MustVerifyEmail as MustVerifyEmailContract;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use Notifiable;
    use HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'avatar', 'password', 'provider', 'provider_id', 'surnames', 'birthday', 'phone', 'email_verified_at', 'status', 'authorized', 'kind_persons_id', 'full'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function setPasswordAttribute($password)
    {   
        $this->attributes['password'] = bcrypt($password);
    }

    public function scopeActive($query) {
        $query->where('status',  1);
    }

    public function scopeSearch($query, $search)
    {
        if (!empty(trim($search))) {
            $query->where('name', 'like', "%$search%")
                ->orWhere('surnames', 'like', "%$search%")
                ->orWhere('email', 'like', "%$search%")
                ->orWhere('phone', 'like', "%$search%");
        }
    }
}
