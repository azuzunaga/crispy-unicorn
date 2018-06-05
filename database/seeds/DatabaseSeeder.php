<?php

use App\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call(ColorsTableSeeder::class);
        factory(User::class, 50)->create();
    }
}
