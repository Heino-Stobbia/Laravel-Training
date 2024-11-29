<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>

    {{-- @vite(['resources/css/app.css', 'resources/js/app.js']); --}}

    <style>
        .container{
            max-width: 1200px;
            margin: auto;
            background-color: lightgrey; 
        }
    </style>
</head>
<body>
    <x-header/>
    <x-container>
        @yield('content')
    </x-container>
</body>
</html>