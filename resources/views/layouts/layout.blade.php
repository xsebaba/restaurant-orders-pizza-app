<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Zamów pizzę</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->

        @vite(['resources/scss/main.scss'])


    </head>
@yield('content')

    <footer>
      <div>
      <p>Najsmaczniejsza pizza w Twoim mieście!<p>
      </div>
    </footer>
  </body>
</html>
