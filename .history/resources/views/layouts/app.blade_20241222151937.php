<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta charset="UTF-8">
<meta name="title" content="ICoNDACoM 2025 - International Conference on New Developments and Applications in Mathematics">
<meta name="description" content="ICoNDACoM 2025 is more than just an academic conference; it's a gateway to connecting with a global network of researchers, industry leaders, and innovators. Engage in thought-provoking discussions, explore cutting-edge research, and collaborate with professionals shaping the future of mathematics and its real-world applications.">
<meta name="keywords" content="ICoNDACoM 2025, Mathematics Conference, Research, Innovation, Global Networking, Industry Leaders, Real-World Applications">
<meta name="author" content="ICoNDACoM Organizing Committee">
<meta name="robots" content="index, follow">
<meta property="og:title" content="ICoNDACoM 2025 - International Conference on New Developments and Applications in Mathematics">
<meta property="og:description" content="Join ICoNDACoM 2025 to connect with a global network of researchers and innovators shaping the future of mathematics and its real-world applications.">
<meta property="og:type" content="website">
<meta property="og:url" content="https://www.icondacom2025.org">
<meta property="og:image" content="https://www.icondacom2025.org/images/banner.jpg">
<meta property="twitter:card" content="summary_large_image">
<meta property="twitter:title" content="ICoNDACoM 2025 - International Conference on New Developments and Applications in Mathematics">
<meta property="twitter:description" content="Engage in thought-provoking discussions and explore cutting-edge research at ICoNDACoM 2025.">
<meta property="twitter:image" content="https://www.icondacom2025.org/images/banner.jpg">


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
