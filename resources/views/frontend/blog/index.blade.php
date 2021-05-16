@extends('layouts.frontend.master')

@section('content')

    <!--Page Title-->
    <section class="page-title style-two text-center">
        <div class="pattern-layer" style="background-image: url({{ asset('assets/frontend/images/shape/shape-62.png') }});"></div>
        <div class="auto-container">
            <div class="content-box">
                <h1>{{ __('frontend.blogs') }}</h1>
                <ul class="bread-crumb clearfix">
                    <li><a  href="{{ url('/') }}">{{ __('frontend.home') }}</a></li>
                    <li><span>\\</span></li>
                    <li>{{ __('frontend.blogs') }}</li>
                </ul>
            </div>
        </div>
    </section>
    <!--End Page Title-->

    <!-- blog-classic-grid -->
    @if (count($blogs) > 0)
        <section class="blog-classic-grid">
            <div class="auto-container">
                <div class="row clearfix">
                   @foreach ($blogs as $blog)
                        <div class="col-lg-4 col-md-6 col-sm-12 news-block">
                            <div class="news-block-one wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
                                <div class="inner-box">
                                    @if (!empty($blog->blog_image))
                                        <figure class="image-box">
                                            <img src="{{ asset('uploads/img/blogs/'.$blog->blog_image) }}" alt="blog image">
                                            <a href="{{ asset('uploads/img/blogs/'.$blog->blog_image) }}" class="lightbox-image" data-fancybox="gallery"><i class="flaticon-zoom"></i></a>
                                        </figure>
                                    @else
                                        <figure class="image-box">
                                            <img src="{{ asset('uploads/img/dummy/no-image.jpg') }}" class="img-full" alt="blog image">
                                            <a href="{{ asset('uploads/img/dummy/no-image.jpg') }}" class="lightbox-image" data-fancybox="gallery"><i class="flaticon-zoom"></i></a>
                                        </figure>
                                    @endif
                                    <div class="lower-content">
                                        <div class="file-box"><i class="far fa-folder-open"></i>
                                            <p>{{ $blog->category->category_name }}</p>
                                        </div>
                                        <div class="title-box">
                                            <div class="post-date">
                                                <p>{{ Carbon\Carbon::parse($blog->created_at)->isoFormat('DD') }}</p><span>{{ Carbon\Carbon::parse($blog->created_at)->isoFormat('MMM') }}</span></div>
                                            <h4><a href="{{ url('blog/'.$blog->slug) }}">{{ $blog->title }}</a></h4>
                                        </div>
                                        <div class="link"><a href="{{ url('blog/'.$blog->slug) }}" class="btn-style-four">{{ __('frontend.read_more') }}<span>+</span></a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                       @endforeach
                </div>
            </div>
        </section>
        @else
        <section class="blog-classic-grid">
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="col-lg-4 col-md-6 col-sm-12 news-block">
                        <div class="news-block-one wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <figure class="image-box">
                                    <img src="{{ asset('uploads/img/dummy/775x575.jpg') }}" alt="">
                                    <a href="{{ asset('uploads/img/dummy/775x575.jpg') }}" class="lightbox-image" data-fancybox="gallery"><i class="flaticon-zoom"></i></a>
                                </figure>
                                <div class="lower-content">
                                    <div class="file-box"><i class="far fa-folder-open"></i>
                                        <p>Data Engineering</p>
                                    </div>
                                    <div class="title-box">
                                        <div class="post-date">
                                            <p>02</p><span>Jan</span></div>
                                        <h4><a href="#">Naxly Named as a Global Leader in Big Data</a></h4>
                                    </div>
                                    <div class="link"><a href="#" class="btn-style-four">Read More<span>+</span></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 news-block">
                        <div class="news-block-one wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <figure class="image-box">
                                    <img src="{{ asset('uploads/img/dummy/775x575.jpg') }}" alt="">
                                    <a href="{{ asset('uploads/img/dummy/775x575.jpg') }}" class="lightbox-image" data-fancybox="gallery"><i class="flaticon-zoom"></i></a>
                                </figure>
                                <div class="lower-content">
                                    <div class="file-box"><i class="far fa-folder-open"></i>
                                        <p>ML Consulting</p>
                                    </div>
                                    <div class="title-box">
                                        <div class="post-date">
                                            <p>01</p><span>Jan</span></div>
                                        <h4><a href="#">The Current State of Artificial Intelligence Infographic.</a></h4>
                                    </div>
                                    <div class="link"><a href="#" class="btn-style-four">Read More<span>+</span></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 news-block">
                        <div class="news-block-one wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <figure class="image-box">
                                    <img src="{{ asset('uploads/img/dummy/775x575.jpg') }}" alt="">
                                    <a href="{{ asset('uploads/img/dummy/775x575.jpg') }}" class="lightbox-image" data-fancybox="gallery"><i class="flaticon-zoom"></i></a>
                                </figure>
                                <div class="lower-content">
                                    <div class="file-box"><i class="far fa-folder-open"></i>
                                        <p>Data Strategy</p>
                                    </div>
                                    <div class="title-box">
                                        <div class="post-date">
                                            <p>31</p><span>Dec</span></div>
                                        <h4><a href="#">Naxly as the Winners in Global Agency Awards</a></h4>
                                    </div>
                                    <div class="link"><a href="#" class="btn-style-four">Read More<span>+</span></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 news-block">
                        <div class="news-block-one wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <figure class="image-box">
                                    <img src="{{ asset('uploads/img/dummy/775x575.jpg') }}" alt="">
                                    <a href="{{ asset('uploads/img/dummy/775x575.jpg') }}" class="lightbox-image" data-fancybox="gallery"><i class="flaticon-zoom"></i></a>
                                </figure>
                                <div class="lower-content">
                                    <div class="file-box"><i class="far fa-folder-open"></i>
                                        <p>Data Strategy</p>
                                    </div>
                                    <div class="title-box">
                                        <div class="post-date">
                                            <p>30</p><span>Dec</span></div>
                                        <h4><a href="#">Naxly as the Winners in Global Agency Awards</a></h4>
                                    </div>
                                    <div class="link"><a href="#" class="btn-style-four">Read More<span>+</span></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 news-block">
                        <div class="news-block-one wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <figure class="image-box">
                                    <img src="{{ asset('uploads/img/dummy/775x575.jpg') }}" alt="">
                                    <a href="{{ asset('uploads/img/dummy/775x575.jpg') }}" class="lightbox-image" data-fancybox="gallery"><i class="flaticon-zoom"></i></a>
                                </figure>
                                <div class="lower-content">
                                    <div class="file-box"><i class="far fa-folder-open"></i>
                                        <p>Data Engineering</p>
                                    </div>
                                    <div class="title-box">
                                        <div class="post-date">
                                            <p>29</p><span>Dec</span></div>
                                        <h4><a href="#">Naxly Named as a Global Leader in Big Data</a></h4>
                                    </div>
                                    <div class="link"><a href="#" class="btn-style-four">Read More<span>+</span></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 news-block">
                        <div class="news-block-one wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <figure class="image-box">
                                    <img src="{{ asset('uploads/img/dummy/775x575.jpg') }}" alt="">
                                    <a href="{{ asset('uploads/img/dummy/775x575.jpg') }}" class="lightbox-image" data-fancybox="gallery"><i class="flaticon-zoom"></i></a>
                                </figure>
                                <div class="lower-content">
                                    <div class="file-box"><i class="far fa-folder-open"></i>
                                        <p>ML Consulting</p>
                                    </div>
                                    <div class="title-box">
                                        <div class="post-date">
                                            <p>28</p><span>Dec</span></div>
                                        <h4><a href="#">The Current State of Artificial Intelligence. Infographic</a></h4>
                                    </div>
                                    <div class="link"><a href="#" class="btn-style-four">Read More<span>+</span></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 news-block">
                        <div class="news-block-one wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <figure class="image-box">
                                    <img src="{{ asset('uploads/img/dummy/775x575.jpg') }}" alt="">
                                    <a href="{{ asset('uploads/img/dummy/775x575.jpg') }}" class="lightbox-image" data-fancybox="gallery"><i class="flaticon-zoom"></i></a>
                                </figure>
                                <div class="lower-content">
                                    <div class="file-box"><i class="far fa-folder-open"></i>
                                        <p>ML Consulting</p>
                                    </div>
                                    <div class="title-box">
                                        <div class="post-date">
                                            <p>27</p><span>Dec</span></div>
                                        <h4><a href="#">The Current State of Artificial Intelligence. Infographic</a></h4>
                                    </div>
                                    <div class="link"><a href="#" class="btn-style-four">Read More<span>+</span></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 news-block">
                        <div class="news-block-one wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <figure class="image-box">
                                    <img src="{{ asset('uploads/img/dummy/775x575.jpg') }}" alt="">
                                    <a href="{{ asset('uploads/img/dummy/775x575.jpg') }}" class="lightbox-image" data-fancybox="gallery"><i class="flaticon-zoom"></i></a>
                                </figure>
                                <div class="lower-content">
                                    <div class="file-box"><i class="far fa-folder-open"></i>
                                        <p>Data Strategy</p>
                                    </div>
                                    <div class="title-box">
                                        <div class="post-date">
                                            <p>26</p><span>Dec</span></div>
                                        <h4><a href="#">Naxly as the Winners in Global Agency Awards</a></h4>
                                    </div>
                                    <div class="link"><a href="#" class="btn-style-four">Read More<span>+</span></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 news-block">
                        <div class="news-block-one wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <figure class="image-box">
                                    <img src="{{ asset('uploads/img/dummy/775x575.jpg') }}" alt="">
                                    <a href="{{ asset('uploads/img/dummy/775x575.jpg') }}" class="lightbox-image" data-fancybox="gallery"><i class="flaticon-zoom"></i></a>
                                </figure>
                                <div class="lower-content">
                                    <div class="file-box"><i class="far fa-folder-open"></i>
                                        <p>Data Engineering</p>
                                    </div>
                                    <div class="title-box">
                                        <div class="post-date">
                                            <p>25</p><span>Dec</span></div>
                                        <h4><a href=#">Naxly Named as a Global Leader in Big Data</a></h4>
                                    </div>
                                    <div class="link"><a href="#" class="btn-style-four">Read More<span>+</span></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endif
    <!-- blog-classic-grid end -->

@endsection
