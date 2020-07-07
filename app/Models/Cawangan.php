<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Negeri;

class Cawangan extends Model
{
    protected $table = 'tbl_cawangan';

    protected $guarded = [];

    public $timestamps = false;

    public function negeri()
    {
        return $this->hasMany(Negeri::class, 'kodnegeri', 'kodnegeri');
    }
}
