<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

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


    }


    public function list_report(){


    }

    public function detail_report(){

        
    }


    public function accept_report(){


    }


    public function ban_user(){


    }

    public function ban_book(){


    }
    
}
