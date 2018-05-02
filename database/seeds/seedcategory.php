<?php

use Illuminate\Database\Seeder;
use App\Category;

class seedcategory extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::truncate();
        $gen = ['bisnis', 'sejarah', 'edukasi', 'lifestyle', 'novel', 'komik', 'health', 'teknologi', 'religi','entertainment'];
    	foreach ($gen as $genr) {
    		// Category::setNameAttribute('aaaa');
    		Category::insertGetId(
    		    ['name' => $genr, 'slug' => str_slug($genr)]
    		);
    		
    	}
    }
}
