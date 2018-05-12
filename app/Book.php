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
		'owner_id',
		'report'
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
	public function comment(){
    	return $this->hasMany(Comment::class);
    }	
    public function rating(){
    	return $this->hasMany(Rating::class);
    }
    public function request(){
    	return $this->hasMany(Request::class);
    }
}
