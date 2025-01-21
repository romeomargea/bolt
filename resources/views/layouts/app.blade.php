<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'UIkit Demo') }}</title>
    <!-- UIkit CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.19.1/dist/css/uikit.min.css" />
    <!-- UIkit JS -->
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.19.1/dist/js/uikit.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.19.1/dist/js/uikit-icons.min.js"></script>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>
    <div id="root">
        @include('layouts.navigation')
        
        @yield('content')

        @include('layouts.offcanvas')
    </div>

    <script src="{{ asset('js/icons.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
</body>
</html>