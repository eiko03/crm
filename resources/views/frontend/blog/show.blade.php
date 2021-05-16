@extends('layouts.frontend.master')

@section('content')

    <!--Page Title-->
    <section class="page-title text-center style-two">
        <div class="pattern-layer" style="background-image: url({{ asset('assets/frontend/images/shape/shape-62.png') }});"></div>
        <div class="auto-container">
            <div class="content-box">
                <div class="file-box"><i class="far fa-folder-open"></i>
                    <p>{{ $blog->category->category_name }}</p>
                </div>
                <h1>{{ $blog->title }}</h1>
                <ul class="bread-crumb clearfix">
                    <li><a  href="{{ url('/') }}">{{ __('frontend.home') }}</a></li>
                    <li><span>\\</span></li>
                    <li><a  href="{{ url('blogs') }}">{{ __('frontend.blogs') }}</a></li>
                    <li><span>\\</span></li>
                    <li>{{ $blog->title }}</li>

                </ul>
                <ul class="info-box clearfix">
                    <li><i class="far fa-user"></i><span>{{ __('frontend.author') }}</span> @if (!empty($blog->author)) {{ $blog->author }} @else {{ __('by Admin') }} @endif</li>
                    <li><i class="far fa-calendar-alt"></i><span>{{ __('frontend.posted_on') }}</span> {{ Carbon\Carbon::parse($blog->created_at)->isoFormat('DD') }} {{ Carbon\Carbon::parse($blog->created_at)->isoFormat('MMM') }} {{ Carbon\Carbon::parse($blog->created_at)->isoFormat('GGGG') }}</li>
                    <li><i class="far fa-comment-alt"></i><span>{{ __('frontend.posted_comments') }}</span> {{ count($comments) }}</li>
                </ul>
            </div>
        </div>
    </section>
    <!--End Page Title-->


    <!-- blog-details -->
    <section class="sidebar-page-container blog-details">
        <div class="auto-container">
            <!-- Include Alert Blade -->
            @include('admin.alert.alert')
            <div class="row clearfix">
                <div class="col-lg-8 col-md-12 col-sm-12 content-side">
                    <div class="blog-details-content">
                        <div class="inner-box">
                            <div class="text">
                                <p>@php echo html_entity_decode($blog->desc); @endphp</p>
                            </div>
                        </div>
                        <div class="comments-area">
                            <div class="group-title">
                                @if (count($comments) > 0)
                                    <h3>{{ __('frontend.comments') }} - {{ count($comments) }}</h3>
                                @endif
                            </div>
                            <div class="comment-box">
                               @foreach ($comments as $comment)
                                    <div class="comment">
                                        <figure class="author-thumb"><i class="fas fa-user font-70"></i></figure>
                                        <div class="comment-inner">
                                            <div class="comment-info">
                                                <h4>{{ $comment->name }},</h4>
                                                <span class="date">{{ Carbon\Carbon::parse($comment->created_at)->isoFormat('DD') }} {{ Carbon\Carbon::parse($comment->created_at)->isoFormat('MMM') }} {{ Carbon\Carbon::parse($comment->created_at)->isoFormat('GGGG') }}</span>
                                            </div>
                                            <div class="text">
                                                <p>{{ $comment->comment }}</p>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="comments-form-area">
                            <div class="group-title">
                                <h3>{{ __('frontend.leave_a_reply') }}</h3>
                            </div>
                            <form  id="contact-form" class="default-form" action="{{ route('comment.store') }}" method="POST">
                                @csrf
                                <input name="blog_id" type="hidden" value="{{ Crypt::encrypt($blog->id) }}">
                                <input name="page" type="hidden" value="{{ Crypt::encrypt(98) }}">
                                <div class="row clearfix">
                                    <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                        <textarea name="comment" placeholder="{{ __('frontend.your_comment') }}"></textarea>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                        <input type="text" name="name" placeholder="{{ __('frontend.name') }}" required="">
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                        <input type="email" name="email" placeholder="{{ __('frontend.email') }}" required="">
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 form-group message-btn">
                                        <button class="theme-btn style-three" type="submit" name="submit-form">{{ __('frontend.post_comments') }}<span>+</span></button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12 sidebar-side">
                    <div class="sidebar">
                        <div class="sidebar-widget sidebar-search">
                            <div class="widget-title">
                                <h3>{{ __('frontend.search') }}</h3>
                            </div>
                            <div class="search-box">
                                <form action="{{ route('blog-page.search') }}" method="POST">
                                    @csrf
                                    <div class="form-group">
                                        <input type="search" name="search" class="search-field" placeholder="{{ __('frontend.keyword') }}" required>
                                        <button type="submit" class="theme-btn style-one">{{ __('frontend.search') }}</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="sidebar-widget sidebar-categories">
                            <div class="widget-title">
                                <h3>{{ __('frontend.categories') }}</h3>
                            </div>
                            <div class="widget-content">
                                <ul class="categories-list clearfix">
                                    <li><a href="{{ url('blogs') }}">{{ __('frontend.all') }}</a></li>
                                    @foreach ($blog_count_categories as $blog_count_category)
                                            @if (isset($blog_count_category->category->category_slug))
                                            <li><a class="@if ($blog_count_category->category->category_name == $blog->category_name) active @endif" href="{{ url('blog/category/'.$blog_count_category->category->category_slug) }}">{{$blog_count_category->category->category_name }} ({{ $blog_count_category->category_count }})</a></li>
                                            @endif
                                    @endforeach
                                </ul>

                            </div>
                        </div>
                        <div class="sidebar-widget sidebar-post">
                            <div class="widget-title">
                                <h3>{{ __('frontend.popular_post') }}</h3>
                            </div>
                            <div class="post-inner">
                               @foreach ($recent_posts as $recent_post)
                                    <div class="post">
                                        <div class="post-date">
                                            <p>{{ Carbon\Carbon::parse($recent_post->created_at)->isoFormat('DD') }}</p><span>{{ Carbon\Carbon::parse($recent_post->created_at)->isoFormat('MMM') }}</span>
                                        </div>
                                        <div class="file-box"><i class="far fa-folder-open"></i>
                                            <p>{{ $recent_post->category->category_name }}</p>
                                        </div>
                                        <h5><a href="{{ url('blog/'.$recent_post->slug) }}">{{ $recent_post->title }}</a></h5>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="sidebar-widget sidebar-tags">
                            <div class="widget-title">
                                <h3>{{ __('frontend.tags') }}</h3>
                            </div>

                            @if (!empty($blog->tag))
                                @php
                                    $str = $blog->tag;
                                    $array_tags = explode(",",$str);
                                @endphp
                            <div class="widget-content">
                                <ul class="tags-list clearfix">
                                    @for ($i = 0; $i < count($array_tags); $i++)
                                        <li>
                                            <a href="#">{{ $array_tags[$i] }}</a>,
                                        </li>
                                    @endfor
                                </ul>
                            </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- blog-modern-sidebar end -->


    <!-- nav-btn -->
    @if (isset($previous) || isset($next))
        <div class="nav-btn-box style-two">
            <div class="auto-container">
                <div class="btn-inner clearfix">
                    @isset ($previous)
                        <div class="btn-left pull-left">
                            <div class="prev-btn">
                                <h4><a href="{{ url('blog/'.$previous->slug) }}"><i class="fas fa-angle-double-left"></i>&nbsp;{{ __('frontend.prev_post') }}</a></h4>
                            </div>
                            <div class="box">
                                <div class="post-date">
                                    <p>{{ Carbon\Carbon::parse($previous->created_at)->isoFormat('DD') }}</p><span>{{ Carbon\Carbon::parse($previous->created_at)->isoFormat('MMM') }}</span>
                                </div>
                                <div class="file-box"><i class="far fa-folder-open"></i>&nbsp;&nbsp;
                                    <p>{{ $previous->category->category_name }}</p>
                                </div>
                                <h4>{{ $previous->title }}</h4>
                            </div>
                        </div>
                    @endisset
                    @isset ($next)
                        <div class="btn-right pull-right text-right">
                            <div class="prev-btn">
                                <h4><a href="{{ url('blog/'.$next->slug) }}">{{ __('frontend.next_post') }}&nbsp;<i class="fas fa-angle-double-right"></i></a></h4>
                            </div>
                            <div class="box">
                                <div class="post-date">
                                    <p>{{ Carbon\Carbon::parse($next->created_at)->isoFormat('DD') }}</p><span>{{ Carbon\Carbon::parse($next->created_at)->isoFormat('MMM') }}</span>
                                </div>
                                <div class="file-box">
                                    <p>{{ $next->category->category_name }} </p>&nbsp;&nbsp;<i class="far fa-folder-open"></i></div>
                                <h4>{{ $next->title }}</h4>
                            </div>
                        </div>
                    @endisset
                </div>
            </div>
        </div>
    @endif
    <!-- nav-btn end -->

@endsection
