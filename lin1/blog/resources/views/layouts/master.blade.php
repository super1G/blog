<html lang="zh-TW">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <meta name="generator" content="Jekyll v4.1.1">
  <title>@yield('title')</title>

  <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/blog/">

  <!-- Bootstrap core CSS -->
  <link href="{{ asset('dist/css/bootstrap.min.css')}}" rel="stylesheet">
  #<link href="../../public/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    .bd-placeholder-img {
      font-size: 1.125rem;
      text-anchor: middle;
      -webkit-user-select: none;
      -moz-user-select: none;
      -ms-user-select: none;
      user-select: none;
    }

    @media (min-width: 768px) {
      .bd-placeholder-img-lg {
        font-size: 3.5rem;
      }
    }
  </style>
  <!-- Custom styles for this template -->
  <link href="https://fonts.googleapis.com/css?family=Playfair+Display:700,900" rel="stylesheet">
  <!-- Custom styles for this template -->
  <link href="{{asset('css/blog.css')}}" rel="stylesheet">
  #<link href="../../public/css/blog.css" rel="stylesheet">
</head>

<body>
  @include('layouts.menu')

  
  @yield('content')
  
  @include('layouts.footer')
</body>

</html>