<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'The Daily Bearer | ') }} @yield('title')</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
</head>
<body>
    <div id="app" class="app">
      <div class="page-content">
        <header class="page-header">
          <div class="header--top-bar container">
            <div class="header--heading">
              <strong>Breaking News</strong>
              <span>France win the world cup</span>
            </div>
            <ul class="header--top-bar-links">
              <li><a class="facebook" href="#"><i class="fab fa-facebook-f"></i></a></li>
              <li><a class="twitter" href="#"><i class="fab fa-twitter"></i></a></li>
              <li><a class="youtube" href="#"><i class="fab fa-youtube"></i></a></li>
            </ul>
          </div>
          <nav class="page-navigation">
            <div class="page-navigation--container container">
              <div class="page-navigation--nav">
                <a class="page-logo" href="#"><h1>The Daily Bearer</h1></a>
                <ul>
                  <li><a href="<?= route('home'); ?>" rel="canonical">Home</a></li>
                  <li><a href="<?= route('home'); ?>" rel="canonical">News</a></li>
                  <li><a href="#" rel="canonical">Podcasts</a></li>
                  <li><a href="#" rel="canonical">Events</a></li>
                  <li><a href="#" rel="canonical">Authors</a></li>
                </ul>
              </div>
      
              <div class="page-navigation--other">
                <ul>
                  <li><a href="#"><i class="fas fa-search"></i>Search</a></li>
                  <li><a href="#"><i class="fas fa-sign-in-alt"></i>Login</a></li>
                </ul>
              </div>
            </div>
          </nav>
        </header>

        <main class="container">
            @yield('content')
        </main>

      </div>

      <footer class="page-footer">

        <div class="page-footer--links">
          <div class="page-footer--links-container container">
            <small>&copy; 2018 The Daily Bearer. Created By <a href="#" rel="author" target="_blank">Adam Gray</a></small>
            <nav >
              <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">News</a></li>
                <li><a href="#">Podcasts</a></li>
                <li><a href="#">Events</a></li>
                <li><a href="#">Authors</a></li>
              </ul>
            </nav>
            <a class="to-top" href="#" title="Back to top" ><i class="fas fa-long-arrow-alt-up"></i></a>
          </div>
        </div>
        
      </footer>

    </div>
</body>
</html>
