<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>laravel Model</title>
  <!-- Font-Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <!-- CSS -->
  <link rel="stylesheet" href="{{ asset('/css/app.css') }}">
</head>
<body>

  @include('components.header')
  @yield('content')
  @include('components.footer')

</body>
</html>
