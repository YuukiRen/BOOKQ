<?php

namespace App\Http\Controllers;

use App\Messages;
use App\User;
use Auth;
use Illuminate\Http\Request;

class MessagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create_signature(int $from_id, int $to_id){
        if($to_id > $from_id){
            $signat = strval($from_id).':'.strval($to_id);
        }
        else{
            $signat = strval($to_id).':'.strval($from_id);    
        }
        return strval($signat);
    }

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
     * @param  \App\messages  $messages
     * @return \Illuminate\Http\Response
     */
    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\messages  $messages
     * @return \Illuminate\Http\Response
     */
    public function edit(messages $messages)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\messages  $messages
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, messages $messages)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\messages  $messages
     * @return \Illuminate\Http\Response
     */
    public function destroy(messages $messages)
    {
        //
    }



    public function send(Request $request, messages $messages)
    {
         $to_id   = $request['to'];
         $from_id = Auth::user()->id;
         $signat = $this->create_signature($to_id, $from_id);
         $message = $request['messages'];
         $new_message = new Messages;
         $new_message->signature = $signat;
         $new_message->message   = $message;
         $new_message->to        = $to_id;
         $new_message->from      = $from_id;
         $new_message->read_from      = 1;
         $new_message->save();             
    }

    public function retrieve(Request $request,messages $messages, $id)
    {
        // $to_id   = 2;
        $to_id   = $id;
        $from_id = Auth::user()->id;
        $signat = $this->create_signature($to_id, $from_id);
        $mess=\DB::table('messages')
        ->where('signature', '=', '1:2')
        ->orderBy('created_at', 'desc')
        ->paginate(12);

		return $mess;
    }

    public function show(messages $messages)
    {
        $mess = \DB::table('messages')
        ->select('signature')
        ->groupBy('signature')
        ->pluck('signature');
        $arr =  array();   
        foreach ($mess as $sign) {
            $objek = \DB::table('messages')->where('signature','=',$sign)->latest()->get()->first();             
            $arr[] = $objek;
        }
        return $arr;
    }


}
