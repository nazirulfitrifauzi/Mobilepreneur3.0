<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Peribadi extends Model
{
    protected $table = 'maklumat_peribadi';

    protected $guarded = [];

    public function user()
    {
        return $this->hasOne(User::class, 'id', 'user_id');
    }
}
