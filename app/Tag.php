<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $table = 'tag';

    protected $fillable=[
    	'user_lender',
    	'user_booker',
    	'id_buku',
    	'tanggal_pinjam',
    	'tanggal_kembali'
    ];
    
}
