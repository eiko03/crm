<!DOCTYPE html>
<html dir="@if (session()->has('language_direction_from_dropdown')) @if(session()->get('language_direction_from_dropdown') == 1) {{ __('rtl') }} @else {{ __('ltr') }} @endif @else {{ __('ltr') }} @endif" lang="@if (session()->has('language_code_from_dropdown')){{ str_replace('_', '-', session()->get('language_code_from_dropdown')) }}@else{{ str_replace('_', '-',   $language->language_code) }}@endif">
<head>
    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta name="title" content="@if (isset($general_seo)){{ $general_seo->site_name }} @endif">
    <meta name="description" content="@if (isset($general_seo)){{ $general_seo->site_desc }} @endif">
    <meta name="keywords" content="@if (isset($general_seo)){{ $general_seo->site_keywords }} @endif">
    <meta name="author" content="elsecolor">
    <meta property="fb:app_id" content="@if (isset($general_seo)){{ $general_seo->fb_app_id }} @endif">
    <meta property="og:title" content="@if (isset($general_seo)){{ $general_seo->site_name }} @endif">
    <meta property="og:url" content="@if (isset($general_seo)){{ url()->current() }} @endif">
    <meta property="og:description" content="@if (isset($general_seo)){{ $general_seo->site_desc }} @endif">
    <meta property="og:image" content="@if (!empty($general_site_image->favicon_image)){{ asset('uploads/img/general/'.$general_site_image->favicon_image) }} @endif">
    <meta itemprop="image" content="@if (!empty($general_site_image->favicon_image)){{ asset('uploads/img/general/'.$general_site_image->favicon_image) }} @endif">
    <meta property="og:type" content="website">

    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:image" content="@if (!empty($general_site_image->favicon_image)){{ asset('uploads/img/general/'.$general_site_image->favicon_image) }} @endif">
    <meta property="twitter:title" content="@if (isset($general_seo)){{ $general_seo->site_name }} @endif">
    <meta property="twitter:description" content="@if (isset($general_seo)){{ $general_seo->site_desc }} @endif">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Title -->
    <title>{{ __('frontend.home') }} @if (isset($general_seo)) - {{ $general_seo->site_name }} @endif</title>

@if (!empty($general_site_image->favicon_image))
    <!-- Favicon -->
        <link href="{{ asset('uplods/img/general/'.$general_site_image->favicon_image) }}" sizes="128x128" rel="shortcut icon" type="image/x-icon" />
        <link href="{{ asset('uploads/img/general/'.$general_site_image->favicon_image) }}" sizes="128x128" rel="shortcut icon" />
@else
    <!-- Favicon -->
        <link href="{{ asset('uplods/img/dummy/favicon.png') }}" sizes="128x128" rel="shortcut icon" type="image/x-icon" />
        <link href="{{ asset('uploads/img/dummy/favicon.png') }}" sizes="128x128" rel="shortcut icon" />
@endif

<!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:300,300i,400,400i,600,600i,700,700i&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Muli:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">

    <!-- Stylesheets -->
    <link href="{{ asset('assets/frontend/css/font-awesome-all.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/frontend/css/flaticon.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/frontend/css/owl.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/frontend/css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/frontend/css/jquery.fancybox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/frontend/css/animate.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/frontend/css/imagebg.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/frontend/css/global.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/frontend/css/header.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/frontend/css/color.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/frontend/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/frontend/css/responsive.css') }}" rel="stylesheet">


@if (isset($google_analytic))
    <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id={{ $google_analytic->google_analytic }}"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());

            gtag('config', '{{ $google_analytic->google_analytic }}');
        </script>
    @endif

</head>
<body class="boxed_wrapper">

@if ($section_arr['preloader'] == 1)
    <!-- preloader -->
    <div class="preloader">
        <div id="handle-preloader" class="handle-preloader">
            <div class="animation-preloader">
                <div class="spinner"></div>
                @if (isset($general_seo))
                    @php
                        //Convert a String into an Array
                        $str = $general_seo->site_name;
                        $arr = str_split($str);
                    @endphp
                    <div class="txt-loading">
                        @for ($i = 0; $i < strlen($str); $i++)
                            <span data-text-preloader="{{ $arr[$i] }}" class="letters-loading">{{ $arr[$i] }}</span>
                        @endfor
                    </div>
                @endif
            </div>
        </div>
    </div>
    <!-- preloader end -->
@endif

<!-- search-popup -->
<div id="search-popup" class="search-popup">
    <div class="close-search"><span>{{ __('frontend.close') }}</span></div>
    <div class="popup-inner">
        <div class="overlay-layer"></div>
        <div class="search-form">
            <form action="{{ route('blog-page.search') }}" method="POST">
                @csrf
                <div class="form-group">
                    <fieldset>
                        <input type="search" class="form-control" name="search" placeholder="{{ __('frontend.search_here') }}" required>
                        <input type="submit" value="{{ __('frontend.search_now') }}" class="theme-btn style-four">
                    </fieldset>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- search-popup end -->

<!-- main header -->
<header class="main-header style-one home-1">
    <div class="auto-container">
        <div class="row clearfix">
            <div class="col-lg-3 col-md-12 col-sm-12 logo-column">
                <div class="logo-box style-two">
                    <figure class="logo">
                        @if (!empty($general_site_image->site_colored_logo_image))
                            <a href="{{ url('/') }}"><img src="{{ asset('uploads/img/general/'.$general_site_image->site_colored_logo_image) }}" alt="logo image"></a>
                        @else
                            <a href="#"><img src="{{ asset('uploads/img/dummy/logo-1.png') }}" alt="logo image"></a>
                        @endif
                    </figure>
                </div>
            </div>
            <div class="col-lg-9 col-md-12 col-sm-12 outer-column">
                <div class="outer-box">
                    <div class="header-top clearfix">
                        <div class="top-right pull-right clearfix">
                            <div class="support d-none d-lg-block"><i class="flaticon-music"></i><span>{{ __('frontend.start_your_project_today') }}</span>@if (!empty($site_info->phone)) <a href="tel:{{$site_info->phone}}">{{ $site_info->phone }}</a> @endif</div>
                            <ul class="social-links clearfix d-none d-lg-block">
                                @foreach ($socials as $social)
                                   <li><a href="@if (!empty($social->link)) {{ $social->link }} @else # @endif">
                                        <i class="{{ $social->social_media }}"></i>
                                    </a>
                                   </li>
                                @endforeach
                            </ul>
                            <div class="search-box-outer d-none d-lg-block">
                                <form method="post" class="search-btn">
                                    <button type="button" class="search-toggler"><i class="flaticon-search"></i>{{ __('frontend.search') }}</button>
                                </form>
                            </div>
                            @if (count($display_dropdowns) > 0)
                                <div class="language">
                                    <div class="lang-btn lang-btn-2">
                                        <span class="flag"></span>
                                        <span class="txt">@if (session()->has('language_name_from_dropdown')) {{ session()->get('language_name_from_dropdown') }} @else {{ $language->language_name }} @endif</span>
                                        <span class="arrow fa fa-angle-down"></span>
                                    </div>
                                    <div class="lang-dropdown">
                                        <ul>
                                            @foreach ($display_dropdowns as $display_dropdown)
                                                <li><a href="{{ url('language/set-locale/'.$display_dropdown->id) }}">{{ $display_dropdown->language_name }}</a></li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            @endif
                        </div>
                    </div>
                    <div class="header-upper clearfix">
                        <div class="menu-area pull-right clearfix">
                            <!--Mobile Navigation Toggler-->
                            <div class="mobile-nav-toggler">
                                <i class="icon-bar"></i>
                                <i class="icon-bar"></i>
                                <i class="icon-bar"></i>
                            </div>
                            <nav class="main-menu navbar-expand-md navbar-light">
                                <div class="collapse navbar-collapse show clearfix" id="navbarSupportedContent">
                                    <ul class="navigation clearfix">
                                        <li class="display-none-arrow"><a href="{{ url('/') }}">{{ __('frontend.home') }}</a></li>
                                       @if ($section_arr['company_dropdown'] == 1)
                                            <li class="dropdown"><a href="{{ url('about') }}">{{ __('frontend.company') }}</a>
                                                <ul>
                                                    @if ($section_arr['about_company_page'] == 1) <li><a href="{{ url('about') }}">{{ __('frontend.about_company') }}<i class="flaticon-next"></i></a></li> @endif
                                                    @if ($section_arr['team_page'] == 1) <li><a href="{{ url('team') }}">{{ __('frontend.meet_our_team') }}<i class="flaticon-next"></i></a></li> @endif
                                                    @if ($section_arr['contact_us_page'] == 1) <li><a href="{{ url('contact') }}">{{ __('frontend.contact_us') }}<i class="flaticon-next"></i></a></li> @endif
                                                </ul>
                                            </li>
                                        @endif
                                        @if ($section_arr['works_page'] == 1) <li class="display-none-arrow"><a href="{{ url('works') }}">{{ __('frontend.works') }}</a></li> @endif
                                        @if ($section_arr['blogs_page'] == 1) <li class="display-none-arrow"><a href="{{ url('blogs') }}">{{ __('frontend.blogs') }}</a></li> @endif
                                        @if ($section_arr['page_dropdown'] == 1)
                                            <li class="dropdown"><a href="{{ url('/') }}">{{ __('frontend.pages') }}</a>
                                                <ul>
                                                    @if ($section_arr['gallery_page'] == 1) <li><a href="{{ url('gallery') }}">{{ __('frontend.gallery') }}<i class="flaticon-next"></i></a></li> @endif
                                                    @if ($section_arr['faq_page'] == 1) <li><a href="{{ url('faq') }}">{{ __('frontend.faqs') }}<i class="flaticon-next"></i></a></li> @endif
                                                    @foreach ($header_pages as $header_page)
                                                        <li><a href="{{ url('page/'.$header_page->page_slug) }}">{{ $header_page->page_title }}<i class="flaticon-next"></i></a></li>
                                                    @endforeach
                                                </ul>
                                            </li>
                                        @endif
                                    </ul>
                                </div>
                            </nav>
                           @if ($section_arr['contact_us_page'] == 1)
                                <div class="btn-box">
                                    <a href="{{ url('contact') }}" class="theme-btn style-one">{{ __('frontend.get_in_touch') }}</a>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--sticky Header-->
    <div class="sticky-header">
        <div class="auto-container clearfix">
           @if (!empty($general_site_image->site_small_logo_image))
                <figure class="logo-box">
                    <a href="{{ url('/') }}"><img src="{{ asset('uploads/img/general/'.$general_site_image->site_small_logo_image) }}" alt="logo icon"></a>
                </figure>
            @else
                <figure class="logo-box">
                    <a href="#"><img src="{{ asset('uploads/img/dummy/small-logo.png') }}" alt="logo icon"></a>
                </figure>
            @endif
            <div class="menu-area">
                <nav class="main-menu clearfix">
                    <!--Keep This Empty / Menu will come through Javascript-->
                </nav>
               @if ($section_arr['contact_us_page'] == 1)
                    <div class="btn-box">
                        <a href="{{ url('contact') }}" class="theme-btn style-one">{{ __('frontend.get_in_touch') }}</a>
                    </div>
                @endif
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
        <div class="nav-logo">
            @if (!empty($general_site_image->site_white_logo_image))
                <a href="{{ url('/') }}"><img src="{{ asset('uploads/img/general/'.$general_site_image->site_white_logo_image) }}" alt="logo image"></a>
            @else
                <a href="#"><img src="{{ asset('uploads/img/dummy/white-logo.png') }}" alt="logo image"></a>
            @endif
        </div>
        <div class="menu-outer">
            <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
        </div>
        @isset ($site_info)
            <div class="contact-info">
                <h4>{{ __('frontend.contact_info') }}</h4>
                <ul>
                    @if (!empty($site_info->address)) <li>{{ $site_info->address }}</li> @endif
                    @if (!empty($site_info->phone)) <li><a href="tel:{{ $site_info->phone }}">{{ $site_info->phone }}</a></li> @endif
                    @if (!empty($site_info->email)) <li><a href="mailto:{{ $site_info->email }}">{{ $site_info->email }}</a></li> @endif
                </ul>
            </div>
        @endisset
        <div class="social-links">
            <ul class="clearfix">
                @foreach ($socials as $social)
                    <li>
                        <a href="@if (!empty($social->link)) {{ $social->link }} @else # @endif">
                            <i class="{{ $social->social_media }}"></i>
                        </a>
                    </li>
                @endforeach
            </ul>
        </div>
    </nav>
