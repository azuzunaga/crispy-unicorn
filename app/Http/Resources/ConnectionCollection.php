<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\Resource;

class ConnectionCollection extends Resource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */

    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'small' => $this->small->id,
            'big' => $this->big->id,
        ];
    }
}
