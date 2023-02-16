<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class roomsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('rooms')->insert([
            'number' => 'A1',
            'capacity' => '3',
            'piano' => 'grand',
            ]);
            
             DB::table('rooms')->insert([
            'number' => 'A2',
            'capacity' => '3',
            'piano' => 'grand',
            ]);
            
             DB::table('rooms')->insert([
            'number' => 'A3',
            'capacity' => '3',
            'piano' => 'grand',
            ]);
            
             DB::table('rooms')->insert([
            'number' => 'B1',
            'capacity' => '5',
            'piano' => 'grand',
            ]);
            
             DB::table('rooms')->insert([
            'number' => 'B2',
            'capacity' => '5',
            'piano' => 'grand',
            ]);
            
             DB::table('rooms')->insert([
            'number' => 'C1',
            'capacity' => '5',
            'piano' => 'upright',
            ]);
            
             DB::table('rooms')->insert([
            'number' => 'C2',
            'capacity' => '5',
            'piano' => 'upright',
            ]);
            
             DB::table('rooms')->insert([
            'number' => 'C3',
            'capacity' => '5',
            'piano' => 'upright',
            ]);
            
             DB::table('rooms')->insert([
            'number' => 'D1',
            'capacity' => '7',
            'piano' => 'upright',
            ]);
            
             DB::table('rooms')->insert([
            'number' => 'D2',
            'capacity' => '7',
            'piano' => 'upright',
            ]);
    }
}