</div>
<!-- End Mobile Menu -->

<!-- banner-section -->
@isset ($fixed_content)
    <section class="banner-section">
        <div class="pattern-layer">
            <div class="pattern-1" style="background-image: url({{ asset('assets/frontend/images/shape/shape-56.png') }});"></div>
            <div class="pattern-2" style="background-image: url({{ asset('assets/frontend/images/shape/shape-55.png') }});"></div>
        </div>
        <div class="icon-layer">
            <div class="icon icon-1 rotate-me" style="background-image: url({{ asset('assets/frontend/images/icons/wheel-2.png') }});"></div>
            <div class="icon icon-2 rotate-me" style="background-image: url({{ asset('assets/frontend/images/icons/wheel-3.png') }});"></div>
            <div class="icon icon-3 rotate-me" style="background-image: url({{ asset('assets/frontend/images/icons/wheel-4.png') }});"></div>
            <div class="icon icon-4 rotate-me" style="background-image: url({{ asset('assets/frontend/images/icons/wheel-5.png') }});"></div>
        </div>
        <div class="auto-container">
            <div class="row clearfix">
                <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                    <div class="content-box">
                        <h1>{{ $fixed_content->title }}</h1>
                        <p>{{ $fixed_content->desc }}</p>
                        <div class="btn-box">
                            @if (!empty($fixed_content->btn_name_1)) <a href="@if ($fixed_content->btn_link_1) {{ $fixed_content->btn_link_1 }} @else # @endif" class="theme-btn style-two">{{ $fixed_content->btn_name_1 }}<span>+</span></a> @endif
                            @if (!empty($fixed_content->btn_name_2)) <a href="@if ($fixed_content->btn_link_2) {{ $fixed_content->btn_link_2 }} @else # @endif" class="theme-btn style-one">{{ $fixed_content->btn_name_2 }}<span>+</span></a> @endif
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                    <div class="slider-image-1 clearfix">
                        @if ($section_arr['banner_images'] == 1)
                            <figure class="image image-1"><img src="{{ asset('assets/frontend/images/banner/banner-1-1.png') }}" alt=""></figure>
                            <figure class="image image-2 float-bob-y"><img src="{{ asset('assets/frontend/images/banner/banner-1-2.png') }}" alt=""></figure>
                            <figure class="image image-3"><img src="{{ asset('assets/frontend/images/icons/pie-chart-1.png') }}" alt=""></figure>
                            <figure class="image image-4"><img src="{{ asset('assets/frontend/images/banner/banner-1-3.png') }}" alt=""></figure>
                            <figure class="image image-5 float-bob-y"><img src="{{ asset('assets/frontend/images/banner/banner-1-4.png') }}" alt=""></figure>
                            <figure class="image image-6 float-bob-y"><img src="{{ asset('assets/frontend/images/banner/banner-1-5.png') }}" alt=""></figure>
                            <figure class="image image-7"><img src="{{ asset('assets/frontend/images/banner/banner-1-6.png') }}" alt=""></figure>
                            <figure class="image image-8 wow bounceInDown" data-wow-delay="00ms" data-wow-duration="1500ms"><img src="{{ asset('assets/frontend/images/icons/dollar-1.png') }}" alt=""></figure>
                            <figure class="image image-9 wow bounceInDown" data-wow-delay="200ms" data-wow-duration="1500ms"><img src="{{ asset('assets/frontend/images/icons/dollar-2.png') }}" alt=""></figure>
                            <figure class="image image-10 wow bounceInDown" data-wow-delay="400ms" data-wow-duration="1500ms"><img src="{{ asset('assets/frontend/images/icons/dollar-3.png') }}" alt=""></figure>
                            <figure class="image image-11 wow bounceInDown" data-wow-delay="600ms" data-wow-duration="1500ms"><img src="{{ asset('assets/frontend/images/icons/dollar-4.png') }}" alt=""></figure>
                            <figure class="image image-12 wow bounceInDown" data-wow-delay="800ms" data-wow-duration="1500ms"><img src="{{ asset('assets/frontend/images/icons/dollar-5.png') }}" alt=""></figure>
                            <figure class="image image-13"><img src="{{ asset('assets/frontend/images/icons/arrow-4.png') }}" alt=""></figure>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>
@else
    <section class="banner-section">
        <div class="pattern-layer">
            <div class="pattern-1" style="background-image: url({{ asset('assets/frontend/images/shape/shape-56.png') }});"></div>
            <div class="pattern-2" style="background-image: url({{ asset('assets/frontend/images/shape/shape-55.png') }});"></div>
        </div>
        <div class="icon-layer">
            <div class="icon icon-1 rotate-me" style="background-image: url({{ asset('assets/frontend/images/icons/wheel-2.png') }});"></div>
            <div class="icon icon-2 rotate-me" style="background-image: url({{ asset('assets/frontend/images/icons/wheel-3.png') }});"></div>
            <div class="icon icon-3 rotate-me" style="background-image: url({{ asset('assets/frontend/images/icons/wheel-4.png') }});"></div>
            <div class="icon icon-4 rotate-me" style="background-image: url({{ asset('assets/frontend/images/icons/wheel-5.png') }});"></div>
        </div>
        <div class="auto-container">
            <div class="row clearfix">
                <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                    <div class="content-box">
                        <h1>Turn data into insight with survey reports</h1>
                        <p>Galaxy bring the power of data science and artificial<br />intelligence to every business.</p>
                        <div class="btn-box">
                            <a href="#" class="theme-btn style-two">Learn More<span>+</span></a>
                            <a href="#" class="theme-btn style-one">Get Started<span>+</span></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                    <div class="slider-image-1 clearfix">
                        <figure class="image image-1"><img src="{{ asset('assets/frontend/images/banner/banner-1-1.png') }}" alt=""></figure>
                        <figure class="image image-2 float-bob-y"><img src="{{ asset('assets/frontend/images/banner/banner-1-2.png') }}" alt=""></figure>
                        <figure class="image image-3"><img src="{{ asset('assets/frontend/images/icons/pie-chart-1.png') }}" alt=""></figure>
                        <figure class="image image-4"><img src="{{ asset('assets/frontend/images/banner/banner-1-3.png') }}" alt=""></figure>
                        <figure class="image image-5 float-bob-y"><img src="{{ asset('assets/frontend/images/banner/banner-1-4.png') }}" alt=""></figure>
                        <figure class="image image-6 float-bob-y"><img src="{{ asset('assets/frontend/images/banner/banner-1-5.png') }}" alt=""></figure>
                        <figure class="image image-7"><img src="{{ asset('assets/frontend/images/banner/banner-1-6.png') }}" alt=""></figure>
                        <figure class="image image-8 wow bounceInDown" data-wow-delay="00ms" data-wow-duration="1500ms"><img src="{{ asset('assets/frontend/images/icons/dollar-1.png') }}" alt=""></figure>
                        <figure class="image image-9 wow bounceInDown" data-wow-delay="200ms" data-wow-duration="1500ms"><img src="{{ asset('assets/frontend/images/icons/dollar-2.png') }}" alt=""></figure>
                        <figure class="image image-10 wow bounceInDown" data-wow-delay="400ms" data-wow-duration="1500ms"><img src="{{ asset('assets/frontend/images/icons/dollar-3.png') }}" alt=""></figure>
                        <figure class="image image-11 wow bounceInDown" data-wow-delay="600ms" data-wow-duration="1500ms"><img src="{{ asset('assets/frontend/images/icons/dollar-4.png') }}" alt=""></figure>
                        <figure class="image image-12 wow bounceInDown" data-wow-delay="800ms" data-wow-duration="1500ms"><img src="{{ asset('assets/frontend/images/icons/dollar-5.png') }}" alt=""></figure>
                        <figure class="image image-13"><img src="{{ asset('assets/frontend/images/icons/arrow-4.png') }}" alt=""></figure>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endisset
