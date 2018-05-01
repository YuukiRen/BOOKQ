<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
	// protected $fillable=[
	// 	'isbn',
	// 	'author',
	// 	'title',
	// 	'synopsis',
	// 	'year',
	// 	'publisher',
	// 	'category_name'
	// 	// 'cover',
	// 	'description'
	// ];

/*
Prototype
*/
	public function owner(){
		return $this->belongsTo(User::class,'owner','name');
	}

	public function edit(){
		return route('books.edit', [
            'book' => $this->id
        ]);
	}
}
