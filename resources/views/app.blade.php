<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    @include('layouts.libraries.styles')
</head>

<body>

    <div class="container">

        @include('layouts.app.header')

        @yield('content')
    </div>
    @include('layouts.libraries.script')
</body>

</html>
