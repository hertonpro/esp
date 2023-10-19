    @extends('layout-admin')

    @section('content')
        <!-- news-style-two -->
        <section class="news-style-two">
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="col-lg-10 col-md-12 col-sm-12 form-column">
                        <div id="content_block_04">
                            <div class="form-inner">
                                <div class="sec-title left">
                                    @if (session('success'))
                                        <div class="alert alert-success" role="alert">{{ session('success') }}</div>
                                    @endif
                                    @if (session('error'))
                                        <div class=" alert alert-danger" role="alert">{{ session('error') }}</div>
                                    @endif
                                    <h2>Créer une publications</h2>
                                    <span class="separator"></span>
                                </div>
                                <form action="" method="POST" class="appointment-form" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <i class="fas fa-file-alt"></i>
                                        <input type="text" name="title" placeholder="Titre" required="">
                                    </div>
                                    <div class="form-group">
                                        <i class="fas fa-file-alt"></i>
                                        <input type="text" name="link" placeholder="Link" required="">
                                    </div>
                                    <div class="form-group">
                                        <i class="fas fa-user"></i>
                                        <input type="text" name="author" placeholder="Auteur" required="">
                                    </div>
                                    <div class="ml-5">
                                        <div class="form-group">
                                            <input class="form-check-input" type="radio" name="category"
                                                id="flexRadioDefault1" value="1">
                                            <label class="form-check-label" for="flexRadioDefault1">
                                                Publication
                                            </label>
                                        </div>
                                        <div class="form-group">
                                            <input class="form-check-input" type="radio" name="category"
                                                id="flexRadioDefault1" value="2">
                                            <label class="form-check-label" for="flexRadioDefault1">
                                                Rapport
                                            </label>
                                        </div>
                                        <div class="form-group">
                                            <input class="form-check-input" type="radio" name="category"
                                                id="flexRadioDefault1" value="2">
                                            <label class="form-check-label" for="flexRadioDefault1">
                                                Blog
                                            </label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <i class="fas fa--file-alt"></i>
                                        <input class="form-control" type="file" name="image">
                                    </div>
                                    <div class="form-group">
                                        <textarea name="resume" placeholder="Résumer la publication"></textarea>
                                    </div>
                                    <div class="form-group message-btn">
                                        <button type="submit" class="theme-btn style-one">Enregistre</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <h1>listes de publication</h1>
                <div class="row clearfix">
                    <div class="col-lg-4 col-md-6 col-sm-12 news-block">
                        <div class="news-block-one wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <figure class="image-box">
                                    <div class="overlay-box-1"></div>
                                    <div class="overlay-box-2"></div>
                                    <img src="{{ asset('images/news/news-1.jpg') }}" alt="">
                                    <a href="blog-details.html"><i class="fas fa-link"></i></a>
                                </figure>
                                <div class="lower-content">
                                    <div class="upper-box">
                                        <ul class="post-info clearfix">
                                            <li><i class="fas fa-comments"></i><a href="blog-details.html">Comments 47</a>
                                            </li>
                                            <li><i class="far fa-calendar-alt"></i>Jan 13, 2020</li>
                                        </ul>
                                        <h3><a href="blog-details.html">Ways To Tell Youre Suffering To From An Skion</a>
                                        </h3>
                                        <p>We provide complete process piping capabilities for industrial from pulp and
                                            paper.</p>
                                    </div>
                                    <div class="lower-box clearfix">
                                        <div class="link"><a href="blog-details.html">READ MORE</a></div>
                                        <div class="admin"><i class="fas fa-user"></i><a href="blog-details.html">By
                                                Admin</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 news-block">
                        <div class="news-block-one wow fadeInUp" data-wow-delay="300ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <figure class="image-box">
                                    <div class="overlay-box-1"></div>
                                    <div class="overlay-box-2"></div>
                                    <img src="{{ asset('images/news/news-2.jpg') }}" alt="">
                                    <a href="blog-details.html"><i class="fas fa-link"></i></a>
                                </figure>
                                <div class="lower-content">
                                    <div class="upper-box">
                                        <ul class="post-info clearfix">
                                            <li><i class="fas fa-comments"></i><a href="blog-details.html">Comments 42</a>
                                            </li>
                                            <li><i class="far fa-calendar-alt"></i>Jan 14, 2020</li>
                                        </ul>
                                        <h3><a href="blog-details.html">Do You Want To Fast Track your Lab Operations</a>
                                        </h3>
                                        <p>We provide complete process piping capabilities for industrial from pulp and
                                            paper.</p>
                                    </div>
                                    <div class="lower-box clearfix">
                                        <div class="link"><a href="blog-details.html">READ MORE</a></div>
                                        <div class="admin"><i class="fas fa-user"></i><a href="blog-details.html">By
                                                Admin</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 news-block">
                        <div class="news-block-one wow fadeInUp" data-wow-delay="600ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <figure class="image-box">
                                    <div class="overlay-box-1"></div>
                                    <div class="overlay-box-2"></div>
                                    <img src="{{ asset('images/news/news-3.jpg') }}" alt="">
                                    <a href="blog-details.html"><i class="fas fa-link"></i></a>
                                </figure>
                                <div class="lower-content">
                                    <div class="upper-box">
                                        <ul class="post-info clearfix">
                                            <li><i class="fas fa-comments"></i><a href="blog-details.html">Comments 40</a>
                                            </li>
                                            <li><i class="far fa-calendar-alt"></i>Jan 15, 2020</li>
                                        </ul>
                                        <h3><a href="blog-details.html">Learn: Blood bank operations and management</a>
                                        </h3>
                                        <p>We provide complete process piping capabilities for industrial from pulp and
                                            paper.</p>
                                    </div>
                                    <div class="lower-box clearfix">
                                        <div class="link"><a href="blog-details.html">READ MORE</a></div>
                                        <div class="admin"><i class="fas fa-user"></i><a href="blog-details.html">By
                                                Admin</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- news-style-two end -->
    @endsection
