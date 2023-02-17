<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    
    <body>
                                <form action="/1_add/confirm" method="POST">
                                     @csrf          
                                     
                                             <div class="name">
                                                <h2>氏名</h2>
                                                <input type="text" name="user[name]"  value="{{ old('user.name') }}">
                                                 <p class="name__error" style="color:red">{{ $errors->first('user.name') }}</p>
                                            </div>
                                            
                                            <div class="number">
                                                <h2>学籍番号</h2>
                                                <input type="text" name="user[number]" placeholder="21180122" value="{{ old('user.number') }}">
                                                 <p class="number__error" style="color:red">{{ $errors->first('user.number') }}</p>
                                            </div>
                                            
                                             <div class="email">
                                                <h2>メールアドレス</h2>
                                                <input type="text" name="user[email]"  value="{{ old('user.email') }}">
                                                 <p class="email__error" style="color:red">{{ $errors->first('user.email') }}</p>
                                            </div>
                                             
                                           
                                             <div class="password">
                                                <h2>パスワード</h2>
                                                <input type="text" name="password"  value="{{ old('password') }}">
                                                 <p class="password__error" style="color:red">{{ $errors->first('password') }}</p>
                                            </div>
                                            
                                            
                                           
                                            
                                           
                                             
                                            
                                            </div>
                        
                        <div class=" text-4xl  text-right mt-36 ">
                        <span class="border border-indigo-600 rounded-xl bg-blue-200">
                            <input type="submit" value="登録"/>
                            
                        </span>
                        </div>
                    
                </form>
                
                
        
            </div>    
            </div> 
        
    </body>
    
</html>