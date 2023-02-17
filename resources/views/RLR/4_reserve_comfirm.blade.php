 <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    
    <body>
 
  <div class="flex flex-col w-1/2 mt-10 m-auto">
        
                 <form action="/g_reserve_complete" method="POST">
                     @csrf
                     
                        <div class="text-4xl text-left">
                            <h1 class="title">この内容で登録しますか？</h1>
                        </div>
                        
                        <div class="text-left">
                               <div class="m-auto text-2xl w-1/3 mt-12 ">
                
                                     <div class='user_id'>
                                       
                                      
                                         <input name="reserve[user_id]" value={{ Auth::id() }} type="hidden">
                                    </div>
                    
                    
                                     <div class='date'>
                                        <h2>日付:{{ $reserve["date"] }}</h2>
                                     
                                         <input name="reserve[date]" value={{ $reserve["date"] }} type="hidden">
                                    </div>
                                    
                                   
                                    <div class='time'>
                                        <h2>時間:{{ $reserve["startTime"] }}~</h2>
                                      
                                        <input name="reserve[startTime]" value={{ $reserve["startTime"] }} type="hidden">
                                    </div>
                                    
                                    <div class='room'>
                                        <h2>部屋:{{$reserve["room"]}}</h2>
                                      
                                        <input name="reserve[number]" value={{$reserve["room"]}} type="hidden">
                                    </div>
                                    
                                     
                                
                    
                                 
                    <div class="text-center">
                              
                                <input class="mt-20  text-xl border border-indigo-600 bg-blue-2" type="submit" value="予約を確定" />
                   
                </div>
                             </div>
                         </form>
                         <div class="text-center">
                            <a href="/4_reserve_conditions" class="mt-36 text-red-500">再度入力</a>
                        </div>
                 </div>
          </body>
    
</html>