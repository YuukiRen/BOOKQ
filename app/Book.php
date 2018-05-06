<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
	protected $fillable=[
		'id',
		'author',
		'title',
		'review',
		'year',
		'publisher',
		'category',
		'image',		
		'description',
		'owner_id'
	];

/*
Prototype
*/
	// public function comment(){
	// 	return $this->hasMany(Comment::class);
	// }
	public function user(){
		return $this->belongsTo(User::class);
	}	
}
