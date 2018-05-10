<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Report;
use App\Book;
use App\User;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth:admin');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.home');
    }


    public function reject_report(){
        $rep = Report::find($report_id);
        if($rep->status === 2 || $rep->status === 3){
            return 'already accepted / decline';
            die();
        }
        $book_id = $rep->book_id;
        $book = Book::find($book_id);
        $rep->status = 2;
        $rep->save();
        return 'report accepted';

    }


    public function list_report(Request $request){
        $rep = \DB::table('reports')
        ->leftjoin('users', 'reports.user_id', '=', 'users.id')
        ->leftjoin('books', 'reports.book_id', '=', 'books.id')        
        ->select('reports.id', 'reports.user_id as users_id', 'complete_name', 'books.id as books_id', 'title', 'report_desc', 'status', 'reports.created_at')
        ->orderby('status', 'asc')
        ->orderby('reports.id', 'desc')
        ->paginate(12)
        ;
        return $rep;
    }

    public function detail_report(Request $request, $book_id){
        // not yet
        
    }


    public function accept_report(Request $request, $report_id){
        $rep = Report::find($report_id);
        if($rep->status === 2 || $rep->status === 3){
            return 'already accepted / decline';
            die();
        }
        $book_id = $rep->book_id;
        $book = Book::find($book_id);
        $book->report = $book->report + 1;
        $rep->status = 3;
        $rep->save();
        $book->save();
        return 'report accepted';

    }

    public function list_user(){

    }


    public function ban_user(){

    }

    public function ban_book(){

    }
    
}
