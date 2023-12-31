<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    public function books()
    {
        return $this->belongsToMany('App\Models\Book');
    }
}
