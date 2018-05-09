<?php

use Illuminate\Database\Seeder;
use App\Messages;

class messageseed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {
        // User::truncate();
        $x = 1;
        for ($i=1; $i <= 4; $i++) { 
            for ($j=1; $j <= 4; $j++, $x++) { 
                if($i === $j) continue;
                if($i < $j){
                    $signat = strval($i).':'.strval($j);
                }
                else{
                    $signat = strval($j).':'.strval($i);    
                }
                Messages::insert( 
                    [
                        'signature' => $signat,
                        'id'    => $x,
                        'from'  => $i,
                        'to'    => $j,
                        'messages'=> 'whehe',
                        'created_at' => date('Y-m-d H:i:s'),
                        'updated_at' => date('Y-m-d H:i:s')
                    ]
                 );        
            }
        }
        for ($i=1; $i <= 4; $i++) { 
            for ($j=1; $j <= 4; $j++, $x++) { 
                if($i === $j) continue;
                if($i < $j){
                    $signat = strval($i).':'.strval($j);
                }
                else{
                    $signat = strval($j).':'.strval($i);    
                }
                Messages::insert( 
                    [
                        'signature' => $signat,
                        'messages'=> 'lorem ipsum',
                        'id'    => $x,
                        'from'  => $i,
                        'to'    => $j,
                        'messages'=> 'whehe',                        
                        'created_at' => date('Y-m-d H:i:s'),
                        'updated_at' => date('Y-m-d H:i:s')
                    ]
                 );        
            }
        }
        
    }
}
