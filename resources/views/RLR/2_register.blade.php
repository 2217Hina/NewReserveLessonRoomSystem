<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    
    <body>
      
        
       <div class="m-auto text-2xl w-1/3 mt-12 ">
           
                                <h1>個人情報入力</h1>
                                
                                 <form action="/register/confirm" method="POST">
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
                                             
                                            
                                             <div class="major">
                                                <h2>専攻</h2>
                                                   <select name="user[major]" value="{{ old('user.major') }}">
                                                      <option value="ピアノ">ピアノ</option>
                                                      <option value="オルガン">オルガン</option>
                                                      <option value="ヴァイオリン">ヴァイオリン</option>
                                                      <option value="ヴィオラ">ヴィオラ</option>
                                                      <option value="チェロ">チェロ</option>
                                                      <option value="コントラバス">コントラバス</option>
                                                      <option value="ハープ">ハープ</option>
                                                      <option value="フルート">フルート</option>
                                                      <option value="オーボエ">オーボエ</option>
                                                      <option value="クラリネット">クラリネット</option>
                                                      <option value="ファゴット">ファゴット</option>
                                                      <option value="サクソフォーン">サクソフォーン</option>
                                                      <option value="ホルン">ホルン</option>
                                                      <option value="トランペット">トランペット</option>
                                                      <option value="トロンボーン">トロンボーン</option>
                                                      <option value="ユーフォニアム">ユーフォニアム</option>
                                                      <option value="チューバ">チューバ</option>
                                                      <option value="打楽器">打楽器</option>
                                                      <option value="古楽">古楽</option>
                                                      <option value="邦楽">邦楽</option>
                                                      <option value="楽理">楽理</option>
                                                   </select>
                                            </div>
                                            
                                            
                                             <div class="password">
                                                <h2>パスワード</h2>
                                                <input type="text" name="password"  value="{{ old('password') }}">
                                                 <p class="password__error" style="color:red">{{ $errors->first('password') }}</p>
                                            </div>
                                            
                                             <div class="password_confirmation">
                                                <h2>パスワード（確認用）</h2>
                                                <input name="password_confirmation" type="text" value="{{ old('password') }}">
                                                
                                            </div>
                                            
                                             <div class='admin_flag'>
                               
                                            
                        
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