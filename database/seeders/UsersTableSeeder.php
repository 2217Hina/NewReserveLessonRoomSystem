<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class usersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => '学長',
            'number' => '1',
            'email' => 'gakutyo@gakutyo',
            'password' =>Hash::make('gakutyo'),
            'admin_flag'=>'0'
             ]);
             
             
          DB::table('users')->insert([
        'name' => '教授１',
        'number' => '2',
        'email' => 'kyozyu1@kyozyu1',
        'password' =>Hash::make('kyozyu1'),
        'admin_flag'=>'1'
         ]);
         
         DB::table('users')->insert([
        'name' => '学生１',
        'number' => '3',
        'email' => 'gakuse1@gakuse1',
        'password' =>Hash::make('gakuse1'),
        'admin_flag'=>'2'
         ]);
    }
}
