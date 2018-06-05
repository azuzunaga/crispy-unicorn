<?php

use App\User;
use App\Connection;
use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $numUsers = 50;
        $this->call(ColorsTableSeeder::class);
        factory(User::class, $numUsers)->create();
        $connections = factory(Connection::class, $numUsers * 5)->make();

        foreach ($connections as $connection) {
            repeat:
            try {
                $connection->save();
            } catch (\Illuminate\Database\QueryException $e) {
                $connection = factory(Connection::class)->make();
                goto repeat;
            }
        }
    }
}
