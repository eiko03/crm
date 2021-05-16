@extends('layouts.frontend.master')

@section('content')

    <!--Page Title-->
    <section class="page-title style-two text-center">
        <div class="pattern-layer" style="background-image: url({{ asset('assets/frontend/images/shape/shape-62.png') }});"></div>
        <div class="auto-container">
            <div class="content-box">
                <h1>{{ $work->title }}</h1>
                <ul class="bread-crumb clearfix">
                    <li><a  href="{{ url('/') }}">{{ __('frontend.home') }}</a></li>
                    <li><span>\\</span></li>
                    <li><a  href="{{ url('works') }}">{{ __('frontend.works') }}</a></li>
                    <li><span>\\</span></li>
                    <li>{{ $work->title }}</li>
                </ul>
            </div>
        </div>
    </section>
    <!--End Page Title-->

    <!-- project-details -->
    <section class="project-details">
        <div class="upper-box">
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="col-lg-8 col-md-12 col-sm-12 content-side">
                        <div class="project-details-content">
                            <div class="data-box">
                                <div class="title-box">
                                    <span>{{ $work->work_category->category_name }}</span>
                                    <h3>{{ $work->title }}</h3>
                                    <p>@php echo html_entity_decode($work->desc); @endphp</p>
                                </div>
                            </div>
                            @if (!empty($work->work_image)) <figure class="single-image"><img src="{{ asset('uploads/img/works/'.$work->work_image) }}" alt="work image"></figure> @endif
                            @if (count($work_steps) > 0)
                                <div class="processing-system">
                                    <div class="title-box">
                                        <h3>{{ __('frontend.processing_system') }}</h3>
                                    </div>
                                    <div class="tabs-box">
                                        <div class="tab-btn-box">
                                            <ul class="tab-btns tab-buttons clearfix">
                                                @php $i = 0; @endphp
                                                @foreach ($work_steps as $work_step)
                                                    <li class="tab-btn @if ($i == 0) active-btn @endif" data-tab="#tab-{{ $i++ }}"><span>{{ __('frontend.step') }} {{ $i }}</span></li>
                                                @endforeach
                                            </ul>
                                        </div>
                                        <div class="tabs-content">
                                            @php $i = 0;  @endphp
                                            @foreach ($work_steps as $work_step)
                                                <div class="tab @if ($i == 0) active-tab @endif" id="tab-{{ $i++ }}">
                                                    <div class="content-box">
                                                        @if (!empty($work_step->step_image)) <figure class="image-box"><img src="{{ asset('uploads/img/works/steps/'.$work_step->step_image) }}" alt="step image"></figure> @endif
                                                        <div class="text">
                                                           @if (!empty($work_step->title)) <h3>{{ $work_step->title }}</h3> @endif
                                                           @if (!empty($work_step->desc)) <p>{{ $work_step->desc }}</p> @endif
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            @endif
                          @if (!empty($work->result))
                                <div class="result-box">
                                    <div class="inner">
                                        <h3>{{ __('frontend.results') }}</h3>
                                        <p>{{ $work->result }}</p>
                                    </div>
                                </div>
                            @endif
                        </div>
                    </div>
                    @if (count($work_items) > 0)
                        <div class="col-lg-4 col-md-12 col-sm-12 sidebar-side">
                            <div class="project-sidebar">
                                <div class="info-box">
                                    @foreach ($work_items as $work_item)
                                        <div class="single-item">
                                            <div class="box @if (empty($work_item->icon)) pl-0 @endif">
                                                @if (!empty($work_item->icon)) <div class="icon-box"><i class="{{ $work_item->icon }}"></i></div> @endif
                                                @if (!empty($work_item->title)) <span>{{ $work_item->title }}</span> @endif
                                            </div>
                                           @if (!empty($work_item->desc))
                                                <div class="text">
                                                    <p>{{ $work_item->desc }}</p>
                                                </div>
                                            @endif
                                        </div>
                                    @endforeach
                                        <div class="single-item">
                                            <div class="box">
                                                <div class="icon-box"><i class="fas fa-eye"></i></div>
                                                <span>{{ __('frontend.view') }}</span>
                                            </div>
                                            <div class="text">
                                                <p>{{ $work->view }}</p>
                                            </div>
                                        </div>
                                </div>
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </div>
        @if (isset($previous) || isset($next))
            <div class="nav-btn-box">
                <div class="auto-container">
                    <div class="btn-inner clearfix">
                        @isset ($previous)
                            <div class="btn-left pull-left">
                                <div class="prev-btn">
                                    <h4><a href="{{ url('work/'.$previous->work_slug) }}"><i class="fas fa-angle-double-left"></i>&nbsp;{{ __('frontend.prev_work') }}</a></h4>
                                </div>
                                <div class="box pl-0">
                                    <span>{{ $previous->work_category->category_name }}</span>
                                    <h3>{{ $previous->title }}</h3>
                                </div>
                            </div>
                        @endisset
                        @isset ($next)
                            <div class="btn-right pull-right text-right">
                                <div class="prev-btn">
                                    <h4><a href="{{ url('work/'.$next->work_slug) }}">{{ __('frontend.next_work') }}&nbsp;<i class="fas fa-angle-double-right"></i></a></h4>
                                </div>
                                <div class="box pr-0">
                                    <span>{{ $next->work_category->category_name }}</span>
                                    <h3>{{ $next->title }}</h3>
                                </div>
                            </div>
                        @endisset
                    </div>
                </div>
            </div>
            @endif
    </section>
    <!-- project-details end -->

@endsection
