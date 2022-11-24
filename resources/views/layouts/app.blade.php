<!DOCTYPE html>
<html lang="en">

<head>
    <title>@yield('title')</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="{{ url('/backend/images/favicon.ico') }}">
    @include('layouts.linkcss')
</head>

@if (Auth()->user())
    <body data-topbar="light" data-layout="horizontal">
    @else
        <body class="bg-primary">
@endif
@if (!Auth()->user())
    <div class="layar">
        <div class="lds-ellipsis">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
    <ul class="bg-bubbles">
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
    </ul>
@endif
@if (Auth()->user())
    <x-home></x-home>
@endif

@yield('content')

@include('layouts.script')
</body>

</html>
