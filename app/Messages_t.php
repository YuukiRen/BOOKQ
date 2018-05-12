<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Messages_t extends Model
{
    protected $fillable=[
		'id',
		'signature',
		'from',
		'to',
		'messages',
	];
}
