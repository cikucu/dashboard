<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>@yield('title', 'Home') &mdash; {{ config('app.name') }}</title>
  <meta name="csrf-token" content="{{ csrf_token() }}">
  
  <link rel="stylesheet" href="https://code.jquery.com/ui/1.14.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="{{ mix('css/app.css') }}">
  <!-- <meta name="csrf-token" content="{{ csrf_token() }}"> -->
  @stack('stylesheet')
</head>

<body>
<div id="app">
  @yield('app')
</div>

  <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
  <script src="https://code.jquery.com/ui/1.14.1/jquery-ui.js"></script>
  
<script src="{{ mix('js/manifest.js') }}"></script>
<script src="{{ mix('js/app.js') }}"></script>
<!-- <script src="https://code.jquery.com/jquery-3.5.1.js"></script> -->

<script src="{{ mix('js/vendor.js') }}"></script>
@stack('javascript')
</body>
</html>
