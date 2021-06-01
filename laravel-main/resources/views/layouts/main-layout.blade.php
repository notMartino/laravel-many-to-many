<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Many to Many</title>

    <script src="https://kit.fontawesome.com/2e0cc00556.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Odibee+Sans&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('/css/app.css')}}">
</head>
<body>
    @include('components.header')

    @yield('content')
</body>
</html>