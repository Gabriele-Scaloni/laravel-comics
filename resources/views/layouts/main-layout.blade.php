<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel ex</title>

    @yield('header')
</head>
<body>
    
    @include('components.header')

    @yield('content')

    @include('components.footer')


</body>
</html>