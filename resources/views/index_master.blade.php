<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>rri jember</title>

  <!-- fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,300;0,700;1,700&display=swap" rel="stylesheet">
  <script src="https://unpkg.com/feather-icons"></script>

  <link rel="stylesheet" href="{{ asset ('pelanggan/assets/css/style.css') }}">

</head>

<body>

  @include('body.header')

  @yield('content')

  @include('body.footer')

  <!-- feaher icons -->
  <script>
    feather.replace();
  </script>

  <script src="{{ asset ('pelanggan/assets/js/script.js') }}"></script>
</body>

</html>