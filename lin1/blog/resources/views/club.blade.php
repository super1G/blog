
@extends('layouts.master')

@section('title','社團活動')
    
@section('content')
<main role="main" class="container">
    <div class="row">
      <div class="col ">
        


        <div class="blog-post">
          <h2 class="blog-post-title">興趣與活動</h2>
          <p class="blog-post-meta">12/25, 2020 by <a href="#">EG</a></p>

         
          
        </div><!-- /.blog-post -->


        <img src="{{asset('image/club.jpg')}}"  >
        <br>
        
        <br>
        <div class="p">在大學生活中營隊佔據了許多位置，這是我去南庄帶小朋友時的留影</div>
        <br>
        <img src="{{asset('image/montion.jpg')}}"  >
        <br>
        <br>
        <div class="p">營隊場勘，當時身為總召帶領隊輔去陽明山預演及訓練</div>
        <br>
        
        <img src="{{asset('image/swim.jpg')}}"  >
        <br>
        <br>
        <div class="p">泳渡日月潭，當時已經遊完大家一起搭船回去</div>
        <br>
      </div><!-- /.blog-main -->
      
    </div><!-- /.row -->

  </main><!-- /.container -->

  @endsection