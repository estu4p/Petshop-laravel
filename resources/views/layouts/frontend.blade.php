<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>PetHouse</title>
    <link rel="icon" href="{{ url('/frontend//frontend/img/LogoPetHouse .png') }}" />

    <link rel="stylesheet" href="{{ url('/frontend/css/style.css') }}" />
  </head>
  <body class="bg-body">
    <!-- npx tailwindcss -i ./src/input.css -o ./public/css/style.css --watch -->

    @include('components.frontend.navbar')

    @yield('content')

    @include('components.frontend.footer')

    <!-- Script -->
    <script src="{{ url('/frontend/js/app.js') }}"></script>
  </body>
</html>
