<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class SearchController extends Controller
{
    public function index()
    {
    	return view('search');
    }

    public function search(Request $request)
    {

        // $books=Book::all();
        //membuat paginasi
        $find_text = $request['query'];
        $find_cat = $request['category'];
        if($find_cat !== NULL){
        $books=\DB::table('books')
            ->where('category', '=', $find_cat)
            ->orWhere('LOWER( author )', 'like', '%'.$find_text.'%')
            ->orWhere('LOWER( title )', 'like', '%'.$find_text.'%')
            ->orWhere('LOWER( publisher )', 'like', '%'.$find_text.'%')
            ->orWhere('LOWER( tag )', 'like', '%'.$find_text.'%')
            ->get()
            ->paginate(12);
        }
        else{
            $books=\DB::table('books')
            ->Where('LOWER( author )', 'like', '%'.$find_text.'%')
            ->orWhere('LOWER( title )', 'like', '%'.$find_text.'%')
            ->orWhere('LOWER( publisher )', 'like', '%'.$find_text.'%')
            ->orWhere('LOWER( tag )', 'like', '%'.$find_text.'%')
            ->get()
            ->paginate(12);
        }
        dd($books);
        return view('search', compact('books'));
        
    }
}
