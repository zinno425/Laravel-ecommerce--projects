<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use League\CommonMark\Extension\Table\Table;

class userSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()

    {
        //
       DB::table('users')->insert([
           'fullName' => 'aman',
           'email'=> 'aman@mail.com',
           'password'=>'aman',


       ]);


    }
}
