<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Book;
use App\Category;
use App\Report;
use Auth;
use App\Rating;
use App\Comment;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\UploadedFile;

use DB;

class SearchController extends Controller
{
    public function __construct(){
        $this->middleware('auth');//matiin kalo lagi testing mode
    }
    public function index()
    {
    	// return view('search');
    }

    public function search(Request $request)
    {

        // $books=Book::all();
        //membuat paginasi
        $find_text = $request['search_param'];
        $find_cat = $request['category'];
        if($find_cat !== NULL){
        $books=\DB::table('books')
            ->where('category', '=', $find_cat)
            ->orWhere('author', 'like', '%'.$find_text.'%')
            ->orWhere('title', 'like', '%'.$find_text.'%')
            ->orWhere('publisher', 'like', '%'.$find_text.'%')
            ->orWhere('tag', 'like', '%'.$find_text.'%')
            ->paginate(12)
            ;
        }
        else{
            $books=\DB::table('books')
            ->Where('author', 'like', '%'.$find_text.'%')
            ->orWhere('title', 'like', '%'.$find_text.'%')
            ->orWhere('publisher', 'like', '%'.$find_text.'%')
            ->orWhere('tag', 'like', '%'.$find_text.'%')
            // ->get();
            ->paginate(12);
        }
        $category = Category::all();
        return view('/search', compact('books', 'category'));
        
    }
}
