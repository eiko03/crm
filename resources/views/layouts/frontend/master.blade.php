<!DOCTYPE html>
<html dir="@if (session()->has('language_direction_from_dropdown')) @if(session()->get('language_direction_from_dropdown') == 1) {{ __('rtl') }} @else {{ __('ltr') }} @endif @else {{ __('ltr') }} @endif" lang="@if (session()->has('language_code_from_dropdown')){{ str_replace('_', '-', session()->get('language_code_from_dropdown')) }}@else{{ str_replace('_', '-',   $language->language_code) }}@endif">
<head>
    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
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
<header class="main-header style-one">
    <div class="auto-container">
        <div class="row clearfix">
            <div class="col-lg-3 col-md-12 col-sm-12 logo-column">
                <div class="logo-box">
                    <figure class="logo">
                        @if (!empty($general_site_image->site_white_logo_image))
                            <a href="{{ url('/') }}"><img src="{{ asset('uploads/img/general/'.$general_site_image->site_white_logo_image) }}" alt="logo image"></a>
                        @else
                            <a href="#"><img src="{{ asset('uploads/img/dummy/white-logo.png') }}" alt="logo image"></a>
                        @endif
                    </figure>
                </div>
            </div>
            <div class="col-lg-9 col-md-12 col-sm-12 outer-column">
                <div class="outer-box">
                    <div class="header-top clearfix">
                        <div class="top-right pull-right clearfix">
                            <div class="support d-none d-lg-block"><i class="flaticon-music"></i><span>{{ __('frontend.start_your_project_today') }}</span> @if (!empty($site_info->phone)) <a href="tel:{{ $site_info->phone }}">{{ $site_info->phone }}</a> @endif </div>
                            <ul class="social-links clearfix  d-none d-lg-block">
                                @foreach ($socials as $social)
                                    <li>
                                        <a href="@if (!empty($social->link)) {{ $social->link }} @else # @endif">
                                            <i class="{{ $social->social_media }}"></i>
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                            <div class="search-box-outer  d-none d-lg-block">
                                <form method="post" class="search-btn">
                                    <button type="button" class="search-toggler"><i class="flaticon-search"></i>{{ __('frontend.search') }}</button>
                                </form>
                            </div>
                            @if (count($display_dropdowns) > 0)
                                <div class="language special-language">
                                    <div class="lang-btn">
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
        <div class="social-links d-md-none d-lg-block">
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


@yield('content')


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

