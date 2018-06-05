<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Color extends Model
{
    public function likers()
    {
        return $this->hasMany(User::class, 'fav_color_id');
    }
}
