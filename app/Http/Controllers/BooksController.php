<?php

namespace App\Http\Controllers;
use App\Book;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BooksController extends Controller
{
    public function __construct(){
    	$this->middleware('auth');
    }
    public function show(){
    	// $books=Book::all();
        //membuat paginasi
        $books=\DB::table('books')->paginate(8);
        // var_dump($books);
    	return view('search', compact('books'));
        //ganti search ama halaman search/ yang nampilin semua buku
    }


    //controller untuk ngeliat satu buku
    public function show_detail(Request $request, $isbn){

        //query cari buku
        $books=Book::where('isbn', $isbn)->first();

        //ke detailed view
        return view('viewbook', compact('books'));
    }

    public function addBook(Request $request){
    	
        // dd($request);
        $this->validate($request,[
    		'title'=>'required',
    		'isbn'=>'required',
    		'author'=>'required',
    		'description'=>'required',
    		'synopsis'=>'required',
    		'year'=>'required',
    		'publisher'=>'required'
    	]);
    	$books = new Book;
    	$books->title = $request->input('title');
    	$books->isbn = $request->input('isbn');
    	$books->author = $request->input('author');
    	$books->synopsis = $request->input('synopsis');
    	$books->year = $request->input('year');
    	$books->publisher = $request->input('publisher');
    	$books->description = $request->input('description');
    	$books->save();
    	return redirect('/lend')->with('info','Book Saved Successfully!');
    }


    public function update($isbn){
        $books = Book::find($isbn);
        return view('update', ['books'=>$books]);
    }

    public function edit(Request $request, $isbn){
    	$this->validate($request,[
    		'title'=>'required',
    		'isbn'=>'required',
    		'author'=>'required',
    		'description'=>'required',
    		'synopsis'=>'required',
    		'year'=>'required',
    		'publisher'=>'required'
    	]);
    	$data=array(
			'title'=>$request->input('title'),
    		'author'=>$request->input('author'),
    		'description'=>$request->input('description'),
    		'synopsis'=>$request->input('synopsis'),
    		'year'=>$request->input('year'),
    		'publisher'=>$request->input('publisher')
    	);
        Book::where('isbn',$isbn)->update($data);
        return redirect('/home')->with('info','Books Updated Successfully!');
    }




}
