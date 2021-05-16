@extends('layouts.frontend.master')

@section('content')

    <!--Page Title-->
    <section class="page-title style-two text-center">
        <div class="pattern-layer" style="background-image: url({{ asset('assets/frontend/images/shape/shape-62.png') }});"></div>
        <div class="auto-container">
            <div class="content-box">
                <h1>{{ __('frontend.about_company') }}</h1>
                <ul class="bread-crumb clearfix">
                    <li><a  href="{{ url('/') }}">{{ __('frontend.home') }}</a></li>
                    <li><span>\\</span></li>
                    <li>{{ __('frontend.about_company') }}</li>
                </ul>
            </div>
        </div>
    </section>
    <!--End Page Title-->

    <!-- about-style-six -->
   @if ($section_arr['about_company_section'] == 1)
       @isset ($about_company)
           <section class="about-style-six">
               <div class="auto-container">
                   <div class="row clearfix">
                       <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                           <div id="image_block_05">
                               <div class="image-box">
                                   @if (!empty($about_company->about_image)) <figure class="image image-1"><img src="{{ asset('uploads/img/general/'.$about_company->about_image) }}" alt="about image-1"></figure> @endif
                                   @if (!empty($about_company->about_image_2)) <figure class="image image-2"><img src="{{ asset('uploads/img/general/'.$about_company->about_image_2) }}" alt="about image-2"></figure> @endif
                                   @if (!empty($about_company->about_image_3)) <figure class="image image-3"><img src="{{ asset('uploads/img/general/'.$about_company->about_image_3) }}" alt="about image-3"></figure> @endif
                                   <div class="elipse"></div>
                                   <div class="pattern-layer" style="background-image: url({{ asset('assets/frontend/images/shape/shape-46.png') }});"></div>
                                   <div class="text">
                                       <span>{{ $about_company->experience }}</span>
                                       <h5>{{ $about_company->experience_desc }}</h5>
                                   </div>
                               </div>
                           </div>
                       </div>
                       <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                           <div id="content_block_11">
                               <div class="content-box">
                                   <div class="sec-title text-left">
                                       @if (!empty($about_company->top_title)) <p>{{ $about_company->top_title }}</p> @endif
                                       <h2>{{ $about_company->title }}</h2>
                                       <div class="decor" style="background-image: url({{ asset('assets/frontend/images/icons/decor-1.png') }});"></div>
                                   </div>
                                   <div class="text">
                                       <p>@php echo html_entity_decode($about_company->desc); @endphp</p>
                                   </div>
                                   @if (!empty($about_company->video_link))
                                       <div class="video-btn">
                                           <a href="{{ $about_company->video_link }}" class="lightbox-image" data-caption=""><i class="flaticon-play-button"></i></a>
                                       </div>
                                   @endif
                               </div>
                           </div>
                       </div>
                   </div>
               </div>
           </section>
       @else
           <section class="about-style-six">
               <div class="auto-container">
                   <div class="row clearfix">
                       <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                           <div id="image_block_05">
                               <div class="image-box">
                                   <figure class="image image-1"><img src="{{ asset('uploads/img/dummy/272x313.jpg') }}" alt="about image-1"></figure>
                                   <figure class="image image-2"><img src="{{ asset('uploads/img/dummy/272x313.jpg') }}" alt="about image-2"></figure>
                                   <figure class="image image-3"><img src="{{ asset('uploads/img/dummy/143x143.jpg') }}" alt="about image-3"></figure>
                                   <div class="elipse"></div>
                                   <div class="pattern-layer" style="background-image: url({{ asset('assets/frontend/images/shape/shape-46.png') }});"></div>
                                   <div class="text">
                                       <span>09</span>
                                       <h5>Years<br />of Experience</h5>
                                   </div>
                               </div>
                           </div>
                       </div>
                       <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                           <div id="content_block_11">
                               <div class="content-box">
                                   <div class="sec-title text-left">
                                       <p>About Company</p>
                                       <h2>Mission is to bring the power of AI to every business</h2>
                                       <div class="decor" style="background-image: url({{ asset('assets/frontend/images/icons/decor-1.png') }});"></div>
                                   </div>
                                   <div class="text">
                                       <p>How all this mistaken idea of denouncing pleasure and praising born and we will give you a complete.</p>
                                       <p>To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it but right to find fault with a man who chooses enjoy.</p>
                                   </div>
                                   <div class="video-btn">
                                       <a href="https://www.youtube.com/watch?v=nfP5N9Yc72A&amp;t=28s" class="lightbox-image" data-caption=""><i class="flaticon-play-button"></i></a>
                                   </div>
                               </div>
                           </div>
                       </div>
                   </div>
               </div>
           </section>
       @endisset
   @endif
    <!-- about-style-six end -->

    <!-- chooseus-style-four -->
    @if ($section_arr['why_choose_section'] == 1)
        @if (isset($why_choose_section) || count($why_chooses) > 0)
            <section class="chooseus-style-four">
                <div class="auto-container">
                    <div class="row clearfix">
                        @if (!empty($why_choose_section->why_choose_image) || !empty($why_choose_section->why_choose_image_2))
                            <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                                <div class="image-box">
                                    <figure class="image image-1 wow slideInLeft" data-wow-delay="00ms" data-wow-duration="1500ms"><img src="{{ asset('uploads/img/why_choose/'.$why_choose_section->why_choose_image) }}" alt=""></figure>
                                    <figure class="image image-2 wow slideInLeft" data-wow-delay="300ms" data-wow-duration="1500ms">
                                        <a href="{{ asset('uploads/img/why_choose/'.$why_choose_section->why_choose_image_2) }}" class="lightbox-image"><img src="{{ asset('uploads/img/why_choose/'.$why_choose_section->why_choose_image_2) }}" alt=""></a>
                                    </figure>
                                </div>
                            </div>
                        @endif
                        <div class="@if (!empty($why_choose_section->why_choose_image) || !empty($why_choose_section->why_choose_image_2)) col-lg-6 @else col-lg-12 @endif col-md-12 col-sm-12 content-column">
                            <div id="content_block_12">
                                <div class="content-box">
                                    @isset ($why_choose_section)
                                        <div class="sec-title text-left">
                                            @if (!empty($why_choose_section->top_title)) <p>{{ $why_choose_section->top_title }}</p> @endif
                                            <h2>{{ $why_choose_section->title }}</h2>
                                            <div class="decor" style="background-image: url({{ asset('assets/frontend/images/icons/decor-1.png') }});"></div>
                                        </div>
                                    @endisset
                                    <div class="inner-box">
                                        @foreach ($why_chooses as $why_choose)
                                            <div class="single-item">
                                                @if (!empty($why_choose->title)) <h4>{{ $why_choose->title }}</h4> @endif
                                                <div class="box @if (empty($why_choose->icon)) pl-0 @endif">
                                                    @if (!empty($why_choose->icon)) <div class="icon-box"><i class="{{ $why_choose->icon }}"></i></div> @endif
                                                    @if (!empty($why_choose->desc)) <p>{{ $why_choose->desc }}</p> @endif
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
            <section class="chooseus-style-four">
                <div class="auto-container">
                    <div class="row clearfix">
                        <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                            <div class="image-box">
                                <figure class="image image-1 wow slideInLeft" data-wow-delay="00ms" data-wow-duration="1500ms"><img src="{{ asset('uploads/img/dummy/370x552.jpg') }}" alt=""></figure>
                                <figure class="image image-2  wow slideInLeft" data-wow-delay="300ms" data-wow-duration="1500ms">
                                    <a href="{{ asset('uploads/img/dummy/370x378.jpg') }}" class="lightbox-image"><img src="{{ asset('uploads/img/dummy/370x378.jpg') }}" alt=""></a>
                                </figure>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                            <div id="content_block_12">
                                <div class="content-box">
                                    <div class="sec-title text-left">
                                        <p>Why Choose Us</p>
                                        <h2>Reason for people choose us</h2>
                                        <div class="decor" style="background-image: url({{ asset('assets/frontend/images/icons/decor-1.png') }});"></div>
                                    </div>
                                    <div class="inner-box">
                                        <div class="single-item">
                                            <h4>Global Experience</h4>
                                            <div class="box">
                                                <div class="icon-box"><i class="flaticon-global"></i></div>
                                                <p>Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because circumstances.</p>
                                            </div>
                                        </div>
                                        <div class="single-item">
                                            <h4>Value for Results</h4>
                                            <div class="box">
                                                <div class="icon-box"><i class="flaticon-analysis"></i></div>
                                                <p>Except to obtain some advantage from it? But who has any right to find fault with a consequences. </p>
                                            </div>
                                        </div>
                                        <div class="single-item">
                                            <h4>High-Quality Results</h4>
                                            <div class="box">
                                                <div class="icon-box"><i class="flaticon-medal"></i></div>
                                                <p>This mistakens idea of denouncing pleasure and praising pain was born and will give you a complete system.</p>
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
    <!-- chooseus-style-four end -->

    <!-- team-section -->
    @if ($section_arr['team_section'] == 1)
        @if (isset($team_section) || count($teams) > 0)
            <section class="team-section alternate-2">
                <div class="auto-container">
                    @isset ($team_section)
                        <div class="sec-title text-center mb-60">
                            @if (!empty($team_section->top_title)) <p>{{ $team_section->top_title }}</p> @endif
                            <h2>{{ $team_section->title }}</h2>
                            <div class="decor" style="background-image: url({{ asset('assets/frontend/images/icons/decor-1.png') }});"></div>
                        </div>
                    @endisset
                    <div class="row clearfix">
                        @php $i = 0; @endphp
                        @foreach ($teams as $team)
                            <div class="col-lg-3 col-md-6 col-sm-12 team-block">
                                <div class="team-block-one wow fadeInUp" data-wow-delay="{{ $i+2 }}00ms" data-wow-duration="1500ms">
                                    <div class="inner-box">
                                        <div class="image-box">
                                            @if (!empty($team->team_image))
                                                <img src="{{ asset('uploads/img/teams/'.$team->team_image) }}" alt="team image">
                                            @else
                                                <img src="{{ asset('uploads/img/dummy/no-image.jpg') }}" alt="team image">
                                            @endif
                                            <ul class="contact-box clearfix">
                                                @if (!empty($team->mail))
                                                    <li class="email">
                                                        <a href="mailto:{{ $team->mail }}">
                                                            <i class="flaticon-gmail"></i>
                                                            <span>{{ $team->mail }}</span>
                                                        </a>
                                                    </li>
                                                @endif
                                                <li class="social-links">
                                                    <a href="#" class="share"><i class="flaticon-share-1"></i></a>
                                                    <ul class="list clearfix">
                                                        @if (!empty($team->link_4)) <li><a href="{{ $team->link_4 }}"><i class="fab fa-linkedin"></i></a></li> @endif
                                                        @if (!empty($team->link_3)) <li><a href="{{ $team->link_3 }}"><i class="fab fa-instagram"></i></a></li> @endif
                                                        @if (!empty($team->link_2)) <li><a href="{{ $team->link_2 }}"><i class="fab fa-twitter"></i></a></li> @endif
                                                        @if (!empty($team->link_1)) <li><a href="{{ $team->link_1 }}"><i class="fab fa-facebook-f"></i></a></li> @endif
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="lower-content">
                                            @if (!empty($team->name)) <h4><a href="#">{{ $team->name }}</a></h4> @endif
                                            @if (!empty($team->job)) <span class="designation">{{ $team->job }}</span> @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    @if (count($teams) > 3 && $section_arr['team_page'] == 1) <div class="more-btn"><a href="{{ url('team') }}" class="btn-style-four">{{ __('frontend.meet_all_members') }}<span>+</span></a></div> @endif
                </div>
            </section>
        @else
            <section class="team-section alternate-2">
                <div class="auto-container">
                    <div class="sec-title text-center mb-60">
                        <p>team MEmbers</p>
                        <h2>What our clients say about our<br />awesome solutions</h2>
                        <div class="decor" style="background-image: url({{ asset('assets/frontend/images/icons/decor-1.png') }});"></div>
                    </div>
                    <div class="row clearfix">
                        <div class="col-lg-3 col-md-6 col-sm-12 team-block">
                            <div class="team-block-one wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
                                <div class="inner-box">
                                    <div class="image-box">
                                        <img src="{{ asset('uploads/img/dummy/245x250.jpg') }}" alt="team image">
                                        <ul class="contact-box clearfix">
                                            <li class="email">
                                                <a href="mailto:carlene@naxly.com">
                                                    <i class="flaticon-gmail"></i>
                                                    <span>brenda@galaxy.com</span>
                                                </a>
                                            </li>
                                            <li class="social-links">
                                                <a href="#" class="share"><i class="flaticon-share-1"></i></a>
                                                <ul class="list clearfix">
                                                    <li><a href="#"><i class="fab fa-skype"></i></a></li>
                                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="lower-content">
                                        <h4><a href="#">Elliot Frankie</a></h4>
                                        <span class="designation">Director</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 team-block">
                            <div class="team-block-one wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
                                <div class="inner-box">
                                    <div class="image-box">
                                        <img src="{{ asset('uploads/img/dummy/245x250.jpg') }}" alt="team image">
                                        <ul class="contact-box clearfix">
                                            <li class="email">
                                                <a href="mailto:carlene@naxly.com">
                                                    <i class="flaticon-gmail"></i>
                                                    <span>brenda@galaxy.com</span>
                                                </a>
                                            </li>
                                            <li class="social-links">
                                                <a href="#" class="share"><i class="flaticon-share-1"></i></a>
                                                <ul class="list clearfix">
                                                    <li><a href="#"><i class="fab fa-skype"></i></a></li>
                                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="lower-content">
                                        <h4><a href="#">Gertie Carlene</a></h4>
                                        <span class="designation">Head of Data Science</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 team-block">
                            <div class="team-block-one wow fadeInUp" data-wow-delay="400ms" data-wow-duration="1500ms">
                                <div class="inner-box">
                                    <div class="image-box">
                                        <img src="{{ asset('uploads/img/dummy/245x250.jpg') }}" alt="team image">
                                        <ul class="contact-box clearfix">
                                            <li class="email">
                                                <a href="mailto:carlene@naxly.com">
                                                    <i class="flaticon-gmail"></i>
                                                    <span>brenda@galaxy.com</span>
                                                </a>
                                            </li>
                                            <li class="social-links">
                                                <a href="#" class="share"><i class="flaticon-share-1"></i></a>
                                                <ul class="list clearfix">
                                                    <li><a href="#"><i class="fab fa-skype"></i></a></li>
                                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="lower-content">
                                        <h4><a href="#">Leone Felix</a></h4>
                                        <span class="designation">Head of Marketing</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 team-block">
                            <div class="team-block-one wow fadeInUp" data-wow-delay="600ms" data-wow-duration="1500ms">
                                <div class="inner-box">
                                    <div class="image-box">
                                        <img src="{{ asset('uploads/img/dummy/245x250.jpg') }}" alt="team image">
                                        <ul class="contact-box clearfix">
                                            <li class="email">
                                                <a href="mailto:carlene@naxly.com">
                                                    <i class="flaticon-gmail"></i>
                                                    <span>brenda@galaxy.com</span>
                                                </a>
                                            </li>
                                            <li class="social-links">
                                                <a href="#" class="share"><i class="flaticon-share-1"></i></a>
                                                <ul class="list clearfix">
                                                    <li><a href="#"><i class="fab fa-skype"></i></a></li>
                                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="lower-content">
                                        <h4><a href="#">Brenda Genevieve</a></h4>
                                        <span class="designation">Head of R&D</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="more-btn"><a href="#" class="btn-style-four">Meet All Members<span>+</span></a></div>
                </div>
            </section>
        @endif
    @endif
    <!-- team-section end -->

@endsection
