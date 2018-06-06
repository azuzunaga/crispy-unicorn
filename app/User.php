<?php

namespace App;

use App\Color;
use App\Connection;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    public function fullName()
    {
        return $this->first_name . ' ' . $this->last_name;
    }

    public function favoriteColor()
    {
        return $this->belongsTo(Color::class, 'fav_color_id');
    }

    // Connections with users with a bigger userId
    function biggerConnections()
    {
      return $this->hasMany(Connection::class, 'smaller_id');
    }

    // Connections with users with a smaller userId
    function smallerConnections()
    {
      return $this->hasMany(Connection::class, 'bigger_id');
    }

    // accessor allowing you call $user->connections
    public function getConnectionsAttribute()
    {
        if ( ! array_key_exists('connections', $this->relations)) $this->loadConnections();

        return $this->getRelation('connections');
    }

    protected function loadConnections()
    {
        if ( ! array_key_exists('connections', $this->relations))
        {
            $connections = $this->mergeConnections();

            $this->setRelation('connections', $connections);
        }
    }

    protected function mergeConnections()
    {
        return $this->biggerConnections->merge($this->smallerConnections);
    }
}
