@extends('layouts.admin.master')

@section('content')

    <!-- Include Alert Blade -->
    @include('admin.alert.alert')

    <!-- Form row -->
    <div class="row">
        <div class="col-xl-12 box-margin height-card">
            <div class="card card-body">
                <h4 class="card-title">{{ __('content.fixed_content') }}</h4>
                @if (isset($fixed_content))
                    <form action="{{ route('fixed-content.update', $fixed_content->id) }}" method="POST">
                        @method('PUT')
                        @csrf
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="title">{{ __('content.title') }} <span class="text-red">*</span></label>
                                    <input type="text" name="title" class="form-control" id="title" value="{{ $fixed_content->title }}" required>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="desc">{{ __('content.desc') }} <span class="text-red">*</span></label>
                                    <textarea name="desc" class="form-control" id="desc" rows="3" required>{{ $fixed_content->desc }}</textarea>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="btn_name_1">{{ __('content.btn_name') }} 1</label>
                                    <input type="text" name="btn_name_1" class="form-control" id="btn_name_1" value="{{ $fixed_content->btn_name_1 }}">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="btn_link_1">{{ __('content.btn_link') }} 1</label>
                                    <input type="text" name="btn_link_1" class="form-control" id="btn_link_1" value="{{ $fixed_content->btn_link_1 }}">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="btn_name_2">{{ __('content.btn_name') }} 2</label>
                                    <input type="text" name="btn_name_2" class="form-control" id="btn_name_2" value="{{ $fixed_content->btn_name_2 }}">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="btn_link_2">{{ __('content.btn_link') }} 2</label>
                                    <input type="text" name="btn_link_2" class="form-control" id="btn_link_2" value="{{ $fixed_content->btn_link_2 }}">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-primary mr-2">{{ __('content.submit') }}</button>
                            </div>
                        </div>
                    </form>
                    @else
                    <form action="{{ route('fixed-content.store') }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="title">{{ __('content.title') }} <span class="text-red">*</span></label>
                                    <input type="text" name="title" class="form-control" id="title" required>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="desc">{{ __('content.desc') }} <span class="text-red">*</span></label>
                                    <textarea name="desc" class="form-control" id="desc" rows="3" required></textarea>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="btn_name_1">{{ __('content.btn_name') }} 1</label>
                                    <input type="text" name="btn_name_1" class="form-control" id="btn_name_1">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="btn_link_1">{{ __('content.btn_link') }} 1</label>
                                    <input type="text" name="btn_link_1" class="form-control" id="btn_link_1">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="btn_name_2">{{ __('content.btn_name') }} 2</label>
                                    <input type="text" name="btn_name_2" class="form-control" id="btn_name_2">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="btn_link_2">{{ __('content.btn_link') }} 2</label>
                                    <input type="text" name="btn_link_2" class="form-control" id="btn_link_2">
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
    <!-- end row -->

@endsection