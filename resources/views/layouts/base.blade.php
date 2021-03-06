<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="{{ asset('css/style.css')}}" rel="stylesheet" type="text/css">
    <title>@yield('title')</title>
  </head>
  <body>
    <header>
      @include('layouts.menu')
    </header>
    <main>
      @yield('main')
    </main>
    <footer>
     <div class="footerMenu">
       <div class="imageDoc">
       <a href="{{"bonus"}}"><img class="roundedImage"src="images/doc1.jpg" alt="le doc"></a>
       <a href="{{"bonus"}}"><img class="roundedImage"src="images/doc2.jpg" alt="le doc"></a>
       <a href="{{"bonus"}}"><img class="roundedImage"src="images/marty.jpg" alt="Marty"></a>
       <div>
     </div>
    </footer>
  </body>
  <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.bundle.min.js"></script>
  <script src="{{ asset('js/script.js') }}"></script>

  </script>
</html>