<!-- banner-section end -->

<!--  service-section -->
@if ($section_arr['solution_section'] == 1)
    @if (isset($solution_section) || count($solutions) > 0)
        <section class="service-section">
            <div class="auto-container">
                @isset($solution_section)
                <div class="sec-title text-center">
                    @if (!empty($solution_section->top_title)) <p>{{ $solution_section->top_title }}</p> @endif
                    <h2 class="w-50 mx-auto">{{ $solution_section->title }}</h2>
                    <div class="decor" style="background-image: url({{ asset('assets/frontend/images/icons/decor-1.png') }});"></div>
                </div>
                @endisset
                <div class="row clearfix">
                    @php $i = 0; @endphp
                    @foreach ($solutions as $solution)
                        <div class="col-lg-3 col-md-6 col-sm-12 service-block @if (count($solutions) > 4) mb-md-4 @endif">
                            <div class="service-block-one wow fadeInUp" data-wow-delay="{{ $i++ }}00ms" data-wow-duration="1500ms">
                                <div class="inner-box">
                                    @if (!empty($solution->title)) <h4><a href="#">{{ $solution->title }}</a></h4> @endif
                                    @if (!empty($solution->icon))
                                        <div class="icon-box">
                                            <span class="border-layer"></span>
                                            <i class="{{ $solution->icon }}"></i>
                                        </div>
                                    @endif
                                    @if (!empty($solution->desc)) <p>{{ $solution->desc }}</p> @endif
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    @else
        <section class="service-section">
            <div class="auto-container">
                <div class="sec-title text-center">
                    <p>More than Solutions</p>
                    <h2 class="w-50 mx-auto">Data sceince solutions for startup and enterprises</h2>
                    <div class="decor" style="background-image: url({{ asset('assets/frontend/images/icons/decor-1.png') }});"></div>
                </div>
                <div class="row clearfix">
                    <div class="col-lg-3 col-md-6 col-sm-12 service-block">
                        <div class="service-block-one wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <h4><a href="#">Data Science</a></h4>
                                <div class="icon-box">
                                    <span class="border-layer"></span>
                                    <i class="flaticon-data"></i>
                                </div>
                                <p>Simple & easy distinguish in a free hour, when our power choice prevents</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 service-block">
                        <div class="service-block-one wow fadeInUp" data-wow-delay="100ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <h4><a href="#">Machine Learning</a></h4>
                                <div class="icon-box">
                                    <span class="border-layer"></span>
                                    <i class="flaticon-brain"></i>
                                </div>
                                <p>Claims duty the obligations of busines it will frequently occur that all pleasures.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 service-block">
                        <div class="service-block-one wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <h4><a href="#">Artificial Intelligence</a></h4>
                                <div class="icon-box">
                                    <span class="border-layer"></span>
                                    <i class="flaticon-vr"></i>
                                </div>
                                <p>Therefore always hold these matters to this principle of reject pleasures secure.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 service-block">
                        <div class="service-block-one wow fadeInUp" data-wow-delay="300ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <h4><a href="#">BI Implementation</a></h4>
                                <div class="icon-box">
                                    <span class="border-layer"></span>
                                    <i class="flaticon-cloud-computing"></i>
                                </div>
                                <p>Trouble that bound ensue equaly blame belongs to those through weakness. </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endif
@endif
<!-- service-section end -->

<!-- about-section -->
@if ($section_arr['about_section'] == 1)
    @if (count($abouts) > 0)
        <section class="about-section">
            <div class="auto-container">
                <div class="tabs-box">
                    <div class="tabs-content" id="content_block_01">
                        @php $i = 1; @endphp
                        @foreach ($abouts as $about)
                            <div class="tab @if ($i == 1) active-tab @endif" id="tab-{{ $i++ }}">
                                <div class="row clearfix">
                                    <div class="col-lg-4 col-md-6 col-sm-12 content-column">
                                        <div class="content-box">
                                            <div class="sec-title text-left">
                                                @if (!empty($about->top_title)) <p>{{ $about->top_title }}</p> @endif
                                                <h2>{{ $about->title }}</h2>
                                                <div class="decor" style="background-image: url({{ asset('assets/frontend/images/icons/decor-1.png') }});"></div>
                                            </div>
                                            <div class="text">
                                                <p>@php echo html_entity_decode($about->desc); @endphp</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-8 col-md-6 col-sm-12 inner-column">
                                        <div class="inner-box">
                                            <div class="video-inner" style="@if (!empty($about_section->about_image)) background-image: url({{ asset('uploads/img/general/'.$about_section->about_image) }}); @endif">
                                                @if (!empty($about_section->video_link)) <a href="{{ $about_section->video_link }}" class="lightbox-image" data-caption=""><i class="flaticon-play-button"></i></a> @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="tab-btn-box">
                        <ul class="tab-btns tab-buttons clearfix">
                            @php $i = 1; @endphp
                            @foreach ($abouts as $about)
                                <li class="tab-btn @if ($i == 1) active-btn @endif" data-tab="#tab-{{ $i++ }}">
                                    <h4>{{ $about->tab_name }}</h4>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </section>
    @else
        <section class="about-section">
            <div class="auto-container">
                <div class="tabs-box">
                    <div class="tabs-content" id="content_block_01">
                        <div class="tab active-tab" id="tab-1">
                            <div class="row clearfix">
                                <div class="col-lg-4 col-md-6 col-sm-12 content-column">
                                    <div class="content-box">
                                        <div class="sec-title text-left">
                                            <p>About Company</p>
                                            <h2>Mission is to bring the power of AI to every business</h2>
                                            <div class="decor" style="background-image: url({{ asset('assets/frontend/images/icons/decor-1.png') }});"></div>
                                        </div>
                                        <div class="text">
                                            <p>As a solution providing company we offer a wide range of consulting, development & quality services with 100% satisfaction.</p>
                                        </div>
                                        <ul class="list-item clearfix">
                                            <li><span class="dots"></span>Idea of denouncing pleasure & praising</li>
                                            <li><span class="dots"></span>Ever undertakes laborious physical</li>
                                            <li><span class="dots"></span>Avoids a pain that produces no resultant</li>
                                            <li><span class="dots"></span>Great explorer of the real truth</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-8 col-md-6 col-sm-12 inner-column">
                                    <div class="inner-box">
                                        <div class="video-inner" style="background-image: url({{ asset('uploads/img/dummy/740x426.jpg') }});">
                                            <a href="https://www.youtube.com/watch?v=nfP5N9Yc72A&amp;t=28s" class="lightbox-image" data-caption=""><i class="flaticon-play-button"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab" id="tab-2">
                            <div class="row clearfix">
                                <div class="col-lg-4 col-md-6 col-sm-12 content-column">
                                    <div class="content-box">
                                        <div class="sec-title text-left">
                                            <p>About Company</p>
                                            <h2>Vison is to bring the power of AI to every business</h2>
                                            <div class="decor" style="background-image: url({{ asset('assets/frontend/images/icons/decor-1.png') }});"></div>
                                        </div>
                                        <div class="text">
                                            <p>As a solution providing company we offer a wide range of consulting, development & quality services with 100% satisfaction.</p>
                                        </div>
                                        <ul class="list-item clearfix">
                                            <li><span class="dots"></span>Idea of denouncing pleasure & praising</li>
                                            <li><span class="dots"></span>Ever undertakes laborious physical</li>
                                            <li><span class="dots"></span>Avoids a pain that produces no resultant</li>
                                            <li><span class="dots"></span>Great explorer of the real truth</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-8 col-md-6 col-sm-12 inner-column">
                                    <div class="inner-box">
                                        <div class="video-inner" style="background-image: url({{ asset('uploads/img/dummy/740x426.jpg') }});">
                                            <a href="https://www.youtube.com/watch?v=nfP5N9Yc72A&amp;t=28s" class="lightbox-image" data-caption=""><i class="flaticon-play-button"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab" id="tab-3">
                            <div class="row clearfix">
                                <div class="col-lg-4 col-md-6 col-sm-12 content-column">
                                    <div class="content-box">
                                        <div class="sec-title text-left">
                                            <p>About Company</p>
                                            <h2>Vison is to bring the power of AI to every business</h2>
                                            <div class="decor" style="background-image: url({{ asset('assets/frontend/images/icons/decor-1.png') }});"></div>
                                        </div>
                                        <div class="text">
                                            <p>As a solution providing company we offer a wide range of consulting, development & quality services with 100% satisfaction.</p>
                                        </div>
                                        <ul class="list-item clearfix">
                                            <li><span class="dots"></span>Idea of denouncing pleasure & praising</li>
                                            <li><span class="dots"></span>Ever undertakes laborious physical</li>
                                            <li><span class="dots"></span>Avoids a pain that produces no resultant</li>
                                            <li><span class="dots"></span>Great explorer of the real truth</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-8 col-md-6 col-sm-12 inner-column">
                                    <div class="inner-box">
                                        <div class="video-inner" style="background-image: url({{ asset('uploads/img/dummy/740x426.jpg') }});">
                                            <a href="https://www.youtube.com/watch?v=nfP5N9Yc72A&amp;t=28s" class="lightbox-image" data-caption=""><i class="flaticon-play-button"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-btn-box">
                        <ul class="tab-btns tab-buttons clearfix">
                            <li class="tab-btn active-btn" data-tab="#tab-1">
                                <h4>Our Mission</h4>
                            </li>
                            <li class="tab-btn" data-tab="#tab-2">
                                <h4>Our Vison</h4>
                            </li>
                            <li class="tab-btn" data-tab="#tab-3">
                                <h4>Core Values</h4>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
    @endif
