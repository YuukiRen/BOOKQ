<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
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
    protected $hidden=[
    	'id_transaksi'
	];
}
