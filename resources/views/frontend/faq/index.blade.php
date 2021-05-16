@extends('layouts.frontend.master')

@section('content')

    <!--Page Title-->
    <section class="page-title style-two text-center">
        <div class="pattern-layer" style="background-image: url({{ asset('assets/frontend/images/shape/shape-62.png') }});"></div>
        <div class="auto-container">
            <div class="content-box">
                <h1>{{ __('frontend.frequently_asked_questions') }}</h1>
                <ul class="bread-crumb clearfix">
                    <li><a  href="{{ url('/') }}">{{ __('frontend.home') }}</a></li>
                    <li><span>\\</span></li>
                    <li><a  href="#">{{ __('frontend.pages') }}</a></li>
                    <li><span>\\</span></li>
                    <li>{{ __('frontend.faqs') }}</li>
                </ul>
            </div>
        </div>
    </section>
    <!--End Page Title-->

    <!-- faq-page-section -->
    @if (count($faqs) > 0)
        <section class="faq-page-section">
            <div class="auto-container">
                <div class="content-box-two">
                    <div class="row clearfix">
                        @isset ($faq_section)
                            <div class="col-lg-4 col-md-6 col-sm-12 left-column">
                                <div class="inner-box">
                                    @if (!empty($faq_section->top_title)) <span>{{ $faq_section->top_title }}</span> @endif
                                    <h3>{{ $faq_section->title }}</h3>
                                    <p>{{ $faq_section->desc }}</p>
                                </div>
                            </div>
                        @endisset
                        <div class="col-lg-8 col-md-6 col-sm-12 right-column">
                            <div class="accordion-block">
                                <ul class="accordion-box">
                                    @foreach ($faqs as $faq)
                                        <li class="accordion block @if ($loop->first) active-block @endif">
                                            <div class="acc-btn @if ($loop->first) active @endif">
                                                <div class="icon-outer"><i class="fas fa-plus"></i></div>
                                                <h5>{{ $faq->question }}</h5>
                                            </div>
                                            <div class="acc-content @if ($loop->first) current @endif">
                                                <p>{{ $faq->answer }}</p>
                                            </div>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @else
        <section class="faq-page-section">
            <div class="auto-container">
                <div class="content-box-two">
                    <div class="row clearfix">
                            <div class="col-lg-4 col-md-6 col-sm-12 left-column">
                                {{ __('frontend.updating') }}
                            </div>
                    </div>
                </div>
            </div>
        </section>
    @endif
    <!-- faq-page-section end -->

@endsection