@endif
<!-- about-section end -->

<!-- work-process -->
@if ($section_arr['work_process_section'] == 1)
    @if (isset($work_process_section) || count($work_processes) > 0)
        <section class="work-process">
            <div class="auto-container">
                @isset ($work_process_section)
                    <div class="sec-title text-center">
                        @if (!empty($work_process_section->top_title)) <p>{{ $work_process_section->top_title }}</p> @endif
                        <h2>{{ $work_process_section->title }}</h2>
                        <div class="decor" style="background-image: url({{ asset('assets/frontend/images/icons/decor-1.png') }});"></div>
                    </div>
                @endisset

                @php $i = 0; @endphp
                @foreach ($work_processes->chunk(3) as $work_process)
                    <div class="row clearfix">
                        @foreach ($work_process as $item)
                            <div class="col-lg-4 col-md-6 col-sm-12 work-block @if (count($work_processes) > 3) mb-md-4 @endif">
                                <div class="work-block-one wow slideInUp" data-wow-delay="{{ $i++ }}00ms" data-wow-duration="1500ms">
                                    <div class="inner-box">
                                        <div class="icon-box">
                                            @if (!empty($item->icon)) <i class="{{ $item->icon }}"></i> @endif
                                            <div class="count">0{{$i}}</div>
                                            <div class="bg-pattern" style="background-image: url({{ asset('assets/frontend/images/icons/icon-bg-1.png') }});"></div>
                                            <div class="overlay-pattern" style="background-image: url({{ asset('assets/frontend/images/icons/icon-bg-2.png') }});"></div>
                                        </div>
                                        @if (!empty($item->title)) <h4><a href="#">{{ $item->title }}</a></h4> @endif
                                        @if (!empty($item->desc)) <p>{{ $item->desc }}</p> @endif
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                @endforeach

            </div>
        </section>
    @else
        <section class="work-process">
            <div class="auto-container">
                <div class="sec-title text-center">
                    <p>Our Work Process</p>
                    <h2>Data science solutions for startup</h2>
                    <div class="decor" style="background-image: url({{ asset('assets/frontend/images/icons/decor-1.png') }});"></div>
                </div>
                <div class="row clearfix">
                    <div class="col-lg-4 col-md-6 col-sm-12 work-block">
                        <div class="work-block-one wow slideInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <div class="icon-box">
                                    <i class="flaticon-big-data"></i>
                                    <div class="count">01</div>
                                    <div class="bg-pattern" style="background-image: url({{ asset('assets/frontend/images/icons/icon-bg-1.png') }});"></div>
                                    <div class="overlay-pattern" style="background-image: url({{ asset('assets/frontend/images/icons/icon-bg-2.png') }});"></div>
                                </div>
                                <h4><a href="#">Frame the Problem</a></h4>
                                <p>To take a trivial example, which idea of ever undertakes.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 work-block">
                        <div class="work-block-one wow slideInUp" data-wow-delay="100ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <div class="icon-box">
                                    <i class="flaticon-ui"></i>
                                    <div class="count">02</div>
                                    <div class="bg-pattern" style="background-image: url({{ asset('assets/frontend/images/icons/icon-bg-1.png') }});"></div>
                                    <div class="overlay-pattern" style="background-image: url({{ asset('assets/frontend/images/icons/icon-bg-2.png') }});"></div>
                                </div>
                                <h4><a href="#">Collect the Data</a></h4>
                                <p>Best every pleasure is too welcomed every pain avoided.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 work-block">
                        <div class="work-block-one wow slideInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <div class="icon-box">
                                    <i class="flaticon-brain-1"></i>
                                    <div class="count">03</div>
                                    <div class="bg-pattern" style="background-image: url({{ asset('assets/frontend/images/icons/icon-bg-1.png') }});"></div>
                                    <div class="overlay-pattern" style="background-image: url({{ asset('assets/frontend/images/icons/icon-bg-2.png') }});"></div>
                                </div>
                                <h4><a href="#">Process the Data</a></h4>
                                <p>Have to be repudiated annoyances accepted the wise.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endif
@endif
<!-- work-process end -->

<!-- industries-section -->
@if ($section_arr['industry_section'] == 1)
    @if (isset($industry_section) || count($industries) > 0)
        <section class="industries-section">
            <div class="pattern-layer">
                <div class="pattern-1" style="background-image: url({{ asset('assets/frontend/images/shape/shape-57.png') }});"></div>
                <div class="pattern-2" style="background-image: url({{ asset('assets/frontend/images/shape/shape-58.png') }});"></div>
            </div>
            <div class="auto-container">
                <div class="row clearfix">
                    @isset ($industry_section)
                    <div class="col-lg-6 col-md-6 col-sm-12 content-column">
                        <div class="content-box">
                            <div class="sec-title text-left light">
                                @if (!empty($industry_section->top_title)) <p>{{ $industry_section->top_title }}</p> @endif
                                <h2>{{ $industry_section->title }}</h2>
                                <div class="decor" style="background-image: url({{ asset('assets/frontend/images/icons/decor-2.png') }});"></div>
                            </div>
                        </div>
                    </div>
                    @endisset
                    @foreach ($industries as $industry)
                        <div class="col-lg-3 col-md-6 col-sm-12 inner-column">
                            <div class="inner-box">
                                <div class="pattern-layer" style="background-image: url({{ asset('assets/frontend/images/shape/shape-3.png') }});"></div>
                                <div class="inner">
                                    <span>{{ $industry->title }}</span>
                                    <h4><a href="#">{{ $industry->desc }}</a></h4>
                                    @if (!empty($industry->link)) <div class="btn-box clearfix"><a href="{{ $industry->link }}"><i class="flaticon-arrow"></i></a></div> @endif
                                    @if (!empty($industry->icon)) <div class="icon-box"><i class="{{ $industry->icon }}"></i></div> @endif
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    @else
        <section class="industries-section">
            <div class="pattern-layer">
                <div class="pattern-1" style="background-image: url({{ asset('assets/frontend/images/shape/shape-57.png') }});"></div>
                <div class="pattern-2" style="background-image: url({{ asset('assets/frontend/images/shape/shape-58.png') }});"></div>
            </div>
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="col-lg-6 col-md-6 col-sm-12 content-column">
                        <div class="content-box">
                            <div class="sec-title text-left light">
                                <p>Industries</p>
                                <h2>Industries we are transforming our awesome solutions</h2>
                                <div class="decor" style="background-image: url({{ asset('assets/frontend/images/icons/decor-2.png') }});"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 inner-column">
                        <div class="inner-box">
                            <div class="pattern-layer" style="background-image: url({{ asset('assets/frontend/images/shape/shape-3.png') }});"></div>
                            <div class="inner">
                                <span>Industry</span>
                                <h4><a href="#">Trasportation &<br />Logistics</a></h4>
                                <div class="btn-box clearfix"><a href="#"><i class="flaticon-arrow"></i></a></div>
                                <div class="icon-box"><i class="flaticon-product"></i></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 inner-column">
                        <div class="inner-box">
                            <div class="pattern-layer" style="background-image: url({{ asset('assets/frontend/images/shape/shape-3.png') }});"></div>
                            <div class="inner">
                                <span>Industry</span>
                                <h4><a href="#">Media &<br />Entertainment</a></h4>
                                <div class="btn-box clearfix"><a href="#"><i class="flaticon-arrow"></i></a></div>
                                <div class="icon-box"><i class="flaticon-joystick"></i></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 inner-column">
                        <div class="inner-box">
                            <div class="pattern-layer" style="background-image: url({{ asset('assets/frontend/images/shape/shape-3.png') }});"></div>
                            <div class="inner">
                                <span>Industry</span>
                                <h4><a href="#">Travel &<br />Hospitality</a></h4>
                                <div class="btn-box clearfix"><a href="#"><i class="flaticon-arrow"></i></a></div>
                                <div class="icon-box"><i class="flaticon-travel"></i></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 inner-column">
                        <div class="inner-box">
                            <div class="pattern-layer" style="background-image: url({{ asset('assets/frontend/images/shape/shape-3.png') }});"></div>
                            <div class="inner">
                                <span>Industry</span>
                                <h4><a href="#">Financials &<br />Banking</a></h4>
                                <div class="btn-box clearfix"><a href="#"><i class="flaticon-arrow"></i></a></div>
                                <div class="icon-box"><i class="flaticon-bank"></i></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 inner-column">
                        <div class="inner-box">
                            <div class="pattern-layer" style="background-image: url({{ asset('assets/frontend/images/shape/shape-3.png') }});"></div>
                            <div class="inner">
                                <span>Industry</span>
                                <h4><a href="#">Healthcare &<br />Medicine</a></h4>
                                <div class="btn-box clearfix"><a href="#"><i class="flaticon-arrow"></i></a></div>
                                <div class="icon-box"><i class="flaticon-medicine"></i></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 inner-column">
                        <div class="inner-box">
                            <div class="pattern-layer" style="background-image: url({{ asset('assets/frontend/images/shape/shape-3.png') }});"></div>
                            <div class="inner">
                                <span>Industry</span>
                                <h4><a href="#">Advertising &<br />Marketing</a></h4>
                                <div class="btn-box clearfix"><a href="#"><i class="flaticon-arrow"></i></a></div>
                                <div class="icon-box"><i class="flaticon-billboard"></i></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endif
