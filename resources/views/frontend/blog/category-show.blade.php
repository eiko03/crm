@extends('layouts.frontend.master')

@section('content')

    <!--Page Title-->
    <section class="page-title style-two text-center">
        <div class="pattern-layer" style="background-image: url({{ asset('assets/frontend/images/shape/shape-62.png') }});"></div>
        <div class="auto-container">
            <div class="content-box">
                <h1>{{ $category->category_name }}</h1>
                <ul class="bread-crumb clearfix">
                    <li><a  href="{{ url('/') }}">{{ __('frontend.home') }}</a></li>
                    <li><span>\\</span></li>
                    <li>{{ $category->category_name }}</li>
                </ul>
            </div>
        </div>
    </section>
    <!--End Page Title-->

    <!-- Blog Grid Start -->
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
                    <div class="col-12">
                        {{ __('frontend.updating') }}
                    </div>
                </div>
            </div>
        </section>
    @endif
    <!-- Blog Grid End -->


@endsection