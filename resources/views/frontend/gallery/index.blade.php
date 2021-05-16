@extends('layouts.frontend.master')

@section('content')

    <!--Page Title-->
    <section class="page-title style-two text-center">
        <div class="pattern-layer" style="background-image: url({{ asset('assets/frontend/images/shape/shape-62.png') }});"></div>
        <div class="auto-container">
            <div class="content-box">
                <h1>{{ __('frontend.gallery') }}</h1>
                <ul class="bread-crumb clearfix">
                    <li><a  href="{{ url('/') }}">{{ __('frontend.home') }}</a></li>
                    <li><span>\\</span></li>
                    <li><a  href="{{ url('/') }}">{{ __('frontend.pages') }}</a></li>
                    <li><span>\\</span></li>
                    <li>{{ __('frontend.gallery') }}</li>
                </ul>
            </div>
        </div>
    </section>
    <!--End Page Title-->

    <!-- blog-classic-grid -->
    @if (count($galleries) > 0)
        <section class="blog-classic-grid">
            <div class="auto-container">
                <div class="row clearfix">
                    @foreach ($galleries as $gallery)
                        <div class="col-lg-4 col-md-6 col-sm-12 news-block">
                            <div class="news-block-one wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
                                <div class="inner-box">
                                    @if (!empty($gallery->gallery_image))
                                        <figure class="image-box">
                                            <img src="{{ asset('uploads/img/galleries/'.$gallery->gallery_image) }}" alt="blog image">
                                            <a href="{{ asset('uploads/img/galleries/'.$gallery->gallery_image) }}" class="lightbox-image" data-fancybox="gallery"><i class="flaticon-zoom"></i></a>
                                        </figure>
                                    @else
                                        <figure class="image-box">
                                            <img src="{{ asset('uploads/img/dummy/no-image.jpg') }}" class="img-full" alt="blog image">
                                            <a href="{{ asset('uploads/img/dummy/no-image.jpg') }}" class="lightbox-image" data-fancybox="gallery"><i class="flaticon-zoom"></i></a>
                                        </figure>
                                    @endif
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
                        {{ __('frontend.updating') }}
                    </div>
                </div>
            </div>
        </section>
    @endif
    <!-- blog-classic-grid end -->

@endsection