@endif
<!-- industries-section end -->

<!-- skills-section -->
@if ($section_arr['skill_section'] == 1)
    @if (isset($skill_section) || count($skills) > 0)
        <section class="skills-section">
            <div class="pattern-layer" style="background-image: url({{ asset('assets/frontend/images/shape/shape-4.png') }});"></div>
            <div class="auto-container">
                <div class="row clearfix">
                    @if (!empty($skill_section->skill_image))
                        <div class="col-lg-6 col-md-6 col-sm-12 image-column">
                            <div class="image-box wow slideInLeft" data-wow-delay="200ms" data-wow-duration="1500ms">
                                <figure class="image js-tilt"><img src="{{ asset('uploads/img/skill/'.$skill_section->skill_image) }}" alt="skill image"></figure>
                            </div>
                        </div>
                    @endif
                    <div class="@if (!empty($skill_section->skill_image)) col-lg-6 col-md-6 @else col-lg-12 col-md-12 @endif  col-sm-12 content-column">
                        <div id="content_block_02">
                            <div class="content-box">
                                @isset ($skill_section)
                                <div class="sec-title text-left">
                                    @if (!empty($skill_section->top_title)) <p>{{ $skill_section->top_title }}</p> @endif
                                    <h2>{{ $skill_section->title }}</h2>
                                    <div class="decor" style="background-image: url({{ asset('assets/frontend/images/icons/decor-1.png') }});"></div>
                                </div>
                                @if (!empty($skill_section->desc))
                                    <div class="text">
                                        <p>{{ $skill_section->desc }}</p>
                                    </div>
                                @endif
                                @endisset
                                <div class="inner-box">
                                    @foreach ($skills as $skill)
                                        <div class="progress-box">
                                            <h5>{{ $skill->title }}</h5>
                                            <div class="bar">
                                                <div class="bar-inner count-bar" data-percent="{{ $skill->percent_rate }}%">
                                                    <div class="count-text">{{ $skill->percent_rate }}%</div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @else
        <section class="skills-section">
            <div class="pattern-layer" style="background-image: url({{ asset('assets/frontend/images/shape/shape-4.png') }});"></div>
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="col-lg-6 col-md-6 col-sm-12 image-column">
                        <div class="image-box wow slideInLeft" data-wow-delay="200ms" data-wow-duration="1500ms">
                            <figure class="image js-tilt"><img src="{{ asset('uploads/img/dummy/670x577.jpg') }}" alt=""></figure>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 content-column">
                        <div id="content_block_02">
                            <div class="content-box">
                                <div class="sec-title text-left">
                                    <p>Skills & Facts</p>
                                    <h2>We keep our self updated with latest trends</h2>
                                    <div class="decor" style="background-image: url({{ asset('assets/frontend/images/icons/decor-1.png') }});"></div>
                                </div>
                                <div class="text">
                                    <p>As a solution providing company we offer a range consulting, development quality testing services with 100% satisfaction.</p>
                                </div>
                                <div class="inner-box">
                                    <div class="progress-box">
                                        <h5>Data Consulting</h5>
                                        <div class="bar">
                                            <div class="bar-inner count-bar" data-percent="62%">
                                                <div class="count-text">62%</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="progress-box">
                                        <h5>Big Data & BI</h5>
                                        <div class="bar">
                                            <div class="bar-inner count-bar" data-percent="89%">
                                                <div class="count-text">89%</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="progress-box">
                                        <h5>Predictive Analysis</h5>
                                        <div class="bar">
                                            <div class="bar-inner count-bar" data-percent="75%">
                                                <div class="count-text">75%</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endif
@endif
<!-- skills-section end -->

<!-- testimonial-section -->
@if ($section_arr['client_section'] == 1)
    @if (isset($testimonial_section) || count($testimonials) > 0)
        <section class="testimonial-section">
            <div class="pattern-layer">
                <div class="pattern-1" style="background-image: url({{ asset('assets/frontend/images/shape/shape-5.png') }});"></div>
                @if ($section_arr['work_section'] == 1)
                    <div class="pattern-2" style="background-image: url({{ asset('assets/frontend/images/shape/shape-6.png') }});"></div>
                @endif
            </div>
            <div class="auto-container">
                @isset ($testimonial_section)
                    <div class="upper-box clearfix">
                        <div class="sec-title text-left pull-left">
                            @if (!empty($testimonial_section->top_title)) <p>{{ $testimonial_section->top_title }}</p> @endif
                            <h2>{{ $testimonial_section->title }}</h2>
                            <div class="decor" style="background-image: url({{ asset('assets/frontend/images/icons/decor-1.png') }});"></div>
                        </div>
                       @if ($section_arr['contact_us_page'] == 1)
                            <div class="btn-box pull-right">
                                <a href="{{ url('contact') }}" class="theme-btn style-three">{{ __('frontend.send_your_review') }}<span>+</span></a>
                            </div>
                        @endif
                    </div>
                @endisset
                <div class="testimonial-carousel owl-carousel owl-theme owl-dots-none">
                    @foreach ($testimonials as $testimonial)
                        <div class="testimonial-content">
                            @if (!empty($testimonial->testimonial_image)) <figure class="image-box"><img src="{{ asset('uploads/img/testimonials/'.$testimonial->testimonial_image) }}" alt="testimonial image"></figure> @endif
                            <div class="inner-box">
                                <div class="icon-box"><i class="flaticon-null"></i></div>
                                <div class="inner">
                                    <ul class="rating clearfix">
                                        @for ($i = 0; $i <= 5; $i++)
                                            @if ($i < 3)
                                                @for ($i = 0; $i < $testimonial->star; $i++)
                                                    <li><i class="fas fa-star"></i></li>
                                                @endfor
                                            @else
                                                <li><i class="far fa-star"></i></li>
                                            @endif
                                        @endfor
                                    </ul>
                                    @if (!empty($testimonial->desc))
                                        <div class="text">
                                            <p>{{ $testimonial->desc }}</p>
                                        </div>
                                    @endif
                                    <div class="author-info">
                                        @if (!empty($testimonial->name)) <h4>{{ $testimonial->name }}</h4> @endif
                                        @if (!empty($testimonial->job)) <span class="designation">{{ $testimonial->job }}</span> @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    @else
        <section class="testimonial-section">
            <div class="pattern-layer">
                <div class="pattern-1" style="background-image: url({{ asset('assets/frontend/images/shape/shape-5.png') }});"></div>
                <div class="pattern-2" style="background-image: url({{ asset('assets/frontend/images/shape/shape-6.png') }});"></div>
            </div>
            <div class="auto-container">
                <div class="upper-box clearfix">
                    <div class="sec-title text-left pull-left">
                        <p>Testimonials</p>
                        <h2>What say our clients about our awesome service</h2>
                        <div class="decor" style="background-image: url({{ asset('assets/frontend/images/icons/decor-1.png') }});"></div>
                    </div>
                    <div class="btn-box pull-right">
                        <a href="#" class="theme-btn style-three">Send Your Review<span>+</span></a>
                    </div>
                </div>
                <div class="testimonial-carousel owl-carousel owl-theme owl-dots-none">
                    <div class="testimonial-content">
                        <figure class="image-box"><img src="{{ asset('uploads/img/dummy/250x312.jpg') }}" alt=""></figure>
                        <div class="inner-box">
                            <div class="icon-box"><i class="flaticon-null"></i></div>
                            <div class="inner">
                                <ul class="rating clearfix">
                                    <li><i class="flaticon-stars"></i></li>
                                    <li><i class="flaticon-stars"></i></li>
                                    <li><i class="flaticon-stars"></i></li>
                                    <li><i class="flaticon-stars"></i></li>
                                    <li><i class="flaticon-stars"></i></li>
                                </ul>
                                <div class="text">
                                    <p>As a growing company, we found in Naxly’ expertise in data science invaluable. In almost two years of cooperation, they’ve helped us define our data.</p>
                                </div>
                                <div class="author-info">
                                    <h4>Zedrew Kowzel</h4>
                                    <span class="designation">CTO of Smart Tech Solution</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-content">
                        <figure class="image-box"><img src="{{ asset('uploads/img/dummy/250x312.jpg') }}" alt=""></figure>
                        <div class="inner-box">
                            <div class="icon-box"><i class="flaticon-null"></i></div>
                            <div class="inner">
                                <ul class="rating clearfix">
                                    <li><i class="flaticon-stars"></i></li>
                                    <li><i class="flaticon-stars"></i></li>
                                    <li><i class="flaticon-stars"></i></li>
                                    <li><i class="flaticon-stars"></i></li>
                                    <li><i class="flaticon-stars"></i></li>
                                </ul>
                                <div class="text">
                                    <p>As a growing company, we found in Naxly’ expertise in data science invaluable. In almost two years of cooperation, they’ve helped us define our data.</p>
                                </div>
                                <div class="author-info">
                                    <h4>Androi Roi</h4>
                                    <span class="designation">CTO of Smart Tech Solution</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-content">
                        <figure class="image-box"><img src="{{ asset('uploads/img/dummy/250x312.jpg') }}" alt=""></figure>
                        <div class="inner-box">
                            <div class="icon-box"><i class="flaticon-null"></i></div>
                            <div class="inner">
                                <ul class="rating clearfix">
                                    <li><i class="flaticon-stars"></i></li>
                                    <li><i class="flaticon-stars"></i></li>
                                    <li><i class="flaticon-stars"></i></li>
                                    <li><i class="flaticon-stars"></i></li>
                                    <li><i class="flaticon-stars"></i></li>
                                </ul>
                                <div class="text">
                                    <p>As a growing company, we found in Naxly’ expertise in data science invaluable. In almost two years of cooperation, they’ve helped us define our data.</p>
                                </div>
                                <div class="author-info">
                                    <h4>Watson Jsye</h4>
                                    <span class="designation">CTO of Smart Tech Solution</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endif
