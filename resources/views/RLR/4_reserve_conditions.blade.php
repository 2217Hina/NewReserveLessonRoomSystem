<?php
use Carbon\Carbon;

 $date = Carbon::now();
?>

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    
    <body>
        
         <div class="reserve_conditions">

            <form action="/g_reserve_rooms" method="POST">
                @csrf
                    <div class="text-4xl text-left">
                        <h2>予約する【日付】を選択してくだい</h2>
                    </div>
                     <div class="text-2xl text-left">
                        <p>(１週間後まで予約できます)</p>
                    </div>
            

                     <select name="reserve[date]" >
                            <option value="{{$date->format('Y-m-d')}}">
                               {{$date->format('m月d日')}}
                            </option>
                           
                            <option value="{{ $date->copy()->addDay(1)->format('Y-m-d')}}">
                               {{ $date->copy()->addDay(1)->format('m月d日')}}
                            </option>
                            
                              <option value="{{ $date->copy()->addDay(2)->format('Y-m-d')}}">
                               {{ $date->copy()->addDay(2)->format('m月d日')}}
                            </option>
                             <option value="{{ $date->copy()->addDay(3)->format('Y-m-d')}}">
                               {{ $date->copy()->addDay(3)->format('m月d日')}}
                            </option>
                             <option value="{{ $date->copy()->addDay(4)->format('Y-m-d')}}">
                               {{ $date->copy()->addDay(4)->format('m月d日')}}
                            </option>
                              <option value="{{ $date->copy()->addDay(5)->format('Y-m-d')}}">
                               {{ $date->copy()->addDay(5)->format('m月d日')}}
                            </option>
                             <option value="{{ $date->copy()->addDay(6)->format('Y-m-d')}}">
                               {{ $date->copy()->addDay(6)->format('m月d日')}}
                            </option>
                     </select>
           
                   
 
              
           
           
        </div> 
        
        
        <div class="time">
            
              
                            <div class="text-4xl text-left">
                                 <h2>予約する【時間】を選んでください</h2>
                            </div>
                         
                                  <select name="reserve[startTime]" >
                                        <option value="10:00:00">
                                          10:00~
                                        </option>
                                       
                                        <option value="11:10:00">
                                          11:10~
                                        </option>
                                        
                                          <option value="12:20:00">
                                          12:20~
                                        </option>
                                         <option value="13:30:00">
                                          13:30~
                                        </option>
                                         <option value="14:40:00">
                                           14:40~
                                        </option>
                                          <option value="15:50:00">
                                         15:50~
                                        </option>
                                         <option value="17:00:00">
                                          17:00~
                                        </option>
                                 </select>
                      
             
               
        </div>
        
                
                     <input class="mt-20 text-xl border border-indigo-600 bg-blue-2" type="submit" value="次へ（部屋の選択）"/>
                   
                   
                     </form>
                     
                     
         </div>
                   
        
        
    </body>
    
</html>