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
        $user = $this->small === $this->big ? $this->small : $this->big;
        return [
            'name' => $user->fullName(),
            'favoriteColor' => $user->favoriteColor->name,
            'favoriteColorCode' => $user->favoriteColor->code
        ];
    }
}
