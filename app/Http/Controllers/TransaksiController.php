<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Buku;

class TransaksiController extends Controller
{
		//nunggu frontend buat fungsi ini
    public function all(){
        $books = Book::select('books.*')->orderByTitle(true);
        //route mengikuti
        return view('pages.books.all', compact('books'));
    }
    public function addBook(Request $request){
    	$this->validate($request,[
    		'title'=>'required',
    		'author'=>'required',
    		'description'=>'required',
    		'synopsis'=>'required',
    		'year'=>'required',
    		'publisher'=>'required'
    	]);
    	$book = new Buku;
    	$book->title = $request->input('title');
    	$book->author = $request->input('author');
    	$book->synopsis = $request->input('synopsis');
    	$book->year = $request->input('year');
    	$book->publisher = $request->input('publisher');
    	$book->description = $request->input('description');
    	$book->save();
    	return redirect('/list')->with('info','Book Saved Successfully!');
    }
/* 
    public function lend(){

    }
    public function edit(){
	
    }
    public function update(){
	
    }
*/

}
