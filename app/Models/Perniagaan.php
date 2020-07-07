<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Perniagaan extends Model
{
    protected $table = 'maklumat_perniagaan';

    protected $guarded = [];

    public function user()
    {
        return $this->hasOne(User::class, 'id', 'user_id');
    }
}
