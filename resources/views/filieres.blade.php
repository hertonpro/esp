    @extends('layout')

    @section('content')
        <!--Page Title-->
        <section class="page-title"
            style="
        

        @if (str_contains(url()->current(), 'lsf')) background-image: url({{ asset('images/background/sf.jpg') }}
        @elseif (str_contains(url()->current(), 'rsf')) background-image: url({{ asset('images/background/sf.jpg') }}
        @elseif (str_contains(url()->current(), 'mgpsr')) background-image: url({{ asset('images/background/sf.jpg') }}
        @else background-image: url({{ asset('images/background/sf2.jpg') }} @endif">
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="col-lg-8 col-md-12 col-sm-12 content-column">
                        <div class="content-box clearfix">
                            <div class="title pull-left">
                                @if (str_contains(url()->current(), 'lsf'))
                                    <h1>Sage-femme</h1>
                                @elseif (str_contains(url()->current(), 'rsf'))
                                    <h1>Sage-femme</h1>
                                @elseif (str_contains(url()->current(), 'mgpsr'))
                                    <h1>Sage-femme</h1>
                                @else
                                    <h1>Santé communautaire</h1>
                                @endif
                            </div>
                            <ul class="bread-crumb pull-right clearfix">
                                <li><a href="index.php">Niveau</a></li>
                                @if (str_contains(url()->current(), 'lsf'))
                                <li>Licience</li>
                                @elseif (str_contains(url()->current(), 'rsf'))
                                <li>Licience</li>
                                @elseif (str_contains(url()->current(), 'lsc'))
                                <li>Licience</li>
                                @else
                                <li>Master</li>
                                @endif
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--End Page Title-->


        <!-- service-details -->
        <section class="service-details">
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="col-lg-3 col-md-12 col-sm-12 sidebar-side">
                        <div class="service-sidebar">
                            <ul class="categories-list clearfix">
                                <div>BAC</div>
                                <li><a href="lsf" class="@if (str_contains(url()->current(), 'lsf')) active @endif">Sage-femme
                                    </a></li>
                                <li><a href="rsf" class="@if (str_contains(url()->current(), 'rsf')) active @endif"> Reconversion
                                        sage-femme</a></li>
                                <li><a href="lsc" class="@if (str_contains(url()->current(), 'lsc')) active @endif">Santé
                                        communautaire</a></li>
                                <div>MASTER</div>
                                <li><a href="mgpsr" class="@if (str_contains(url()->current(), 'mgpsr')) active @endif">Gestion des
                                        programmes sante de la reproduction</a></li>
                                <li><a href="msias" class="@if (str_contains(url()->current(), 'msias')) active @endif">Statistique
                                        et informatique appliquée à la santé</a></li>
                                <li><a href="merce"
                                        class="@if (str_contains(url()->current(), 'merce')) active @endif">Epidémiologie, recherche
                                        clinique et évaluation de
                                        service de santé</a></li>
                                <li><a href="mpgps" class="@if (str_contains(url()->current(), 'mpgps')) active @endif">Politiques,
                                        gestion des projets et des systèmes de
                                        santé</a></li>
                                <div>DIU</div>
                                <li><a href="meab" class="@if (str_contains(url()->current(), 'meab')) active @endif">Epidemiologi
                                        and applied biostatistic </a></li>
                                <li><a href="mcgh" class="@if (str_contains(url()->current(), 'mcgh')) active @endif">Community and
                                        global health </a></li>
                            </ul>
                            <div class="need-help">
                                <h3>Besoin de renseignement</h3>
                                <p>N'hésitez pas à nous contacter.<br> Nous reviendrons vers vous.<br> Ou appelez-nous
                                    maintenant</p>
                                <ul class="contact-list clearfix">
                                    <li><i class="fas fa-tty"></i><a href="tel:{{ env('TEL1') }}">{{ env('TEL1') }}</a>
                                    </li>
                                    <li><i class="far fa-envelope"></i><a
                                            href="mailto:{{ env('MAIL1') }}">{{ env('MAIL1') }}</a></li>
                                </ul>
                            </div>
                            <div class="download-file">
                                <ul class="file-list clearfix">
                                    <li><a href="service-details.html">Download DOC<i class="far fa-file-word"></i></a></li>
                                    <li><a href="service-details.html">Download PDF<i class="far fa-file-pdf"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    @yield('filiere')
                </div>
            </div>
        </section>
        <!-- service-details end -->
    @endsection
