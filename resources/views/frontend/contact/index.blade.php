@extends('layouts.frontend.master')

@section('content')

    <!--Page Title-->
    <section class="page-title style-two text-center">
        <div class="pattern-layer" style="background-image: url({{ asset('assets/frontend/images/shape/shape-62.png') }});"></div>
        <div class="auto-container">
            <div class="content-box">
                <h1>{{ __('frontend.get_in_touch') }}</h1>
                <ul class="bread-crumb clearfix">
                    <li><a  href="{{ url('/') }}">{{ __('frontend.home') }}</a></li>
                    <li><span>\\</span></li>
                    <li>{{ __('frontend.contact') }}</li>
                </ul>
            </div>
        </div>
    </section>
    <!--End Page Title-->

    @if (isset($contact_section) || count($contacts) > 0)
        <!-- info-section -->
        <section class="info-section alternate-2">
            <div class="auto-container">
                <div class="inner-container">
                  @isset ($contact_section)
                        <div class="top-inner mb-55">
                            <div class="sec-title text-center">
                                @if (!empty($contact_section->top_title)) <p>{{ $contact_section->top_title }}</p> @endif
                                @if (!empty($contact_section->title)) <h2>{{ $contact_section->title }}</h2> @endif
                                <div class="decor" style="background-image: url({{ asset('assets/frontend/images/icons/decor-1.png') }});"></div>
                            </div>
                            @if (!empty($contact_section->desc))
                                <div class="text text-center">
                                    <p>{{ $contact_section->desc }}</p>
                                </div>
                            @endif
                        </div>
                      @endisset
                    <div class="info-inner">
                        <div class="row clearfix">
                            @foreach ($contacts as $contact)
                                <div class="col-lg-4 col-md-6 col-sm-12 info-column">
                                    <div class="info-box">
                                        @if (!empty($contact->icon)) <div class="hidden-icon"><i class="{{ $contact->icon }}"></i></div> @endif
                                        <div class="box">
                                            @if (!empty($contact->icon))<div class="icon-box"><i class="{{ $contact->icon }}"></i></div> @endif
                                            @if (!empty($contact->title)) <h4>{{ $contact->title }}</h4> @endif
                                            <span>...</span>
                                        </div>
                                        @if (!empty($contact->desc))
                                                <div class="text">
                                                    <p>{{ $contact->desc }}</p>
                                                </div>
                                            @endif
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- info-section end -->


        <!-- contact-section -->
        <section class="contact-section alternate-2">
            <div class="pattern-layer" style="background-image: url({{ asset('assets/frontend/images/shape/shape-48.png') }});"></div>
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                        <div id="content_block_09">
                            <div class="content-box">
                                <!-- Include Alert Blade -->
                                @include('admin.alert.alert')
                                <form action="{{ route('message.store') }}" method="POST" id="contact-form" class="default-form">
                                    @csrf
                                    <div class="form-group">
                                        <label><i class="far fa-user"></i>{{ __('frontend.your_name') }}</label>
                                        <input type="text" name="name" placeholder="{{ __('frontend.enter_name_here') }}" required>
                                    </div>
                                    <div class="form-group">
                                        <label><i class="far fa-envelope"></i>{{ __('frontend.email_address') }}</label>
                                        <input type="email" name="email" placeholder="{{ __('frontend.email_address') }}" required>
                                    </div>
                                    <div class="form-group">
                                        <label><i class="far fa-user"></i>{{ __('frontend.subject') }}</label>
                                        <input type="text" name="subject" placeholder="{{ __('frontend.subject') }}" required>
                                    </div>
                                    <div class="form-group">
                                        <label><i class="fas fa-text-height"></i>{{ __('frontend.message') }}</label>
                                        <textarea name="message" placeholder="{{ __('frontend.message_goes_here') }}"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <button class="theme-btn style-one" type="submit" name="submit-form">{{ __('frontend.send_your_message') }}</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                   @if (!empty($contact_section->contact_image))
                        <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                            <div class="image-box wow slideInRight" data-wow-delay="00ms" data-wow-duration="1500ms">
                                <figure class="image js-tilt"><img src="{{ asset('uploads/img/general/'.$contact_section->contact_image) }}" alt="contact image"></figure>
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </section>
        <!-- contact-section end -->


        <!-- google-map-section -->
       @if (!empty($contact_section->map_iframe))
           <section class="google-map-section">
               <iframe src="{{ $contact_section->map_iframe }}" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
           </section>
       @endif
        <!-- google-map-section end -->
    @else
        <!-- info-section -->
        <section class="info-section alternate-2">
            <div class="auto-container">
                <div class="inner-container">
                    <div class="top-inner mb-55">
                        <div class="sec-title text-center">
                            <p>Contact Information</p>
                            <h2>We’d love to hear from you anytime</h2>
                            <div class="decor" style="background-image: url({{ asset('assets/frontend/images/icons/decor-1.png') }});"></div>
                        </div>
                        <div class="text text-center">
                            <p>Always holds in these matters to this principle of selection he rejects pleasures to secure other greater<br />pleasures, or else he endures pains to avoid</p>
                        </div>
                    </div>
                    <div class="info-inner">
                        <div class="row clearfix">
                            <div class="col-lg-4 col-md-6 col-sm-12 info-column">
                                <div class="info-box">
                                    <div class="hidden-icon"><i class="flaticon-pin"></i></div>
                                    <div class="box">
                                        <div class="icon-box"><i class="flaticon-pin"></i></div>
                                        <h4>Location</h4>
                                        <span>Visit to explore the world</span>
                                    </div>
                                    <div class="text">
                                        <p>124, Queens walk 2nd cross<br />newyork 5241.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-12 info-column">
                                <div class="info-box">
                                    <div class="hidden-icon"><i class="flaticon-music"></i></div>
                                    <div class="box">
                                        <div class="icon-box"><i class="flaticon-music"></i></div>
                                        <h4>Make a Call</h4>
                                        <span>Let’s talk with our experts</span>
                                    </div>
                                    <div class="text">
                                        <p><a href="tel:4455567890">+44 555 67 890</a></p>
                                        <p>Mon - Fri: 09.00 to 18.00</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-12 col-sm-12 info-column">
                                <div class="info-box">
                                    <div class="hidden-icon"><i class="flaticon-gmail"></i></div>
                                    <div class="box">
                                        <div class="icon-box"><i class="flaticon-gmail"></i></div>
                                        <h4>Send a Mail</h4>
                                        <span>Dont’s hesitate to mail</span>
                                    </div>
                                    <div class="text">
                                        <p><a href="mailto:career@example.com">career@example.com</a></p>
                                        <p><a href="mailto:info@example.com">info@example.com</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- info-section end -->


        <!-- contact-section -->
        <section class="contact-section alternate-2">
            <div class="pattern-layer" style="background-image: url({{ asset('assets/frontend/images/shape/shape-48.png') }});"></div>
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                        <div id="content_block_09">
                            <div class="content-box">
                                <form method="post" action="" id="contact-form" class="default-form">
                                    <div class="form-group">
                                        <label><i class="far fa-user"></i>Your Name</label>
                                        <input type="text" name="username" placeholder="Enter name here" required="">
                                    </div>
                                    <div class="form-group">
                                        <label><i class="far fa-envelope"></i>Email Address</label>
                                        <input type="email" name="email" placeholder="Email Address" required="">
                                    </div>
                                    <div class="form-group">
                                        <label><i class="far fa-user"></i>Subject</label>
                                        <input type="text" name="subject" placeholder="Subject" required="">
                                    </div>
                                    <div class="form-group">
                                        <label><i class="fas fa-text-height"></i>Message</label>
                                        <textarea name="message" placeholder="Message goes here"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <button class="theme-btn style-one" type="button" name="submit-form">Send Your Message</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                        <div class="image-box wow slideInRight" data-wow-delay="00ms" data-wow-duration="1500ms">
                            <figure class="image js-tilt"><img src="{{ asset('uploads/img/dummy/840x750.jpg') }}" alt=""></figure>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- contact-section end -->


        <!-- google-map-section -->
        <section class="google-map-section">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2482.605103029958!2d-0.15892108422956047!3d51.52046047963731!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48761ace9a2e67d7%3A0xd458de8d0fdc498e!2sBaker%20St%2C%20Marylebone%2C%20London%2C%20Birle%C5%9Fik%20Krall%C4%B1k!5e0!3m2!1str!2str!4v1610294160432!5m2!1str!2str" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        </section>
        <!-- google-map-section end -->
    @endif

@endsection
