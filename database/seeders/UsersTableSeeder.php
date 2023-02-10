<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

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
            'password' =>'gakutyo',
            'admin_flag'=>'0'
             ]);
    }
}
