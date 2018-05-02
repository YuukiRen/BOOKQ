<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
	protected $table = 'genres';

	protected $fillable=[
		'name', 'id', 'slug'
	];
	
	
    public function setNameAttribute($value)
    {
    	// $this->attributes['id'] =   count(\DB::table('genres'));	
        // $this->attributes['name'] = $value;
        // $this->attributes['slug'] = str_slug($value);
    	$genre = new Genre;
    	$genre->id 	=  count(\DB::table('genres')) ;
    	$genre->name = 'alfan';
    	$genre->slug = $value;
    	$genre->save();
    }

}
