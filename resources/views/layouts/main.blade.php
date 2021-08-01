<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="/css/style.css">
  <script src="/js/scripts.js"></script>
  <title>@yield('title')</title>

</head>

<body>
  @yield('content')
  <footer>
    <p>&copy; HDC Events - 2021</p>
  </footer>
</body>