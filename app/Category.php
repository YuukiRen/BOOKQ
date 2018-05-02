<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
	protected $table = 'category';

	protected $fillable=[
		'name', 'id', 'slug'
	];
	
	
    public function setNameAttribute($value)
    {
    	// $this->attributes['id'] =   count(\DB::table('genres'));	
        // $this->attributes['name'] = $value;
        // $this->attributes['slug'] = str_slug($value);
    // 	$category = new Category;
    // 	$category->id 	=  count(\DB::table('category')) ;
    // 	$category->name = 'alfan';
    // 	$category->slug = $value;
    // 	$category->save();
    // NOT WORKED
    }

}
