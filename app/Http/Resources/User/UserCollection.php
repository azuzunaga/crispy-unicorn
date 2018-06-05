<?php

namespace App\Http\Resources\User;

use Illuminate\Http\Resources\Json\Resource;

class UserCollection extends Resource
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'name' => $this->fullName(),
            'favoriteColor' => $this->favoriteColor->name,
            'favoriteColorCode' => $this->favoriteColor->code,
            'href' => [
                'connections' => route('connections.index', $this->id),
                'link' => route('users.show', $this->id)
            ]
        ];
    }
}
