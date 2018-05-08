<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Http\UploadedFile;
use App\User;
use Illuminate\Support\Facades\Storage;
use App\Book;
use App\Category;
use App\Transaction;
use Auth;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {   
        $users = Auth::user();
        $id = $users->id;
        $requests_lend = Transaction::where('id_lender',$id)->get();
        $requests_borrow = Transaction::where('id_booker',$id)->get();
        $activities = Transaction::where('id_booker',$id)->OrWhere('id_lender',$id)->get();
        
        return view('myProfile', compact('users','requests_lend','requests_borrow','activities'));
        
        // dd($users);
        
    }
    public function showother(Request $request,$id)
    {
        $users = Auth::user();

        $requests_lend = Transaction::where('id_lender',$id)->get();
        $requests_borrow = Transaction::where('id_booker',$id)->get();
        $activities = Transaction::where('id_booker',$id)->OrWhere('id_lender',$id)->get();
        if($users->id == $id){
            return view('myProfile', compact('users','requests_lend','requests_borrow','activities'));
        }
        else{
            $users = User::find($id);
            return view('otherProfile', compact('users','activities'));
        }
        // dd($users);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function edit(Request $request, $id){        
        $user=Auth::user();
        $category=Category::all();
        // dd($category);
        return view('editprofile',compact('category','user'));
    }

    public function edit_profile(Request $request)
    {
        $this->validate($request,[
            'user_image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'complete_name' => 'required',
            'nim' => 'required',
            'address' => 'required',
            'line_id' => 'required',
            'phone_number' => 'required',
            'fav_book' => 'required',
        ]);
        // dd($request);
        $users = User::find(Auth::user()->id);
        // if($request->user_image === NULL){
        //   $name = "images/no-cover.jpeg";  
        // }
        // else{
        //   $name = Storage::disk('local')->put('images', $request->image);
        // }
        //bisa kaya gini juga

        if($request->hasFile('user_image')){
            $name = Storage::disk('local')->put('images', $request->user_image);
            $users->user_image = $name;
        }
        $users->id = Auth::user()->id;
        $users->complete_name = $request->input('complete_name');
        $users->nim = $request->input('nim');
        $users->address = $request->input('address');
        $users->line_id = $request->input('line_id');
        $users->phone_number = $request->input('phone_number');
        $users->about_me = $request->input('about_me');
        $users->fav_book = $request->input('fav_book');
        $users->save();     
 
        return redirect('/home')->with('info','New profile saved');    
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
