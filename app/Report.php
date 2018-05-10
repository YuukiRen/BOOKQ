<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    protected $fillable=[
		'id',
		'user_id',
		'book_id',
		'report_desc',
		'status',
	];

}
