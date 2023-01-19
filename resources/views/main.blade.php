<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Complainment App</title>

    @include('assets.css')
    
  </head>
  <body>


    @include('navbar')

    <div class="container-fluid">

        @yield('content')

    </div>




   @include('assets.js')
  </body>
</html>