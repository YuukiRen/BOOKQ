<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Transaction;
use Auth;
use App\Book;

class TransaksiController extends Controller
{
    public function __construct(){
        $this->middleware('auth');//matiin kalo lagi testing mode
    }
    public function borrow($id){//id book
        $trans = new Transaction;
        $trans->request_date = date('Y-m-d H:i:s');
        $trans->status = 0;
        $trans->id_lender = Book::find($id)->user_id;
        $trans->id_booker = Auth::user()->id;
        $trans->book_id = $id;
        $trans->save();
        //return ke mana kek
        return redirect()->back()->withInfo('Request Sent!');
    }
    public function lend($id){//id transaksi
        $data = Transaction::find($id);
        $data->status = 1;

        $stat = Book::find($data->book_id);
        // Make sure you've got the Page model
        if($stat) {
            $stat->show = 0;
            $stat->save();
        }

        $data->lend_date = date('Y-m-d H:i:s');
        $data->save();  
        //return apalah
        return redirect()->back()->withInfo('You accepted the request!');  
    }
    public function reject($id){//id transaksi
        $data = Transaction::find($id);
        $data->status = 3;
        $data->reject_date = date('Y-m-d H:i:s');
        $data->save();
        return redirect()->back()->withDanger('You rejected the request!');    
    }

    public function back($id){//id transaksi
        $data = Transaction::find($id);
        $data->status = 2;
        $data->return_date = date('Y-m-d H:i:s');
        $stat = Book::find($data->book_id);
        // Make sure you've got the page model
        if($stat) {
            $stat->show = 0;
            $stat->save();
        }
        $data->save();  
        //return apalah
        return redirect()->back()->withInfo('He returned your book');  
    }


}
