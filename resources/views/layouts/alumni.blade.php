<!DOCTYPE html>
<html lang="en">
<head>
    @include('part.general._head')
</head>
<body class="@yield('body', '')">
    <div id="main">
        @if (Auth::user())
           @include('part.alumni._header')
           @include('part.alumni._side')
        @endif
            {{-- <canvas id="dem/o-canvas"></canvas> --}}
                @yield('content')
    </div>
    @include('part.general._foot')
</body>
</html>