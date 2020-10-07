<?php

use App\Models\Admin;
use Illuminate\Database\Seeder;

class Admins extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Admin::create([
            'name'=>'Mahmoud Nasr',
            'email'=>'mmmm@gmail.com',
            'password'=>bcrypt('123456789'),

        ]);
    }
}
