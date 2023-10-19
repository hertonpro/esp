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
                        <li><a href="mailto:{{env('MAIL2')}}">{{env('MAIL2')}}</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="header-upper">
            <div class="auto-container">
                <div class="header-upper-box clearfix">
                    <div class="upper-left pull-left">
                        <figure class="logo-box"><a href="/"><img src="{{asset('images/logo-2.png')}}" alt=""></a></figure>
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
        <div class="header-lower">
            <div class="auto-container">
                <div class="outer-box clearfix">
                    <div class="menu-area pull-left">
                        <!--Mobile Navigation Toggler-->
                        <div class="mobile-nav-toggler">
                            <i class="icon-bar"></i>
                            <i class="icon-bar"></i>
                            <i class="icon-bar"></i>
                        </div>
                        <nav class="main-menu navbar-expand-md navbar-light">
                            <div class="collapse navbar-collapse show clearfix" id="navbarSupportedContent">
                                <ul class="navigation clearfix">
                                    <li><a href="/">Concernent</a></li>
                                    <li class="@if (str_contains(Route::current()->uri(),'filieres')) current @endif dropdown"><a href="/filieres/lsf">Filieres</a>
                                        <ul>
                                            <li><a href="/filieres/lsf">Licence en Sage-femme</a></li>
                                            <li><a href="/filieres/lsc">Licence en Santé communautaire</a></li>
                                            <li><a href="/filieres/mgpsr">Master en gestion des programmes sante de la reproduction</a></li>
                                            <li><a href="/filieres/msias">Master en Statistique et informatique appliquée à la santé</a></li>
                                            <li><a href="/filieres/merce">Master en Epidémiologie, recherche clinique et évaluation de service de santé</a></li>
                                            <li><a href="/filieres/mpgps">Master en Politiques, gestion des projets et des systèmes de santé</a></li>
                                            <li><a href="/filieres/meab">Epidemiologi and applied biostatistic </a></li>
                                            <li><a href="/filieres/mcgh">Community and global health </a></li>
                                        </ul>
                                    </li>
                                    <li class="@if (str_contains(Route::current()->uri(),'admission')) current @endif "><a href="/admission">Admission</a></li>
                                    <li class="@if (str_contains(Route::current()->uri(),'impact')) current @endif dropdown"><a href="/impacte">Impacte</a>
                                        {{-- <div class="megamenu">
                                            <div class="row clearfix">
                                                <div class="col-lg-3 column">
                                                    <ul>
                                                        <li>
                                                            <h4>Elements 1</h4>
                                                        </li>
                                                        <li><a href="about-element-1.html">About 01</a></li>
                                                        <li><a href="about-element-2.html">About 02</a></li>
                                                        <li><a href="about-element-3.html">About 03</a></li>
                                                        <li><a href="about-element-4.html">About 04</a></li>
                                                        <li><a href="counter-element-1.html">Fun Fact 01</a></li>
                                                        <li><a href="counter-element-2.html">Fun Fact 02</a></li>
                                                        <li><a href="counter-element-3.html">Fun Fact 03</a></li>
                                                        <li><a href="counter-element-4.html">Fun Fact 04</a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-lg-3 column">
                                                    <ul>
                                                        <li>
                                                            <h4>Elements 2</h4>
                                                        </li>
                                                        <li><a href="service-element-1.html">Service 01</a></li>
                                                        <li><a href="service-element-2.html">Service 02</a></li>
                                                        <li><a href="service-element-3.html">Service 03</a></li>
                                                        <li><a href="service-element-4.html">Service 04</a></li>
                                                        <li><a href="technology-element.html">Technology</a></li>
                                                        <li><a href="skills-element-1.html">Skills 01</a></li>
                                                        <li><a href="skills-element-2.html">Skills 02</a></li>
                                                        <li><a href="appointment-element.html">Appointment Form</a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-lg-3 column">
                                                    <ul>
                                                        <li>
                                                            <h4>Elements 3</h4>
                                                        </li>
                                                        <li><a href="news-element-1.html">News 01</a></li>
                                                        <li><a href="news-element-2.html">News 02</a></li>
                                                        <li><a href="news-element-3.html">News 03</a></li>
                                                        <li><a href="news-element-4.html">News 04</a></li>
                                                        <li><a href="news-element-5.html">News 05</a></li>
                                                        <li><a href="intro-element-1.html">Intro 01</a></li>
                                                        <li><a href="intro-element-2.html">Intro 02</a></li>
                                                        <li><a href="faq-element.html">Faq's Elements</a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-lg-3 column">
                                                    <ul>
                                                        <li>
                                                            <h4>Elements 4</h4>
                                                        </li>
                                                        <li><a href="team-element-1.html">Team 01</a></li>
                                                        <li><a href="team-element-2.html">Team 02</a></li>
                                                        <li><a href="working-element-1.html">Working Process 01</a></li>
                                                        <li><a href="working-element-2.html">Working Process 02</a></li>
                                                        <li><a href="project-element-1.html">Case Studies 01</a></li>
                                                        <li><a href="project-element-2.html">Case Studies 02</a></li>
                                                        <li><a href="project-element-3.html">Case Studies 03</a></li>
                                                        <li><a href="testimonial-element.html">Testimonial</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div> --}}
                                    </li>
                                    <li class="dropdown"><a href="/publications">Publications</a>
                                        <ul>
                                            <li><a href="/publications">Recherche</a></li>
                                            <li><a href="/publications">Rapport</a></li>
                                            <li><a href="/blog-details.html">Publications</a></li>
                                            <li><a href="/blog-details.html">Evénements</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="/contact.html">Contact Us</a></li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>

        <!--sticky Header-->
        <div class="sticky-header">
            <div class="auto-container">
                <div class="outer-box clearfix">
                    <div class="menu-area pull-left">
                        <nav class="main-menu clearfix">
                            <!--Keep This Empty / Menu will come through Javascript-->
                        </nav>
                    </div>
                    {{-- <div class="menu-right-content pull-right clearfix">
                        <div class="search-box-outer">
                            <div class="search-btn">
                                <button type="button" class="search-toggler"><span class="fas fa-search"></span></button>
                            </div>
                        </div>
                        <div class="btn-box"><a href="service-details.html" class="theme-btn style-two">Book Appointment</a></div>
                    </div> --}}
                </div>
            </div>
        </div>
    </header>
    <!-- main-header end -->

    <!-- Mobile Menu  -->
    <div class="mobile-menu">
        <div class="menu-backdrop"></div>
        <div class="close-btn"><i class="fas fa-times"></i></div>

        <nav class="menu-box">
            <div class="nav-logo"><a href="index.php"><img src="{{asset('images/mobile-logo.png')}}" alt="" title=""></a></div>
            <div class="menu-outer"><!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header--></div>
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

    <!-- newsletter-section -->
    <section class="newsletter-section bg-color-3">
        <div class="pattern-layer" style="background-image: url(assets/images/shape/shape-7.png);"></div>
        <div class="auto-container">
            <div class="row clearfix">
                <div class="col-lg-5 col-md-12 col-sm-12 inner-column">
                    <div class="inner-box">
                        <h2>Subscribe Newsletter</h2>
                        <p>Restez informer sur les actualités en vous abonnant</p>
                    </div>
                </div>
                <div class="col-lg-7 col-md-12 col-sm-12 form-column">
                    <form action="index.php" method="post" class="newsletter-form">
                        <div class="form-group">
                            <input type="email" name="email" placeholder="Enter Your Email" required="">
                            <button class="theme-btn style-one" type="submit">Subscribe Now!</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- newsletter-section end -->


    <!-- main-footer -->
    <!-- insert footer livewire component -->
    <livewire:footer/> 
    <!-- main-footer end -->



    <!--Scroll to top-->
    <button class="scroll-top scroll-to-target" data-target="html">
        <span class="fa fa-arrow-up"></span>
    </button>


    @include('layout.js')

</body><!-- End of .page_wrapper -->

</html>