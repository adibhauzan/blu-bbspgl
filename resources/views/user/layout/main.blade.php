<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

@include('user.partials.header')

<body>

        @include('user.partials.navbar')

            @yield('container')

        @yield('styles')


        <style>
            .btn.btn-warning:hover {
                background-color: #2865B0 !important;
            }
        </style>

        @include('user.partials.footer')


        @include('user.partials.scriptjs')
     
          

  
    </body>

</html>
