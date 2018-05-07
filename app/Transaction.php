<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $fillable=[
    	'user_lender',
    	'user_booker',
    	'id_buku',
    	'tanggal_pinjam',
    	'tanggal_kembali'
    ];
    protected $dates=[
    	'tanggal_pinjam',
    	'tanggal_kembali'
    ];
}
