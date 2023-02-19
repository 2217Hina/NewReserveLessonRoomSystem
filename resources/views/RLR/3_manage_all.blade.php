<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    
    <body>
        
       @foreach ($infos as $info)
                     
                        <h2 class='number'>部屋番号：{{ $info['number'] }}</h2>
                        <h2 class='capacity'>最大人数：{{ $info['capacity'] }}人</h2>
                        <h2 class='piano'>ピアノ：{{ $info['piano'] }}</h2>
                      
                            <div class="text-right">
                            <form action="/3_manage_delete/{{ $info['id'] }}" id="form_{{ $info['id'] }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button class="border border-black bg-black-200 rounded-xl" type="button" onclick="delete({{ $info['id'] }})">削除</button> 
                            </form>
                            </div>
                      @endforeach
                 </div>
                   
                    <h2 class='all_date'>
                      <a href="/3_all_date">日付選択に戻る</a>
            　    　</h2>   
      
       
                <script>
                    function delete(id) {
                        'use strict'
                
                        if (confirm('削除すると戻せません。削除しますか？')) {
                            document.getElementById(`form_${id}`).submit();
                        }
                    }
                </script>
    
    </body>
    
</html>