<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    public function favoriteColor()
    {
        return $this->belongsTo(Color::class, 'fav_color_id');
    }
}
