<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('judul')</title>
</head>

<body>
    <section id="atas">
        <a href="{{ route('pendonor.list') }}">[List Pendonor]</a>
        @if (session()->get('logged', false))
            <a href="{{ route('admin.list') }}">[List admin]</a>
            <a href="{{ route('logout') }}">[Logout]</a>
        @else
            <a href="{{ route('login') }}">[Login]</a>
        @endif
        <hr>
    </section>
    @yield('content')
</body>

</html>
