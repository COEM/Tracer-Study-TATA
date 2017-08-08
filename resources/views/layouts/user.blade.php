<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @include('part.user._head')
</head>
<body>
    <div class="container">
        @include('part.user._header')
    </div>
    <div class="container">
        <div class="col-md-12">
            @include('part.user._navbar')
        </div>
    </div>
    <div class="container">
        @yield('content')
    </div>
    @include('part.user._footer')
    @include('part.user._script')
</body>
</html>