<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Meta Title -->
    <title>
        @yield('title')
    </title>
    <!-- Meta Description -->
    <meta name="description" content="@yield('description', 'Our Multi-award winning background checks platform ScreenGlobal will help you mitigate risk due to wrongful hires.')">
    <!-- Website Icon -->
    <link rel="icon" type="image/x-icon" href="{{ asset('images/avvanz.ico') }}"/>
    <!-- Preload Bootstrap CSS -->
    <link rel="preload" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" as="style">
    <!-- Preload jQuery -->
    <link rel="preload" href="https://code.jquery.com/jquery-3.6.0.min.js" as="script">
    <!-- Minified Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Preconnect for external resources -->
    <link rel="preconnect" href="https://cdn.jsdelivr.net" crossorigin>
    <!-- Font Awesome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" media="print" onload="this.media='all'" />
    <!-- Critical CSS -->
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", "Roboto", "Helvetica Neue", Arial, sans-serif;
        }

        .padding-vertical {
            padding-top: 3rem;
            padding-bottom: 3rem;
        }
        .margin-vertical {
            margin-top: 3rem;
            margin-bottom: 3rem;
        }
        .section-padding {
            padding: 3rem;
        }
        .text-white {
            color: white;
        }
        .text-center {
            text-align: center;
        }
    </style>
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" media="print" onload="this.media='all'">
    @yield('css')
</head>
<body>
    @yield('content')

    <!-- jQuery CDN -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- Custom JS -->
    <script src="{{ asset('js/index.js') }}" defer></script>

    <!-- Deferred Bootstrap JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" defer></script>
    @yield('scripts')
</body>
</html>
