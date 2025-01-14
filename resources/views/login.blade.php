@extends('admin.layouts.login')

@section('content')
    <div class="account-page">
        <div class="container-fluid p-0">
            <div class="row align-items-center g-0">

                <div class="col-xl-5">
                    <div class="row">
                        <div class="col-md-8 mx-auto">
                            <div class="card p-3 mb-0">
                                <div class="card-body">

                                    <div class="mb-0 border-0 p-md-5 p-lg-0 p-4">
                                        <div class="mb-4 p-0 text-center">
                                            <a href="#" class="auth-logo">
                                                <img src="{{ asset('admin/assets/images/logo-dark.png') }}" alt="logo-dark" class="mx-auto" height="28" />
                                            </a>
                                        </div>

                                        <div class="pt-0">
                                            <livewire:admin.login />
                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="col-xl-7">
                    <div class="account-page-bg p-md-5 p-4">
                        <div class="text-center">
                            <div class="auth-image">
                                <img src="{{ asset('admin/assets/images/auth-images.svg') }}" class="mx-auto img-fluid"  alt="images">
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
