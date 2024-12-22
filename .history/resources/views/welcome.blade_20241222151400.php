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
                        <img src="{{ asset('asset/photos/WhatsApp_Image_2024-10-23_at_8.20.45_PM-removebg-preview.png') }}" alt="" class="header-logo">
                        <h4>ICoNDACoM</h4>
                    </div>
                    <div class="col header-right">
                        <div class="header-mobile">
                            <div class="header-links">
                                <ul>
                                    <li>
                                        <a href="#body">Home</a>
                                    </li>
                                    <li>
                                        <a href="https://icondacom.com.ng/apply">Apply Now</a>
                                    </li>
                                    <li>
                                        <a href="#aboutus">About Us</a>
                                    </li>
                                    <li>
                                        <a href="#footer">Contact Us</a>
                                    </li>
                                    @if (Route::has('login'))
                                        @auth
                                            <li>
                                                <a href="{{ url('/dashboard') }}">Dashboard</a>
                                            </li>
                                        @else
                                            <li>
                                                <a href="{{ route('login') }}">Log in</a>
                                            </li>
                                            @if (Route::has('register'))
                                                <li>
                                                    <a href="{{ route('register') }}">Create Account</a>
                                                </li>
                                            @endif
                                        @endauth
                                    @endif
                                </ul>
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
                        Bayero University.
                        Kano, Kano State, Nigeria.</p>


                    <div class="pro-body-linkedd">
                        <a href="https://icondacom.com.ng/apply">Appy Now</a>
                    </div>
                </div>
            </div>

            <div class="pro-second-body">
                <div class="pro-second-body-grid">
                    <h4>
                        1ST INTERNATIONAL CONFERENCE ON NEW DEVELOPMENTS
                        IN APPLIED AND COMPUTATIONAL MATHEMATICS
                        (ICoNDACoM 2025)
                    </h4>
                    <a href="{{ asset('asset/Conference Flyer Prof. Waziri6_125827.jpg') }}">
                        <img src="{{ asset('asset/Conference Flyer Prof. Waziri6_125827.jpg') }}" alt="">
                    </a>
                    <div class="pro-secord-body-contents">
                        <p>Register now and participate in the 1st International Conference on New Developments in
                            Applied and Computational Mathematics (ICoNDACoM 2025), a premier event showcasing the
                            latest advancements in applied and computational mathematics.</p>
                        <p>ICoNDACoM 2025 is more than just an academic conference; it's a gateway to connecting with a
                            global network of researchers, industry leaders, and innovators. Engage in thought-provoking
                            discussions, explore cutting-edge research, and collaborate with professionals shaping the
                            future of mathematics and its real-world applications.</p>


                        <h3>ONLINE REGISTRATION LINK</h3>
                        <a href="https://icondacom.com.ng/apply">https://icondacom.com.ng/apply</a>
                        <p>Register and plan ahead to attend.</p>


                        <h3>When & Where</h3>
                        <p>Dates: 30th May to 1st June 2025 in Open Theatre, Old Campus, Bayero
                            University Kano, Kano State, Nigeria</p>
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
                                1. Faculty members: &#8358;50,000 <br>
                                2. Students: &#8358;25,000 <br>
                                3. International: 100USD<br>
                            </p>
                        </div>

                        <div class="list-title">
                            <h5>Online presenters:</h5>
                            <p>
                                1. Faculty members: &#8358;25,000 <br>
                                2. Students: &#8358;15,000 <br>
                                3. International: 50USD<br>
                            </p>
                        </div>

                        <div class="list-title">
                            <h5>Participants without paper:</h5>
                            <p>
                                1. Corporate: &#8358;70,000 <br>
                                2. Individual:: &#8358;25,000 <br>
                            </p>
                        </div>

                        <div class="list-title">
                            <h5>Accompany:</h5>
                            <p>
                                1. Individual:: &#8358;20,000 <br>
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
                    <div class="text-left">
                        <p><strong>Special Issue:</strong> Papers presented shall be published in the ISI-indexed journals below after peer review:</p>
