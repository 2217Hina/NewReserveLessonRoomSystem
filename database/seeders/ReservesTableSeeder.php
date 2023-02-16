<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class reservesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       DB::table('reserves')->insert([
        
            'user_id'=> '5',
            'room_id' => '1',
            'date'=>'2023-02-18',
            'startTime'=>'10:00:00',
            'numOfPeople'=>'1',
            'is_reserved'=>'1'
            
        
            ]);
       DB::table('reserves')->insert([
        
            'user_id'=> '2',
            'room_id' => '2',
            'date'=>'2023-02-17',
            'startTime'=>'10:00:00',
             'numOfPeople'=>'3',
            'is_reserved'=>'1'
           ]);  
           
            DB::table('reserves')->insert([
        
            'user_id'=> '3',
            'room_id' => '3',
            'date'=>'2023-02-20',
            'startTime'=>'10:00:00',
             'numOfPeople'=>'2',
            'is_reserved'=>'1'
           ]);  
           
            DB::table('reserves')->insert([
        
            'user_id'=> '4',
            'room_id' => '4',
            'date'=>'2023-02-21',
            'startTime'=>'10:00:00',
             'numOfPeople'=>'1',
            'is_reserved'=>'1'
           ]);  
           
            DB::table('reserves')->insert([
        
            'user_id'=> '5',
            'room_id' => '4',
            'date'=>'2023-02-27',
            'startTime'=>'10:00:00',
             'numOfPeople'=>'3',
            'is_reserved'=>'1'
           ]);  
           
            DB::table('reserves')->insert([
        
            'user_id'=> '6',
            'room_id' => '6',
            'date'=>'2023-02-25',
            'startTime'=>'10:00:00',
             'numOfPeople'=>'2',
            'is_reserved'=>'1'
           ]);  
           
           
            DB::table('reserves')->insert([
        
            'user_id'=> '8',
            'room_id' => '1',
            'date'=>'2023-02-22',
            'startTime'=>'10:00:00',
            'numOfPeople'=>'1',
            'is_reserved'=>'1'
            ]);
            
            DB::table('reserves')->insert([
        
            'user_id'=> '2',
            'room_id' => '2',
            'date'=>'2023-02-23',
            'startTime'=>'10:00:00',
            'numOfPeople'=>'1',
            'is_reserved'=>'1'
            
        
        
            ]);
    }
}