@endif
<!-- testimonial-section end -->

<!-- case-section -->
@if ($section_arr['work_section'] == 1)
    @if (isset($work_section) || count($recent_works) > 0)
        <section class="case-section">
            <div class="auto-container">
                <div class="inner-container">
                    @isset ($work_section)
                        <div class="sec-title text-center">
                            @if (!empty($work_section->top_title)) <p>{{ $work_section->top_title }}</p> @endif
                            <h2>{{ $work_section->title }}</h2>
                            <div class="decor" style="background-image: url({{ asset('assets/frontend/images/icons/decor-1.png') }});"></div>
                        </div>
                    @endisset
                    <div class="row clearfix">
                        @php $i = 0; @endphp
                        @foreach ($recent_works as $recent_work)
                            <div class="col-lg-3 col-md-6 col-sm-12 case-block">
                                <div class="case-block-one wow fadeInUp" data-wow-delay="{{ $i+2 }}00ms" data-wow-duration="1500ms">
                                    <div class="inner-box">
                                        @if (!empty($recent_work->work_image))
                                            <figure class="image-box">
                                                <a href="{{ asset('uploads/img/works/'.$recent_work->work_image) }}" class="lightbox-image" data-fancybox="gallery"><img src="{{ asset('uploads/img/works/'.$recent_work->work_image) }}" alt="work image"></a>
                                            </figure>
                                        @endif
                                        <div class="lower-content">
                                            <p>{{ $recent_work->work_category->category_name }}</p>
                                            <h4><a href="{{ url('work/'.$recent_work->work_slug) }}">{{ $recent_work->title }} </a></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    @if (count($recent_works) > 3 && $section_arr['works_page'] == 1)
                        <div class="more-btn"><a href="{{ url('works') }}" class="btn-style-four">{{ __('frontend.all_case_studies') }}<span>+</span></a></div>
                    @endif
                </div>
            </div>
        </section>
    @else
        <section class="case-section">
            <div class="auto-container">
                <div class="inner-container">
                    <div class="sec-title text-center">
                        <p>Case Studies</p>
                        <h2>What our clients say about our<br />awesome solutions</h2>
                        <div class="decor" style="background-image: url({{ asset('assets/frontend/images/icons/decor-1.png') }});"></div>
                    </div>
                    <div class="row clearfix">
                        <div class="col-lg-3 col-md-6 col-sm-12 case-block">
                            <div class="case-block-one wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
                                <div class="inner-box">
                                    <figure class="image-box">
                                        <a href="{{ asset('uploads/img/dummy/570x400.jpg') }}" class="lightbox-image" data-fancybox="gallery"><img src="{{ asset('uploads/img/dummy/570x400.jpg') }}" alt="work image"></a>
                                    </figure>
                                    <div class="lower-content">
                                        <p>Banking & Finance</p>
                                        <h4><a href="#">Consulting on invoice data capture</a></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 case-block">
                            <div class="case-block-one wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
                                <div class="inner-box">
                                    <figure class="image-box">
                                        <a href="{{ asset('uploads/img/dummy/570x400.jpg') }}" class="lightbox-image" data-fancybox="gallery"><img src="{{ asset('uploads/img/dummy/570x400.jpg') }}" alt="work image"></a>
                                    </figure>
                                    <div class="lower-content">
                                        <p>Entertainment</p>
                                        <h4><a href="#">Automate feedback analysis</a></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 case-block">
                            <div class="case-block-one wow fadeInUp" data-wow-delay="400ms" data-wow-duration="1500ms">
                                <div class="inner-box">
                                    <figure class="image-box">
                                        <a href="{{ asset('uploads/img/dummy/570x400.jpg') }}" class="lightbox-image" data-fancybox="gallery"><img src="{{ asset('uploads/img/dummy/570x400.jpg') }}" alt="work image"></a>
                                    </figure>
                                    <div class="lower-content">
                                        <p>Banking & Finance</p>
                                        <h4><a href="#">Big data processing implementation</a></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 case-block">
                            <div class="case-block-one wow fadeInUp" data-wow-delay="600ms" data-wow-duration="1500ms">
                                <div class="inner-box">
                                    <figure class="image-box">
                                        <a href="{{ asset('uploads/img/dummy/570x400.jpg') }}" class="lightbox-image" data-fancybox="gallery"><img src="{{ asset('uploads/img/dummy/570x400.jpg') }}" alt="work image"></a>
                                    </figure>
                                    <div class="lower-content">
                                        <p>Healthcare</p>
                                        <h4><a href="#">BI implementation for baby care App</a></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="more-btn"><a href="#" class="btn-style-four">All Case Studies<span>+</span></a></div>
                </div>
            </div>
        </section>
    @endif
@endif
<!-- case-section end -->

<!-- fun-fact -->
@if ($section_arr['counter_section'] == 1)
    @if (count($counters) > 0)
        <section class="fun-fact">
            <div class="auto-container">
                <div class="row clearfix">
                    @php $i = 0; @endphp
                    @foreach ($counters as $counter)
                        <div class="col-lg-4 col-md-6 col-sm-12 counter-block">
                            <div class="counter-block-one wow slideInUp" data-wow-delay="{{ $i++ }}00ms" data-wow-duration="1500ms">
                                <div class="inner-box">
                                    @if (!empty($counter->icon)) <div class="icon-box"><i class="{{ $counter->icon }}"></i></div> @endif
                                    <div class="count-outer count-box">
                                        <span class="count-text" data-speed="1500" data-stop="{{ $counter->timer }}">0</span>+
                                    </div>
                                    @if (!empty($counter->desc)) <h4>{{ $counter->desc }}</h4> @endif
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    @else
        <section class="fun-fact">
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="col-lg-4 col-md-6 col-sm-12 counter-block">
                        <div class="counter-block-one wow slideInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <div class="icon-box"><i class="flaticon-analytics"></i></div>
                                <div class="count-outer count-box">
                                    <span class="count-text" data-speed="1500" data-stop="3500">0</span>+
                                </div>
                                <h4>Projects Completed</h4>
                                <p>To take trivial example, which idea of ever undertakes.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 counter-block">
                        <div class="counter-block-one wow slideInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <div class="icon-box"><i class="flaticon-brain-1"></i></div>
                                <div class="count-outer count-box">
                                    <span class="count-text" data-speed="1500" data-stop="1867">0</span>
                                </div>
                                <h4>Industries Covered</h4>
                                <p>Best every pleasure is to welcomed every pain avoided.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 counter-block">
                        <div class="counter-block-one wow slideInUp" data-wow-delay="300ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <div class="icon-box"><i class="flaticon-freelance"></i></div>
                                <div class="count-outer count-box">
                                    <span class="count-text" data-speed="1500" data-stop="239">0</span>
                                </div>
                                <h4>Expert Scientists</h4>
                                <p>Have to be repudiated annoyances accepted the wise.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endif
@endif
<!-- fun-fact end  -->

