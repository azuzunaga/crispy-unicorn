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
        $url = route('connections.index', $this->id);
        $url = substr($url, 32);

        return [
            'id' => $this->id,
            'name' => $this->fullName(),
            'favoriteColor' => $this->favoriteColor->name,
            'favoriteColorCode' => $this->favoriteColor->code,
            // 'connections' => ConnectionCollection::collection($this->connections),
            'links' => [
                'connections' => $url,
                // 'userProfile' => route('users.show', $this->id)
            ]
        ];
    }
}
