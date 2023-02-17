<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    
    <body>
        
         <div class="flex flex-col w-1/2 mt-10 m-auto">
        
                <div class="text-3xl w-2/3">   
                     <h1 class="title">この内容で登録しますか？</h1>
                </div>
        
                <form action="/1_add/complete" method="POST">
                     @csrf
                   
                        <div class="m-auto text-3xl w-1/3 mt-12 ">
                            
                                 <div class='name'>
                                    <h2>氏名:{{ $user["name"] }}</h2>
                                   
                                     <input name="user[name]" value={{ $user["name"] }} type="hidden">
                                </div>
                                
                                <div class='number'>
                                    <h2>学籍番号:{{ $user["number"] }}</h2>
                                   
                                     <input name="user[number]" value={{ $user["number"] }} type="hidden">
                                </div>
                                
                                <div class='email'>
                                    <h2>メールアドレス:{{ $user["email"] }}</h2>
                                   
                                     <input name="user[email]" value={{ $user["email"] }} type="hidden">
                                </div>
                                
                               
                               
                                
                                <div class='password'>
                                    <h2>パスワード:{{ $user["password"] }}</h2>
                                    <input name="user[password]" value={{ $user["password"] }} type="hidden">
                                </div>
                                
                                 
                                
                                
                                
                    
                                 
                      </div>
                              
                            <div class=" w-1/6 text-3xl  mt-36 m-auto text-center">
                                <span class="border border-indigo-600 rounded-xl bg-blue-200">
                                    <input type="submit" value="登録" />
                                </span>
                            </div>
                  
               
                 
                </form>
                
                 <div class=" text-2xl m-auto">
                    <span class=" text-red-500 rounded-xl ">
                     <a href="/register">再度入力</a>
                </div>
    </body>
    
</html>