<!-- news-section -->
@if ($section_arr['blog_section'] == 1)
    @if (isset($blog_section) || count($recent_posts))
        <section class="news-section">
            <div class="title-inner bg-color-1">
                <div class="pattern-layer d-none d-xl-block">
                    <div class="pattern-1" style="background-image: url({{ asset('assets/frontend/images/shape/shape-7.png') }});"></div>
                    <div class="pattern-2" style="background-image: url({{ asset('assets/frontend/images/shape/shape-8.png') }});"></div>
                </div>
                @isset ($blog_section)
                    <div class="auto-container">
                        <div class="sec-title text-center">
                            @if (!empty($blog_section->top_title)) <p>{{ $blog_section->top_title }}</p> @endif
                            <h2>{{ $blog_section->title }}</h2>
                            <div class="decor" style="background-image: url({{ asset('assets/frontend/images/icons/decor-1.png') }});"></div>
                        </div>
                    </div>
                @endisset
            </div>
            <div class="lower-content">
                <div class="auto-container">
                    <div class="inner-content">
                        <div class="row clearfix">
                            @php $i = 0; @endphp
                            @foreach ($recent_posts as $recent_post)
                                <div class="col-lg-4 col-md-6 col-sm-12 news-block">
                                    <div class="news-block-one wow fadeInUp" data-wow-delay="{{ $i = $i +3 }}00ms" data-wow-duration="1500ms">
                                        <div class="inner-box">
                                            @if (!empty($recent_post->blog_image))
                                                <figure class="image-box">
                                                    <img src="{{ asset('uploads/img/blogs/'.$recent_post->blog_image) }}" alt="blog image">
                                                    <a href="{{ asset('uploads/img/blogs/'.$recent_post->blog_image) }}" class="lightbox-image" data-fancybox="gallery"><i class="flaticon-zoom"></i></a>
                                                </figure>
                                            @else
                                                <figure class="image-box">
                                                    <img src="{{ asset('uploads/img/dummy/no-image.jpg') }}" class="img-full" alt="blog image">
                                                    <a href="{{ asset('uploads/img/dummy/no-image.jpg') }}" class="lightbox-image" data-fancybox="gallery"><i class="flaticon-zoom"></i></a>
                                                </figure>
                                            @endif
                                            <div class="lower-content">
                                                <div class="file-box"><i class="far fa-folder-open"></i>
                                                    <p>{{ $recent_post->category->category_name }}</p>
                                                </div>
                                                <div class="title-box">
                                                    <div class="post-date">
                                                        <p>{{ Carbon\Carbon::parse($recent_post->created_at)->isoFormat('DD') }}</p><span>{{ Carbon\Carbon::parse($recent_post->created_at)->isoFormat('MMM') }}</span>
                                                    </div>
                                                    <h4><a href="{{ url('blog/'.$recent_post->slug) }}">{{ $recent_post->title }}</a></h4>
                                                </div>
                                                @if (!empty($recent_post->short_desc))
                                                    <div class="text">
                                                        <p>{{ $recent_post->short_desc }}</p>
                                                    </div>
                                                @endif
                                                <div class="link"><a href="{{ url('blog/'.$recent_post->slug) }}" class="btn-style-four">{{ __('frontend.read_more') }}<span>+</span></a></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @else
        <section class="news-section">
            <div class="title-inner bg-color-1">
                <div class="pattern-layer d-none d-xl-block">
                    <div class="pattern-1" style="background-image: url({{ asset('assets/frontend/images/shape/shape-7.png') }});"></div>
                    <div class="pattern-2" style="background-image: url({{ asset('assets/frontend/images/shape/shape-8.png') }});"></div>
                </div>
                <div class="auto-container">
                    <div class="sec-title text-center">
                        <p>News & Updates</p>
                        <h2>Latest thinking in data science and<br />our company news</h2>
                        <div class="decor" style="background-image: url({{ asset('assets/frontend/images/icons/decor-1.png') }});"></div>
                    </div>
                </div>
            </div>
            <div class="lower-content">
                <div class="auto-container">
                    <div class="inner-content">
                        <div class="row clearfix">
                            <div class="col-lg-4 col-md-6 col-sm-12 news-block">
                                <div class="news-block-one wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
                                    <div class="inner-box">
                                        <figure class="image-box">
                                            <img src="{{ asset('uploads/img/dummy/775x575.jpg') }}" alt="blog image">
                                            <a href="{{ asset('uploads/img/dummy/775x575.jpg') }}" class="lightbox-image" data-fancybox="gallery"><i class="flaticon-zoom"></i></a>
                                        </figure>
                                        <div class="lower-content">
                                            <div class="file-box"><i class="far fa-folder-open"></i>
                                                <p>Data Engineering</p>
                                            </div>
                                            <div class="title-box">
                                                <div class="post-date">
                                                    <p>05</p><span>Jan</span></div>
                                                <h4><a href="#">Naxly Named as a Global Leader in Big Data</a></h4>
                                            </div>
                                            <div class="text">
                                                <p>Equal blame belongs too those who fail in their through weakness will shrinking.</p>
                                            </div>
                                            <div class="link"><a href="#" class="btn-style-four">Read More<span>+</span></a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-12 news-block">
                                <div class="news-block-one wow fadeInUp" data-wow-delay="300ms" data-wow-duration="1500ms">
                                    <div class="inner-box">
                                        <figure class="image-box">
                                            <img src="{{ asset('uploads/img/dummy/775x575.jpg') }}" alt="blog image">
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
                                            <div class="text">
                                                <p>When our power choice untrammelled and then prevents our being able pleasure.</p>
                                            </div>
                                            <div class="link"><a href="#" class="btn-style-four">Read More<span>+</span></a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-12 news-block">
                                <div class="news-block-one wow fadeInUp" data-wow-delay="600ms" data-wow-duration="1500ms">
                                    <div class="inner-box">
                                        <figure class="image-box">
                                            <img src="{{ asset('uploads/img/dummy/775x575.jpg') }}" alt="blog image">
                                            <a href="{{ asset('uploads/img/dummy/775x575.jpg') }}" class="lightbox-image" data-fancybox="gallery"><i class="flaticon-zoom"></i></a>
                                        </figure>
                                        <div class="lower-content">
                                            <div class="file-box"><i class="far fa-folder-open"></i>
                                                <p>Data Strategy</p>
                                            </div>
                                            <div class="title-box">
                                                <div class="post-date">
                                                    <p>25</p><span>Dec</span></div>
                                                <h4><a href="#">Naxly as the Winners in Global Agency Awards</a></h4>
                                            </div>
                                            <div class="text">
                                                <p>Obligations of business it will frequently occur that pleasures have to be repudiated.</p>
                                            </div>
                                            <div class="link"><a href="#" class="btn-style-four">Read More<span>+</span></a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endif
@endif
<!-- news-section end -->

<!-- clients-section -->
@if ($section_arr['client_section'] == 1)
    @if (isset($sponsor_section) || count($sponsors) > 0)
        <section class="clients-section text-center">
            <div class="pattern-layer" style="background-image: url({{ asset('assets/frontend/images/shape/shape-59.png') }});"></div>
            <div class="image-layer">
                <figure class="image-1 rotate-me"><img src="{{ asset('assets/frontend/images/icons/wheel-6.png') }}" alt="wheel icon"></figure>
                <figure class="image-2 rotate-me"><img src="{{ asset('assets/frontend/images/icons/wheel-7.png') }}" alt="wheel icon"></figure>
            </div>
            <div class="auto-container">
                @isset ($sponsor_section)
                    <div class="title-inner">
                        @if (!empty($sponsor_section->top_title)) <h2>{{ $sponsor_section->top_title }}</h2> @endif
                        <p>{{ $sponsor_section->title }}</p>
                    </div>
                @endisset
                <div class="clients-carousel owl-carousel owl-theme owl-nav-none">
                    @foreach ($sponsors as $sponsor)
                        <figure class="logo-box">
                            <a href="#"><img src="{{ asset('uploads/img/sponsors/'.$sponsor->sponsor_image) }}" alt="client image"></a>
                        </figure>
                    @endforeach
                </div>
            </div>
        </section>
    @else
        <section class="clients-section text-center">
            <div class="pattern-layer" style="background-image: url({{ asset('assets/frontend/images/shape/shape-59.png') }});"></div>
            <div class="image-layer">
                <figure class="image-1 rotate-me"><img src="{{ asset('assets/frontend/images/icons/wheel-6.png') }}" alt="wheel icon"></figure>
                <figure class="image-2 rotate-me"><img src="{{ asset('assets/frontend/images/icons/wheel-7.png') }}" alt="wheel icon"></figure>
            </div>
            <div class="auto-container">
                <div class="title-inner">
                    <h2>Trusted by innovative companies</h2>
                    <p>Always holds in these matters to this principle of selection: he rejects pleasures to secure other greater<br />pleasures, or else he endures pains to avoid</p>
                </div>
                <div class="clients-carousel owl-carousel owl-theme owl-nav-none">
                    <figure class="logo-box">
                        <a href="#"><img src="{{ asset('uploads/img/dummy/170x35.jpg') }}" alt="client image"></a>
                    </figure>
                    <figure class="logo-box">
                        <a href="#"><img src="{{ asset('uploads/img/dummy/170x35.jpg') }}" alt="client image"></a>
                    </figure>
                    <figure class="logo-box">
                        <a href="#"><img src="{{ asset('uploads/img/dummy/170x35.jpg') }}" alt="client image"></a>
                    </figure>
                    <figure class="logo-box">
                        <a href="#"><img src="{{ asset('uploads/img/dummy/170x35.jpg') }}" alt="client image"></a>
                    </figure>
                    <figure class="logo-box">
                        <a href="#"><img src="{{ asset('uploads/img/dummy/170x35.jpg') }}" alt="client image"></a>
                    </figure>
                    <figure class="logo-box">
                        <a href="#"><img src="{{ asset('uploads/img/dummy/170x35.jpg') }}" alt="client image"></a>
                    </figure>
                    <figure class="logo-box">
                        <a href="#"><img src="{{ asset('uploads/img/dummy/170x35.jpg') }}" alt="client image"></a>
                    </figure>
                    <figure class="logo-box">
                        <a href="#"><img src="{{ asset('uploads/img/dummy/170x35.jpg') }}" alt="client image"></a>
                    </figure>
                    <figure class="logo-box">
                        <a href="#"><img src="{{ asset('uploads/img/dummy/170x35.jpg') }}" alt="client image"></a>
                    </figure>
                    <figure class="logo-box">
                        <a href="#"><img src="{{ asset('uploads/img/dummy/170x35.jpg') }}" alt="client image"></a>
                    </figure>
                </div>
            </div>
        </section>
    @endif
