<!doctype html>
<html lang="{{ app()->getLocale() }}">

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

<head>

    @yield('htmlhead')
</head>
<body>
    @yield('content')
    @yield('script')
</body>
</html>
