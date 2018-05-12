<?php

namespace App\Http\Controllers;

use App\Messages_t;
use App\User;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Pagination\LengthAwarePaginator;

class MessagesController extends Controller
{

    public function create_signature(int $from_id, int $to_id){
        if($to_id > $from_id){
            $signat = strval($from_id).':'.strval($to_id);
        }
        else if($to_id === $from_id) return NULL;
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
         $to_id   = $request->input('to');
         $from_id = Auth::user()->id;
         $sign = $this->create_signature($to_id, $from_id);
         if($sign === NULL){
             return 'error. You can\'t send yourself message to yourself';
         }                

         $message = $request->input('message');
         $new_message = new Messages_t;
         $new_message->signature = $sign;
         $new_message->messages  = $message;
         $new_message->to        = $to_id;
         $new_message->from      = $from_id;
         $new_message->save();             
    
    }

    public function retrieve(Request $request,messages_t $messages, $id)
    {
          
        // $to_id   = 1;
        // $from_id = 3;

        $to_id   = $id;
        $from_id = Auth::user()->id;

        $sign = $this->create_signature($to_id, $from_id);
        if($sign === NULL){
            return 'error. You can view yourself message to yourself';
        }                
        Messages_t::where('from', $from_id)
        ->where('to', $to_id)
        ->where('read_status', 0)
        ->update(['read_status' => 1]);

        $mess = \DB::table('messages_ts')
            ->leftjoin('users', 'messages_ts.from', '=', 'users.id')
            ->leftjoin('users as users2', 'messages_ts.to', '=', 'users2.id')
            ->select(
                'messages_ts.id',
                'messages_ts.from','users.complete_name as name1', 
                'messages_ts.to','users2.complete_name as name2',
                'messages_ts.created_at',
                'messages_ts.read_status',
                'messages_ts.messages'
            )
            ->where('signature','=',$sign)
            ->orderBy('messages_ts.id', 'desc')
            ->paginate(12);
        // dd($mess);   
		return $mess;
    }

    public function show(messages_t $messages)
    {
        $from_id = Auth::user()->id;
        $mess = \DB::table('messages_ts')
        ->select('signature')
        ->where('signature', 'like', $from_id.':%')
        ->orwhere('signature', 'like', '%:'.$from_id)
        ->groupBy('signature')
        ->get()
        ->pluck('signature');
        $arr =  array();
        foreach ($mess as $sign) {
            $objek = \DB::table('messages_ts')
            ->leftjoin('users', 'messages_ts.from', '=', 'users.id')
            ->leftjoin('users as users2', 'messages_ts.to', '=', 'users2.id')
            ->select(
                'messages_ts.id',
                'messages_ts.from','users.complete_name as name1', 
                'messages_ts.to','users2.complete_name as name2',
                'messages_ts.created_at',
                'messages_ts.read_status',
                'messages_ts.messages'
            )
            ->where('signature','=',$sign)
            ->orderBy('messages_ts.id', 'desc')
            ->first()
            ;
            $arr[] = $objek;
            // $arr[] = $arr;
            // $arr->merge($objek);
                            
        }
        $col = collect($arr);
        $jumlah = $col->count();
        
        $currentPage = LengthAwarePaginator::resolveCurrentPage();
        $perPage = 10;
        $currentResults = $col->slice(($currentPage - 1) * $perPage, $perPage)->all();
        $messages_res = new LengthAwarePaginator($currentResults, $col->count(), $perPage);
        // cara nampilin nya
        // $results->withPath('messages')->links();
        // $dd($results);
        compact($messages_res, $from_id);
        // return $results;
        // return view('messages', [
            // 'results' => $results,
        // ]);
        
    }


}
