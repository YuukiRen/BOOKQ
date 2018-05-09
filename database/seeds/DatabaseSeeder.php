<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(bookseeder::class);
        $this->call(userseed::class);
        $this->call(seedcategory::class);
        $this->call(commentseed::class);
        $this->call(messageseed::class);
    }
}
