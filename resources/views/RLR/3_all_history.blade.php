<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    
    <body>
        
         <div class='reserve'>
                    
                   
                    
                     @foreach ($infos as $info)
                     
                        <h2 class='time'>{{ $info['user_name'] }}</h2>
                        <h2 class='time'>{{ $info['startTime'] }}〜</h2>
                        <h2 class='room'>{{ $info['number'] }}</h2>
                      
                           
                      @endforeach
                 </div>
                   
                    <h2 class='all_date'>
                      <a href="/3_all_date">日付選択に戻る</a>
            　    　</h2>   
                
    </body>
    
</html>