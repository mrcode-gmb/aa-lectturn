<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="{{asset("asset/form.css")}}">
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="{{asset("asset/fontawesome-free/css/all.min.css")}}">
    <link rel="stylesheet" href="{{asset("asset/fontawesome-free/css/all.css")}}">
    <link rel="stylesheet" href="{{asset("asset/boxicons/css/boxicons.min.css")}}">
    <link rel="stylesheet" href="{{asset("asset/bootstrap-icons/bootstrap-icons.css")}}">
    <link rel="stylesheet" href="{{ asset('asset/styles.css') }}">
    

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <div>
        @include('layouts.navigation')

        <!-- Page Content -->
        <main>
            {{ $slot }}
        </main>
    </div>
    <script>
        // Event listeners for mobile menu toggling
        const openMobileMenu = () => {
            document.querySelector(".navbar").style.width = "200px";
            document.querySelector("#openmobilebar").style.display = "none";
            document.querySelector("#closemobilebar").style.display = "flex";
        };

        const closeMobileMenu = () => {
            document.querySelector(".navbar").style.width = "0px";
            document.querySelector("#openmobilebar").style.display = "flex";
            document.querySelector("#closemobilebar").style.display = "none";
        };

        
    </script>

    <script>
        // Functionality for sidebar toggling
        const toggleSidebar = (isOpen, e) => {
            const navbar = document.querySelector(".navbar");
            const header = document.querySelector("#header");
            const mainbody = document.querySelector(".main-body");
            const spanElements = document.getElementsByTagName("span");
            console.log(mainbody)
            if (isOpen) {
                navbar.style.width = "240px";
                if (window.innerWidth <= 1394) {
                    header.style.width = "82.5%";
                    mainbody.style.width = "82.5%";
                } else {
                    mainbody.style.width = "88%";
                    header.style.width = "88%";
                }
                document.querySelector("#opensidebar").style.display = "none";
                document.querySelector("#closesidebar").style.display = "flex";
                for (let span of spanElements) {
                    span.style.display = "";
                }
            } else {
                navbar.style.width = "70px";
                header.style.width = "96%";
                mainbody.style.width = "96%";
                document.querySelector("#opensidebar").style.display = "flex";
                document.querySelector("#closesidebar").style.display = "none";
                for (let span of spanElements) {
                    span.style.display = "none";
                }
            }
        };
    </script>


</body>

</html>
