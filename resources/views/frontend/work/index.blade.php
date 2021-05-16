@extends('layouts.frontend.master')

@section('content')

    <!--Page Title-->
    <section class="page-title style-two text-center">
        <div class="pattern-layer" style="background-image: url({{ asset('assets/frontend/images/shape/shape-62.png') }});"></div>
        <div class="auto-container">
            <div class="content-box">
                <h1>{{ __('frontend.works') }}</h1>
                <ul class="bread-crumb clearfix">
                    <li><a  href="{{ url('/') }}">{{ __('frontend.home') }}</a></li>
                    <li><span>\\</span></li>
                    <li>{{ __('frontend.works') }}</li>
                </ul>
            </div>
        </div>
    </section>
    <!--End Page Title-->

    <!-- project-two-column -->
   @if (count($works) > 0)
       <section class="project-two-column project-page">
           <div class="auto-container">
               <div class="row clearfix">
                   @foreach ($works as $work)
                       <div class="col-lg-6 col-md-6 col-sm-12 case-block">
                           <div class="case-block-two wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
                               <div class="inner-box">
                                   <figure class="image-box">
                                       @if (!empty($work->work_image))
                                           <img src="{{ asset('uploads/img/works/'.$work->work_image) }}" alt="work image">
                                           @else
                                           <img src="{{ asset('uploads/img/dummy/no-image.jpg') }}" alt="work image">
                                       @endif
                                       <div class="link"><a href="{{ url('work/'.$work->work_slug) }}"><i class="flaticon-hyperlink"></i></a></div>
                                       <div class="overlay-layer"></div>
                                   </figure>
                                   <div class="lower-content">
                                       <div class="box">
                                           <div class="icon-box"><i class="flaticon-vision"></i></div>
                                           <p>{{ $work->work_category->category_name }}</p>
                                           <h3><a href="{{ url('work/'.$work->work_slug) }}">{{ $work->title }}</a></h3>
                                       </div>
                                   </div>
                               </div>
                           </div>
                       </div>
                   @endforeach
               </div>
           </div>
       </section>
   @else
       <section class="project-two-column project-page">
           <div class="auto-container">
               <div class="row clearfix">
                   <div class="col-lg-6 col-md-6 col-sm-12 case-block">
                       <div class="case-block-two wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
                           <div class="inner-box">
                               <figure class="image-box">
                                   <img src="{{ asset('uploads/img/dummy/570x400.jpg') }}" alt="work image">
                                   <div class="client-box">
                                       <span>Neuro Jump</span>
                                   </div>
                                   <div class="link"><a href="#"><i class="flaticon-hyperlink"></i></a></div>
                                   <div class="overlay-layer"></div>
                               </figure>
                               <div class="lower-content">
                                   <div class="box">
                                       <div class="icon-box"><i class="flaticon-vision"></i></div>
                                       <p>Banking & Finance</p>
                                       <h3><a href="#">Consulting on Invoice Data Capture</a></h3>
                                   </div>
                               </div>
                           </div>
                       </div>
                   </div>
                   <div class="col-lg-6 col-md-6 col-sm-12 case-block">
                       <div class="case-block-two wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
                           <div class="inner-box">
                               <figure class="image-box">
                                   <img src="{{ asset('uploads/img/dummy/570x400.jpg') }}" alt="work image">
                                   <div class="client-box">
                                       <span>Neuro Jump</span>
                                   </div>
                                   <div class="link"><a href="#"><i class="flaticon-hyperlink"></i></a></div>
                                   <div class="overlay-layer"></div>
                               </figure>
                               <div class="lower-content">
                                   <div class="box">
                                       <div class="icon-box"><i class="flaticon-vision"></i></div>
                                       <p>Entertainment</p>
                                       <h3><a href="#">Automate Feedback Analysis</a></h3>
                                   </div>
                               </div>
                           </div>
                       </div>
                   </div>
                   <div class="col-lg-6 col-md-6 col-sm-12 case-block">
                       <div class="case-block-two wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
                           <div class="inner-box">
                               <figure class="image-box">
                                   <img src="{{ asset('uploads/img/dummy/570x400.jpg') }}" alt="work image">
                                   <div class="client-box">
                                       <span>Neuro Jump</span>
                                   </div>
                                   <div class="link"><a href="#"><i class="flaticon-hyperlink"></i></a></div>
                                   <div class="overlay-layer"></div>
                               </figure>
                               <div class="lower-content">
                                   <div class="box">
                                       <div class="icon-box"><i class="flaticon-vision"></i></div>
                                       <p>Banking & Finance</p>
                                       <h3><a href="#">Big Data Processing Implementation</a></h3>
                                   </div>
                               </div>
                           </div>
                       </div>
                   </div>
                   <div class="col-lg-6 col-md-6 col-sm-12 case-block">
                       <div class="case-block-two wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
                           <div class="inner-box">
                               <figure class="image-box">
                                   <img src="{{ asset('uploads/img/dummy/570x400.jpg') }}" alt="work image">
                                   <div class="client-box">
                                       <span>Neuro Jump</span>
                                   </div>
                                   <div class="link"><a href="#"><i class="flaticon-hyperlink"></i></a></div>
                                   <div class="overlay-layer"></div>
                               </figure>
                               <div class="lower-content">
                                   <div class="box">
                                       <div class="icon-box"><i class="flaticon-vision"></i></div>
                                       <p>Healthcare</p>
                                       <h3><a href="#">BI Implementation for Baby Care App</a></h3>
                                   </div>
                               </div>
                           </div>
                       </div>
                   </div>
                   <div class="col-lg-6 col-md-6 col-sm-12 case-block">
                       <div class="case-block-two wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
                           <div class="inner-box">
                               <figure class="image-box">
                                   <img src="{{ asset('uploads/img/dummy/570x400.jpg') }}" alt="work image">
                                   <div class="client-box">
                                       <span>Neuro Jump</span>
                                   </div>
                                   <div class="link"><a href="#"><i class="flaticon-hyperlink"></i></a></div>
                                   <div class="overlay-layer"></div>
                               </figure>
                               <div class="lower-content">
                                   <div class="box">
                                       <div class="icon-box"><i class="flaticon-vision"></i></div>
                                       <p>Entertainment</p>
                                       <h3><a href="#">Automate Feedback Analysis</a></h3>
                                   </div>
                               </div>
                           </div>
                       </div>
                   </div>
                   <div class="col-lg-6 col-md-6 col-sm-12 case-block">
                       <div class="case-block-two wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
                           <div class="inner-box">
                               <figure class="image-box">
                                   <img src="{{ asset('uploads/img/dummy/570x400.jpg') }}" alt="work image">
                                   <div class="client-box">
                                       <span>Neuro Jump</span>
                                   </div>
                                   <div class="link"><a href="#"><i class="flaticon-hyperlink"></i></a></div>
                                   <div class="overlay-layer"></div>
                               </figure>
                               <div class="lower-content">
                                   <div class="box">
                                       <div class="icon-box"><i class="flaticon-vision"></i></div>
                                       <p>Banking & Finance</p>
                                       <h3><a href="#">Consulting on Invoice Data Capture</a></h3>
                                   </div>
                               </div>
                           </div>
                       </div>
                   </div>
                   <div class="col-lg-6 col-md-6 col-sm-12 case-block">
                       <div class="case-block-two wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
                           <div class="inner-box">
                               <figure class="image-box">
                                   <img src="{{ asset('uploads/img/dummy/570x400.jpg') }}" alt="work image">
                                   <div class="client-box">
                                       <span>Neuro Jump</span>
                                   </div>
                                   <div class="link"><a href="#"><i class="flaticon-hyperlink"></i></a></div>
                                   <div class="overlay-layer"></div>
                               </figure>
                               <div class="lower-content">
                                   <div class="box">
                                       <div class="icon-box"><i class="flaticon-vision"></i></div>
                                       <p>Healthcare</p>
                                       <h3><a href="#">BI Implementation for Baby Care App</a></h3>
                                   </div>
                               </div>
                           </div>
                       </div>
                   </div>
                   <div class="col-lg-6 col-md-6 col-sm-12 case-block">
                       <div class="case-block-two wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
                           <div class="inner-box">
                               <figure class="image-box">
                                   <img src="{{ asset('uploads/img/dummy/570x400.jpg') }}" alt="work image">
                                   <div class="client-box">
                                       <span>Neuro Jump</span>
                                   </div>
                                   <div class="link"><a href="#"><i class="flaticon-hyperlink"></i></a></div>
                                   <div class="overlay-layer"></div>
                               </figure>
                               <div class="lower-content">
                                   <div class="box">
                                       <div class="icon-box"><i class="flaticon-vision"></i></div>
                                       <p>Banking & Finance</p>
                                       <h3><a href="#">Big Data Processing Implementation</a></h3>
                                   </div>
                               </div>
                           </div>
                       </div>
                   </div>
               </div>
           </div>
       </section>
       @endif
    <!-- project-two-column end -->

@endsection
