<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>@yield('title', 'Pelleteuse Terrassement')</title>

{{-- Favicon --}}
<link rel="icon" type="image/png" sizes="32x32" href="{{ asset('favicon.png') }}">
<link rel="shortcut icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">


  @vite('resources/css/app.css')
  <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>
<body class="bg-[#fff8e6] text-black dark:bg-gray-900 dark:text-white">

  <main>
    @yield('content')
  </main>

  <footer class="text-center p-4 bg-[#DE7C23] text-white">
    &copy; {{ date('Y') }} Eco-Sanit-TP – Tous droits réservés <br>
    <a href="{{ route('mentions') }}" class="underline text-white hover:text-gray-200 text-sm">Mentions légales</a>
  </footer>

  @stack('scripts')
</body>
</html>
