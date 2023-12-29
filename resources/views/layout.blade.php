<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>@yield('title', 'Metaflip')</title>
  </head>
  <body>
    @include('include.header')
    @yield('content')
    @include('include.footer')
    @yield('scripts')
  </body>
</html>