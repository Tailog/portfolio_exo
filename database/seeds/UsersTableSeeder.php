<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
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
            'name'=> 'Santos Pierre',
            'email'=> 'santospierreemmanuel@gmail.com',
            'password' => bcrypt('1234'),
            'avatar'=>'http://lorempixel.com/480/480/'
        ]);
    }
}
