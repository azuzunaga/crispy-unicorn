<?php

use Illuminate\Database\Seeder;

class ColorsTableSeeder extends Seeder
{
    public function run()
    {
      //delete colors table records
      DB::table('colors')->delete();

      //insert some dummy records
      DB::table('colors')->insert(array(
        array('name'=>'red', 'code'=>'#FF0000', 'created_at'=>NOW(), 'updated_at'=>NOW()),
        array('name'=>'orange', 'code'=>'#FF8000', 'created_at'=>NOW(), 'updated_at'=>NOW()),
        array('name'=>'yellow', 'code'=>'#FFFF00', 'created_at'=>NOW(), 'updated_at'=>NOW()),
        array('name'=>'chse', 'color_code'=>'#80FF00', 'created_at'=>NOW(), 'updated_at'=>NOW()),
        array('name'=>'green', 'code'=>'#00FF00', 'created_at'=>NOW(), 'updated_at'=>NOW()),
        array('name'=>'spreen', 'color_code'=>'#00FF80', 'created_at'=>NOW(), 'updated_at'=>NOW()),
        array('name'=>'cyan', 'code'=>'#00FFFF', 'created_at'=>NOW(), 'updated_at'=>NOW()),
        array('name'=>'azure', 'code'=>'#0080FF', 'created_at'=>NOW(), 'updated_at'=>NOW()),
        array('name'=>'blue', 'code'=>'#0000FF', 'created_at'=>NOW(), 'updated_at'=>NOW()),
        array('name'=>'violet', 'code'=>'#8000FF', 'created_at'=>NOW(), 'updated_at'=>NOW()),
        array('name'=>'magenta', 'code'=>'#FF00FF', 'created_at'=>NOW(), 'updated_at'=>NOW()),
        array('name'=>'rose', 'code'=>'#FF0080', 'created_at'=>NOW(), 'updated_at'=>NOW()),
     ));
    }
}
