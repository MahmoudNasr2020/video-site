<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         $this->call([

             Admins::class,
             Muslims::class,
             Cats::class,
            Tags::class,
            Videos::class,

         ]);
    }
}
