<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @yield('styles')
</head>
<body class="layout-boxed">

@include('layouts.AdminDashboard.navbar')

<div class="main-container" id="container">
    <div class="overlay"></div>
    <div class="cs-overlay"></div>
    <div class="search-overlay"></div>

    @include('layouts.AdminDashboard.sidebar')

    <div id="content" class="main-content">
        @yield('content')
    </div>
</div>

@yield('scripts')
</body>
</html>
