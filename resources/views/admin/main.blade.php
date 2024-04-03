<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="theme-color" content="#563d7c">
    <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
    <link rel="apple-touch-icon" href="http://127.0.0.1:8000/assets/img/language-svgrepo-com.svg" sizes="180x180">
    <link rel="icon" href="http://127.0.0.1:8000/assets/img/language-svgrepo-com.svg" sizes="32x32">
    <link rel="icon" href="http://127.0.0.1:8000/assets/img/language-svgrepo-com.svg" sizes="16x16">
    <link rel="icon" href="http://127.0.0.1:8000/assets/img/language-svgrepo-com.svg" sizes="16x16">
    <link rel="mask-icon" href="http://127.0.0.1:8000/assets/img/language-svgrepo-com.svg">
    <link rel="icon" href="http://127.0.0.1:8000/assets/img/language-svgrepo-com.svg">
    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/e49e839f4b.js" crossorigin="anonymous"></script>

    <link type="text/css" href="/css/volt.css" rel="stylesheet">

    <!-- Core -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js"
        integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous">
    </script>

    <!-- Vendor JS -->
    <script src="/assets/js/on-screen.umd.min.js"></script>

    <!-- Smooth scroll -->
    <script src="/assets/js/smooth-scroll.polyfills.min.js"></script>


    <!-- Github buttons -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <!-- Volt JS -->
    @stack('styles')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
</head>

<body>
    @include('layouts.nav')
    {{-- SideNav --}}
    @include('layouts.sidenav')

    <main class="content">
        @include('layouts.topbar')
        @yield('content')

        @include('layouts.footer')
    </main>
    </script>
    @stack('scripts')
</body>

</html>
