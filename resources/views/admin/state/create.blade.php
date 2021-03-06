@extends('admin.layouts.app')
@section('title', 'Create Country')
@section('css')
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}" />
    <link rel="stylesheet" href="{{asset('css/bootstrap-responsive.min.css')}}" />
    <link rel="stylesheet" href="{{asset('css/uniform.css')}}" />
    <link rel="stylesheet" href="{{asset('css/select2.css')}}" />
    <link rel="stylesheet" href="{{asset('css/matrix-style.css')}}" />
    <link rel="stylesheet" href="{{asset('css/matrix-media.css')}}" />
@endsection
@section('content')
    <div class="m-grid__item m-grid__item--fluid m-wrapper">

        <div class="m-content">

        @include('admin.includes.message')
            <!--begin::Portlet-->
            <div class="m-portlet">
                <div class="m-portlet__head">
                    <div class="m-portlet__head-caption">
                        <div class="m-portlet__head-title">
                            <h3 class="m-portlet__head-text">
                                Create New Country
                            </h3>
                        </div>
                    </div>
                </div>

                <!--begin::Form-->
                <form enctype="multipart/form-data" class="form-horizontal" method="post" action="{{route('state.store')}}" name="basic_validate" id="basic_validate" novalidate="novalidate">
                    @csrf
                    <div class="control-group">
                        <label class="control-label">Country Name</label>
                        <div class="controls">
                            <input class="custom-input" type="text" name="state_name" value="{{old('state_name')}}" id="required">
                        </div>
                    </div>
                   
                    <div class="control-group">
                        <label class="control-label">Country Code</label>
                        <div class="controls">
                            <input class="custom-input" type="text" name="state_code" value="{{old('state_code')}}" id="required">
                        </div>
                    </div>
                    
                  
                    <div class="form-actions">
                        <input type="submit" value="Create" class="btn m-btn--air btn-success">
                        <a class="btn custom-button" href="{{route('state.index')}}">Cancel</a>
                    </div>
                </form>
                <!--end::Form-->
            </div>

            <!--end::Portlet-->
        </div>
    </div>


@endsection
@section('script')
    <script src="{{asset('assets/demo/demo12/custom/crud/forms/validation/form-controls.js')}}" type="text/javascript"></script>
@endsection