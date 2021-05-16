@extends('layouts.frontend.master')

@section('content')

    <!--Page Title-->
    <section class="page-title style-two text-center">
        <div class="pattern-layer" style="background-image: url({{ asset('assets/frontend/images/shape/shape-62.png') }});"></div>
        <div class="auto-container">
            <div class="content-box">
                <h1>{{ __('frontend.meet_our_team') }}</h1>
                <ul class="bread-crumb clearfix">
                    <li><a  href="{{ url('/') }}">{{ __('frontend.home') }}</a></li>
                    <li><span>\\</span></li>
                    <li>{{ __('frontend.team') }}</li>
                </ul>
            </div>
        </div>
    </section>
    <!--End Page Title-->

    <!-- team-section -->
    @if (isset($team_section) || count($teams) > 0)
        <section class="team-page-section">
            <div class="auto-container">
               @isset ($team_section)
                    <div class="sec-title text-center mb-60">
                        @if (!empty($team_section->top_title)) <p>{{ $team_section->top_title }}</p> @endif
                        <h2>{{ $team_section->title }}</h2>
                        <div class="decor" style="background-image: url({{ asset('assets/frontend/images/icons/decor-1.png') }});"></div>
                    </div>
                   @endisset
                <div class="row clearfix">
                    @php $i = 0 @endphp
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
            </div>
        </section>
    @else
        <section class="team-page-section">
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
            </div>
        </section>
    @endif
    <!-- team-section end -->

@endsection
