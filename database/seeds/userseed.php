<?php

use Illuminate\Database\Seeder;
use App\User;

class userseed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {
        // User::truncate();

        User::insert([
        	[
        		'id'			=> '1',
        		'name'			=> 'alfan1',
        		'password'		=> bcrypt("alfan1"),
        		'email'			=> 'alfakatsuki@gmail.com',
        		'complete_name'	=> 'Ahmad Maulvi Alfansuri',
        		'nim'			=> 'G64160081',
        		'address'		=> 'Citayam',
        		'line_id'		=> 'aaaa',
        		'phone_number'		=> '0897654321',
                'fav_book'      =>'CP',
                'about_me'      =>'i dunno',
        	],
            [
                'id'            => '2',
                'name'          => 'alvinreinaldo',
                'password'      => bcrypt("secret"),
                'email'         => 'coba@coba.com',
                'complete_name'  => 'Alvin Reinaldo',
                'nim'           => 'G64160067',
                'address'        => 'Depok',
                'line_id'       => 'alvinreinaldoo',
                'phone_number'      => '0812910480999',
                'fav_book'      =>'CP',
                'about_me'      =>'i dunno',
            ],
            
        ]);
        
    }
}
