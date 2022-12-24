<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Social Sasha - @yield('title')</title>
    </head>
    <body>
        <h1>Social Sasha - @yield('title')</h1>
        <div>
           {{-- <a href="{{ route('users.create')}}">Sign up</a> --}}
        </div>
        <div>
            @yield('content')
        </div>

    </body>
</html>