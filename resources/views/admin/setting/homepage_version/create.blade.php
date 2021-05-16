@extends('layouts.admin.master')

@section('content')

    <!-- Include Alert Blade -->
    @include('admin.alert.alert')

    <!-- Form row -->
    <div class="row">
        <div class="col-xl-12 box-margin height-card">
            <div class="card card-body">
                <h4 class="card-title">{{ __('content.homepage_versions') }}</h4>
                    <form action="{{ route('homepage-version.update', $homepage_version->id) }}" method="POST">
                        @method('PUT')
                        @csrf
                        <div class="row">
                            <div class="col-md-3">
                                <div class="hiddenradio">
                                    <label>
                                        <input type="radio" name="choose_version" value="0" {{ ($homepage_version->choose_version == 0)? "checked" : "" }}>
                                        <img class="img-fluid shadow" src="{{ asset('uploads/img/dummy/demo-1.jpg') }}" alt="version image">
                                    </label>
                                    <span>{{ __('Data Science') }}</span>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="hiddenradio">
                                    <label>
                                        <input type="radio" name="choose_version" value="1" {{ ($homepage_version->choose_version == 1)? "checked" : "" }}>
                                        <img class="img-fluid shadow" src="{{ asset('uploads/img/dummy/demo-1.jpg') }}" alt="version image">
                                    </label>
                                    <span>{{ __('Artificial Intelligence') }}</span>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="hiddenradio">
                                    <label>
                                        <input type="radio" name="choose_version" value="2" {{ ($homepage_version->choose_version == 2)? "checked" : "" }}>
                                        <img class="img-fluid shadow" src="{{ asset('uploads/img/dummy/demo-1.jpg') }}" alt="light image">
                                    </label>
                                    <span>{{ __('Business Intelligence') }}</span>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="hiddenradio">
                                    <label>
                                        <input type="radio" name="choose_version" value="3" {{ ($homepage_version->choose_version == 3)? "checked" : "" }}>
                                        <img class="img-fluid shadow" src="{{ asset('uploads/img/dummy/demo-1.jpg') }}" alt="light image">
                                    </label>
                                    <span>{{ __('Machine Learning') }}</span>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="hiddenradio">
                                    <label>
                                        <input type="radio" name="choose_version" value="4" {{ ($homepage_version->choose_version == 4)? "checked" : "" }}>
                                        <img class="img-fluid shadow" src="{{ asset('uploads/img/dummy/demo-1.jpg') }}" alt="light image">
                                    </label>
                                    <span>{{ __('User Analysis') }}</span>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="hiddenradio">
                                    <label>
                                        <input type="radio" name="choose_version" value="5" {{ ($homepage_version->choose_version == 5)? "checked" : "" }}>
                                        <img class="img-fluid shadow" src="{{ asset('uploads/img/dummy/demo-1.jpg') }}" alt="light image">
                                    </label>
                                    <span>{{ __('Home Boxed') }}</span>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="hiddenradio">
                                    <label>
                                        <input type="radio" name="choose_version" value="6" {{ ($homepage_version->choose_version == 6)? "checked" : "" }}>
                                        <img class="img-fluid shadow" src="{{ asset('uploads/img/dummy/demo-1.jpg') }}" alt="light image">
                                    </label>
                                    <span>{{ __('Chatbot') }}</span>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="hiddenradio">
                                    <label>
                                        <input type="radio" name="choose_version" value="7" {{ ($homepage_version->choose_version == 7)? "checked" : "" }}>
                                        <img class="img-fluid shadow" src="{{ asset('uploads/img/dummy/demo-1.jpg') }}" alt="light image">
                                    </label>
                                    <span>{{ __('Mobile App') }}</span>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="hiddenradio">
                                    <label>
                                        <input type="radio" name="choose_version" value="8" {{ ($homepage_version->choose_version == 8)? "checked" : "" }}>
                                        <img class="img-fluid shadow" src="{{ asset('uploads/img/dummy/demo-1.jpg') }}" alt="light image">
                                    </label>
                                    <span>{{ __('Sentiment Analysis') }}</span>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="hiddenradio">
                                    <label>
                                        <input type="radio" name="choose_version" value="9" {{ ($homepage_version->choose_version == 9)? "checked" : "" }}>
                                        <img class="img-fluid shadow" src="{{ asset('uploads/img/dummy/demo-1.jpg') }}" alt="light image">
                                    </label>
                                    <span>{{ __('Home OnePage') }}</span>
                                </div>
                            </div>
                            <div class="col-md-12 mt-20">
                                <button type="submit" class="btn btn-primary mr-2">{{ __('content.submit') }}</button>
                            </div>
                        </div>
                    </form>
            </div>
        </div>
    </div>
    <!-- end row -->

@endsection