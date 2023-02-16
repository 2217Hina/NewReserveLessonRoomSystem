<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    
    <body>
        @csrf
        
        <div class=explain>
            <h2>・ユーザー登録をして、ログイン後のマイページから予約を行なってください</h2>
            <h2>・予約のキャンセルは、『予約履歴一覧』から行います</h2>
        </div>
        
         <h1 class='register'>
              <a href="/register">ユーザー登録</a>
　       </h1> 
　       
　       <h1>
　           <a href="/login">ログイン</a>
　       </h1>
     
        
    </body>
     
</html>