@endif
<!-- clients-section end -->

<!-- main-footer -->
@if ($section_arr['footer_section'] == 1)
    @if (isset($site_info))
        <footer class="main-footer">
            <div class="footer-top">
                <div class="auto-container">
                    <div class="widget-section">
                        <div class="row clearfix">
                            <div class="col-lg-3 col-md-6 col-sm-12 footer-column">
                                <div class="footer-widget contact-widget">
                                    <div class="widget-title">
                                        <h3>{{ __('frontend.contact_us') }}</h3>
                                        <div class="decor" style="background-image: url({{ asset('assets/frontend/images/icons/decor-3.png') }});"></div>
                                    </div>
                                    <div class="widget-content">
                                        @if (!empty($site_info->address))
                                            <div class="box">
                                                <h5>{{ __('frontend.office_location') }}</h5>
                                                <p><a href="{{ $site_info->address_map_link }}" class="text-white">{{ $site_info->address }}</a></p>
                                            </div>
                                        @endif
                                        @if (!empty($site_info->email) || !empty($site_info->phone))
                                            <div class="box">
                                                <h5>{{ __('frontend.quick_contact') }}</h5>
                                                <ul class="clearfix">
                                                    @if (!empty($site_info->phone)) <li><i class="flaticon-music"></i><a href="tel:{{ $site_info->phone }}">{{ $site_info->phone }}</a></li> @endif
                                                    @if (!empty($site_info->email)) <li><i class="flaticon-gmail"></i><a href="mailto:{{ $site_info->email }}">{{ $site_info->email }}</a></li> @endif
                                                </ul>
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-12 footer-column">
                                <div class="footer-widget links-widget">
                                    <div class="widget-title">
                                        <h3>{{ __('frontend.useful_links') }}</h3>
                                        <div class="decor" style="background-image: url({{ asset('assets/frontend/images/icons/decor-3.png') }});"></div>
                                    </div>
                                    <div class="widget-content">
                                        <div class="row clearfix">
                                            <div class="col-lg-6 col-md-6 col-sm-12 column">
                                                <ul class="links clearfix">
                                                    <li><a href="{{ url('/') }}">{{ __('frontend.home') }}</a></li>
                                                    @if ($section_arr['about_company_page'] == 1) <li><a href="{{ url('about') }}">{{ __('frontend.about_company') }}</a></li> @endif
                                                    @if ($section_arr['team_page'] == 1) <li><a href="{{ url('team') }}">{{ __('frontend.meet_our_team') }}</a></li> @endif
                                                    @if ($section_arr['contact_us_page'] == 1) <li><a href="{{ url('contact') }}">{{ __('frontend.get_in_touch') }}</a></li> @endif
                                                </ul>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-12 column">
                                                <ul class="links clearfix">
                                                    @if ($section_arr['gallery_page'] == 1) <li><a href="{{ url('gallery') }}">{{ __('frontend.gallery') }}</a></li> @endif
                                                    @if ($section_arr['faq_page'] == 1) <li><a href="{{ url('faq') }}">{{ __('frontend.faqs') }}</a></li> @endif
                                                    @if ($section_arr['works_page'] == 1) <li><a href="{{ url('works') }}">{{ __('frontend.works') }}</a></li> @endif
                                                    @if ($section_arr['blogs_page'] == 1) <li><a href="{{ url('blogs') }}">{{ __('frontend.blogs') }}</a></li> @endif
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12 col-sm-12 footer-column">
                                <div class="footer-widget about-widget">
                                    <div class="widget-title">
                                        <h3>{{ __('frontend.about_company') }}</h3>
                                        <div class="decor" style="background-image: url({{ asset('assets/frontend/images/icons/decor-3.png') }});"></div>
                                    </div>
                                    <div class="widget-content">
                                        <div class="box @if (empty($general_site_image->site_footer_logo_image)) pl-0 @endif">
                                            @if (!empty($general_site_image->site_footer_logo_image))
                                                <figure class="logo">
                                                    <a href="{{ url('/') }}"><img src="{{ asset('uploads/img/general/'.$general_site_image->site_footer_logo_image) }}" alt="footer logo"></a>
                                                </figure>
                                            @endif
                                            <div class="text">
                                                <p>{{ $site_info->short_desc }}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
           @if ($section_arr['copyright_section'] == 1)
                <div class="footer-bottom style-one">
                    <div class="auto-container clearfix">
                        @if (!empty($site_info->copyright))
                            <div class="copyright pull-left">
                                <p>{{ $site_info->copyright }}</p>
                            </div>
                        @endif
                        <ul class="footer-nav pull-right">
                            @foreach ($footer_pages as $footer_page)
                                <li><a href="{{ url('page/'.$footer_page->page_slug) }}">{{ $footer_page->page_title }}</a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
               @endif
        </footer>
    @else
        <footer class="main-footer">
            <div class="footer-top">
                <div class="auto-container">
                    <div class="widget-section">
                        <div class="row clearfix">
                            <div class="col-lg-3 col-md-6 col-sm-12 footer-column">
                                <div class="footer-widget contact-widget">
                                    <div class="widget-title">
                                        <h3>Contact Us</h3>
                                        <div class="decor" style="background-image: url({{ asset('assets/frontend/images/icons/decor-3.png') }});"></div>
                                    </div>
                                    <div class="widget-content">
                                        <div class="box">
                                            <h5>Office Location</h5>
                                            <p>124, Queens walk 2nd cross newyork 5241</p>
                                        </div>
                                        <div class="box">
                                            <h5>Quick Contact</h5>
                                            <ul class="clearfix">
                                                <li><i class="flaticon-music"></i><a href="tel:0055567890">+00 555 67 890</a></li>
                                                <li><i class="flaticon-gmail"></i><a href="mailto:supportteam@info.com">supportteam@info.com</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-12 footer-column">
                                <div class="footer-widget links-widget">
                                    <div class="widget-title">
                                        <h3>Useful Links</h3>
                                        <div class="decor" style="background-image: url({{ asset('assets/frontend/images/icons/decor-3.png') }});"></div>
                                    </div>
                                    <div class="widget-content">
                                        <div class="row clearfix">
                                            <div class="col-lg-6 col-md-6 col-sm-12 column">
                                                <ul class="links clearfix">
                                                    <li><a href="#">Data Science</a></li>
                                                    <li><a href="#">Ware Housing</a></li>
                                                    <li><a href="#">Analytics</a></li>
                                                    <li><a href="#">Visualisation</a></li>
                                                    <li><a href="#">Migration</a></li>
                                                </ul>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-12 column">
                                                <ul class="links clearfix">
                                                    <li><a href="#">Home</a></li>
                                                    <li><a href="#">Company</a></li>
                                                    <li><a href="#">Services</a></li>
                                                    <li><a href="#">Works</a></li>
                                                    <li><a href="#">Contact</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12 col-sm-12 footer-column">
                                <div class="footer-widget about-widget">
                                    <div class="widget-title">
                                        <h3>About Company</h3>
                                        <div class="decor" style="background-image: url({{ asset('assets/frontend/images/icons/decor-3.png') }});"></div>
                                    </div>
                                    <div class="widget-content">
                                        <div class="box">
                                            <figure class="logo">
                                                <a href="#"><img src="{{ asset('uploads/img/dummy/footer-logo.png') }}" alt="footer logo"></a>
                                            </figure>
                                            <div class="text">
                                                <p>Our goal is to help our companies maintain achieve best class positions their respective industries & our team works occur that pleasures have to be repudiated Our goal is to help our companies maintain achieve best class positions their respective industries.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom style-one">
                <div class="auto-container clearfix">
                    <div class="copyright pull-left">
                        <p>Copyright &copy; <a href="#">Galaxy</a>, All Rights Reserved.</p>
                    </div>
                    <ul class="footer-nav pull-right">
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">Terms & Conditions</a></li>
                    </ul>
                </div>
            </div>
        </footer>
    @endif
@endif
<!-- main-footer end -->


<!--Scroll to top-->
<button class="scroll-top scroll-to-target" data-target="html">
    <span class="fas fa-angle-up"></span>
</button>





<!-- jequery plugins -->
<script src="{{ asset('assets/frontend/js/jquery.js') }}"></script>
<script src="{{ asset('assets/frontend/js/popper.min.js') }}"></script>
<script src="{{ asset('assets/frontend/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/frontend/js/owl.js') }}"></script>
<script src="{{ asset('assets/frontend/js/wow.js') }}"></script>
<script src="{{ asset('assets/frontend/js/validation.js') }}"></script>
<script src="{{ asset('assets/frontend/js/jquery.fancybox.js') }}"></script>
<script src="{{ asset('assets/frontend/js/appear.js') }}"></script>
<script src="{{ asset('assets/frontend/js/jquery.countTo.js') }}"></script>
<script src="{{ asset('assets/frontend/js/scrollbar.js') }}"></script>
<script src="{{ asset('assets/frontend/js/tilt.jquery.js') }}"></script>

<!-- main-js -->
<script src="{{ asset('assets/frontend/js/script.js') }}"></script>

</body>
</html>