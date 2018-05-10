<?php

use Illuminate\Database\Seeder;
use App\Admin;



class adminseed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

    	Admin::insert([
    		[
    			'name'			=> 'admin',
    			'password'		=> bcrypt("admin"),
    			's_password'	=> bcrypt("admin"),
    			'email'			=> 'admin@gmail.com',
    		]
    	]);
    }
}
