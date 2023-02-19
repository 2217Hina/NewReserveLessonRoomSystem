<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    
    <body>
        
        <h1>いくつの施設を追加しますか？</h1>
          <form action="/3_manage_add" method="POST">
                     @csrf          
                             <div class="request">
                               
                                <input type="text" name="request" placeholder="数字を入力してください" value="{{ old('request') }}">
                                 <p class="request__error" style="color:red">{{ $errors->first('request') }}</p>
                            </div>
                            
                            
                             <div class=" text-4xl  text-right mt-36 ">
                       
                                <input type="submit" value="施設登録へ"/>
                             
                       
                            </div>
         </form>
    </body>
    
</html>