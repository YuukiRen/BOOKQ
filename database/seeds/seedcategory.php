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
        $gen = ['Business', 'Historical', 'Education', 'Lifestyle', 'Novel', 'Comic', 'Health', 'Technology', 'Religion','Entertainment'];
    	foreach ($gen as $genr) {
    		// Category::setNameAttribute('aaaa');
    		Category::insertGetId(
    		    ['name' => $genr, 'slug' => str_slug($genr)]
    		);
    		
    	}
    }
}
