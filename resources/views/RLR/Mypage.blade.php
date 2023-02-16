<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    
    <body>
        
        <h1>aaaa</h1>
        
        
        <!--管理者①-->
        @if(Auth::user()->admin_flag == 0)
        <div class=manage1>
            <h1>
            <a href=/1_add >管理者情報追加</a>
            </h1>
        </div>
        
          <!--管理者②-->
        @elseif(Auth::admin_flag() == 1)
        <div class=manage2>
             <h1>
                <a href=/3_reserve >・練習室予約</a>
            </h1>
             <h1>
                <a href=/3_history >・予約一覧</a>
            </h1>
             <h1>
                <a href=/3_manage_rooms >・施設の追加・管理</a>
            </h1>
        </div>
        
         <!--一般ユーザー-->
        @else(Auth::admin_flag() == Null)
        <div class=general>
             <h1>
                <a href=/g_reserve_conditions>・練習室予約</a>
             </h1>
             <h1>
                <a href=/g_history >・予約履歴</a>
             </h1>
        </div>
        @endif
    </body>
    
</html>