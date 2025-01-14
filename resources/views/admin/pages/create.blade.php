@extends('admin.layouts.main')

@section('content')
    <div class="py-3 d-flex align-items-sm-center flex-sm-row flex-column">
        <div class="flex-grow-1">
            <h4 class="fs-18 fw-semibold m-0">{{ __('Create Page') }}</h4>
        </div>

        <div class="text-end">
            <ol class="breadcrumb m-0 py-0">
                <li class="breadcrumb-item"><a href="javascript: void(0);">{{ __('Pages') }}</a></li>
                <li class="breadcrumb-item active">{{ __('Create Page') }}</li>
            </ol>
        </div>
    </div>


    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title mb-0">{{ __('Pages') }}</h5>
                </div><!-- end card header -->

                <div class="card-body">
                    <form action="{{ route('admin.pages.store') }}" method="post">
                        @method('POST')
                        @csrf
                        <div class="mb-3">
                            <label for="title" class="form-label">{{ __('Page Title') }}</label>
                            <input type="text" id="title" name="title" class="form-control form-control-lg" placeholder="">
                        </div>
                        <div class="mb-3">
                            <label for="slug" class="form-label">{{ __('Page URL') }}</label>
                            <input type="text" id="slug" name="slug" class="form-control form-control-lg" placeholder="">
                        </div>

                        <div class="mb-3">
                            <button type="submit" name="send" id="send" class="btn btn-primary">{{ __('Save') }}</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
