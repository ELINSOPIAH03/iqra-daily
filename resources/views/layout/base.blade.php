<!DOCTYPE html>
<html lang="en" class="h-full bg-white">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>@yield('title') - Iqra Daily</title>

        {{-- Favicons --}}
        <link href="{{ asset('assets/images/favicon.png') }}"
            rel="icon">
        <link rel="shortcut icon"
            href="{{ asset('assets/images/favicon.png') }}" />
        
        {{-- Swiper --}}
        <link
            rel="stylesheet"
            href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
            />

        {{-- intlTelInput --}}
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/intl-tel-input@25.3.0/build/css/intlTelInput.css">

        {{-- Main CSS File --}}
        @foreach (File::glob(public_path('build/assets/app*.css')) as $file)
            <link rel="stylesheet"
                href="{{ asset('build/assets/' . basename($file)) }}" />
        @endforeach
        {{-- @vite(['resources/sass/app.scss']) --}}
        @vite('resources/css/app.css')

        @yield('style')
    </head>
    <body class="h-full">
        @stack('modal')
        @yield('content')


        {{-- Bootstrap 5 JS --}}
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

        {{-- AOS --}}
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

        {{-- Swiper --}}
        <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
        
        {{-- intlTelInput --}}
        <script src="https://cdn.jsdelivr.net/npm/intl-tel-input@25.3.0/build/js/intlTelInput.min.js"></script>

        {{-- DataTable --}}
        <link rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.21/css/dataTables.bootstrap.min.css"
            integrity="sha512-BMbq2It2D3J17/C7aRklzOODG1IQ3+MHw3ifzBHMBwGO/0yUqYmsStgBjI0z5EYlaDEFnvYV7gNYdD3vFLRKsA=="
            crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.21/css/dataTables.bootstrap4.min.css"
            integrity="sha512-PT0RvABaDhDQugEbpNMwgYBCnGCiTZMh9yOzUsJHDgl/dMhD9yjHAwoumnUk3JydV3QTcIkNDuN40CJxik5+WQ=="
            crossorigin="anonymous" referrerpolicy="no-referrer" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.21/js/jquery.dataTables.min.js"
            integrity="sha512-BkpSL20WETFylMrcirBahHfSnY++H2O1W+UnEEO4yNIl+jI2+zowyoGJpbtk6bx97fBXf++WJHSSK2MV4ghPcg=="
            crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.21/js/dataTables.bootstrap4.min.js"
            integrity="sha512-OQlawZneA7zzfI6B1n1tjUuo3C5mtYuAWpQdg+iI9mkDoo7iFzTqnQHf+K5ThOWNJ9AbXL4+ZDwH7ykySPQc+A=="
            crossorigin="anonymous" referrerpolicy="no-referrer"></script>

        @stack('script')
    </body>
</html>