<?php

use Illuminate\Database\Seeder;
use App\Genre;

class genres extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */


    public function run()
    {
        Genre::truncate();
        $gen = ['bisnis', 'sejarah', 'edukasi', 'lifestyle', 'novel', 'komik', 'health', 'teknologi', 'religi','entertainment'];
    	foreach ($gen as $genr) {
    		// Genre::setNameAttribute('aaaa');
    		Genre::insertGetId(
    		    ['name' => $genr, 'slug' => str_slug($genr)]
    		);
    		
    	}
    }
}
