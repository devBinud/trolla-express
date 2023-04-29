@extends('admin.layout')
@section('title', 'Admin Dashboard')
@section('custom-css')

@endsection
@section('body')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            <div class="col-lg-12 mb-4 order-0">
                <div class="card">
                    <div class="d-flex align-items-end row">
                        <div class="col-sm-7">
                            <div class="card-body">
                                <h2 class="card-title text-primary">Welcome To Admin 🧑‍💻🧑‍💻</h2>
                                <a href="{{url('/')}}" target="_blank" class="btn btn-sm btn-outline-primary">View Website
                                </a>
                            </div>
                        </div>
                        <div class="col-sm-5 text-center text-sm-left">
                            <div class="card-body pb-0 px-0 px-md-4">
                                <img src="../assets/img/illustrations/man-with-laptop-light.png" height="140"
                                    alt="View Badge User" data-app-dark-img="illustrations/man-with-laptop-dark.png"
                                    data-app-light-img="illustrations/man-with-laptop-light.png">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 col-md-12 order-1">
                <div class="row g-3">
                    <div class="col-lg-4 col-md-4 col-4 mb-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="card-title d-flex align-items-start justify-content-between">
                                    <div class="avatar flex-shrink-0">
                                        <img src="{{asset('assets/img/icons/unicons/blog.png')}}" alt="chart success"
                                            class="rounded">
                                    </div>

                                </div>
                                <span class="fw-semibold d-block mb-1">Total Blog Post</span>
                                <h3 class="card-title mb-2">{{$blogcount}}</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-4 mb-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="card-title d-flex align-items-start justify-content-between">
                                    <div class="avatar flex-shrink-0">
                                       <img src="{{asset('assets/img/icons/unicons/blog.png')}}" alt="chart success"
                                            class="rounded">
                                    </div>

                                </div>
                                <span>Today Blog Post</span>
                                <h3 class="card-title text-nowrap mb-1">{{$todayblog}}</h3>
                            </div>
                        </div>
                    </div>

                     <div class="col-lg-4 col-md-4 col-4 mb-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="card-title d-flex align-items-start justify-content-between">
                                    <div class="avatar flex-shrink-0">
                                        <img src="{{asset('assets/img/icons/unicons/blog.png')}}" alt="chart success"
                                            class="rounded">
                                    </div>

                                </div>
                                <span class="fw-semibold d-block mb-1">Total Blog Category</span>
                                <h3 class="card-title mb-2">{{$categoryCount}}</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>

    </div>

@endsection
@section('custom-js')

@endsection
