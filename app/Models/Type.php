<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    use HasFactory;

    public function hotels()
    {
        return $this->hasMany('App\Models\Hotel');
    }

    public function __toString()
    {
        return $this->name;
    }
}
