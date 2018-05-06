<?php

use Illuminate\Database\Seeder;
use App\Comment;
class commentseed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Comment::insert([
        	[
        		'id'			=> '1',
        		'book_id'			=> '1',
        		'user_id'		=> '2',
        		'comment'			=> 'BACOT SIA',
        		
        	],
        	[
        		'id'			=> '2',
        		'book_id'			=> '1',
        		'user_id'		=> '1',
        		'comment'			=> 'hehe',
        		
        	],
            
        ]);
    }
}
