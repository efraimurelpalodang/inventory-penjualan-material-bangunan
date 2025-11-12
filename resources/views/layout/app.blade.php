<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  @vite(['resources/css/app.css', 'resources/js/app.js'])
  <title>@yield('title')</title>
</head>
<body>
  <div class="grid grid-cols-5 overflow-x-hidden">
    <x-layouts.sidebar></x-layouts.sidebar>
    <main class="col-span-4 col-start-2">
      @yield('content')
    </main>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>
</body>
</html>