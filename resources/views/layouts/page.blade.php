<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
   @vite('resources/css/app.css')
   <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
  
  </head>
  <body class="bg-gray-900 font-sans text-white">
    @include('includes.nav')
    @yield('content')
  </body>
</html>