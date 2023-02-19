<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    
    <body>
        <form action="/3_manage_complete" method="POST">
                                     @csrf          
            <h1>以下の施設を追加しますか？</h1>
            
            @foreach($rooms as $room)
            <h1>部屋番号：{{$room['number']}}</h1>
            <h1>最大人数：{{$room['capacity']}}</h1>
            <h1>ピアノ：{{$room['piano']}}</h1>
            @endforeach
            
             <div class=" text-4xl  text-right mt-36 ">
                      
                <input type="submit" value="施設を追加"/>
                
           
            </div>
      
    </body>
    
</html>