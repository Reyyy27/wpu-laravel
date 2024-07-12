<!DOCTYPE html>
<html lang="en">

    <head>
       <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        @include('include.landing.meta')

        <title>@yield('title') | SERV</title>

        @stack('before-style')

        @include('include.landing.style')

        @stack('after-style')

    </head>

    <body class="antialiased">
        <div class="relative">
    
        @include('include.landing.header')

            {{--  @include('sweetalert::alert') --}}
            
            @yield('content')

        @include('include.landing.footer')
        
        @stack('before-script')

        @include('include.landing.script')

        @stack('after-script')

        @include('components.modal.login')
        @include('components.modal.register')
        @include('components.modal.register-success')
            

    </body>
</html>