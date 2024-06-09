<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="/assets/logo.png" type="image/x-icon">
    <title>LawLens | {{ $title }}</title>
    @vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body class="w-full bg-zinc-800">
    @include('/components/navbar')

    @yield('container')

    @include('/components/footer')
</body>
</html>
