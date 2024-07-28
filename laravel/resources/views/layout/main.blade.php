<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @include('layout.style')
</head>

<body class="d-flex flex-column vh-100 justify-content-between">
    @include('layout.nav')

    @yield('content')

    @include('layout.footer')

    @yield('script')
</body>

</html>
