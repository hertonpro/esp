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
    <header class="main-header style-two">
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
                        <li><a href="mailto:support@info.com">{{ env('MAIL2') }}</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="header-upper">
            <div class="auto-container">
                <div class="header-upper-box clearfix">
                    <div class="upper-left pull-left">
                        <figure class="logo-box"><a href="index.php"><img src="{{ asset('images/logo-2.png') }}" alt=""></a>
                        </figure>
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
                                    <li class="current"><a href="/">Concernent</a>
                                    </li>
                                    <li class="dropdown"><a href="/filieres/lsf">Filieres</a>
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
                                    <li><a href="admission">Admission</a></li>
                                    <li class="dropdown"><a href="index.php">Impacte</a>
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
                                                            <h4>Recherches</h4>
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
                                    <li class="dropdown"><a href="publications">Publications</a>
                                        <ul>
                                            <li><a href="blog.html">Latest News</a></li>
                                            <li><a href="blog-details.html">News Details</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="contact.html">Contact Us</a></li>
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
                    <div class="logo-box pull-left">
                        <figure class="logo"><a href="index.php"><img src="{{ asset('images/small-logo.png') }}" alt=""></a>
                        </figure>
                    </div>
                    <div class="menu-area pull-right">
                        <nav class="main-menu clearfix">
                            <!--Keep This Empty / Menu will come through Javascript-->
                        </nav>
                        <div class="search-box-outer pull-left">
                            <div class="search-btn">
                                <button type="button" class="search-toggler"><span
                                        class="fas fa-search"></span></button>
                            </div>
                        </div>
                    </div>
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
            <div class="nav-logo"><a href="index.php"><img src="{{ asset('images/mobile-logo.png') }}" alt="" title=""></a>
            </div>
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


    <!-- banner-style-two -->
    <section class="banner-style-two">
        <div class="banner-carousel owl-theme owl-carousel owl-nav-none">
            <div class="slide-item">
                <div class="image-layer" style="background-image:url({{ asset('images/banner/banner-1.jpg') }}"></div>
                <div class="auto-container">
                    <div class="row clearfix">
                        <div class="col-xl-6 col-lg-12 col-md-12 offset-xl-6 content-column">
                            <div class="content-box">
                                <h2>Fièvre typhoïde</h2>
                                <h1>Méthodes de prévention </h1>
                                <p>Qualified Staff With Expertise in Services We Offer for more Resonable cost with
                                    love, Just explore about More!</p>
                                <div class="btn-box">
                                    <a href="index.php" class="theme-btn style-two">En savoir plus</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slide-item">
                <div class="image-layer" style="background-image:url({{ asset('images/banner/banner-5.jpg') }}"></div>
                <div class="auto-container">
                    <div class="row clearfix">
                        <div class="col-xl-6 col-lg-12 col-md-12 offset-xl-6 content-column">
                            <div class="content-box">
                                <h2>Paludisme</h2>
                                <h1>Statistique detaillés</h1>
                                <p>Qualified Staff With Expertise in Services We Offer for more Resonable cost with
                                    love, Just explore about More!</p>
                                <div class="btn-box">
                                    <a href="index.php" class="theme-btn style-two">En savoir plus</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slide-item">
                <div class="image-layer" style="background-image:url({{ asset('images/banner/banner-6.jpg') }}"></div>
                <div class="auto-container">
                    <div class="row clearfix">
                        <div class="col-xl-6 col-lg-12 col-md-12 offset-xl-6 content-column">
                            <div class="content-box">
                                <h2>Beter nursing</h2>
                                <h1>Mise à niveau</h1>
                                <p>Qualified Staff With Expertise in Services We Offer for more Resonable cost with
                                    love, Just explore about More!</p>
                                <div class="btn-box">
                                    <a href="index.php" class="theme-btn style-two">En savoir plus</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slide-item">
                <div class="image-layer" style="background-image:url({{ asset('images/banner/banner-4.jpg') }}"></div>
                <div class="auto-container">
                    <div class="row clearfix">
                        <div class="col-xl-6 col-lg-12 col-md-12 offset-xl-6 content-column">
                            <div class="content-box">
                                <h2>le lait de vache</h2>
                                <h1>impact sur la santé humaine</h1>
                                <p>Qualified Staff With Expertise in Services We Offer for more Resonable cost with
                                    love, Just explore about More!</p>
                                <div class="btn-box">
                                    <a href="index.php" class="theme-btn style-two">En savoir plus</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- banner-style-two end -->


    <!-- intro-style-two -->
    <section class="intro-style-two centred">
        <div class="auto-container">
            <div class="inner-container clearfix">
                <div class="single-item">
                    <div class="inner-box">
                        <div class="icon-box"><i class=" flaticon-medical"></i></div>
                        <h3><a href="/filieres/lsf">Sage-femme</a></h3>
                        <p>Évaluer une situation clinique et établir un diagnostic dans le domaine des soins
                            obstétriques et gynécologiques.</p>
                    </div>
                </div>
                <div class="single-item">
                    <div class="inner-box">
                        <div class="icon-box"><i class="flaticon-user-experience"></i></div>
                        <h3><a href="/filieres/lsc">Santé Communotaire</a></h3>
                        <p>Mobilisation des notions de base des disciplines scientifiques fondamentales pour le métier
                            de Manager en Santé communautaire.</p>
                    </div>
                </div>
                <div class="single-item">
                    <div class="inner-box">
                        <div class="icon-box"><i class="flaticon-planet-earth"></i></div>
                        <h3><a href="/filieres/mcgh">Global and one health</a></h3>
                        <p>Une approche intégrée et fédératrice qui vise à équilibrer et optimiser durablement la santé
                            des personnes, des animaux et des écosystèmes.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- intro-style-two end -->

    <!-- service-style-two -->
    <section class="service-style-two bg-color-1 centred">
        <div class="pattern-layer" style="background-image: url({{ asset('images/shape/shape-2.png')}}"></div>
        <div class="auto-container">
            <div class="sec-title">
                <p>Adminssion</p>
                <h2>Vous pouvez vous inscrire ici !</h2>
                <span class="separator"></span>
            </div>
            <div class="more-text">
                <div class="inner-box clearfix">
                    <div class="single-item mb-5">
                        <div class="box">
                            <div class="icon-box"><i class="flaticon-from-1"></i></div>
                            <div class="btn-box"><a href="/form" class="theme-btn style-one">Remplissez le formulaire d'inscription </a></div>
                        </div>
                    </div>
                    <div class="single-item">
                        <div class="box">
                            <div class="icon-box"><i class="flaticon-phone"></i></div>
                            <div class="btn-box"><a href="/admission" class="theme-btn style-one">Contacter les services académiques</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- service-style-two end -->

    <!-- about-style-two -->
    <section class="about-style-two">
        <div class="pattern-layer" style="background-image: url({{ asset('images/shape/shape-6.png')}}"></div>
        <div class="auto-container">
            <div class="row clearfix">
                <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                    <div id="content_block_05">
                        <div class="content-box">
                            <div class="sec-title left">
                                <p>Nous</p>
                                <h2>L'école de santé publique de UEA</h2>
                                <span class="separator"></span>
                            </div>
                            <div class="text">
                                <p>L’École de Santé Publique (ESP) est une école de l’Université Évangélique d’Afrique
                                    (UEA) basée à Bukavu.
                                    Elle propose trois filières : Sage-femme, Santé communautaire et Global and One
                                    Health.
                                    Ce dernier programme est bilingue.
                                </p>
                                <p>L’ESP a pour objectif de former une nouvelle classe d’élite pour faire face aux défis
                                    de la santé mondiale.</p>
                            </div>
                            <div class="inner-box clearfix">
                                <div class="single-item">
                                    <div class="box">
                                        <div class="icon-box"><i class="flaticon-laboratory-1"></i></div>
                                        <h4>Nos études et recherches</h4>
                                    </div>
                                </div>
                                <div class="single-item">
                                    <div class="box">
                                        <div class="icon-box"><i class="flaticon-biology"></i></div>
                                        <h4>Centre de recherche</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="btn-box"><a href="index.php" class="theme-btn style-one">Encore plus </a></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 video-column">
                    <div id="video_block_02">
                        <div class="video-inner">
                            <figure class="image-box"><img src="{{ asset('images/resource/about-2.jpg')}}" alt=""></figure>
                            <div class="icon-holder">
                                <div class="icon-box">
                                    <a href="{{asset('videos/Esp(1).webm')}}" class="lightbox-image" data-caption=""><i
                                            class="fas fa-play"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- about-style-two end -->


    <!-- service-style-two -->
    <section class="service-style-two bg-color-1 centred">
        <div class="pattern-layer" style="background-image: url({{ asset('images/shape/shape-2.png')}}"></div>
        <div class="auto-container">
            <div class="sec-title">
                <p>Ce que nous faisons maintenant</p>
                <h2>Explorer les principaux services</h2>
                <span class="separator"></span>
            </div>
            <div class="row clearfix">
                <div class="col-lg-4 col-md-6 col-sm-12 service-block">
                    <div class="service-block-two wow fadeInUp" data-wow-delay="300ms" data-wow-duration="1500ms">
                        <div class="inner-box">
                            <div class="icon-box"><i class=" flaticon-report"></i></div>
                            <h4><a href="service-details.html">Formations </a></h4>
                            <p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed do eiusmod tempor incididunt.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 service-block">
                    <div class="service-block-two wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
                        <div class="inner-box">
                            <div class="icon-box"><i class="flaticon-test-tube"></i></div>
                            <h4><a href="service-details.html">Recherche clinique</a></h4>
                            <p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed do eiusmod tempor incididunt.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 service-block">
                    <div class="service-block-two wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
                        <div class="inner-box">
                            <div class="icon-box"><i class="flaticon-research"></i></div>
                            <h4><a href="service-details.html">Recherche et statistique</a></h4>
                            <p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed do eiusmod tempor incididunt.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 service-block">
                    <div class="service-block-two wow fadeInUp" data-wow-delay="300ms" data-wow-duration="1500ms">
                        <div class="inner-box">
                            <div class="icon-box"><i class="flaticon-allergy"></i></div>
                            <h4><a href="service-details.html">Sensibilisation</a></h4>
                            <p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed do eiusmod tempor incididunt.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- service-style-two end -->


    <!-- funfact-section -->
    <section class="funfact-section centred">
        <div class="pattern-layer" style="background-image: url({{ asset('images/shape/shape-7.png')}}"></div>
        <div class="auto-container">
            <div class="row clearfix">
                <div class="col-lg-3 col-md-6 col-sm-12 counter-column">
                    <div class="counter-block-two wow slideInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
                        <div class="count-outer count-box">
                            <span class="count-text" data-speed="1500" data-stop="1000">0</span>
                        </div>
                        <p>Etudiants</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 counter-column">
                    <div class="counter-block-two wow slideInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
                        <div class="count-outer count-box">
                            <span class="count-text" data-speed="1500" data-stop="302">0</span>
                        </div>
                        <p>Publications</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 counter-column">
                    <div class="counter-block-two wow slideInUp" data-wow-delay="400ms" data-wow-duration="1500ms">
                        <div class="count-outer count-box">
                            <span class="count-text" data-speed="1500" data-stop="50">0</span>
                        </div>
                        <p>Projets de recherches</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 counter-column">
                    <div class="counter-block-two wow slideInUp" data-wow-delay="600ms" data-wow-duration="1500ms">
                        <div class="count-outer count-box">
                            <span class="count-text" data-speed="1500" data-stop="640">0</span>
                        </div>
                        <p>Diplôme</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- funfact-section end -->


    <!-- faq-section -->
    <section class="faq-section">
        <div class="pattern-layer" style="background-image: url({{ asset('images/shape/shape-8.png')}}"></div>
        <div class="auto-container">
            <div class="row clearfix">
                <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                    <figure class="image-box wow slideInLeft" data-wow-delay="00ms" data-wow-duration="1500ms"><a
                            href="{{ asset('images/resource/faq-1.png') }}" class="lightbox-image" data-fancybox="gallery"><img
                                src="{{ asset('images/resource/faq-1.jpg')}}" alt=""></a></figure>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                    <div id="content_block_06">
                        <div class="content-box">
                            <div class="sec-title left">
                                <p>Pourquoi choisir</p>
                                <h2>l'école de santé publique de UEA </h2>
                                <span class="separator"></span>
                            </div>
                            <ul class="accordion-box">
                                <li class="accordion block">
                                    <div class="acc-btn">
                                        <div class="icon-outer"><i class="fas fa-plus"></i></div>
                                        <h6>Une corê professorale qualifiée</h6>
                                    </div>
                                    <div class="acc-content">
                                        <div class="content">
                                            <p>That's why a fasting blood test usually requires that you avoid all food
                                                and drinks except water for 12 hours before your screening. It's also
                                                advised that you avoid alcohol for 24 hours before your fasting blood
                                                test, as well as any strenuous exercise.</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="accordion block active-block">
                                    <div class="acc-btn active">
                                        <div class="icon-outer"><i class="fas fa-plus"></i></div>
                                        <h6>Environnement propice au développement scientifique</h6>
                                    </div>
                                    <div class="acc-content current">
                                        <div class="content">
                                            <p>That's why a fasting blood test usually requires that you avoid all food
                                                and drinks except water for 12 hours before your screening. It's also
                                                advised that you avoid alcohol for 24 hours before your fasting blood
                                                test, as well as any strenuous exercise.</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="accordion block">
                                    <div class="acc-btn">
                                        <div class="icon-outer"><i class="fas fa-plus"></i></div>
                                        <h6>Collaboration avec des universités de grand renommé</h6>
                                    </div>
                                    <div class="acc-content">
                                        <div class="content">
                                            <p>That's why a fasting blood test usually requires that you avoid all food
                                                and drinks except water for 12 hours before your screening. It's also
                                                advised that you avoid alcohol for 24 hours before your fasting blood
                                                test, as well as any strenuous exercise.</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="accordion block">
                                    <div class="acc-btn">
                                        <div class="icon-outer"><i class="fas fa-plus"></i></div>
                                        <h6>Options diplômantes en licence et mastère </h6>
                                    </div>
                                    <div class="acc-content">
                                        <div class="content">
                                            <p>That's why a fasting blood test usually requires that you avoid all food
                                                and drinks except water for 12 hours before your screening. It's also
                                                advised that you avoid alcohol for 24 hours before your fasting blood
                                                test, as well as any strenuous exercise.</p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- faq-section end -->


    <!-- testimonial-style-two -->
    <section class="testimonial-style-two bg-color-1">
        <div class="pattern-layer" style="background-image: url({{ asset('images/shape/shape-9.png')}}"></div>
        <div class="auto-container">
            <div class="sec-title">
                <p>Témoignage</p>
                <h2>Ce que disent nos étudiants</h2>
                <span class="separator"></span>
            </div>
            {{-- <div class="inner-content">
                <div class="testimonial-carousel-2 owl-carousel owl-theme owl-dots-none owl-nav-none">
                    <div class="testimonial-content">
                        <div class="inner-box">
                            <div class="upper-box">
                                <div class="icon-box"><i class="flaticon-quote-left"></i></div>
                                <div class="text">
                                    <p>With my skill set, knowledge and work ethics I could be a great addition to the
                                        team to deliver the best result.</p>
                                </div>
                            </div>
                            <div class="author-info">
                                <h4>Maria Molas</h4>
                                <span class="designation">Marketing Manager</span>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-content">
                        <div class="inner-box">
                            <div class="upper-box">
                                <div class="icon-box"><i class="flaticon-quote-left"></i></div>
                                <div class="text">
                                    <p>With my skill set, knowledge and work ethics I could be a great addition to the
                                        team to deliver the best result.</p>
                                </div>
                            </div>
                            <div class="author-info">
                                <h4>Victoria Porter</h4>
                                <span class="designation">Directeur</span>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-content">
                        <div class="inner-box">
                            <div class="upper-box">
                                <div class="icon-box"><i class="flaticon-quote-left"></i></div>
                                <div class="text">
                                    <p>With my skill set, knowledge and work ethics I could be a great addition to the
                                        team to deliver the best result.</p>
                                </div>
                            </div>
                            <div class="author-info">
                                <h4>Milton Glaser</h4>
                                <span class="designation">Assistant Manager</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}
        </div>
    </section>
    <!-- testimonial-style-two end -->


    <!-- news-style-two -->
    <section class="news-style-two">
        <div class="auto-container">
            <div class="sec-title">
                <p>PUBLICATION ET BLOGUE</p>
                <h2>Nos dernières publications</h2>
                <span class="separator"></span>
            </div>
            <div class="row clearfix">
                <div class="col-lg-6 col-md-12 col-sm-12 news-block">
                    <div class="news-block-one">
                        <div class="inner-box">
                            <figure class="image-box">
                                <div class="overlay-box-1"></div>
                                <div class="overlay-box-2"></div>
                                <img src="{{ asset('storage/' . $lastPub->image) }}" alt="">
                                <a href="/publications/{{$lastPub->slug}}"><i class="fas fa-link"></i></a>
                            </figure>
                            <div class="lower-content">
                                <div class="upper-box">
                                    <ul class="post-info clearfix">
                                        <li><i
                                                class="far fa-calendar-alt"></i>{{ $lastPub->created_at->format('d.M.Y') }}
                                        </li>
                                    </ul>
                                    <h3><a href="/publications/{{$lastPub->slug}}">{{ $lastPub->title }}</a>
                                    </h3>
                                </div>
                                <div class="lower-box clearfix">
                                    <div class="link"><a href="{{ $lastPub->link }}">READ MORE</a></div>
                                    <div class="admin"><i class="fas fa-user"></i><a
                                            href="blog-details.html">{{ $lastPub->author }}</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 news-block">
                    @foreach ($vders as $vder)
                        <div class="news-block-two">
                            <div class="inner-box">
                                <figure class="image-box">
                                    <img src="{{ asset('storage/' . $vder->image) }}"
                                        style="width: 240px; height: 240px; object-fit: cover;"
                                        class="img-fluid d-block">
                                </figure>
                                <div class="inner">
                                    <ul class="post-info clearfix">
                                        <li><i class="far fa-calendar-alt"></i>{{ $vder->created_at->format('d.M.Y') }}
                                        </li>
                                    </ul>
                                    <h4><a href="/publications/{{$vder->slug}}">{{ $vder->title }}</a></h4>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <!-- news-style-two end -->
    
    <!-- newsletter-section -->
    <section class="newsletter-section">
        <div class="auto-container">
            <div class="row clearfix">
                <div class="col-lg-5 col-md-6 col-sm-12 inner-column">
                    <div class="inner-box">
                        <h2>Abonnez-vous à la newsletter</h2>
                        <p>Restez en contact avec nous pour recevoir les dernières nouvelles et opportunités</p>
                    </div>
                </div>
                <div class="col-lg-7 col-md-6 col-sm-12 form-column">
                    <form action="index.php" method="post" class="newsletter-form">
                        <div class="form-group">
                            <input type="email" name="email" placeholder="Entrez votre e-mail" required="">
                            <button class="theme-btn style-two" type="submit">Abonnez-vous!</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- newsletter-section end -->
    <!-- insert footer livewire component -->
    <livewire:footer/> 

@include('layout.js')

    <!--Scroll to top-->
    <button class="scroll-top scroll-to-target" data-target="html">
        <span class="fa fa-arrow-up"></span>
    </button>


   

</body><!-- End of .page_wrapper -->

</html>