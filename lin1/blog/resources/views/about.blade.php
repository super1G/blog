
@extends('layouts.master')

@section('title','履歷')
    
@section('content')
<main role="main" class="container">
    <div class="row">
      <div class="col ">
        


        <div class="blog-post">
          <h2 class="blog-post-title">更新時間</h2>
          <p class="blog-post-meta">12/25, 2020 by <a href="#">EG</a></p>

         
          
        </div><!-- /.blog-post -->


        <img src="{{asset('image/0001.jpg')}}"  title="一">
        <img src="{{asset('image/0002.jpg')}}"  title="二">
      </div><!-- /.blog-main -->
      
    </div><!-- /.row -->

  </main><!-- /.container -->

  @endsection