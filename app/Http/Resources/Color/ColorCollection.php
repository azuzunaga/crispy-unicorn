<?php

namespace App\Http\Resources\Color;

use Illuminate\Http\Resources\Json\Resource;

class ColorCollection extends Resource
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
            'name' => $this->name,
            'code' => $this->code
        ];
    }
}
