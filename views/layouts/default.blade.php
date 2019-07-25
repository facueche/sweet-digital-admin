<!doctype html>
<html>
<head>
    @include('sweetdigitaladmin::includes.head')
</head>
<body>
<div class="container">

    @include('sweetdigitaladmin::includes.nav')

    @auth
        <header class="row">
            @include('sweetdigitaladmin::includes.menu')
        </header>
    @endauth

    @auth
        <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2">
    @endauth
        <div id="main" class="row">

            <hr>
            @if (session()->has('flash'))
                <div class="alert alert-info">{{ session('flash') }}</div>
            @endif

            @yield('content')

        </div>
    @auth
        </div>
    @endauth

    @include('sweetdigitaladmin::includes.footer')

    @include('sweetdigitaladmin::includes.scripts')
    @stack('scripts')
</div>
</body>
</html>
