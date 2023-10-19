<div>
    <!-- main-footer -->
    <section class="main-footer">
        <div class="footer-top">
            <div class="pattern-layer" style="background-image: url({{ asset('images/shape/shape-5.png')}}"></div>
            <div class="auto-container">
                <div class="widget-section">
                    <div class="row clearfix">
                        <div class="col-lg-4 col-md-6 col-sm-12 footer-column">
                            <div class="footer-widget logo-widget">
                                <figure class="footer-logo"><a href="index.php"><img
                                            src="{{ asset('images/footer-logo.png') }}" alt=""></a></figure>
                                <div class="text">
                                    <p>Ensemble, nous pouvons contribuer mieux à L’amélioration sanitaire de nos
                                        communautés.</p>
                                </div>
                                <div class="social-inner">
                                    <h3>Suivez-nous:</h3>
                                    <ul class="social-links clearfix">
                                        <li><a href="index.php"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="index.php"><i class="fab fa-google-plus-g"></i></a></li>
                                        <li><a href="index.php"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="index.php"><i class="fab fa-linkedin-in"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-6 col-sm-12 footer-column">
                            <div class="footer-widget links-widget">
                                <div class="widget-title">
                                    <h3>Liens utiles</h3>
                                </div>
                                <div class="widget-content">
                                    <ul class="clearfix">
                                        <li><a href="/">Consernent</a></li>
                                        <li><a href="/admission">Adminssion</a></li>
                                        <li><a href="/filieres/lsf">Filières</a></li>
                                        <li><a href="/publications">Publications</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 footer-column">
                            <div class="footer-widget post-widget">
                                <div class="widget-title">
                                    <h3>Publication récente</h3>
                                </div>
                                <div class="post-inner">
                                    <div class="post">
                                        <figure class="image-box"><a href="blog-details.html"><img
                                            src="{{ asset('storage/' . $lastPub->image) }}"
                                            style="width: 92px; height: 92px; object-fit: cover;"
                                            class="img-fluid d-block" alt=""></a></figure>
                                        <p><i class="fas fa-calendar-alt"></i>{{ $lastPub->created_at->format('d.M.Y') }}</p>
                                        <h5><a href="/publications/{{ $lastPub->slug }}">{{ $lastPub->title }}</a></h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-6 col-sm-12 footer-column">

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom centred">
            <div class="auto-container">
                <div class="copyright">
                    <p>Copyright &copy; 2020 <a href="index.php">Losalamos</a>. All rights reserved.</p>
                </div>
            </div>
        </div>
    </section>
    <!-- main-footer end -->
</div>
