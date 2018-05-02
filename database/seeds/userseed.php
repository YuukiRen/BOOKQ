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
        User::truncate();

        User::insert([
        	[
        		'id'			=> '1',
        		'name'			=> 'alfan1',
        		'password'		=> bcrypt("alfan1"),
        		'email'			=> 'alfakatsuki@gmail.com',
        		'nama_lengkap'	=> 'Ahmad Maulvi Alfansuri',
        		'nim'			=> 'G64160081',
        		'alamat'		=> 'Citayam',
        		'id_line'		=> 'aaaa',
        		'nomor_hp'		=> '0897654321',
        	],
            
        ]);
        
    }
}
