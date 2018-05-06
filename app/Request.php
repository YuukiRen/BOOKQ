<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Request extends Model
{
    public function book(){
    	return $this->belongsTo(Book::class);
    }
}
