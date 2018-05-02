<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
	protected $fillable=[
		'book_id',
		'author',
		'title',
		'synopsis',
		'year',
		'publisher',
		'categorie',
		'cover',
		'categorie',		
		'description'
	];

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
