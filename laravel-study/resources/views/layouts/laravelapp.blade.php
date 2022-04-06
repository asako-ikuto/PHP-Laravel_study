<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">

</head>

<body>
    @include('commons.navbar')

    <div class="card" style="width:600px; margin:auto;">
        <div class="card-header">@yield('title')</div>
        <div class="card-body" style="text-align:center">
            @yield('content')
        </div>
    </div>
</body>

</html>