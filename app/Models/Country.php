<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    public function  Continent()
    {
        return $this->belongsTo(Continent::class);
    }
}
