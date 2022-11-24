<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <x-head></x-head>
    @livewireStyles
    <title>Lajnah Falakiyah Annuqayah</title>
</head>

<body>
    <!-- ======= Top Bar ======= -->
    <div id="topbar" class="d-flex align-items-center fixed-top">
        <div class="container d-flex align-items-center justify-content-center justify-content-md-between">
        </div>
    </div>
    <x-navbar></x-navbar>
    @yield('content')
    @livewireScripts
    <x-footer></x-footer>
</body>
</html>
