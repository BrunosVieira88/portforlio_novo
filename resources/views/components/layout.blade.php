<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="{{ asset('site/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('site/fontawesome.min.css') }}">
    <script src="{{ asset('site/all.min.js') }}"></script>
    <script src="{{ asset('site/fontawesome.min.js') }}"></script>

    <!-- BOOTSTRAP -->
    <link rel="stylesheet" href="{{ asset('site/bootstrap.css') }}">

    <title>{{ $title ?? 'Bruno Vieira | Full-Stack Developer' }}</title>
</head>
<body>
    {{ $slot }}

    <!-- JS -->
    <script src="{{ asset('site/jquery.js') }}"></script>
    <script src="{{ asset('site/bootstrap.js') }}"></script>
</body>
</html>
