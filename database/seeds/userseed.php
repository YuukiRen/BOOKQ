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
        		'email'			=> 'alfannn@gmail.com',
        		'complete_name'	=> 'Ahmad Maulvi Alfansuri',
        		'nim'			=> 'G64160081',
        		'address'		=> 'Citayam',
        		'line_id'		=> 'aaaa',
    		    'phone_number'	=> '0897654321',
                'fav_book'      => 'safsf',
                'about_me'      => 'i dunno',
                'user_image'    => 'images/no-cover.jpeg',

        	],
            [
                'id'            => '2',
                'name'          => 'alvinreinaldo',
                'password'      => bcrypt("secret"),
                'email'         => 'coba@coba.com',
                'complete_name' => 'Alvin Reinaldo',
                'nim'           => 'G64160067',
                'address'       => 'Depok',
                'line_id'       => 'alvinreinaldoo',
                'phone_number'  => '0812910480999',
                'fav_book'      => 'CP',
                'about_me'      => 'i dunno',
                'user_image'    => 'images/no-cover.jpeg',
            ],
            [
                'id'            => '3',
                'name'          => 'jajaja',
                'password'      => bcrypt("secret"),
                'email'         => 'ww@coba.com',
                'complete_name' => 'saya',
                'nim'           => 'G64160067',
                'address'       => 'Depok',
                'line_id'       => 'safasf',
                'phone_number'  => '0812910480999',
                'fav_book'      => 'CP',
                'about_me'      => 'i dunno',
                'user_image'    => 'images/no-cover.jpeg',
            ],
            [
                'id'            => '4',
                'name'          => 'dummy',
                'password'      => bcrypt("secret"),
                'email'         => 'dum@coba.com',
                'complete_name' => 'saya',
                'nim'           => 'G64160067',
                'address'       => 'Depok',
                'line_id'       => 'safasf',
                'phone_number'  => '0812910480999',
                'fav_book'      => 'CP',
                'about_me'      => 'i dunno',
                'user_image'    => 'images/no-cover.jpeg',
            ],
        ]);
        
    }
}
