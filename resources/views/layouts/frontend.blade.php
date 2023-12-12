<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;700&display=swap" rel="stylesheet" />

    <title>{{ config('app.name', 'Jobbar The Ultimate Job Board') }}</title>
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="flex min-h-screen flex-col bg-gray-900">

    @yield('main_content')

    @include('layouts.partials.footer')
</body>

</html>
