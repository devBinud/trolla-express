@extends('public.layout.layout')
@section('title', 'Blog')
@section('meta-description', '')
@section('meta-keywords', '')
@section('ogtitle', '')
@section('meta-og-description', '')
@section('url', 'https://www.trollaexpress.com/page?action=blog')
@section('image', '')

@section('custom-css')
    <link rel="stylesheet" href="{{ asset('assets/public/css/Services.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/public/bootstrap/css/bootstrap.min.css') }}">
    {{-- <link rel="stylesheet" href="{{ asset('assets/px-pagination/px-pagination.css') }}"> --}}
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

    <style>
        @media only screen and (max-width: 576px) {
            .blogcard {
                margin-left: 36px;
                margin-top: 11px;
                margin-bottom: 16px;
            }

            .u-custom-font {
                margin-left: 47px;
                margin-bottom: 17px;
            }

            .ctt {
                margin-bottom: 22px;
            }
        }

        @media (min-width: 1200px) {
            .u-header .u-logo-image-1 {
                width: 100%;
                height: 97%;
            }
        }

        .u-text-white,
        a.u-button-style.u-text-white,
        a.u-button-style.u-text-white[class*="u-border-"] {
            color: #332929 !important;
        }

        .u-svg-link {
            color: black;
        }

        .date {
            color: #7aa2c4;
        }

        .cat{
            color: #5e8db5;
            letter-spacing: 2px;
            font-family: Arial, Helvetica, sans-serif;
            text-decoration: none;
            text-transform: uppercase;
            font-size: 0.7rem ;
            display: contents;
        }

        .blog-date {
            color: red ;
            font-size: 0.8rem
        }



        
    </style>

@endsection
@section('body')

    <section class="u-clearfix u-image u-shading u-csection-1" id="sec-60a4" data-image-width="1280"
        data-image-height="627" style="background-color:linear-gradient(0deg, rgba(0,0,0,0.6), rgba(0,0,0,0.6))">
        <div class="u-clearfix u-sheet u-sheet-1" style="margin-top: 99px;">
            <h3 class="u-custom-font u-text u-text-default u-text-1 text-dark">RECENT BLOG POSTS </h3>


            <!-- Start Blog Card-->
            @if (count($allblogcat) > 0)
                <section id="recent-blog-posts" class="recent-blog-posts">
                    <div class="container" data-aos="fade-up">

                        <div class="row">
                            <div class="col-lg-9 col-md-8 col-sm-12">
                                <div class="row" style="">
                                    @foreach ($allblog as $data)
                                        @if ($data->is_published == 1)
                                            <div class="col-md-6 mt-2 mb-4" data-aos="fade-up" data-aos-delay="100">
                                                <div class="post-item position-relative h-100">

                                                    <div class="post-img position-relative overflow-hidden">
                                                        <img src="{{ asset('assets/uploads/blog-img/' . $data->image) }}"
                                                            class="img-fluid" alt="{{ $data->title }}">
                                                    </div>

                                                    <div class="d-flex flex-column">
                                                        <span class="blog-date mt-4">{{ date('d M,Y', strtotime($data->created_at)) }}</span>


                                                        @foreach (explode(',',$data->cat_names) as $ic=> $category)

                                                            <a class="cat" style=" color: #195af7;"
                                                            href="{{ url('page?action=search-category&catName=') . $category }}">{{ $category }}</a>

                                                            @if($ic < (count(explode(',',$data->cat_names))-1))<span class="cat">,</span> @endif
                                                            
                                                        @endforeach
                                                        
       

                                                        @if (strlen(html_entity_decode(strip_tags($data->title))) >= 1)
                                                            <h6 class="post-title text-dark mt-2" style="min-height: 40px">
                                                                {{ substr(strip_tags($data->title), 0, 43) }}......
                                                            </h6>
                                                        @endif

                                                        <a href="{{ url('blog-details', ['slug' => $data->slug]) }}"
                                                            class="readmore"><span>Read
                                                                More</span><i class="bi bi-arrow-right"></i>
                                                        </a>
                                                              
                                                               
                                                    </div>

                                                </div>
                                            </div><!-- End post item -->
                                        @endif
                                    @endforeach
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-4 col-sm-12 mt-1 ctt">
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
            @else
                <div class="p-5 mb-5 m-5">
                    <h1 class="text-danger text-center">No Record Found !!</h1>
                </div>
            @endif
        </div>
    </section>

    <div id="paginationBox" class="my-5"></div>

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

    <script>
        $(document).ready(function() {
            //pagination
            $("#paginationBox").pxpaginate({
                currentpage: {{ $allblog->currentPage() }},
                totalPageCount: {{ ceil($allblog->total() / $allblog->perPage()) }},
                maxBtnCount: 10,
                align: "center",
                nextPrevBtnShow: true,
                firstLastBtnShow: true,
                prevPageName: "<",
                nextPageName: ">",
                lastPageName: "<<",
                firstPageName: ">>",
                callback: function(pagenumber) {
                    window.location.replace("{!! url('page?action=blog&page=') !!}" + pagenumber);
                },
            });

        });
    </script>
@endsection
