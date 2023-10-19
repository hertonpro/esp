    @extends('layout')

    @section('content')
        <!-- blog-details -->
        <section class="blog-details sidebar-page-container">
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="col-lg-8 col-md-12 col-sm-12 content-side">
                        <div class="blog-details-content">
                            <div class="news-block-three">
                                <div class="inner-box">
                                    <figure class="image-box"><img src="{{ asset('storage/' . $publication->image) }}"
                                            alt=""></figure>
                                    <div class="lower-content">
                                        <ul class="post-info clearfix">
                                            <li><i
                                                    class="fas fa-calendar-alt"></i>{{ $publication->created_at->format('d.M.Y') }}
                                            </li>
                                            <li><i class="fas fa-user"></i><a
                                                    href="blog.html">{{ $publication->author }}</a></li>
                                            <li><i class="fas fa-link"></i><a
                                                    href="{{ $publication->link }}">DOI:{{ $publication->link }}</a></li>
                                        </ul>
                                        <h3>{{ $publication->title }}</h3>
                                        <div class="text">
                                            {{ $publication->resume }}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12 sidebar-side">
                        <div class="sidebar blog-sidebar">
                            <div class="sidebar-widget sidebar-post">
                                <div class="widget-title">
                                    <h3>Récemment</h3>
                                </div>
                                <div class="post-inner">
                                    @foreach ($ders as $der)
                                        <div class="post">
                                            <figure class="image-box"><a href="/publications/{{ $der->slug }}"><img
                                                        src="{{ asset('storage/' . $der->image) }}"
                                                        style="width: 85px; height: 85px; object-fit: cover;"
                                                        class="img-fluid d-block"></a></figure>
                                            <p><a href="/publications/{{ $der->slug }}">{{ $der->title }}</a></p>
                                            <p>{{ $der->created_at->format('d.M.Y') }}</p>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- blog-details end -->
    @endsection
