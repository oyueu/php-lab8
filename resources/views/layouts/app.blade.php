<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Laravel Blade Lab</title>
</head>
<body>
    <header>
        <h1>Laravel Blade Lab</h1>
        @include('partials.nav')
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        <p>&copy; 2025 Laravel Blade Lab</p>
    </footer>
</body>
</html>