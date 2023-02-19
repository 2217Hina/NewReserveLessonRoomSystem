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
        
        
            <form action="/3_all_history" method="POST">
            @csrf
                
                <h2>閲覧する日付を選択</h2>
       
                <div class=date>
                    
                      <input name='date' type="date">
                </div>
              

             <input type="submit" value="次へ"/>
             
             
            
           
               </form>
               
                 </body>
    
</html>