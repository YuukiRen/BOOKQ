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
    	if($request->ajax())
    	{
    		$customer;
    	}
    }
}
