<?php

namespace Database\Seeders;

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
        DB::table('users')->insert(['name'=>'erin', 'email' => 'erinL@home.com', 'password'=> bcrypt('P@ssw0rd!')]);
        DB::table('users')->insert(['name'=>'zeke', 'email' => 'zekeK@home.com', 'password'=> bcrypt('P@ssw0rd!')]);
        DB::table('users')->insert(['name'=>'bella', 'email' => 'bellaB@home.com', 'password'=> bcrypt('P@ssw0rd!')]);
        DB::table('users')->insert(['name'=>'alphonso', 'email' => 'alphonsoR@home.com', 'password'=> bcrypt('P@ssw0rd!')]);
        DB::table('users')->insert(['name'=>'jenny', 'email' => 'jennyK@home.com', 'password'=> bcrypt('P@ssw0rd!')]);             
    }
}
