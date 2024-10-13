<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>ICoNDACoM</title>

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="asset/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="asset/fontawesome-free/css/all.css">
    <link rel="stylesheet" href="asset/boxicons/css/boxicons.min.css">
    <link rel="stylesheet" href="asset/bootstrap-icons/bootstrap-icons.css">
    <link rel="stylesheet" href="{{ asset('asset/style.css') }}">
</head>

<body>
    <section>
        <header>
            <div id="header">
                <div class="header">
                    <div class="col header-left">
                        <img src="./asset/photos/GSU.jpg" alt="" class="header-logo">
                        <h4>ICoNDACoM</h4>
                    </div>
                    <div class="col header-right">
                        <div class="header-mobile">
                            <div class="header-links">
                                <ul>
                                    <li>
                                        <a href="#home-welcome">Home</a>
                                    </li>
                                    <li>
                                        <a href="#footer">Registration</a>
                                    </li>
                                    <li>
                                        <a href="">About Us</a>
                                    </li>
                                    <li>
                                        <a href="">Contact Us</a>
                                    </li>
                                    <li>
                                        <a href="">Terms & Condition</a>
                                    </li>
                                    <li>
                                        <a href="#!">More</a>
                                        <div class="drop-down">
                                            <div>
                                                <a href="">View Registration List</a>
                                            </div>

                                            @if (Route::has('login'))
                                                    @auth
                                                        <div>
                                                            <a href="{{ url('/dashboard') }}">Dashboard</a>
                                                        </div>
                                                    @else
                                                        <div>
                                                            <a href="{{ route('login') }}">Log in</a>
                                                        </div>
                                                        @if (Route::has('register'))
                                                            <div>
                                                                <a href="{{ route('register') }}">Create Account</a>
                                                            </div>
                                                        @endif
                                                    @endauth
                                            @endif


                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="header-contact">
                                <input type="search" placeholder="Search...">
                            </div>
                        </div>
                    </div>
                    <div class="menu-mobile">
                        <i class="fa fa-align-right" id="menus"></i>
                    </div>
                </div>
            </div>
        </header>
    </section>

    <section id="body">
        <div class="pro-body">
            <div class="pro-body-gbimg">
                <div class="pro-body-title">
                    <h4>1ST INTERNATIONAL CONFERENCE ON NEW DEVELOPMENTS
                        IN APPLIED AND COMPUTATIONAL MATHEMATICS
                        (ICoNDACoM 2025)</h4>
                    <!-- <p>Byadmin / Events, University / News &nbsp; <i class="fa fa-regular fa-comments"></i>&nbsp; 0</p> -->
                    <p>Organized by the Numerical Optimization Research Group,
                        Bayero UniversityCorp.
                        Kano, Kano State, Nigeria.</p>
                </div>
            </div>

            <div class="pro-second-body">
                <div class="pro-second-body-grid">
                    <h4>
                        1ST INTERNATIONAL CONFERENCE ON NEW DEVELOPMENTS
                        IN APPLIED AND COMPUTATIONAL MATHEMATICS
                        (ICoNDACoM 2025)
                    </h4>
                    <img src="asset/flierFapson2024.jpeg" alt="">
                    <div class="pro-secord-body-contents">
                        <p>Register now and participate in the 1st International Conference on New Developments in
                            Applied and Computational Mathematics (ICoNDACoM 2025), a premier event showcasing the
                            latest advancements in applied and computational mathematics.</p>
                        <p>ICoNDACoM 2025 is more than just an academic conference; it's a gateway to connecting with a
                            global network of researchers, industry leaders, and innovators. Engage in thought-provoking
                            discussions, explore cutting-edge research, and collaborate with professionals shaping the
                            future of mathematics and its real-world applications.</p>


                        <h3>ONLINE REGISTRATION LINK</h3>
                        <a href="https://forms.gle/neHk63Pg1oQctobV8">https://forms.gle/neHk63Pg1oQctobV8</a>
                        <p>Register and plan ahead to attend.</p>


                        <h3>When & Where</h3>
                        <p>Dates: 30th May to 1st June 2025 in Open Theatre, Old Campus, Bayero
                            University, Kano, Kano State, Nigeria</p>
                        <p>CONFERENCE THEME: Applied Mathematics as tools for solving problems facing humanities</p>


                        <h3>IMPORTANT DATES</h3>
                        <p>Registration & abstract submission open:—> Jan. 01st, 2025</p>
                        <p>Deadline for abstract submission:—> Apr. 18th, 2025</p>
                        <p>Arrival and onsite registration:—> May 29th, 2025</p>
                        <p>Opening ceremony & group photo by 8:00am:—> May 30th, 2025</p>
                        <p>Conference dinner in the evening:—> May 30th, 2025</p>
                        <p>Football game in the evening:—> May 31st, 2025</p>
                        <p>MATLAB training and closing ceremony:—> Jun. 01st, 2025</p>
                        <p>Deadline for full paper submission:—> Aug. 31st, 2025</p>




                        <h3>CONFERENCE ACCOUNT</h3>
                        <p>
                            Account Name: Waiting <br>
                            Account No: Waiting <br>
                            Account Type: Waiting <br>
                            Bank: Waiting
                        </p>
                    </div>
                    <div class="test-left">
                        <h3>Papers in the areas listed below are appropriate for
                            submission to ICoNDACoM 2025</h3>
                        <p>
                            1. Iterative Algorithms for Numerical Optimization <br>
                            2. Algorithms and Computations of Fixed Points <br>
                            3. Mathematical Modeling in Biology, Medicine, etc.<br>
                            4. Differential Equations<br>
                            5. Differential Games<br>
                            6. Dynamical System<br>
                            7. Numerical Analysis<br>
                            8. Fluid Dynamics<br>
                            9. Cryptography and Quantum Computing<br>
                            10. Statistics (Probability, Stochastic, Survey, etc.)<br>
                            11. Mathematical Economics and Finance<br>
                            12. Projection Methods for Nonlinear Problems<br>
                            13. Machine Learning<br>
                            14. Problems Arising from Compressive Sensing<br>
                            15. Mathematical Physics<br>
                            And so on.
                        </p>
                        <br>
                        <h3>Conference Registration Fees:</h3>

                        <div class="list-title">
                            <h5>Onsite presenters:</h5>
                            <p>
                                1. Faculty members: N25,000 <br>
                                2. Students: N15,000 <br>
                                3. International: 50USD<br>
                            </p>
                        </div>

                        <div class="list-title">
                            <h5>Online presenters:</h5>
                            <p>
                                1. Faculty members: N15,000 <br>
                                2. Students: N10,000 <br>
                                3. International: 30USD<br>
                            </p>
                        </div>

                        <div class="list-title">
                            <h5>Participants without paper:</h5>
                            <p>
                                1. Corporate: N30,000 <br>
                                2. Individual:: N10,000 <br>
                            </p>
                        </div>

                        <div class="list-title">
                            <h5>Accompany:</h5>
                            <p>
                                1. Individual:: N10,000 <br>
                            </p>
                        </div>

                    </div>
                    <br>
                    <div class="text-left">
                        <h3>Keynotes Speakers:</h3>
                        <p>
                            1. Prof. Daniel Okuonghae, University of Benin,
                            Benin, Edo State, Nigeria. <br>
                            2. Prof. B <br>
                            3. Prof. C <br>
                        </p>
                    </div>
                    <div class="pro-secord-body-contents text-left">
                        <p>Host: Numerical Optimization Research Group, Bayero University Kano, Kano State, Nigeria
                            Co-host: GSU-Mathematics for Innovative Research (GSU-MIR) Group, Gombe State University,
                            Gombe, Gombe State, Nigeria</p>
                        <a href="">www.gsu.edu.ng</a>
                        <h3>For more information</h3>
                        <p>
                            <a href="mailto:icondacom.mth@buk.edu.ng">icondacom.mth@buk.edu.ng</a> <br>
                            <a href="tel:+2348067864645">+2348067864645</a>
                        </p>
                        <p>
                            <a href="mail:maaliyu@gsu.edu.ng">maaliyu@gsu.edu.ng</a><br>
                            <a href="tel:+2348036143352">+2348036143352</a>
                        </p>
                        <p>
                            <a href="mailto:hmuhd.mth@buk.edu.ng">hmuhd.mth@buk.edu.ng</a> <br>
                            <a href="tel:+2348036364455">+2348036364455</a>
                            <a href="tel:+2347067377807">+2347067377807</a>


                        </p>
                    </div>
                </div>
                <div class="pro-second-body-grid">
                    <div class="pro-second-right-head">
                        <h3>Latast News</h3>
                    </div>
                    <div class="pro-second-right-new">
                        <div class="pro-second-right-block">
                            <a href="">
                                <h3>
                                    gsu PARTNERSHIP EXPLANATION: A Game Changer for Global Academic Collaboration.
                                </h3>
                                <p>September 25, 2024</p>
                            </a>
                        </div>
                        <div class="pro-second-right-block">
                            <a href="">
                                <h3>
                                    CONGRATULATIONS DR JOHNBOSCO EGBUERI
                                </h3>
                                <p>September 25, 2024</p>
                            </a>
                        </div>
                        <div class="pro-second-right-block">
                            <a href="">
                                <h3>
                                    Courtesy Visit: Faculty of Health Sciences and Technology Engages Ag. Vice
                                    Chancellor
                                </h3>
                                <p>September 25, 2024</p>
                            </a>
                        </div>
                        <div class="pro-second-right-block">
                            <a href="">
                                <h3>
                                    2024 POST UTME AND DIRECT ENTRY SCREENING EXERCISE
                                </h3>
                                <p>September 25, 2024</p>
                            </a>
                        </div>
                        <div class="pro-second-right-block">
                            <a href="">
                                <h3>
                                    gsu PARTNERSHIP EXPLANATION: A Game Changer for Global Academic Collaboration.
                                </h3>
                                <p>September 25, 2024</p>
                            </a>
                        </div>
                        <div class="pro-second-right-block">
                            <a href="">
                                <h3>
                                    CONGRATULATIONS DR JOHNBOSCO EGBUERI
                                </h3>
                                <p>September 25, 2024</p>
                            </a>
                        </div>
                        <div class="pro-second-right-block">
                            <a href="">
                                <h3>
                                    Courtesy Visit: Faculty of Health Sciences and Technology Engages Ag. Vice
                                    Chancellor
                                </h3>
                                <p>September 25, 2024</p>
                            </a>
                        </div>
                        <div class="pro-second-right-block">
                            <a href="">
                                <h3>
                                    2024 POST UTME AND DIRECT ENTRY SCREENING EXERCISE
                                </h3>
                                <p>September 25, 2024</p>
                            </a>
                        </div>
                        <div class="pro-second-right-block">
                            <a href="">
                                <h3>
                                    gsu PARTNERSHIP EXPLANATION: A Game Changer for Global Academic Collaboration.
                                </h3>
                                <p>September 25, 2024</p>
                            </a>
                        </div>
                        <div class="pro-second-right-block">
                            <a href="">
                                <h3>
                                    CONGRATULATIONS DR JOHNBOSCO EGBUERI
                                </h3>
                                <p>September 25, 2024</p>
                            </a>
                        </div>
                        <div class="pro-second-right-block">
                            <a href="">
                                <h3>
                                    Courtesy Visit: Faculty of Health Sciences and Technology Engages Ag. Vice
                                    Chancellor
                                </h3>
                                <p>September 25, 2024</p>
                            </a>
                        </div>
                        <div class="pro-second-right-block">
                            <a href="">
                                <h3>
                                    2024 POST UTME AND DIRECT ENTRY SCREENING EXERCISE
                                </h3>
                                <p>September 25, 2024</p>
                            </a>
                        </div>
                        <div class="pro-second-right-block">
                            <a href="">
                                <h3>
                                    gsu PARTNERSHIP EXPLANATION: A Game Changer for Global Academic Collaboration.
                                </h3>
                                <p>September 25, 2024</p>
                            </a>
                        </div>
                        <div class="pro-second-right-block">
                            <a href="">
                                <h3>
                                    CONGRATULATIONS DR JOHNBOSCO EGBUERI
                                </h3>
                                <p>September 25, 2024</p>
                            </a>
                        </div>
                        <div class="pro-second-right-block">
                            <a href="">
                                <h3>
                                    Courtesy Visit: Faculty of Health Sciences and Technology Engages Ag. Vice
                                    Chancellor
                                </h3>
                                <p>September 25, 2024</p>
                            </a>
                        </div>
                        <div class="pro-second-right-block">
                            <a href="">
                                <h3>
                                    2024 POST UTME AND DIRECT ENTRY SCREENING EXERCISE
                                </h3>
                                <p>September 25, 2024</p>
                            </a>
                        </div>
                        <div class="pro-second-right-block">
                            <a href="">
                                <h3>
                                    gsu PARTNERSHIP EXPLANATION: A Game Changer for Global Academic Collaboration.
                                </h3>
                                <p>September 25, 2024</p>
                            </a>
                        </div>
                        <div class="pro-second-right-block">
                            <a href="">
                                <h3>
                                    CONGRATULATIONS DR JOHNBOSCO EGBUERI
                                </h3>
                                <p>September 25, 2024</p>
                            </a>
                        </div>
                        <div class="pro-second-right-block">
                            <a href="">
                                <h3>
                                    Courtesy Visit: Faculty of Health Sciences and Technology Engages Ag. Vice
                                    Chancellor
                                </h3>
                                <p>September 25, 2024</p>
                            </a>
                        </div>
                        <div class="pro-second-right-block">
                            <a href="">
                                <h3>
                                    2024 POST UTME AND DIRECT ENTRY SCREENING EXERCISE
                                </h3>
                                <p>September 25, 2024</p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- !-- home page section  -->
            <section id="aboutus">
                <div class="about-we">
                    <div class="about-details text-center">
                        <h4>About Us</h4>
                        <p>The 1st International Conference on New Developments in Applied and Computational Mathematics
                            (ICoNDACoM 2025) is a global event dedicated to exploring the latest trends and innovations
                            in applied and computational mathematics. Bringing together researchers, academics, and
                            industry professionals, the conference aims to foster collaboration and share groundbreaking
                            research in mathematical modeling, numerical methods, data science, and more. ICoNDACoM 2025
                            serves as a platform for advancing knowledge and addressing real-world challenges through
                            cutting-edge mathematical solutions.</p>
                        <div class="start" style="justify-content: center; text-align:center;">
                            <div class="start-links start-linking">
                                <a href="#!">Read more</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- footer  -->
            <section id="footer">
                <div class="footer">
                    <img src="./asset/photos/GSU.jpg" alt="">
                    <div class="footer-header">
                        <p>Contact</p>
                        <h4>Visit Office Today</h4>
                    </div>
                    <div class="footer-row">
                        <div class="footer-col">
                            <h3>Opening Hours</h3>
                            <div class="footer-clock">
                                <i class="fa fa-regular fa-clock"></i>
                                <p>Monday To Friday - 9am to 9pm</p>
                            </div>
                            <div class="footer-clock">
                                <i class="fa fa-regular fa-clock"></i>
                                <p>Saturday And Sunday - 8am to 11pm</p>
                            </div>
                        </div>
                        <div class="footer-col text-right justify-space-right sm-mt-6">
                            <h3>Contact us</h3>
                            <div class="footer-clock justify-space-right">
                                <p># State law-cost near army barrack</p>
                                <i class="fa fa-location-dot"></i>
                            </div>
                            <div class="footer-clock justify-space-right">
                                <p>drinksbymaryoyi@gmail.com</p>
                                <i class="fa fa-regular fa-paper-plane"></i>
                            </div>
                            <div class="footer-clock justify-space-right">
                                <p>+234 - 7038556167</p>
                                <i class="fa fa-phone"></i>
                            </div>
                        </div>
                    </div>
                    <div class="footer-icons">
                        <div class="footer-links">
                            <a href="#">
                                <i class="fa fa-brands fa-facebook"></i>
                            </a>
                            <a href="#">
                                <i class="fa fa-brands fa-twitter"></i>
                            </a>
                            <a href="#">
                                <i class="fa fa-brands fa-whatsapp"></i>
                            </a>
                            <a href="#">
                                <i class="fa fa-brands fa-youtube"></i>
                            </a>
                        </div>
                        <p>Copyright &copy; All Right Reserved 2024, GSU (Gombe State)</p>
                    </div>
                </div>
            </section>
        </div>
    </section>


    <script>
        const menu = document.querySelector("#menus");
        const headerHeader = document.querySelector(".header-mobile");

        menu.onclick = () => {
            if (headerHeader.style.height == 0) {
                menu.classList.add("afterMenu");
                headerHeader.style.height = "auto";
                headerHeader.style.padding = "12px 0";
                headerHeader.classList.add("padding-nav");
            } else {
                menu.classList.remove("afterMenu");
                headerHeader.classList.remove("padding-nav");
                headerHeader.style.height = "";
                headerHeader.style.padding = "0px";
            }
        }


        // function myFunction() {
        //     let input = document.getElementById('myInput').value
        //     input = input.toLowerCase();
        //     let x = document.getElementsByClassName('table-row');

        //     for (i = 0; i < x.length; i++) {
        //         if (!x[i].innerHTML.toLowerCase().includes(input)) {
        //             x[i].style.display = "none";
        //         }
        //         else {
        //             x[i].style.display = "";
        //         }
        //     }
        // }
    </script>
</body>

</html>
