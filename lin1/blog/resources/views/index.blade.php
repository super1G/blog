@extends('layouts.master')


@section('title','首頁')


@section('content')
    
<main role="main" class="container">
  
    
  <div class="row">

    <div class="col-3">
      
        <div class="h3">留言板</div>
        <textarea class="form-control" rows="7" id="comment"></textarea>
        <br>
        <button type="button" class="btn btn-default">送出</button>
    </div>
    <div class="col-1">

    </div>
    
    <div class="col-8 mb-5">
      <table class="table table-borderless">
        <thead>
          <tr>
            <th scope="col"></th>
            <th scope="col">user</th>
            <th scope="col">message</th>
            <th scope="col">time</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">1</th>
            <td>Mark</td>
            <td>Otto</td>
            <td>@mdo</td>
          </tr>
          <tr>
            <th scope="row">2</th>
            <td>Jacob</td>
            <td>Thornton</td>
            <td>@fat</td>
          </tr>
          <tr>
            <th scope="row">3</th>
            <td colspan="2">Larry the Bird</td>
            <td>@twitter</td>
          </tr>
        </tbody>
      </table>
    </div>

    
  </div>
  
  
    
    
  

</main><!-- /.container -->
@endsection
