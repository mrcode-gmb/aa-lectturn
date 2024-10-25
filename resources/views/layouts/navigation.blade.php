<div>
    <section id="sidebarandheader">
        <div class="main">
            <div class="header-sidebar">
                <header id="header">
                    <div class="header-flex">
                        <div class="header-left">
                            <h4>ICoNDACoM</h4>
                        </div>
                        <div class="header-right">
                            <h4>ICoNDACoM</h4>
                            <p>ICoNDACoM.com.ng</p>
                        </div>
                    </div>
                </header>

                <div class="header-mobile">
                    <div class="header-with">
                        <div class="mobile-header">
                            <img src="{{asset('asset/photos/WhatsApp_Image_2024-10-23_at_8.20.45_PM-removebg-preview.png')}}" alt="">
                            <p>ICoNDACoM</p>
                        </div>
                        <div class="mobile-menu mobile-margin" id="openmobilebar" onclick="openMobileMenu()">
                            <i class="fa fa-angle-right"></i>
                        </div>
                    </div>
                </div>

                <div class="navbar">
                    <div class="nav-right">
                        <div class="nav-top">
                            <div class="nav-brand">
                                <img src="{{ asset('asset/photos/WhatsApp_Image_2024-10-23_at_8.20.45_PM-removebg-preview.png') }}" alt="Logo" />
                            </div>
                            <div class="nav-open" id="closesidebar" onclick="toggleSidebar(false, event)">
                                <i class="fa fa-angle-left"></i>
                            </div>
                            <div class="nav-open" id="opensidebar" onclick="toggleSidebar(true, event)">
                                <i class="fa fa-angle-right"></i>
                            </div>
                            <div class="mobile-menu" id="closemobilebar" onclick="closeMobileMenu()">
                                <i class="fa fa-angle-left"></i>
                            </div>
                        </div>
                    </div>
                    <div class="navbar-nav">
                        <li>
                            <a href="{{ route('dashboard') }}">
                                <div class="link-hover">
                                    <i class="fa fa-home"></i>
                                    <span>Dashboard</span>
                                </div>
                            </a>
                        </li>
                        <div v-else-if="$page.props.auth.user.role == '2'">
                            @if (Auth::user()->role == 1)
                                <li>
                                    <a href="{{ route('all.showAppliedUsers') }}">
                                        <div class="link-hover">
                                            <i class="fa fa-users"></i>
                                            <span>All Users</span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('apply.showAppliedUsers') }}">
                                        <div class="link-hover">
                                            <i class="fa fa-users"></i>
                                            <span>Applicants</span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('apply.showPaymentHistories') }}">
                                        <div class="link-hover">
                                            <i class="fa fa-users"></i>
                                            <span>Payment Histries</span>
                                        </div>
                                    </a>
                                </li>
                            @else
                                <li>
                                    <a href="/apply">
                                        <div class="link-hover">
                                            <i class="fa fa-user-circle"></i>
                                            <span>Apply</span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{route('userPayment')}}">
                                        <div class="link-hover">
                                            <i class="fa fa-brands fa-paypal"></i>
                                            <span>Payment</span>
                                        </div>
                                    </a>
                                </li>
                            @endif
                            <li>
                                <a href="{{ route('profile.edit') }}">
                                    <div class="link-hover">
                                        <i class="fa fa-user-circle"></i>
                                        <span>Profile Settings</span>
                                    </div>
                                </a>
                            </li>
                        </div>
                        <li>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf

                                <a href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                        this.closest('form').submit();">
                                    <div class="link-hover">
                                        <i class="fa fa-sign-out-alt"></i>
                                        <span>Sign Out</span>

                                    </div>
                                </a>
                            </form>
                        </li>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
