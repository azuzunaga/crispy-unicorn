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
        array('color_name'=>'red', 'color_code'=>'#FF0000', 'created_at'=>NOW(), 'updated_at'=>NOW()),
        array('color_name'=>'orange', 'color_code'=>'#FF8000', 'created_at'=>NOW(), 'updated_at'=>NOW()),
        array('color_name'=>'yellow', 'color_code'=>'#FFFF00', 'created_at'=>NOW(), 'updated_at'=>NOW()),
        array('color_name'=>'chartreuse', 'color_code'=>'#80FF00', 'created_at'=>NOW(), 'updated_at'=>NOW()),
        array('color_name'=>'green', 'color_code'=>'#00FF00', 'created_at'=>NOW(), 'updated_at'=>NOW()),
        array('color_name'=>'spring green', 'color_code'=>'#00FF80', 'created_at'=>NOW(), 'updated_at'=>NOW()),
        array('color_name'=>'cyan', 'color_code'=>'#00FFFF', 'created_at'=>NOW(), 'updated_at'=>NOW()),
        array('color_name'=>'azure', 'color_code'=>'#0080FF', 'created_at'=>NOW(), 'updated_at'=>NOW()),
        array('color_name'=>'blue', 'color_code'=>'#0000FF', 'created_at'=>NOW(), 'updated_at'=>NOW()),
        array('color_name'=>'violet', 'color_code'=>'#8000FF', 'created_at'=>NOW(), 'updated_at'=>NOW()),
        array('color_name'=>'magenta', 'color_code'=>'#FF00FF', 'created_at'=>NOW(), 'updated_at'=>NOW()),
        array('color_name'=>'rose', 'color_code'=>'#FF0080', 'created_at'=>NOW(), 'updated_at'=>NOW()),
     ));
    }
}
