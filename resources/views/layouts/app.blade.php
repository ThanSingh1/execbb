<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'My Laravel App')</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <!-- Include your custom CSS here -->
</head>
<body>
    <!-- Header -->
    <header>
        @include('partials.header') <!-- Include header partial -->
    </header>

    <div class="main-container">
        <!-- Sidebar -->
        <aside class="sidebar">
            @include('partials.sidebar') <!-- Include sidebar partial -->
        </aside>

        <!-- Content Section -->
        <div class="content">
            @yield('content') <!-- Page-specific content will be injected here -->
        </div>
    </div>

    <!-- Footer -->
    <footer>
        @include('partials.footer') <!-- Include footer partial -->
    </footer>

    <script src="{{ asset('js/app.js') }}"></script> <!-- Custom JS -->
</body>
</html>
