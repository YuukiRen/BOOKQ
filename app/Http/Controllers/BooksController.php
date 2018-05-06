<?php

namespace App\Http\Controllers;
use App\Book;
use App\Category;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Auth;

class BooksController extends Controller
{
    public function __construct(){
    	// $this->middleware('auth');
    }
    public function show(){
    	// $books=Book::all();
        //membuat paginasi
        $books=\DB::table('books')->paginate(12);
        // var_dump($books);
    	return view('search', compact('books'));
        //ganti search ama halaman search/ yang nampilin semua buku
    }

    //controller untuk ngeliat satu buku
    public function show_detail(Request $request, $book_id){

        //query cari buku
        $books=Book::where('book_id', $book_id)->first();
		//dd($books);
        //ke detailed view
        return view('viewbook', compact('books'));
    }

	public function lendBook(Request $request){
		$category = Category::all();
		return view('lend',compact('category'));
		// dd($category);
	}

	public function dummy(Request $request){
		// $name=$request->image->getClientOriginalName();
		$name = $request->image->store('public');
		
		dd($request);
		return $path;
		//return Storage::putFile('public',$request->file('image'));
	}

    public function addBook(Request $request){
        $this->validate($request,[
			'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    		'title'=>'required',
    		'author'=>'required',
    		'year'=>'required',
    		'publisher'=>'required',
    		'description'=>'required',
    		'review'=>'required',
    		'tag'=>'required',
    		'category'=>'required'
		]);
		// dd($request);
		$books = new Book;
		
		$name = $request->image->store('public');
		$path = Storage::url($name);
		$books->image = $path;
        $books->owner_id=Auth::user()->id;
    	$books->title = $request->input('title');
		$books->author = $request->input('author');
    	$books->year = $request->input('year');
    	$books->publisher = $request->input('publisher');
		$books->description = $request->input('description');
		$books->review = $request->input('review');
		$books->tag = $request->input('tag');
    	$books->category = $request->input('category');
		$books->save();		
    	return redirect('/home')->with('info','Book Saved Successfully!');
    }

   

    public function update($book_id){
        $books = Book::find($book_id);
        return view('update', ['books'=>$books]);
    }

    public function edit(Request $request, $book_id){
    	$this->validate($request,[
    		'title'=>'required',
    		'book_id'=>'required',
    		'author'=>'required',
    		'description'=>'required',
    		'review'=>'required',
    		'year'=>'required',
    		'publisher'=>'required'
    	]);
    	$data=array(
			'title'=>$request->input('title'),
    		'author'=>$request->input('author'),
    		'description'=>$request->input('description'),
    		'review'=>$request->input('review'),
    		'year'=>$request->input('year'),
    		'publisher'=>$request->input('publisher')
    	);
        Book::where('book_id',$book_id)->update($data);
        return redirect('/home')->with('info','Books Updated Successfully!');
    }




}
