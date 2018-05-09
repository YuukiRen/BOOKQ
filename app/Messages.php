<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Messages extends Model
{
    protected $fillable=[
		'id',
		'signature',
		'from',
		'to',
		'messages',
	];
}
