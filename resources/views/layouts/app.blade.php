
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>wezom-laravel</title>
  <link rel="stylesheet" href="{{mix('assets/css/style.css')}}">
  <link rel="apple-touch-icon" sizes="180x180" href="favicons/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="favicons/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="favicons/favicon-16x16.png">
  <link rel="manifest" href="favicons/site.webmanifest">
  <link rel="mask-icon" href="favicons/safari-pinned-tab.svg" color="#5bbad5">
  <meta name="msapplication-TileColor" content="#29d3be">
  <meta name="theme-color" content="#ffffff">
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