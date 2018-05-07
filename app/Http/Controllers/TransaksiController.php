<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Transaction;
use Auth;
use App\Book;

class TransaksiController extends Controller
{
    public function borrow($id){
        $trans = new Transaction;
        $trans->request_date = date('Y-m-d H:i:s');
        $trans->status = 0;
        $trans->id_lender = Book::find($id)->user_id;
        $trans->id_booker = Auth::user()->id;
        $trans->book_id = $id;
        $trans->save();
        //return ke mana kek
        return 'request sent';
    }
    public function lend($id){
        $data = Transaction::find($id);
        $data->status = 1;
        $data->lend_date = date('Y-m-d H:i:s');
        $data->save();  
        //return apalah
        return 'accepted nigga';  
    }

    public function back($id){
        $data = Transaction::find($id);
        $data->status = 2;
        $data->return_date = date('Y-m-d H:i:s');
        $data->save();  
        //return apalah
        return 'returned nigga';  
    }


}
