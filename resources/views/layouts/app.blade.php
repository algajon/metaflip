<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    @include('include.header')
    @yield('content')
    @yield('scripts')       
    <main class="py-4">
        <div class="container">
            <div class="row justify-content-center mt-3">
                <div class="col-md-12">
                    
                    @if ($message = Session::get('success'))
                    <div class="alert alert-success text-center" role="alert">
                                {{ $message }}
                            </div>
                            @endif

                            
                        </div>
                    </div>
                </div>
            </main>
        </div>
        @include('include.footer')
    </body>
</html>