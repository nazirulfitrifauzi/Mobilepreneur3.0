<?php

namespace App;

use App\Models\Peribadi;
use App\Models\Perniagaan;
use App\Models\Pinjaman;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable implements MustVerifyEmail
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $guarded = [];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function peribadi()
    {
        return $this->hasOne(Peribadi::class, 'user_id');
    }

    public function perniagaan()
    {
        return $this->hasOne(Perniagaan::class, 'user_id');
    }

    public function pinjaman()
    {
        return $this->hasOne(Pinjaman::class, 'user_id');
    }
}
