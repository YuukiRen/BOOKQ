<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
	protected $fillable=[
		'isbn',
		'author',
		'title',
		'synopsis',
		'year',
		'publisher',
		'description'
	]
}
