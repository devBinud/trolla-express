@extends('public.layout.layout')
@section('title', "$blog->title")
@section('ogtitle', "$blog->title")
@section('meta-description')
{!! strip_tags($blog->meta_description) !!}
@endsection
@section('meta-og-description')
{!! strip_tags($blog->meta_description) !!}
@endsection
@section('meta-keywords')
{!! strip_tags($blog->meta_keywords) !!}
@endsection
@section('url', "$blog->meta_url")
@section('image', "assets/uploads/blog-img/$blog->image")
@section('custom-css')
    <link rel="stylesheet" href="{{ asset('assets/public/css/Services.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/public/bootstrap/css/bootstrap.min.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

    <style>
        .u-text-white,
        a.u-button-style.u-text-white,
        a.u-button-style.u-text-white[class*="u-border-"] {
            color: #332929 !important;
        }

        .u-svg-link {
            color: black;
        }

        @media (min-width: 1200px) {
            .u-header .u-logo-image-1 {
                width: 100%;
                height: 97%;
            }
        }

        .date {
            color: #7aa2c4;
        }
    </style>
@endsection
@section('body')


    <section class="u-clearfix u-image u-shading u-section-1" id="sec-60a4" data-image-width="1280" data-image-height="627"
        style="backround-color:white;">
        <div class="u-clearfix u-sheet u-sheet-1">
            <h1 class="u-custom-font u-text u-text-default u-text-1"></h1>

            <div class="blog_box">


                <main id="main">

                    <!-- ======= Blog Details Section ======= -->
                    <section id="blog" class="blog">
                        <div class="container" data-aos="fade-up" data-aos-delay="100">

                            <div class="row g-3" style="margin-top: -64px;">

                                <div class="col-lg-8">

                                    <article class="blog-details">

                                        <div class="post-img">
                                            <img src="{{ asset('assets/uploads/blog-img/' . $blog->image) }}" alt=""
                                                class="img-fluid mb-4">
                                        </div>

                                        <h4 class="title">{{ $blog->title }}</h4>

                                        <div class="meta-top">
                                            <ul>
                                                <li>Publish Date : {{ date('d M, Y', strtotime($blog->created_at)) }}</li>
                                            </ul>
                                        </div>

                                        <!-- End meta top -->

                                        <div class="content">
                                            <p>
                                                {!! $blog->description !!}
                                            </p>


                                        </div><!-- End post content -->
                                    </article>

                                </div>

                                <div class="col-lg-4 col-md-4 col-sm-12">
                                    <section id="blog" class="blog">
                                        <div class="container" data-aos="fade-up" data-aos-delay="100">
                                            <div class="row g-3">
                                                <div class="col-lg-12">
                                                    <div class="sidebar">

                                                        <div class="sidebar-item categories">
                                                            <h3 class="sidebar-title">Categories</h3>
                                                            <ul class="mt-3">
                                                                @foreach ($allblogcat as $data)
                                                                    <li><a
                                                                            href="{{ url('page?action=search-category&catName=') . $data->cat_name }}">{{ $data->cat_name }}</a>
                                                                    </li>
                                                                @endforeach
                                                            </ul>
                                                        </div><!-- End sidebar categories-->

                                                        <div class="sidebar-item recent-posts">
                                                            <h3 class="sidebar-title">Recent Posts</h3>

                                                            <div class="mt-3">

                                                                @foreach ($allblog as $data)
                                                                    @if ($data->is_published == 1)
                                                                        <div class="post-item mt-3">
                                                                            <img src="{{ asset('assets/uploads/blog-img/' . $data->image) }}"
                                                                                alt="" style="border-radius:5px;">
                                                                            <div>
                                                                                <h4>
                                                                                    <a href="{{ url('blog-details', ['slug' => $data->slug]) }}"
                                                                                        class="">
                                                                                        {{ substr(strip_tags($data->title), 0, 43) }}......
                                                                                    </a>
                                                                                </h4>

                                                                                <span
                                                                                    class="date">{{ date('d M,Y', strtotime($data->created_at)) }}</span>
                                                                            </div>
                                                                        </div><!-- End recent post item-->
                                                                    @endif
                                                                @endforeach

                                                            </div>

                                                        </div><!-- End sidebar recent posts-->
                                                        {{-- <div class="sidebar-item tags">
                                                      <h3 class="sidebar-title">Tags</h3>
                                                      <ul class="mt-3">
                                                        <li><a href="#">App</a></li>
                                                        <li><a href="#">IT</a></li>
                                                        <li><a href="#">Business</a></li>
                                                        <li><a href="#">Mac</a></li>
                                                      </ul>
                                                    </div><!-- End sidebar tags--> --}}

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                </div>
                            </div>

                        </div>
                    </section>
                    <!-- End Blog Details Section -->

                </main>


            </div>

        </div>
    </section>

    <section class="u-black u-clearfix u-section-3" id="sec-91ee">
        <div class="u-clearfix u-sheet u-sheet-1">
            <a href="https://play.google.com/store/apps/details?id=com.trolla.seal.loader" target="_blank">
                <img class="u-image u-image-round u-radius-10 u-image-1"
                    src="{{ asset('assets/public/images/Google_Play_Store_badge_EN1.svg') }}" alt=""
                    data-image-width="5436" data-image-height="1604">
                <h3 class="u-text u-text-default-lg u-text-default-md u-text-default-sm u-text-default-xl u-text-1">
                    <span style="font-size: 1.5rem;">Download our app&nbsp;&nbsp;</span><span class="u-icon u-icon-1"><svg
                            class="u-svg-content" viewBox="0 0 64 64" style="width: 1em; height: 1em;">
                            <style type="text/css">
                                .st0 {
                                    fill: currentColor;
                                }
                            </style>
                            <g>
                                <g id="Icon-Arrow-Left" transform="translate(28.000000, 328.000000)">
                                    <path class="st0"
                                        d="M4-272.1c-13.2,0-23.9-10.7-23.9-23.9S-9.2-319.9,4-319.9s23.9,10.7,23.9,23.9     S17.2-272.1,4-272.1L4-272.1z M4-317.3c-11.7,0-21.3,9.6-21.3,21.3s9.6,21.3,21.3,21.3s21.3-9.6,21.3-21.3S15.7-317.3,4-317.3     L4-317.3z"
                                        id="Fill-25"></path>
                                    <polyline class="st0" id="Fill-26"
                                        points="3.5,-282.3 1.7,-284.2 13.4,-296 1.7,-307.8 3.5,-309.7 17.2,-296 3.5,-282.3    ">
                                    </polyline>
                                    <polygon class="st0" id="Fill-27"
                                        points="15.3,-294.6 -8.7,-294.6 -8.7,-297.4 15.3,-297.4    "></polygon>
                                </g>
                            </g>
                        </svg><img>
            </a></span>
            </h3>
        </div>
    </section>


@endsection
@section('custom-js')
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
@endsection
