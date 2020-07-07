<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Cawangan;

class Negeri extends Model
{
    protected $table = 'tbl_negeri';

    protected $guarded = [];

    public $timestamps = false;

    public function cawangan()
    {
        return $this->hasMany(Cawangan::class, 'kodnegeri', 'kodnegeri');
    }
}
