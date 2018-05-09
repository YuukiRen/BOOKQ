<?php

namespace App\Http\Controllers;

use App\Messages_t;
use App\User;
use Auth;
use Illuminate\Http\Request;

class MessagesController extends Controller
{

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

    public function send(Request $request, messages_t $messages)
    {
         $to_id   = $request['to'];
         $from_id = Auth::user()->id;
         $signat = $this->create_signature($to_id, $from_id);
         $message = $request['messages'];
         $new_message = new Messages_t;
         $new_message->signature = $signat;
         $new_message->messages  = $message;
         $new_message->to        = $to_id;
         $new_message->from      = $from_id;
         $new_message->read_from = 1;
         $new_message->save();             
    
    }

    public function retrieve(Request $request,messages_t $messages, $id)
    {

        $to_id   = $id;
        $from_id = Auth::user()->id;
        $signat = $this->create_signature($to_id, $from_id);
        $mess=\DB::table('messages_ts')
        ->where('signature', '=', '1:2')
        ->orderBy('created_at', 'desc')
        ->paginate(12);

		return $mess;
    }

    public function show(messages_t $messages)
    {
        $from_id = Auth::user()->id;
        // dd($from_id);
        $mess = \DB::table('messages_ts')
        ->select('signature')
        ->where('signature', 'like', $from_id.':%')
        ->groupBy('signature')
        ->get()
        ->pluck('signature')
        ;
        // dd($mess);
        $arr =  array();   
        foreach ($mess as $sign) {
            $objek = \DB::table('messages_ts')->where('signature','=',$sign)->orderBy('id', 'desc')->first();             
            $arr[] = $objek;
        }
        return $arr;
    }


}
