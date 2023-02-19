@extends('layouts.app')

@section('title', 'タイトル')

@section('content')

@include('parts.header')
        @csrf
        
        <div class="text-blue-500">
            <h2>・ユーザー登録をして、ログイン後のマイページから予約を行なってください</h2>
            <h2>・予約のキャンセルは、『予約履歴一覧』から行います</h2>
        </div>
        
         <h1>
              <a href="/register">ユーザー登録</a>
　       </h1> 
　       
　       <h1>
　           <a href="/login">ログイン</a>
　       </h1>
     
        
   @endsection