<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    
    <body>
        
        <h1>施設情報を入力してください</h1>
        
         <form action="/3_manage_complete" method="POST">
                                     @csrf          
                                     
                                    @for($i=0;$i< $request ;$i++)
                                    
                                             <div class="number">
                                                <h2>部屋番号</h2>
                                                 <input type="text" name='room[{{$i}}][number]'  value="{{ old('room[number]') }}">
                                                 <p class="number__error" style="color:red">{{ $errors->first('user.number') }}</p>
                                
                                            </div>
                                            
                                            <div class="capacity">
                                                <h2>最大人数</h2>
                                                 <input type="text" name="room[{{$i}}][capacity]"  value="{{ old('room[capacity]') }}">
                                                 <p class="capacity__error" style="color:red">{{ $errors->first('room.capacity') }}</p>
                                
                                            </div>
                                            
                                             <div class="piano">
                                                <h2>ピアノの種類</h2>
                                                    <select name="room[{{$i}}][piano]" value="{{ old('room[piano]') }}">
                                                          <option value="グランド">ピアノ</option>
                                                          <option value="アップライト">アップライト</option>
                                                          <option value="無し">無し</option>
                                                     </select>
                                    
                                            </div>
                                         @endfor   
                                            
        
        
        
                        <div class=" text-4xl  text-right mt-36 ">
                      
                            <input type="submit" value="施設を追加"/>
                            
                       
                        </div>
                    
            </form>
    </body>
    
</html>