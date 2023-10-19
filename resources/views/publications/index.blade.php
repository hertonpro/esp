    @extends('layout')

    @section('content')
        <!-- news-style-two -->
        <section class="news-style-two">
            <div class="auto-container">
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
                <div class="row clearfix">
                    @foreach ($pubs as $pub)
                        <div class="col-lg-4 col-md-6 col-sm-12 news-block">
                            <div class="news-block-one wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
                                <div class="inner-box">
                                    <figure class="image-box">
                                        <div class="overlay-box-1"></div>
                                        <div class="overlay-box-2"></div>
                                        <img src="{{ asset('storage/' . $pub->image) }}"
                                        
                                        style="width: 373px; height: 253px; object-fit: cover;"
                                        class="img-fluid d-block" alt="">
                                        <a href="/publications/{{$pub->slug}}"><i class="fas fa-link"></i></a>
                                    </figure>
                                    <div class="lower-content">
                                        <div class="upper-box">
                                            <ul class="post-info clearfix">
                                                <li><i class="far fa-calendar-alt"></i>{{ $pub->created_at->format('d.M.Y') }}</li>
                                            </ul>
                                            <h4><a href="/publications/{{$pub->slug}}">{{ $pub->title }}</a>
                                            </h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
        <!-- news-style-two end -->
    @endsection
