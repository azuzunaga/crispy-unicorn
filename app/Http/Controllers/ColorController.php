<?php

namespace App\Http\Controllers;

use App\Color;
use App\Http\Resources\Color\ColorCollection;
use App\Http\Resources\Color\ColorResource;
use Illuminate\Http\Request;

class ColorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return [
            'color' => ColorCollection::collection(Color::all())
        ];
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Color $color)
    {
        return new ColorResource($color);
    }
}
