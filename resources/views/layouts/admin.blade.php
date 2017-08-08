<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @include('part.general._head')
</head>
<body class="@yield('body', '')">
    <div id="main">
        @if (Auth::user())
           @include('part.admin._header')
           @include('part.admin._side')
        @endif
            {{-- <canvas id="dem/o-canvas"></canvas> --}}
                @yield('content')
    </div>
    @include('part.general._foot')
</body>
</html>