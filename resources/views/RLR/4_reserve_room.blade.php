<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    
    <body>
         <form action="/g_reserve_comfirm" method="POST">
                    @csrf
                    
                      <div class="text-4xl text-left">
                         <h2>予約する部屋を選んでください</h2>
                      </div>
                
                       
                      
                                
                                        <select name="reserve[room]"> 
                                       
                                         @foreach( $empty_rooms as  $empty_room)
                                          <option value=" {{ $empty_room->number}}">
                                              
                                              {{ $empty_room->number}}(最大人数：{{ $empty_room->capacity}}人)
                                              
                                           
                                              
                                           </option>
                                           
                                         @endforeach
                                    
                                </select>
                                
                                
                               
                            
                            
                            
                              
                                
                                         <input class="mt-20 text-xl border border-indigo-600 bg-blue-2" type="submit" value="次へ（詳細）"/>
                         
                                    
                               
                           </div>
                   
                     </form>
             
    </body>
    
</html>