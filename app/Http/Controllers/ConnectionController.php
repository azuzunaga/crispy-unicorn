<?php

namespace App\Http\Controllers;

use App\User;
use App\Connection;
use App\Http\Resources\ConnectionCollection;
use Illuminate\Http\Request;

class ConnectionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(User $user)
    {
        $result = [];
        $userConnections = $user->connections;
        foreach ($userConnections as $connection) {
            // Swap between big or small user id to pull the opposite as a friend
            $friend = $user->id === $connection->big->id ? $connection->small : $connection->big;
            array_push($result, [
                'connectionId' => $connection->id,
                'name' => $friend->fullName(),
                'favoriteColor' => $friend->favoriteColor->name,
                'favoriteColorCode' => $friend->favoriteColor->code
            ]);
        }

        return $result;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
