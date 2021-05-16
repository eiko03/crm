@extends('layouts.admin.master')

@section('content')

    <!-- Include Alert Blade -->
    @include('admin.alert.alert')

    <div class="row">
        <div class="col-xl-12 height-card box-margin">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">{{ __('content.for_frontend') }}</h4>
                    <ul class="nav nav-pills navtab-bg nav-justified">
                        <li class="nav-item">
                            <a href="#frontend1" data-toggle="tab" aria-expanded="false" class="nav-link mb-3">
                                {{ __('content.content_group') }} 1
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#frontend2" data-toggle="tab" aria-expanded="false" class="nav-link mb-3">
                                {{ __('content.content_group') }} 2
                            </a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane  show active" id="frontend1">
                            @if (isset($frontend_one_group_keyword))
                                <form action="{{ route('frontend-one-group-keyword.update_frontend_one_group_keyword', $frontend_one_group_keyword->id) }}" method="POST">
                                    @method('PUT')
                                    @csrf
                                    <input id="language_id" name="language_id" type="hidden" value="{{ $id }}">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="home">Home <span class="text-red">*</span></label>
                                                <input type="text" name="home" class="form-control" id="home" value="{{ $frontend_one_group_keyword->home }}" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="company">Company <span class="text-red">*</span></label>
                                                <input type="text" name="company" class="form-control" id="company" value="{{ $frontend_one_group_keyword->company }}" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="about_company">About Company <span class="text-red">*</span></label>
                                                <input type="text" name="about_company" class="form-control" id="about_company" value="{{ $frontend_one_group_keyword->about_company }}" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="meet_our_team">Meet Our Team <span class="text-red">*</span></label>
                                                <input type="text" name="meet_our_team" class="form-control" id="meet_our_team" value="{{ $frontend_one_group_keyword->meet_our_team }}" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="contact_us">Contact Us <span class="text-red">*</span></label>
                                                <input type="text" name="contact_us" class="form-control" id="contact_us" value="{{ $frontend_one_group_keyword->contact_us }}" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="works">Works <span class="text-red">*</span></label>
                                                <input type="text" name="works" class="form-control" id="works" value="{{ $frontend_one_group_keyword->works }}" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="blogs">Blogs <span class="text-red">*</span></label>
                                                <input type="text" name="blogs" class="form-control" id="blogs" value="{{ $frontend_one_group_keyword->blogs }}" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="pages">Pages <span class="text-red">*</span></label>
                                                <input type="text" name="pages" class="form-control" id="pages" value="{{ $frontend_one_group_keyword->pages }}" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="gallery">Gallery <span class="text-red">*</span></label>
                                                <input type="text" name="gallery" class="form-control" id="gallery" value="{{ $frontend_one_group_keyword->gallery }}" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="team">Team <span class="text-red">*</span></label>
                                                <input type="text" name="team" class="form-control" id="team" value="{{ $frontend_one_group_keyword->team }}" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="faqs">Faqs <span class="text-red">*</span></label>
                                                <input type="text" name="faqs" class="form-control" id="faqs" value="{{ $frontend_one_group_keyword->faqs }}" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="start_your_project_today">Start your project today <span class="text-red">*</span></label>
                                                <input type="text" name="start_your_project_today" class="form-control" id="start_your_project_today" value="{{ $frontend_one_group_keyword->start_your_project_today }}" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="search">Search <span class="text-red">*</span></label>
                                                <input type="text" name="search" class="form-control" id="search" value="{{ $frontend_one_group_keyword->search }}" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="search_here">Search Here <span class="text-red">*</span></label>
                                                <input type="text" name="search_here" class="form-control" id="search_here" value="{{ $frontend_one_group_keyword->search_here }}" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="search_now">Search Now! <span class="text-red">*</span></label>
                                                <input type="text" name="search_now" class="form-control" id="search_now" value="{{ $frontend_one_group_keyword->search_now }}" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="close">Close <span class="text-red">*</span></label>
                                                <input type="text" name="close" class="form-control" id="close" value="{{ $frontend_one_group_keyword->close }}" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="get_in_touch">Get in Touch <span class="text-red">*</span></label>
                                                <input type="text" name="get_in_touch" class="form-control" id="get_in_touch" value="{{ $frontend_one_group_keyword->get_in_touch }}" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="send_your_review">Send Your Review <span class="text-red">*</span></label>
                                                <input type="text" name="send_your_review" class="form-control" id="send_your_review" value="{{ $frontend_one_group_keyword->send_your_review }}" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="contact_info">Contact Info <span class="text-red">*</span></label>
                                                <input type="text" name="contact_info" class="form-control" id="contact_info" value="{{ $frontend_one_group_keyword->contact_info }}" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="useful_links">Useful Links <span class="text-red">*</span></label>
                                                <input type="text" name="useful_links" class="form-control" id="useful_links" value="{{ $frontend_one_group_keyword->useful_links }}" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="office_location">Office Location <span class="text-red">*</span></label>
                                                <input type="text" name="office_location" class="form-control" id="office_location" value="{{ $frontend_one_group_keyword->office_location }}" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="quick_contact">Quick Contact <span class="text-red">*</span></label>
                                                <input type="text" name="quick_contact" class="form-control" id="quick_contact" value="{{ $frontend_one_group_keyword->quick_contact }}" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="your_message_has_been_delivered">Your message has been delivered. <span class="text-red">*</span></label>
                                                <input type="text" name="your_message_has_been_delivered" class="form-control" id="your_message_has_been_delivered" value="{{ $frontend_one_group_keyword->your_message_has_been_delivered }}" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="your_comment_is_pending_approval">Your comment is pending approval. <span class="text-red">*</span></label>
                                                <input type="text" name="your_comment_is_pending_approval" class="form-control" id="your_comment_is_pending_approval" value="{{ $frontend_one_group_keyword->your_comment_is_pending_approval }}" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="updating">Updating... <span class="text-red">*</span></label>
                                                <input type="text" name="updating" class="form-control" id="updating" value="{{ $frontend_one_group_keyword->updating }}" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="all">All <span class="text-red">*</span></label>
                                                <input type="text" name="all" class="form-control" id="all" value="{{ $frontend_one_group_keyword->all }}" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="by_admin">by Admin <span class="text-red">*</span></label>
                                                <input type="text" name="by_admin" class="form-control" id="by_admin" value="{{ $frontend_one_group_keyword->by_admin }}" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="comments">Comments <span class="text-red">*</span></label>
                                                <input type="text" name="comments" class="form-control" id="comments" value="{{ $frontend_one_group_keyword->comments }}" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="search_results">Search Results <span class="text-red">*</span></label>
                                                <input type="text" name="search_results" class="form-control" id="search_results" value="{{ $frontend_one_group_keyword->search_results }}" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="nothing_found">Nothing Found <span class="text-red">*</span></label>
                                                <input type="text" name="nothing_found" class="form-control" id="nothing_found" value="{{ $frontend_one_group_keyword->nothing_found }}" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="keyword">Keyword.. <span class="text-red">*</span></label>
                                                <input type="text" name="keyword" class="form-control" id="keyword" value="{{ $frontend_one_group_keyword->keyword }}" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="popular_post">Popular Post <span class="text-red">*</span></label>
                                                <input type="text" name="popular_post" class="form-control" id="popular_post" value="{{ $frontend_one_group_keyword->popular_post }}" required>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <button type="submit" class="btn btn-primary mr-2">{{ __('content.submit') }}</button>
                                        </div>
                                    </div>
                                </form>
                            @else
                                <form action="{{ route('frontend-one-group-keyword.store_frontend_one_group_keyword') }}" method="POST">
                                    @csrf
                                    <input id="language_id" name="language_id" type="hidden" value="{{ $id }}">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="home">Home <span class="text-red">*</span></label>
                                                <input type="text" name="home" class="form-control" id="home" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="company">Company <span class="text-red">*</span></label>
                                                <input type="text" name="company" class="form-control" id="company" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="about_company">About Company <span class="text-red">*</span></label>
                                                <input type="text" name="about_company" class="form-control" id="about_company" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="meet_our_team">Meet Our Team <span class="text-red">*</span></label>
                                                <input type="text" name="meet_our_team" class="form-control" id="meet_our_team" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="contact_us">Contact Us <span class="text-red">*</span></label>
                                                <input type="text" name="contact_us" class="form-control" id="contact_us" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="works">Works <span class="text-red">*</span></label>
                                                <input type="text" name="works" class="form-control" id="works" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="blogs">Blogs <span class="text-red">*</span></label>
                                                <input type="text" name="blogs" class="form-control" id="blogs" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="pages">Pages <span class="text-red">*</span></label>
                                                <input type="text" name="pages" class="form-control" id="pages" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="gallery">Gallery <span class="text-red">*</span></label>
                                                <input type="text" name="gallery" class="form-control" id="gallery" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="team">Team <span class="text-red">*</span></label>
                                                <input type="text" name="team" class="form-control" id="team" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="faqs">Faqs <span class="text-red">*</span></label>
                                                <input type="text" name="faqs" class="form-control" id="faqs" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="start_your_project_today">Start your project today <span class="text-red">*</span></label>
                                                <input type="text" name="start_your_project_today" class="form-control" id="start_your_project_today" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="search">Search <span class="text-red">*</span></label>
                                                <input type="text" name="search" class="form-control" id="search" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="search_here">Search Here <span class="text-red">*</span></label>
                                                <input type="text" name="search_here" class="form-control" id="search_here" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="search_now">Search Now! <span class="text-red">*</span></label>
                                                <input type="text" name="search_now" class="form-control" id="search_now" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="close">Close <span class="text-red">*</span></label>
                                                <input type="text" name="close" class="form-control" id="close" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="get_in_touch">Get in Touch <span class="text-red">*</span></label>
                                                <input type="text" name="get_in_touch" class="form-control" id="get_in_touch" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="send_your_review">Send Your Review <span class="text-red">*</span></label>
                                                <input type="text" name="send_your_review" class="form-control" id="send_your_review" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="contact_info">Contact Info <span class="text-red">*</span></label>
                                                <input type="text" name="contact_info" class="form-control" id="contact_info" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="useful_links">Useful Links <span class="text-red">*</span></label>
                                                <input type="text" name="useful_links" class="form-control" id="useful_links" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="office_location">Office Location <span class="text-red">*</span></label>
                                                <input type="text" name="office_location" class="form-control" id="office_location" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="quick_contact">Quick Contact <span class="text-red">*</span></label>
                                                <input type="text" name="quick_contact" class="form-control" id="quick_contact" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="your_message_has_been_delivered">Your message has been delivered. <span class="text-red">*</span></label>
                                                <input type="text" name="your_message_has_been_delivered" class="form-control" id="your_message_has_been_delivered" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="your_comment_is_pending_approval">Your comment is pending approval. <span class="text-red">*</span></label>
                                                <input type="text" name="your_comment_is_pending_approval" class="form-control" id="your_comment_is_pending_approval" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="updating">Updating... <span class="text-red">*</span></label>
                                                <input type="text" name="updating" class="form-control" id="updating" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="all">All <span class="text-red">*</span></label>
                                                <input type="text" name="all" class="form-control" id="all" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="by_admin">by Admin <span class="text-red">*</span></label>
                                                <input type="text" name="by_admin" class="form-control" id="by_admin" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="comments">Comments <span class="text-red">*</span></label>
                                                <input type="text" name="comments" class="form-control" id="comments" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="search_results">Search Results <span class="text-red">*</span></label>
                                                <input type="text" name="search_results" class="form-control" id="search_results" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="nothing_found">Nothing Found <span class="text-red">*</span></label>
                                                <input type="text" name="nothing_found" class="form-control" id="nothing_found" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="keyword">Keyword.. <span class="text-red">*</span></label>
                                                <input type="text" name="keyword" class="form-control" id="keyword" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="popular_post">Popular Post <span class="text-red">*</span></label>
                                                <input type="text" name="popular_post" class="form-control" id="popular_post" required>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <button type="submit" class="btn btn-primary mr-2">{{ __('content.submit') }}</button>
                                        </div>
                                    </div>
                                </form>
                            @endif
                        </div>
                        <div class="tab-pane" id="frontend2">
                            @if (isset($frontend_two_group_keyword))
                                <form action="{{ route('frontend-two-group-keyword.update_frontend_two_group_keyword', $frontend_two_group_keyword->id) }}" method="POST">
                                    @method('PUT')
                                    @csrf
                                    <input id="language_id" name="language_id" type="hidden" value="{{ $id }}">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="tags">Tags <span class="text-red">*</span></label>
                                                <input type="text" name="tags" class="form-control" id="tags" value="{{ $frontend_two_group_keyword->tags }}" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="leave_a_reply">Leave A Reply <span class="text-red">*</span></label>
                                                <input type="text" name="leave_a_reply" class="form-control" id="leave_a_reply" value="{{ $frontend_two_group_keyword->leave_a_reply }}" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="name">Name <span class="text-red">*</span></label>
                                                <input type="text" name="name" class="form-control" id="name" value="{{ $frontend_two_group_keyword->name }}" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="email">Email <span class="text-red">*</span></label>
                                                <input type="text" name="email" class="form-control" id="email" value="{{ $frontend_two_group_keyword->email }}" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="your_comment">Your Comment... <span class="text-red">*</span></label>
                                                <input type="text" name="your_comment" class="form-control" id="your_comment" value="{{ $frontend_two_group_keyword->your_comment }}" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="post_comments">Post Comments <span class="text-red">*</span></label>
                                                <input type="text" name="post_comments" class="form-control" id="post_comments" value="{{ $frontend_two_group_keyword->post_comments }}" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="categories">Categories <span class="text-red">*</span></label>
                                                <input type="text" name="categories" class="form-control" id="categories" value="{{ $frontend_two_group_keyword->categories }}" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="your_name">Your Name <span class="text-red">*</span></label>
                                                <input type="text" name="your_name" class="form-control" id="your_name" value="{{ $frontend_two_group_keyword->your_name }}" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="enter_name_here">Enter Name Here <span class="text-red">*</span></label>
                                                <input type="text" name="enter_name_here" class="form-control" id="enter_name_here" value="{{ $frontend_two_group_keyword->enter_name_here }}" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="email_address">Email Addres <span class="text-red">*</span></label>
                                                <input type="text" name="email_address" class="form-control" id="email_address" value="{{ $frontend_two_group_keyword->email_address }}" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="subject">Subject <span class="text-red">*</span></label>
                                                <input type="text" name="subject" class="form-control" id="subject" value="{{ $frontend_two_group_keyword->subject }}" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="message">Message <span class="text-red">*</span></label>
                                                <input type="text" name="message" class="form-control" id="message" value="{{ $frontend_two_group_keyword->message }}" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="message_goes_here">Message goes here <span class="text-red">*</span></label>
                                                <input type="text" name="message_goes_here" class="form-control" id="message_goes_here" value="{{ $frontend_two_group_keyword->message_goes_here }}" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="send_your_message">Send Your Message <span class="text-red">*</span></label>
                                                <input type="text" name="send_your_message" class="form-control" id="send_your_message" value="{{ $frontend_two_group_keyword->send_your_message }}" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="read_more">Read More <span class="text-red">*</span></label>
                                                <input type="text" name="read_more" class="form-control" id="read_more" value="{{ $frontend_two_group_keyword->read_more }}" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="meet_all_members">Meet All Members <span class="text-red">*</span></label>
                                                <input type="text" name="meet_all_members" class="form-control" id="meet_all_members" value="{{ $frontend_two_group_keyword->meet_all_members }}" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="author">Author: <span class="text-red">*</span></label>
                                                <input type="text" name="author" class="form-control" id="author" value="{{ $frontend_two_group_keyword->author }}" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="posted_on">Posted On: <span class="text-red">*</span></label>
                                                <input type="text" name="posted_on" class="form-control" id="posted_on" value="{{ $frontend_two_group_keyword->posted_on }}" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="posted_comments">Post Comments: <span class="text-red">*</span></label>
                                                <input type="text" name="posted_comments" class="form-control" id="posted_comments" value="{{ $frontend_two_group_keyword->posted_comments }}" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="prev_post">Prev Post <span class="text-red">*</span></label>
                                                <input type="text" name="prev_post" class="form-control" id="prev_post" value="{{ $frontend_two_group_keyword->prev_post }}" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="next_post">Next Post <span class="text-red">*</span></label>
                                                <input type="text" name="next_post" class="form-control" id="next_post" value="{{ $frontend_two_group_keyword->next_post }}" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="contact">Contact <span class="text-red">*</span></label>
                                                <input type="text" name="contact" class="form-control" id="contact" value="{{ $frontend_two_group_keyword->contact }}" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="frequently_asked_questions">Frequently Asked Questions <span class="text-red">*</span></label>
                                                <input type="text" name="frequently_asked_questions" class="form-control" id="frequently_asked_questions" value="{{ $frontend_two_group_keyword->frequently_asked_questions }}" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="processing_system">Processing System <span class="text-red">*</span></label>
                                                <input type="text" name="processing_system" class="form-control" id="processing_system" value="{{ $frontend_two_group_keyword->processing_system }}" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="step">Step <span class="text-red">*</span></label>
                                                <input type="text" name="step" class="form-control" id="step" value="{{ $frontend_two_group_keyword->step }}" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="results">Results <span class="text-red">*</span></label>
                                                <input type="text" name="results" class="form-control" id="results" value="{{ $frontend_two_group_keyword->results }}" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="prev_work">Prev Work <span class="text-red">*</span></label>
                                                <input type="text" name="prev_work" class="form-control" id="prev_work" value="{{ $frontend_two_group_keyword->prev_work }}" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="next_work">Next Work <span class="text-red">*</span></label>
                                                <input type="text" name="next_work" class="form-control" id="next_work" value="{{ $frontend_two_group_keyword->next_work }}" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="all_case_studies">All Case Studies <span class="text-red">*</span></label>
                                                <input type="text" name="all_case_studies" class="form-control" id="all_case_studies" value="{{ $frontend_two_group_keyword->all_case_studies }}" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="view">View <span class="text-red">*</span></label>
                                                <input type="text" name="view" class="form-control" id="view" value="{{ $frontend_two_group_keyword->view }}" required>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <button type="submit" class="btn btn-primary mr-2">{{ __('content.submit') }}</button>
                                        </div>
                                    </div>
                                </form>
                            @else
                                <form action="{{ route('frontend-two-group-keyword.store_frontend_two_group_keyword') }}" method="POST">
                                    @csrf
                                    <input id="language_id" name="language_id" type="hidden" value="{{ $id }}">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="tags">Tags <span class="text-red">*</span></label>
                                                <input type="text" name="tags" class="form-control" id="tags" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="leave_a_reply">Leave A Reply <span class="text-red">*</span></label>
                                                <input type="text" name="leave_a_reply" class="form-control" id="leave_a_reply" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="name">Name <span class="text-red">*</span></label>
                                                <input type="text" name="name" class="form-control" id="name" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="email">Email <span class="text-red">*</span></label>
                                                <input type="text" name="email" class="form-control" id="email" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="your_comment">Your Comment... <span class="text-red">*</span></label>
                                                <input type="text" name="your_comment" class="form-control" id="your_comment" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="post_comments">Post Comments <span class="text-red">*</span></label>
                                                <input type="text" name="post_comments" class="form-control" id="post_comments" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="categories">Categories <span class="text-red">*</span></label>
                                                <input type="text" name="categories" class="form-control" id="categories" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="your_name">Your Name <span class="text-red">*</span></label>
                                                <input type="text" name="your_name" class="form-control" id="your_name" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="enter_name_here">Enter Name Here <span class="text-red">*</span></label>
                                                <input type="text" name="enter_name_here" class="form-control" id="enter_name_here" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="email_address">Email Addres <span class="text-red">*</span></label>
                                                <input type="text" name="email_address" class="form-control" id="email_address" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="subject">Subject <span class="text-red">*</span></label>
                                                <input type="text" name="subject" class="form-control" id="subject" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="message">Message <span class="text-red">*</span></label>
                                                <input type="text" name="message" class="form-control" id="message" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="message_goes_here">Message goes here <span class="text-red">*</span></label>
                                                <input type="text" name="message_goes_here" class="form-control" id="message_goes_here" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="send_your_message">Send Your Message <span class="text-red">*</span></label>
                                                <input type="text" name="send_your_message" class="form-control" id="send_your_message" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="read_more">Read More <span class="text-red">*</span></label>
                                                <input type="text" name="read_more" class="form-control" id="read_more" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="meet_all_members">Meet All Members <span class="text-red">*</span></label>
                                                <input type="text" name="meet_all_members" class="form-control" id="meet_all_members" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="author">Author: <span class="text-red">*</span></label>
                                                <input type="text" name="author" class="form-control" id="author" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="posted_on">Posted On: <span class="text-red">*</span></label>
                                                <input type="text" name="posted_on" class="form-control" id="posted_on"  required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="posted_comments">Post Comments: <span class="text-red">*</span></label>
                                                <input type="text" name="posted_comments" class="form-control" id="posted_comments" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="prev_post">Prev Post <span class="text-red">*</span></label>
                                                <input type="text" name="prev_post" class="form-control" id="prev_post" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="next_post">Next Post <span class="text-red">*</span></label>
                                                <input type="text" name="next_post" class="form-control" id="next_post" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="contact">Contact <span class="text-red">*</span></label>
                                                <input type="text" name="contact" class="form-control" id="contact" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="frequently_asked_questions">Frequently Asked Questions <span class="text-red">*</span></label>
                                                <input type="text" name="frequently_asked_questions" class="form-control" id="frequently_asked_questions" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="processing_system">Processing System <span class="text-red">*</span></label>
                                                <input type="text" name="processing_system" class="form-control" id="processing_system" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="step">Step <span class="text-red">*</span></label>
                                                <input type="text" name="step" class="form-control" id="step" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="results">Results <span class="text-red">*</span></label>
                                                <input type="text" name="results" class="form-control" id="results" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="prev_work">Prev Work <span class="text-red">*</span></label>
                                                <input type="text" name="prev_work" class="form-control" id="prev_work" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="next_work">Next Work <span class="text-red">*</span></label>
                                                <input type="text" name="next_work" class="form-control" id="next_work" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="all_case_studies">All Case Studies <span class="text-red">*</span></label>
                                                <input type="text" name="all_case_studies" class="form-control" id="all_case_studies" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="view">View <span class="text-red">*</span></label>
                                                <input type="text" name="view" class="form-control" id="view" required>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <button type="submit" class="btn btn-primary mr-2">{{ __('content.submit') }}</button>
                                        </div>
                                    </div>
                                </form>
                            @endif
                        </div>
                    </div>
                </div>
            </div> <!-- end card-->
        </div> <!-- end col -->
    </div>

@endsection