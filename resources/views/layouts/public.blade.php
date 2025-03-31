<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Pelleteuse Terrassement')</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-[#fff8e6] text-black dark:bg-gray-900 dark:text-white">

    <main class="min-h-screen">
        @yield('content')
    </main>

    <footer class="text-center p-4 bg-[#DE7C23] text-white">
        &copy; {{ date('Y') }} Pelleteuse Terrassement – Tous droits réservés <br>
        <a href="{{ route('mentions') }}" class="underline text-white hover:text-gray-200 text-sm">Mentions légales</a>
    </footer>

    @stack('scripts')
</body>
</html>
