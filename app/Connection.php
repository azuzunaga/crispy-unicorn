<?php

namespace App;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Connection extends Model
{
    public function small()
    {
        return $this->belongsTo(User::class, 'smaller_id');
    }

    public function big()
    {
        return $this->belongsTo(User::class, 'bigger_id');
    }
}
