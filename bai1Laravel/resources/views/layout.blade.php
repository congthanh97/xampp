<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
    <base href="{{asset('')}}">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    @include("header")
    <div class="container">
        @yield('content')
    </div>
    @include("footer")
    <script src="{{ asset('js/app.js') }}" type="text/js"></script>
</body>

</html>