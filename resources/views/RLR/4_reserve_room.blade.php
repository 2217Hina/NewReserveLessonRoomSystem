<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    
    <body>
         <form action="/4_reserve_consirm" method="POST">
                    @csrf
                    
                      <div class="text-4xl text-left">
                         <h2>予約する部屋を選んでください</h2>
                      </div>
                
                       
                      
                                
                                        <select name="reserve[room]"> 
                                       
                                         @foreach( $empty_rooms as  $empty_room)
                                          <option value=" {{ $empty_room->room_num}}">
                                              
                                              {{ $empty_room->room_num}}(最大人数：{{ $empty_room->capacity}}人)
                                              
                                           
                                              
                                           </option>
                                           
                                         @endforeach
                                    
                                </div>
                                
                            
                            
                            
                              
                                
                                         <input class="mt-20 text-xl border border-indigo-600 bg-blue-2" type="submit" value="次へ（詳細）"/>
                         
                                    
                               
                           </div>
                   
                     </form>
             
    </body>
    
</html>