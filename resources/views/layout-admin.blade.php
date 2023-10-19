<!DOCTYPE html>
<html lang="en">

@include('layout.header')

<!-- page wrapper -->

<body class="boxed_wrapper">

    <!-- preloader -->
    <div class="preloader">
        <div class="boxes">
            <div class="box">
                <div></div>
                <div></div>
                <div></div>
                <div></div>
            </div>
            <div class="box">
                <div></div>
                <div></div>
                <div></div>
                <div></div>
            </div>
            <div class="box">
                <div></div>
                <div></div>
                <div></div>
                <div></div>
            </div>
            <div class="box">
                <div></div>
                <div></div>
                <div></div>
                <div></div>
            </div>
        </div>
    </div>
    <!-- preloader end -->





    <!-- main header -->
    <header class="main-header style-two style-three">
        <div class="header-top">
            <div class="auto-container">
                <div class="top-inner clearfix">
                    <div class="top-left pull-left clearfix">
                        <ul class="social-links clearfix">
                            <li><a href="index.php"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="index.php"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="index.php"><i class="fab fa-google-plus-g"></i></a></li>
                        </ul>
                        <div class="text">
                            <p>Bienvenue à l'école de santé publique de UEA</p>
                        </div>
                    </div>
                    <ul class="top-right pull-right">
                        <li><a href="mailto:{{ env('MAIL2') }}">{{ env('MAIL2') }}</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="header-upper">
            <div class="auto-container">
                <div class="header-upper-box clearfix">
                    <div class="upper-left pull-left">
                        <figure class="logo-box"><a href="/"><img src="{{ asset('images/logo-2.png') }}"
                                    alt=""></a></figure>
                    </div>
                    <div class="upper-right float-right clearfix">
                        <div class="header-info">
                            <ul>
                                <li>
                                    <div class="icon-box"><i class="flaticon-call"></i></div>
                                    <div class="title">
                                        <h5>Téléphone</h5>
                                        <span><a href="tel:{{ env('TEL1') }}">{{ env('TEL1') }}</a></span>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon-box"><i class="flaticon-circular-clock"></i></div>
                                    <div class="title">
                                        <h5>Horaires d'ouvertures</h5>
                                        <span>8h:00 - 17h:00 </span>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon-box"><i class="flaticon-planet-earth"></i></div>
                                    <div class="title">
                                        <h5>Address</h5>
                                        <span>{{ env('ADRESS') }}</span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Page Title-->
        <section class="page-title">
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="col-lg-8 col-md-12 col-sm-12 content-column">
                        <div class="content-box clearfix">
                            <div class="title pull-left">
                                <h1>Publications</h1>
                            </div>
                            <ul class="bread-crumb pull-right clearfix">
                                <li><a href="index.html">Admin</a></li>
                                <li>Créer</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--End Page Title-->


        <!-- Mobile Menu  -->
        <div class="mobile-menu">
            <div class="menu-backdrop"></div>
            <div class="close-btn"><i class="fas fa-times"></i></div>

            <nav class="menu-box">
                <div class="nav-logo"><a href="index.php"><img src="{{ asset('images/mobile-logo.png') }}"
                            alt="" title=""></a></div>
                <div class="menu-outer"><!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
                </div>
                <div class="contact-info">
                    <h4>Contact Info</h4>
                    <ul>
                        <li>Chicago 12, Melborne City, USA</li>
                        <li><a href="tel:+8801682648101">+88 01682648101</a></li>
                        <li><a href="mailto:info@example.com">info@example.com</a></li>
                    </ul>
                </div>
                <div class="social-links">
                    <ul class="clearfix">
                        <li><a href="index.php"><span class="fab fa-twitter"></span></a></li>
                        <li><a href="index.php"><span class="fab fa-facebook-square"></span></a></li>
                        <li><a href="index.php"><span class="fab fa-pinterest-p"></span></a></li>
                        <li><a href="index.php"><span class="fab fa-instagram"></span></a></li>
                        <li><a href="index.php"><span class="fab fa-youtube"></span></a></li>
                    </ul>
                </div>
            </nav>
        </div><!-- End Mobile Menu -->


        @yield('content')


        <!--Scroll to top-->
        <button class="scroll-top scroll-to-target" data-target="html">
            <span class="fa fa-arrow-up"></span>
        </button>


        @include('layout.js')

</body><!-- End of .page_wrapper -->

</html>