<ul>
  <a>Franklin Open: <a href="https://www.sciencedirect.com/journal/franklin-open">https://www.sciencedirect.com/journal/franklin-open</a></a>
  <li>Thai Journal of Mathematics: <a href="https://thaijmath2.in.cmu.ac.th/index.php/thaijmath">https://thaijmath2.in.cmu.ac.th/index.php/thaijmath</a></li>
  <li>Filomat: <a href="https://journal.pmf.ni.ac.rs/filomat/index.php/filomat">https://journal.pmf.ni.ac.rs/filomat/index.php/filomat</a></li>
</ul>

                    </div>
                    <div class="pro-secord-body-contents text-left">
                        <p>Host: Numerical Optimization Research Group, Bayero University Kano, Kano State, Nigeria
                            Co-host: GSU-Mathematics for Innovative Research (GSU-MIR) Group, Gombe State University,
                            Gombe, Gombe State, Nigeria</p>
                        <h3>For more information</h3>
                        <p>
                            <a href="mailto:icondacom.mth@buk.edu.ng">icondacom.mth@buk.edu.ng</a> <br>
                            <a href="mail:maaliyu@gsu.edu.ng">maaliyu@gsu.edu.ng</a><br>
                            <a href="mailto:hmuhd.mth@buk.edu.ng">hmuhd.mth@buk.edu.ng</a> <br>
                        </p>
                        <p>
                            <a href="tel:+2348067864645">+2348067864645</a><br>
                            <a href="tel:+2348036143352">+2348036143352</a><br>
                            <a href="tel:+2348036364455">+2348036364455</a><br>
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
                                    1st International Conference on New Developments in Applied and Computational
                                    Mathematics (ICoNDACoM 2025).
                                </h3>
                                <p>Join us for ICoNDACoM 2025, the first-ever international conference dedicated to
                                    exploring emerging trends in applied and computational mathematics. This event
                                    promises a platform for global experts to present their latest research, exchange
                                    ideas, and foster collaborations.

                                    Scheduled for 30th May to 1st June 2025 in Open Theatre, Old Campus, Bayero
                                    University, Kano, Kano State, Nigeria, ICoNDACoM 2025 will cover diverse
                                    topics, including mathematical modeling, algorithms, and data analysis. Stay tuned
                                    for registration details and further updates!</p>
                                {{-- <p>September 25, 2024</p> --}}
                            </a>
                        </div>
                        <div class="pro-second-right-block">
                            <a href="">
                                <h3>
                                    ICoNDACoM 2025: A New Era in Applied and Computational Mathematics
                                </h3>
                                <p>We are thrilled to announce the inaugural International Conference on New
                                    Developments in Applied and Computational Mathematics (ICoNDACoM 2025), set for
                                    30th May to 1st June 2025. This landmark event will gather experts, researchers, and
                                    professionals from around the world to discuss groundbreaking developments in areas
                                    such as machine learning, numerical simulations, and optimization.

                                    Mark your calendar, and keep an eye out for upcoming announcements on speakers and
                                    registration!</p>
                            </a>
                        </div>
                        <div class="pro-second-right-block">
                            <a href="">
                                <h3>
                                    ICoNDACoM 2025: Pioneering the Future of Applied Mathematics
                                </h3>
                                <p>The 1st International Conference on New Developments in Applied and Computational
                                    Mathematics (ICoNDACoM 2025) is coming soon! This global event will spotlight the
                                    latest advancements in fields like computational techniques, modeling innovations,
                                    and interdisciplinary applications of mathematics.

                                    Happening on 30th May to 1st June 2025, this is your chance to engage with leaders
                                    in the
                                    mathematical sciences. More details on sessions, speakers, and how to attend will
                                    follow shortly. Stay connected!</p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="hosted-by">
                <div>
                    <center>
                        <h2>ICoNDACoM Conference</h2>
                        <p>Conference Hosts: Gombe State University (GSU) & Bayero University Kano (BUK)</p>
                        <br>
                    </center>
                </div>
                <div class="hosted-section">
                    <div class="hosted-section-gsu">
                        <img src="{{ asset('asset/photos/buk-removebg-preview.png') }}" alt="">
                        <h4>Bayero University Kano (BUK)</h4>
                        <a href="https://buk.edu.ng">https://buk.edu.ng</a>
                    </div>
                    <div class="hosted-section-gsu">
                        <img src="{{ asset('asset/photos/aGSU.jpg') }}" alt="">
                        <h4>Gombe State University (GSU)</h4>
                        <a href="https://gsu.edu.ng">https://gsu.edu.ng</a>
                    </div>
                </div>
            </div>

            <div class="faq-container">
                <h2>FAQs - ICoNDACoM 2025</h2>

                <div class="faq-grid">
                    <div>
                        <div class="faq-item">
                            <button class="faq-question">What is ICoNDACoM 2025?</button>
                            <div class="faq-answer">
                                <p>ICoNDACoM 2025 is the 1st International Conference on New Developments in Applied and
                                    Computational Mathematics. It brings together researchers, scholars, and
                                    practitioners to discuss the latest innovations and applications in the field.</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="faq-item">
                            <button class="faq-question">When and where will the conference take place?</button>
                            <div class="faq-answer">
                                <p>The conference will be held from 30th May to 1st June 2025 in Open Theatre, Old
                                    Campus, Bayero
                                    University, Kano, Kano State, Nigeria. Stay tuned for updates on venue and detailed
                                    schedule.</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="faq-item">
                            <button class="faq-question">Who can participate?</button>
                            <div class="faq-answer">
                                <p>ICoNDACoM 2025 is open to academics, professionals, students, and anyone interested
                                    in applied and computational mathematics.</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="faq-item">
                            <button class="faq-question">How can I register for the conference?</button>
                            <div class="faq-answer">
                                <p>You can register online through our website. Visit the Registration section for
                                    detailed instructions and fees. To register, you will need to create an account and
                                    complete the application. After making your payment via the provided bank details,
                                    you should upload the payment receipt on our website through the Payment page.</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="faq-item">
                            <button class="faq-question">What topics will be covered at the conference?</button>
                            <div class="faq-answer">
                                <p>The conference will cover a wide range of topics, including but not limited to:</p>
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
                            </div>
                        </div>

                    </div>
                    <div>
                        <div class="fag-item">
                            <button class="faq-question">How do I get in touch with the organizers?</button>
                            <div class="faq-answer">
                                <p>You can reach the organizing committee through the Contact Us page on our website or
                                    via emails.</p>
                                <p>
                                    <a href="mailto:icondacom.mth@buk.edu.ng">icondacom.mth@buk.edu.ng</a> <br>
                                    <a href="mail:maaliyu@gsu.edu.ng">maaliyu@gsu.edu.ng</a><br>
                                    <a href="mailto:hmuhd.mth@buk.edu.ng">hmuhd.mth@buk.edu.ng</a> <br>
                                </p>
                            </div>
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
                    <img src="{{asset('asset/photos/WhatsApp_Image_2024-10-23_at_8.20.45_PM-removebg-preview.png')}}" alt="">
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
                                <p># in Open Theatre, Old Campus, Bayero University, Kano, Kano State, Nigeria</p>
                                <i class="fa fa-location-dot"></i>
                            </div>
                            <div class="footer-clock justify-space-right">
                                <p>icondacom.mth@buk.edu.ng</p>
                                <i class="fa fa-regular fa-paper-plane"></i>
                            </div>
                            <div class="footer-clock justify-space-right">
                                <p>+234 - 8067864645</p>
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
                        <p>Copyright &copy; All Right Reserved 2024, ICoNDACoM</p>
                        <p>Powered by <a href="https://mrcode-gmb.github.io" style="color: #333;">ABUBAKAR IBRAHIM</a>
                        </p>
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


        document.addEventListener('DOMContentLoaded', function() {
            const faqQuestions = document.querySelectorAll('.faq-question');

            faqQuestions.forEach(question => {
                question.addEventListener('click', function() {
                    const answer = this.nextElementSibling;
                    const isOpen = answer.style.display === 'block';

                    // Close all other answers
                    document.querySelectorAll('.faq-answer').forEach(el => el.style.display =
                        'none');

                    // Toggle the clicked answer
                    answer.style.display = isOpen ? 'none' : 'block';
                });
            });
        });
    </script>
</body>

</html>
