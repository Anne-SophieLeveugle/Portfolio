<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Anne-Sophie</title>
    <link rel="stylesheet" href="css/app.css"/>
</head>
<body>
@include('includes.nav')
@if(Request::is('work'))
    @include('includes.extra')
    @endif
    @yield('content')
<script src="js/app.js"></script>
</body>
</html>