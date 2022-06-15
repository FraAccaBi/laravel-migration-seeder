<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel</title>
    <head>
    <!-- Styles -->
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <script src="{{asset('js/app.js')}}" defer></script>
</head>
<body>
@include('partials.header')
    

<main>
  <!-- Yield the main page content -->
  @yield('content')
</main>
@include('partials.footer')

</body>
</html>