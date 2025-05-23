<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('title')</title>
    <link rel="icon" type="image/png" href="{{ asset('images/Livoura-logo.png') }}">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-100 text-gray-900">
    <x-header />

    <main class="container mx-auto my-19 min-h-screen">
        @yield('content')
    </main>

    <x-footer />
    <!-- Load scripts with defer when possible -->
    <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js" defer></script>


    <script defer>
        document.addEventListener('DOMContentLoaded', function() {
            if (typeof Fancybox !== 'undefined') {
                Fancybox.bind("[data-fancybox='gallery']", {
                    infinite: true,
                    keyboard: true,
                    closeButton: "inside",
                });
            }
        });
    </script>
</body>

</html>
