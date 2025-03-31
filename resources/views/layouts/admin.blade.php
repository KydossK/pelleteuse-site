<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Admin - Pelleteuse Papa</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-gray-100 text-gray-800 dark:bg-gray-900 dark:text-white p-6">
    <nav class="mb-6">
        <a href="{{ route('admin.messages.index') }}" class="mr-4 text-blue-500 hover:underline">Messages</a>
        <a href="{{ route('admin.photos.index') }}" class="text-blue-500 hover:underline">Photos</a> 
    </nav>

    @yield('content')
</body>
</html>
