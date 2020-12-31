
@extends('layouts.master')

@section('title','專題')
    
@section('content')
<main role="main" class="container">
    <div class="row">
      <div class="col-md-8 blog-main">
        
        <div class="h1">程式語言</div>
        <div class="h2">C</div>
        <div class="blog-post">
          <h2 class="blog-post-title">ESP8266-TelegramBot</h2>
          <p class="blog-post-meta">用C語言使ESP8266透過自身的wifi進行聯網，形成一個小型伺服，並透過telegram api 來達成溝通及運算回傳等功能</p>
          
          <h2 class="blog-post-title">MQTT系統通訊端應用</h2>
          <p class="blog-post-meta">研究MQTT工作在 TCP/IP 協議上，client以及server上的關聯及應用，透過開源軟體進行新增與修改功能，使程式可以較簡單及耗電量低的方式進行通訊</p>

          
          
        </div><!-- /.blog-post -->
        <div class="h2">C++</div>
        <div class="blog-post">
          <div class="blog-post-title">西洋棋</div>
          <p class="blog-post-meta"> 實作物件導向完成來雙人對戰對戰等功能</p>
        </div>
        

      </div><!-- /.blog-main -->

      

    </div><!-- /.row -->

  </main><!-- /.container -->

  @endsection