<html>
    <head>
        @include('parts.head')
    </head>

    <body>
        @include('parts.header')

        <div class="container">
            @yield('content')
        </div>

        @include('parts.footer')

    </body>
    
</html>    