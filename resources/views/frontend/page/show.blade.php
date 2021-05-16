@extends('layouts.frontend.master')

@section('content')
    <!--Page Title-->
    <section class="page-title style-two text-center">
        <div class="pattern-layer" style="background-image: url({{ asset('assets/frontend/images/shape/shape-62.png') }});"></div>
        <div class="auto-container">
            <div class="content-box">
                <h1>{{ $page->page_title }}</h1>
                <ul class="bread-crumb clearfix">
                    <li><a  href="{{ url('/') }}">{{ __('frontend.home') }}</a></li>
                    <li><span>\\</span></li>
                    <li><a  href="#">{{ __('frontend.pages') }}</a></li>
                    <li><span>\\</span></li>
                    <li>{{ $page->page_title }}</li>
                </ul>
            </div>
        </div>
    </section>
    <!--End Page Title-->

    <!-- faq-page-section -->
    <section class="faq-page-section">
        <div class="auto-container">
            <div class="content-box-two">
                <div class="row clearfix">
                    <div class="col-lg-12 col-md-12 col-sm-12 right-column">
                        <p>@php echo html_entity_decode($page->desc); @endphp</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- faq-page-section end -->


@endsection
