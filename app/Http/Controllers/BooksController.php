<?php

namespace App\Http\Controllers;
use App\Book;
use App\Category;
use App\User;
use App\Rating;
use App\Comment;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\UploadedFile;
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
		// dd($books);
        // var_dump($books);
    	return view('search', compact('books'));
        //ganti search ama halaman search/ yang nampilin semua buku
    }

    //controller untuk ngeliat satu buku
    public function show_detail(Request $request, $id){

        //query cari buku
        $books = Book::where('id', $id)->first();
        $comments = Comment::where('book_id',$id)->get();//comment pertama
		$users = Auth::user()->id;
        $tabs = Rating::where('book_id',$id)->get();
        $ratings = $tabs->avg('rate');
        //dd($books);
        //ke detailed view
        return view('viewbook', compact('books','comments','users','ratings'));
    }

    public function AddComment(Request $request, $id){
        // dd($request);
        $this->validate($request,[
            'review' => 'required',
        ]);

        //bagian comment
        $comments = new Comment;
        $comments->book_id = $id; 
        $comments->user_id = Auth::user()->id; 
        $comments->comment = $request->input('review');
        $comments->before = "1";
        $comments->save();
        //bagian rating
        if($request->has('rating')){
            $ratings = new Rating;
            $ratings->book_id = $id; 
            $ratings->user_id = Auth::user()->id; 
            $ratings->rate = $request->input('rating');
            $ratings->save();
        }//ke detailed view
        return redirect('/viewbook/'.$id)->with('info','Review added Successfully');
    }

	public function lendBook(Request $request){
		$category = Category::all();
		return view('lend',compact('category'));
		// dd($category);
	}

	public function dummy(Request $request){
		// $name=$request->image->getClientOriginalName();
		// return $name = $request->image;
		// return Storage::disk('uploads')->put('filename', $file_content);
		// dd($request);
		// $name = $request->image->store('local');
		
		// return $path;
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
    		'tag'=>'required',
    		'category'=>'required'
		]);
		// dd($request);
		$books = new Book;
            
        if($request->hasFile('image')){
            $name = Storage::disk('local')->put('images', $request->image);
            $books->image = $name;     
        }
        $books->user_id=Auth::user()->id;
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
