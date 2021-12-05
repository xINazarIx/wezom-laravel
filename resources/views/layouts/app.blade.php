<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>wezom-laravel</title>
  <link rel="stylesheet" href="{{mix('assets/css/style.css')}}">
</head>
<body>

    @include('inc.header')
  <div class="wrapper">
    <div class="main">
      @yield('content')
    </div>
    @include('inc.footer')
  </div>

  @include('inc.burgerMenu')
  @include('inc.search-popup')
  @include('inc.login-popup') 
</body>
<script src="{{mix('/assets/js/main.js')}}"></script>
</html>