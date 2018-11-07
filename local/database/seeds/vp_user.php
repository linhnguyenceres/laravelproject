<?php

use Illuminate\Database\Seeder;

class vp_user extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $arr=[
        	'user_name'=>'admin',
        	'user_pass'=>md5(1),
        	'email'=>'example@gmail.com',
        	'token'=>'123456'
        	];
        DB::table('vp_user')->insert($arr);
    }
}
