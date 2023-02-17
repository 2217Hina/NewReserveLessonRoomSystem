<?php
use Carbon\Carbon;

 $now = Carbon::now();
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
        
       <div class="flex flex-col w-1/2 mt-10 m-auto">
                  
                   <div class="text-3xl w-2/3">   
                    <h1 class="title">予約履歴</h1>
                    </div>
                    
                    <div class=" text-2xl mt-10 m-auto">
                        <span class=" text-blue-500 rounded-xl ">
                      <a href="/mypage">マイページに戻る</a>
            　    　</h2> 
            　    　</span>
                     </div>
                  
                <div class='mt-10'>
                    
                     @foreach ($my_reserves as $my_reserve)
                       @if($my_reserve['date']>$now)
                        <div class='mt-10 border border-blue-600 bg-white'>
                            <h1 class='date'>{{ $my_reserve->date }}　{{ $my_reserve->startTime }}〜</h1>
                            <h1 class='room'>{{ $my_reserve->room_id }}</h1>
                            <h1 class='numOfPeople'>{{ $my_reserve->numOfPeople }}人</h1>
                            
                            <!--キャンセル機能-->
                            <div class="text-right">
                            <form action="/3_cancel/{{ $my_reserve->id }}" id="form_{{ $my_reserve->id }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button class="border border-black bg-black-200 rounded-xl" type="button" onclick="cancel({{ $my_reserve->id }})">キャンセル</button> 
                            </form>
                            </div>
                        </div>
                        
                      @else
                       <div class='mt-10 border border-yellow-600  bg-white'>
                        <h2 class='date'>{{ $my_reserve->date }}　{{ $my_reserve->startTime }}〜</h2>
                        <h2 class='room'>{{ $my_reserve->room_id }}</h2>
                        <h2 class='numOfPeople'>{{ $my_reserve->numOfPeople }}人</h2>
                        </div>
                       @endif
                      @endforeach
                 </div>
                 
                   <div class=" text-2xl mt-10 m-auto">
                        <span class=" text-blue-500 rounded-xl ">
                      <a href="/mypage">マイページに戻る</a>
            　    　</h2> 
            　    　</span>
                     </div>
                <script>
                    function cancel(id) {
                        'use strict'
                
                        if (confirm('キャンセルすると元に戻せません。キャンセルしますか？')) {
                            document.getElementById(`form_${id}`).submit();
                        }
                    }
                </script>
              
         </div>                
        
        
    </body>
    
</html>