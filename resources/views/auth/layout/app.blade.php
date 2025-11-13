<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>{{ env('APP_NAME') }}</title>
  <link rel="shortcut icon" type="image/png" href="{{ asset('template') }}/assets/images/logos/favicon.png" />
  <link rel="stylesheet" href="{{ asset('template') }}/assets/css/styles.min.css" />
</head>

<body>
  @yield('content')
  <script src="{{ asset('template') }}/assets/libs/jquery/dist/jquery.min.js"></script>
  <script src="{{ asset('template') }}/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>