@extends('public.layout.layout')
@section('title', 'Home')
@section('meta-description', '')
@section('meta-keywords', '')
@section('ogtitle', '')
@section('meta-og-description', '')
@section('url', 'https://www.trollaexpress.com/')
@section('image', '')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">

@section('custom-css')
    <style>
        body {
            padding-right: 0px !important;
        }
        .margin__top__flgscreen{
           margin-top: 140px!important;
        }
        @media screen and (max-width:576px){
            .margin__top__flgscreen{
               margin-top: 0px!important;
        }
        }

        .watch-video {
            padding: 8px 20px;
            border-color: none;
            outline: none;
            color: #fff;
            background-color: #ff4a37;
            border-radius: 20px;
            transition: all 0.5s ease-in-out;
            display: inline-block;
        }

        .modal-body {
            padding: 0 !important;

        }

        .modal-body iframe {
            box-shadow: 0 5px 30px rgba(0, 0, 0, 0.5);

        }


    </style>

@endsection

@section('body')

    <section class="u-clearfix u-image u-lightbox u-section-1" id="sec-ad7d" data-image-width="4096" data-image-height="2731"
        style="background-image:linear-gradient(0deg, rgba(0,0,0,0.6), rgba(0,0,0,0.6)), url('{{ asset('assets/public/images/BGfixed-min.jpg') }}');">
        <div class="u-clearfix u-sheet u-sheet-1">
            <h1
                class="u-align-center-xs u-color-scheme-u10 u-color-style-multicolor-1 u-custom-font u-text u-text-white u-text-1">
                BEYOND LOGISTICS<br>
            </h1>
            <p
                class="u-align-center-xs u-align-left-lg u-align-left-md u-align-left-sm u-align-left-xl u-custom-font u-text u-text-white u-text-2">
                <span class="u-text-custom-color-1"> &nbsp;RUNNING TRUCK&nbsp;&nbsp;IS&nbsp;BETTER THAN&nbsp;</span>
                <span class="u-text-custom-color-1">&nbsp;IDLE TRUCK </span><br/>
                <button type="button" class="btn btn-danger watch-video mt-4" data-bs-toggle="modal" data-bs-target="#myModal"
                    id="modal">
                    Watch Video <i class="fa fa-play ms-1"></i>
                </button>
            </p>
        </div>
    </section>

    <!-- The Modal -->
    <div class="modal fade" id="myModal">
        <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-zoom" role="document">
            <div class="modal-content">
                <!-- Modal body -->
                <div class="modal-body" >

                    <iframe id="yt-player" style="" width="100%" height="400" src="https://www.youtube.com/embed/2EmrL-sx29c"
                        title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        allowfullscreen></iframe>
                </div>

            </div>

        </div>
    </div>
    <!-- The Modal -->



    <section class="u-align-center u-clearfix u-section-2" id="sec-e14b">
        <div class="u-expanded-width u-layout-horizontal u-list u-list-1">
            <div class="u-repeater u-repeater-1">
                <div
                    class="u-align-center u-container-style u-custom-color-1 u-list-item u-repeater-item u-shape-rectangle u-video-cover u-list-item-1">
                    <div class="u-container-layout u-similar-container u-container-layout-1"><span
                            class="u-icon u-icon-circle u-text-white u-icon-1"><svg class="u-svg-link"
                                preserveAspectRatio="xMidYMin slice" viewBox="0 0 55.017 55.017" style="">
                                <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-fe73"></use>
                            </svg><svg class="u-svg-content" viewBox="0 0 55.017 55.017" x="0px" y="0px"
                                id="svg-fe73" style="enable-background:new 0 0 55.017 55.017;">
                                <g>
                                    <path
                                        d="M51.688,23.013H40.789c-0.553,0-1,0.447-1,1s0.447,1,1,1h9.102l2.899,27H2.268l3.403-27h9.118c0.553,0,1-0.447,1-1
    s-0.447-1-1-1H3.907L0,54.013h55.017L51.688,23.013z">
                                    </path>
                                    <path
                                        d="M26.654,38.968c-0.147,0.087-0.304,0.164-0.445,0.255c-0.22,0.142-0.435,0.291-0.646,0.445
    c-0.445,0.327-0.541,0.953-0.215,1.398c0.196,0.267,0.5,0.408,0.808,0.408c0.205,0,0.412-0.063,0.591-0.193
    c0.178-0.131,0.359-0.257,0.548-0.379c0.321-0.208,0.662-0.403,1.014-0.581c0.468-0.237,0.658-0.791,0.462-1.269
    c0.008-0.008,0.018-0.014,0.025-0.022c1.809-1.916,7.905-9.096,10.429-21.058c0.512-2.426,0.627-4.754,0.342-6.919
    c-0.86-6.575-4.945-10.051-11.813-10.051c-6.866,0-10.951,3.476-11.813,10.051c-0.284,2.166-0.169,4.494,0.343,6.919
    C18.783,29.818,24.783,36.97,26.654,38.968z M17.924,11.314c0.733-5.592,3.949-8.311,9.831-8.311c5.883,0,9.098,2.719,9.83,8.311
    c0.255,1.94,0.148,4.043-0.316,6.247C35,28.314,29.59,35.137,27.755,37.207c-1.837-2.072-7.246-8.898-9.514-19.646
    C17.776,15.357,17.67,13.255,17.924,11.314z">
                                    </path>
                                    <path
                                        d="M27.755,19.925c4.051,0,7.346-3.295,7.346-7.346s-3.295-7.346-7.346-7.346s-7.346,3.295-7.346,7.346
    S23.704,19.925,27.755,19.925z M27.755,7.234c2.947,0,5.346,2.398,5.346,5.346s-2.398,5.346-5.346,5.346s-5.346-2.398-5.346-5.346
    S24.808,7.234,27.755,7.234z">
                                    </path>
                                    <path
                                        d="M31.428,37.17c-0.54,0.114-0.884,0.646-0.769,1.187c0.1,0.47,0.515,0.791,0.977,0.791c0.069,0,0.14-0.007,0.21-0.022
    c0.586-0.124,1.221-0.229,1.886-0.313c0.548-0.067,0.938-0.567,0.869-1.115c-0.068-0.549-0.563-0.945-1.115-0.869
    C32.763,36.918,32.07,37.033,31.428,37.17z">
                                    </path>
                                    <path
                                        d="M36.599,37.576c0.022,0.537,0.466,0.957,0.998,0.957c0.015,0,0.029,0,0.044-0.001l2.001-0.083
    c0.551-0.025,0.979-0.493,0.953-1.044c-0.025-0.553-0.539-0.984-1.044-0.954l-1.996,0.083
    C37.003,36.557,36.575,37.023,36.599,37.576z">
                                    </path>
                                    <path
                                        d="M22.433,42.177c-0.514,0.388-1.045,0.761-1.58,1.107c-0.463,0.301-0.595,0.92-0.294,1.384
    c0.191,0.295,0.513,0.455,0.84,0.455c0.187,0,0.375-0.052,0.544-0.161c0.573-0.372,1.144-0.772,1.695-1.188
    c0.44-0.333,0.528-0.96,0.196-1.401C23.501,41.936,22.876,41.844,22.433,42.177z">
                                    </path>
                                    <path
                                        d="M44.72,35.583c-0.338,0.237-0.777,0.409-1.346,0.526c-0.541,0.111-0.889,0.641-0.777,1.182
    c0.098,0.473,0.514,0.798,0.979,0.798c0.067,0,0.135-0.007,0.203-0.021c0.842-0.174,1.526-0.452,2.096-0.853l0.134-0.098
    c0.44-0.334,0.527-0.961,0.194-1.401c-0.334-0.44-0.96-0.526-1.401-0.194L44.72,35.583z">
                                    </path>
                                    <path
                                        d="M8.86,43.402c0.145-0.533-0.171-1.082-0.704-1.226c-0.529-0.149-1.082,0.169-1.226,0.704
    c-0.126,0.464-0.201,0.938-0.225,1.405C6.7,44.4,6.697,44.516,6.697,44.638c0.001,0.196,0.01,0.392,0.029,0.587
    c0.053,0.515,0.487,0.898,0.994,0.898c0.033,0,0.067-0.002,0.103-0.005c0.549-0.057,0.949-0.547,0.894-1.097
    c-0.014-0.131-0.019-0.264-0.02-0.39c0-0.083,0.003-0.166,0.007-0.248C8.72,44.059,8.772,43.728,8.86,43.402z">
                                    </path>
                                    <path
                                        d="M44.698,27.81c-0.794-0.106-1.604-0.041-2.386,0.181c-0.532,0.149-0.841,0.702-0.69,1.233
    c0.124,0.441,0.525,0.729,0.961,0.729c0.091,0,0.182-0.012,0.272-0.038c0.52-0.146,1.055-0.192,1.575-0.122
    c0.562,0.07,1.052-0.311,1.125-0.857C45.629,28.387,45.245,27.884,44.698,27.81z">
                                    </path>
                                    <path
                                        d="M46.688,32.764c-0.163,0.527,0.133,1.088,0.66,1.25c0.099,0.031,0.197,0.045,0.295,0.045c0.428,0,0.823-0.275,0.955-0.705
    c0.099-0.318,0.16-0.641,0.183-0.963c0.005-0.083,0.008-0.167,0.008-0.25c0-0.468-0.086-0.937-0.255-1.392
    c-0.192-0.519-0.771-0.781-1.285-0.59c-0.519,0.192-0.782,0.768-0.59,1.285c0.086,0.232,0.13,0.467,0.13,0.696l-0.003,0.117
    C46.774,32.423,46.742,32.589,46.688,32.764z">
                                    </path>
                                    <path
                                        d="M17.481,45.164c-0.586,0.275-1.183,0.53-1.774,0.759c-0.515,0.198-0.771,0.777-0.572,1.293
    c0.153,0.396,0.531,0.64,0.933,0.64c0.12,0,0.242-0.021,0.36-0.067c0.635-0.245,1.275-0.519,1.903-0.813
    c0.5-0.234,0.715-0.83,0.48-1.33C18.578,45.145,17.984,44.928,17.481,45.164z">
                                    </path>
                                    <path
                                        d="M10.201,41.001c0.161,0,0.325-0.039,0.478-0.122c0.288-0.157,0.595-0.255,0.911-0.289c0.135-0.016,0.273-0.016,0.406,0.002
    c0.563,0.073,1.05-0.313,1.122-0.86c0.072-0.548-0.313-1.05-0.86-1.122c-0.298-0.039-0.601-0.041-0.891-0.008
    c-0.574,0.063-1.128,0.239-1.646,0.521c-0.485,0.265-0.664,0.871-0.399,1.356C9.504,40.813,9.847,41.001,10.201,41.001z">
                                    </path>
                                    <path
                                        d="M9.993,48.842c0.216,0.056,0.436,0.098,0.654,0.124c0.256,0.031,0.512,0.047,0.769,0.047c0.313,0,0.627-0.022,0.94-0.062
    c0.548-0.069,0.937-0.569,0.867-1.117s-0.567-0.934-1.117-0.867c-0.404,0.052-0.812,0.064-1.216,0.015
    c-0.132-0.017-0.264-0.042-0.394-0.075c-0.535-0.143-1.08,0.181-1.22,0.716C9.139,48.158,9.459,48.704,9.993,48.842z">
                                    </path>
                                </g>
                            </svg>


                        </span>
                        <h5 class="u-custom-font u-text u-text-default u-text-1">EASY TRACKING</h5>
                        <p class="u-custom-font u-text u-text-2">Real-time GPS Tracking of in-transit shipment</p>
                    </div>
                </div>
                <div
                    class="u-align-center u-container-style u-custom-color-1 u-list-item u-repeater-item u-shape-rectangle u-list-item-2">
                    <div class="u-container-layout u-similar-container u-container-layout-2"><span
                            class="u-icon u-icon-circle u-text-white u-icon-2"><svg class="u-svg-link"
                                preserveAspectRatio="xMidYMin slice" viewBox="0 0 20 20" style="">
                                <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-0269"></use>
                            </svg><svg class="u-svg-content" viewBox="0 0 20 20" id="svg-0269">
                                <path
                                    d="M8 12C8 12.5523 7.55228 13 7 13C6.44772 13 6 12.5523 6 12C6 11.4477 6.44772 11 7 11C7.55228 11 8 11.4477 8 12Z"
                                    fill="currentColor"></path>
                                <path
                                    d="M13 13C13.5523 13 14 12.5523 14 12C14 11.4477 13.5523 11 13 11C12.4477 11 12 11.4477 12 12C12 12.5523 12.4477 13 13 13Z"
                                    fill="currentColor"></path>
                                <path
                                    d="M8 13.5C8 13.2239 8.22386 13 8.5 13H11.5C11.7761 13 12 13.2239 12 13.5C12 13.7761 11.7761 14 11.5 14H8.5C8.22386 14 8 13.7761 8 13.5Z"
                                    fill="currentColor"></path>
                                <path
                                    d="M4 2C2.89543 2 2 2.89543 2 4V14.5C2 15.3284 2.67157 16 3.5 16H4V16.5C4 17.3284 4.67157 18 5.5 18H6.5C7.32843 18 8 17.3284 8 16.5V16H12V16.5C12 17.3284 12.6716 18 13.5 18H14.5C15.3284 18 16 17.3284 16 16.5V16H16.5C17.3284 16 18 15.3284 18 14.5V4C18 2.89543 17.1046 2 16 2H4ZM13 16.5V16H15V16.5C15 16.7761 14.7761 17 14.5 17H13.5C13.2239 17 13 16.7761 13 16.5ZM7 16V16.5C7 16.7761 6.77614 17 6.5 17H5.5C5.22386 17 5 16.7761 5 16.5V16H7ZM3 4C3 3.44772 3.44772 3 4 3H16C16.5523 3 17 3.44772 17 4V14.5C17 14.7761 16.7761 15 16.5 15H16V9.74621C16 9.54181 15.9749 9.33817 15.9254 9.13987L15.1744 6.1362C15.0075 5.46845 14.4075 5 13.7192 5H6.28078C5.59248 5 4.9925 5.46845 4.82556 6.1362L4.07464 9.13987C4.02507 9.33817 4 9.54181 4 9.74621V15H3.5C3.22386 15 3 14.7761 3 14.5V4ZM5 15V10H15V15H5ZM5.14039 9L5.79571 6.37873C5.85135 6.15615 6.05134 6 6.28078 6H13.7192C13.9487 6 14.1486 6.15615 14.2043 6.37873L14.8596 9H5.14039Z"
                                    fill="currentColor"></path>
                            </svg>


                        </span>
                        <h5 class="u-custom-font u-text u-text-default u-text-3">FLEET MANAGING</h5>
                        <p class="u-custom-font u-text u-text-4">Service to the truck driver which can consume time and
                            cost</p>
                    </div>
                </div>
                <div
                    class="u-align-center u-container-style u-custom-color-1 u-hidden-xs u-list-item u-repeater-item u-shape-rectangle u-video-cover u-list-item-3">
                    <div class="u-container-layout u-similar-container u-container-layout-3"><span
                            class="u-icon u-icon-circle u-text-white u-icon-3"><svg class="u-svg-link"
                                preserveAspectRatio="xMidYMin slice" viewBox="0 0 48 48" style="">
                                <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-8886"></use>
                            </svg><svg class="u-svg-content" viewBox="0 0 48 48" id="svg-8886">
                                <path clip-rule="evenodd"
                                    d="M47,40L47,40c0,2.762-2.238,5-5,5l0,0H6l0,0c-2.762,0-5-2.238-5-5V11  c0-2.209,1.791-4,4-4l0,0h20.171l8.099-2.934c0.513-0.187,1.081,0.078,1.268,0.589L35.391,7H39c2.209,0,4,1.791,4,4v2l0,0  c2.209,0,4,1.791,4,4V40z M5,9L5,9c-1.104,0-2,0.896-2,2s0.896,2,2,2h3.445l0,0h0.189c0.013-0.005,0.021-0.016,0.034-0.021L19.65,9  H5z M34.078,9.181l-1.062-2.924l-0.001,0v0L30.964,7h0.003l-5.514,2h-0.01l-11.039,4h21.062L34.078,9.181z M41,11  c0-1.104-0.896-2-2-2h-2.883l1.454,4H41l0,0V11z M43,15H5l0,0c-0.732,0-1.41-0.211-2-0.555V40c0,1.657,1.344,3,3,3h36  c1.657,0,3-1.343,3-3v-7h-4c-2.209,0-4-1.791-4-4s1.791-4,4-4h4v-8C45,15.896,44.104,15,43,15z M45,31v-4h-4c-1.104,0-2,0.896-2,2  s0.896,2,2,2H45z M41,28h2v2h-2V28z"
                                    fill-rule="evenodd"></path>
                            </svg>


                        </span>
                        <h5 class="u-custom-font u-text u-text-default u-text-5">SECURE PAYMENT</h5>
                        <p class="u-custom-font u-text u-text-6"> Secure earning by referring other shippers or
                            transporters on the platform</p>
                    </div>
                </div>
            </div>
            <a class="u-absolute-vcenter u-gallery-nav u-gallery-nav-prev u-grey-70 u-hidden-lg u-hidden-xl u-icon-circle u-opacity u-opacity-70 u-spacing-10 u-text-white u-gallery-nav-1"
                href="#" role="button">
                <span aria-hidden="true">
                    <svg viewBox="0 0 451.847 451.847">
                        <path
                            d="M97.141,225.92c0-8.095,3.091-16.192,9.259-22.366L300.689,9.27c12.359-12.359,32.397-12.359,44.751,0
c12.354,12.354,12.354,32.388,0,44.748L173.525,225.92l171.903,171.909c12.354,12.354,12.354,32.391,0,44.744
c-12.354,12.365-32.386,12.365-44.745,0l-194.29-194.281C100.226,242.115,97.141,234.018,97.141,225.92z">
                        </path>
                    </svg>
                </span>
                <span class="sr-only">
                    <svg viewBox="0 0 451.847 451.847">
                        <path
                            d="M97.141,225.92c0-8.095,3.091-16.192,9.259-22.366L300.689,9.27c12.359-12.359,32.397-12.359,44.751,0
c12.354,12.354,12.354,32.388,0,44.748L173.525,225.92l171.903,171.909c12.354,12.354,12.354,32.391,0,44.744
c-12.354,12.365-32.386,12.365-44.745,0l-194.29-194.281C100.226,242.115,97.141,234.018,97.141,225.92z">
                        </path>
                    </svg>
                </span>
            </a>
            <a class="u-absolute-vcenter u-gallery-nav u-gallery-nav-next u-grey-70 u-hidden-lg u-hidden-xl u-icon-circle u-opacity u-opacity-70 u-spacing-10 u-text-white u-gallery-nav-2"
                href="#" role="button">
                <span aria-hidden="true">
                    <svg viewBox="0 0 451.846 451.847">
                        <path
                            d="M345.441,248.292L151.154,442.573c-12.359,12.365-32.397,12.365-44.75,0c-12.354-12.354-12.354-32.391,0-44.744
L278.318,225.92L106.409,54.017c-12.354-12.359-12.354-32.394,0-44.748c12.354-12.359,32.391-12.359,44.75,0l194.287,194.284
c6.177,6.18,9.262,14.271,9.262,22.366C354.708,234.018,351.617,242.115,345.441,248.292z">
                        </path>
                    </svg>
                </span>
                <span class="sr-only">
                    <svg viewBox="0 0 451.846 451.847">
                        <path
                            d="M345.441,248.292L151.154,442.573c-12.359,12.365-32.397,12.365-44.75,0c-12.354-12.354-12.354-32.391,0-44.744
L278.318,225.92L106.409,54.017c-12.354-12.359-12.354-32.394,0-44.748c12.354-12.359,32.391-12.359,44.75,0l194.287,194.284
c6.177,6.18,9.262,14.271,9.262,22.366C354.708,234.018,351.617,242.115,345.441,248.292z">
                        </path>
                    </svg>
                </span>
            </a>
        </div>
    </section>
    <section class="u-align-center u-clearfix u-section-3" id="sec-996a">
        <div class="u-clearfix u-sheet u-sheet-1">
            <h2 class="u-custom-font u-text u-text-default u-text-1">WHAT DO WE OFFER?</h2>
            <p class="u-custom-font u-text u-text-2"> Trolla is an online SaaS freight marketplace with an asset-light
                networking model complemented by a custom algorithm-based, robust application to speed-up &amp; automate
                operations  for Shippers and Transporter alike.</p>
            <div class="u-expanded-width u-gallery u-layout-grid u-lightbox u-show-text-on-hover u-gallery-1">
                <div class="u-gallery-inner u-gallery-inner-1">
                    <div class="u-effect-fade u-effect-hover-zoom u-gallery-item u-radius-8 u-shape-round">
                        <div class="u-back-slide u-back-slide-1" data-image-width="5928" data-image-height="3952">
                            <img class="u-back-image u-expanded" src="{{ asset('assets/public/images/home1.jpg') }}">
                        </div>
                        <div class="u-over-slide u-shading u-over-slide-1">
                            <h3 class="u-gallery-heading"></h3>
                            <p class="u-gallery-text"></p>
                        </div>
                    </div>
                    <div class="u-effect-fade u-effect-hover-zoom u-gallery-item u-radius-8 u-shape-round">
                        <div class="u-back-slide u-back-slide-2" data-image-width="7142" data-image-height="3765">
                            <img class="u-back-image u-expanded" src="{{ asset('assets/public/images/home2.jpg') }}">
                        </div>
                        <div class="u-over-slide u-shading u-over-slide-2">
                            <h3 class="u-gallery-heading"></h3>
                            <p class="u-gallery-text"></p>
                        </div>
                    </div>
                    <div class="u-effect-fade u-effect-hover-zoom u-gallery-item u-radius-8 u-shape-round">
                        <div class="u-back-slide u-back-slide-3" data-image-width="4096" data-image-height="2731">
                            <img class="u-back-image u-expanded" src="{{ asset('assets/public/images/home3.png') }}">
                        </div>
                        <div class="u-over-slide u-shading u-over-slide-3">
                            <h3 class="u-gallery-heading"></h3>
                            <p class="u-gallery-text"></p>
                        </div>
                    </div>
                </div>
            </div>
            <h4 class="u-align-center u-custom-font u-text u-text-3"> INCOME BOOST &amp; COST SAVINGS</h4>
            <h4 class="u-align-center u-custom-font u-text u-text-4"> REDUCE IDLE TIME &amp;<br> OPTIMIZE OPERATION
            </h4>
            <h4 class="u-align-center u-custom-font u-text u-text-5"> HASSLE-FREE APP FUNCTIONALITIES</h4>
            <p class="u-align-center u-custom-font u-text u-text-6"> Churn out more profit by reducing miscellaneous
                cost and making the most out of every trip with our advange algorithms and an experianced team.</p>
            <p class="u-align-center u-custom-font u-text u-text-7"> We are attempting to solve the inefficiencies in
                the Indian surface transport sector through a marketplace and technology-enabled services.</p>
            <p class="u-align-left u-custom-font u-text u-text-8"> One stop solution for all the transportation needs
                starting from finding the right transporter, real time tracking to having the goods insured.</p>
        </div>
    </section>
    <section class="u-clearfix u-section-4" id="sec-f218">
        <div class="u-clearfix u-sheet u-sheet-1">
            <h2 class="u-custom-font u-text u-text-default u-text-1">OTHER BENEFIT</h2>
            <img class="u-expanded-width-xs u-image u-image-default u-image-1"
                src="{{ asset('assets/public/images/404errorwithpeopleholdingthenumbers-cuate11.svg') }}" alt=""
                data-image-width="1380" data-image-height="920">
            <h3 class="u-align-center u-custom-font u-text u-text-custom-color-1 u-text-2"> 0% Commision on all
                bookings</h3>
            <p class="u-align-center u-custom-font u-text u-text-3"> We charge no commision for posting load and
                connecting shippers with transporters.</p>
            <img class="u-expanded-width-xs u-image u-image-default u-preserve-proportions u-image-2"
                src="{{ asset('assets/public/images/Profilepic-cuate.svg') }}" alt="" data-image-width="500"
                data-image-height="500">
            <h3 class="u-align-center u-custom-font u-text u-text-custom-color-1 u-text-4"> Branding for your transport
                business</h3>
            <p class="u-align-center u-custom-font u-text u-text-5"> Create your branding for your transport company
                and increase business by 50%</p>
            <img class="u-expanded-width-xs u-image u-image-default u-image-3"
                src="{{ asset('assets/public/images/Security-pana.svg') }}" alt="" data-image-width="750"
                data-image-height="500">
            <h3 class="u-align-center u-custom-font u-text u-text-custom-color-1 u-text-6"> Safe, Secure &amp; Private
                Bidding Process.</h3>
            <p class="u-align-center u-custom-font u-text u-text-7"> Your load bidding process is completely private.
                Our tech makes online truck booking and safe and verified.</p>
        </div>
    </section>
    <section class="u-align-center u-clearfix u-white u-section-5" id="carousel_f3d8">
        <div class="u-clearfix u-sheet u-sheet-1">
            <h2 class="u-custom-font u-text u-text-default u-text-1">OUR PRODUCT</h2>
            <h6 class="u-custom-font u-text u-text-default u-text-2">How it works?<span style="font-weight: 700;"></span>
            </h6>
            <div
                class="u-align-left u-container-style u-expanded-width-md u-expanded-width-sm u-group u-shape-rectangle u-group-1">
                <div class="u-container-layout u-container-layout-1">
                    <img class="u-image u-image-round u-radius-24 u-image-1"
                        src="{{ asset('assets/public/images/Screenshot1.png') }}" alt="" data-image-width="442"
                        data-image-height="936">
                </div>
            </div>
            <div
                class="u-clearfix u-expanded-width-md u-expanded-width-sm u-expanded-width-xs u-gutter-18 u-layout-wrap u-layout-wrap-1">
                <div class="u-gutter-0 u-layout">
                    <div class="u-layout-row">
                        <div class="u-size-30">
                            <div class="u-layout-col">
                                <div class="u-container-style u-layout-cell u-radius-10 u-size-40 u-white u-layout-cell-1">
                                    <div class="u-container-layout u-container-layout-2"><span
                                            class="u-custom-color-1 u-icon u-icon-circle u-spacing-18 u-text-white u-icon-1"><svg
                                                class="u-svg-link" preserveAspectRatio="xMidYMin slice"
                                                viewBox="0 0 64 64" style="">
                                                <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-3774">
                                                </use>
                                            </svg><svg class="u-svg-content" viewBox="0 0 64 64" id="svg-3774">
                                                <g id="Product_delivery">
                                                    <path
                                                        d="M12.1719,3.9982,6.0476,12.57a.6819.6819,0,0,0,.5542,1.0781l17.312.0166L31.1692,3.433H13.27A1.35,1.35,0,0,0,12.1719,3.9982Z">
                                                    </path>
                                                    <path
                                                        d="M57.7119,12.6264,51.5476,3.9982A1.3506,1.3506,0,0,0,50.449,3.433H32.56l7.2334,10.2549,17.3628.0166A.6818.6818,0,0,0,57.7119,12.6264Z">
                                                    </path>
                                                    <path
                                                        d="M37.99,15.8154,33.21,9.039V29.9077H50.449a1.75,1.75,0,0,0,1.75-1.75V16.4l-13.1075-.0126A1.3519,1.3519,0,0,1,37.99,15.8154Z">
                                                    </path>
                                                    <path
                                                        d="M24.6111,16.3657h-.002L11.52,16.3764V28.1577a1.75,1.75,0,0,0,1.75,1.75h17.24V9.03l-4.7979,6.7661A1.3519,1.3519,0,0,1,24.6111,16.3657Z">
                                                    </path>
                                                    <path
                                                        d="M15.1052,37.15H8.5471a1.0432,1.0432,0,0,0-1.0432,1.0434V60.5751a1.0434,1.0434,0,0,0,1.0432,1.0435h6.5581A2.2744,2.2744,0,0,0,17.38,59.3442v-19.92A2.2744,2.2744,0,0,0,15.1052,37.15Z">
                                                    </path>
                                                    <path
                                                        d="M56.3279,39.7783a3.8042,3.8042,0,0,0-3.1846-1.7159h-2.57a5.5493,5.5493,0,0,0-5.1455,3.4429,5.75,5.75,0,0,1-1.0239,1.6192A8.3784,8.3784,0,0,1,37.72,46.9233l-7.6123.0005a1.35,1.35,0,0,1,0-2.7h7.5762a5.0783,5.0783,0,0,0,2.7244-.8766l0-.0458A5.219,5.219,0,0,0,35.19,38.0624h-5.586a7.7366,7.7366,0,0,0-5.497,2.2706l-.1426.142a7.2457,7.2457,0,0,1-3.8858,2.0127V57.3989H40.45A15.4305,15.4305,0,0,0,54.64,48.0522l2.0068-4.6709A3.802,3.802,0,0,0,56.3279,39.7783Z">
                                                    </path>
                                                </g>
                                            </svg></span>
                                        <h3
                                            class="u-align-center u-custom-font u-text u-text-black u-text-default u-text-3">
                                            Shipper</h3>
                                        <p class="u-align-left u-custom-font u-text u-text-palette-5-dark-2 u-text-4">
                                            Submit the load details with pickup and deliver location and click away to
                                            get match to driver</p>
                                    </div>
                                </div>
                                <div class="u-container-style u-layout-cell u-radius-10 u-size-20 u-white u-layout-cell-2">
                                    <div class="u-container-layout u-container-layout-3"><span
                                            class="u-custom-color-1 u-icon u-icon-circle u-spacing-18 u-icon-2"><svg
                                                class="u-svg-link" preserveAspectRatio="xMidYMin slice"
                                                viewBox="0 0 512 512" style="">
                                                <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-33d2">
                                                </use>
                                            </svg><svg class="u-svg-content" viewBox="0 0 512 512" id="svg-33d2">
                                                <path
                                                    d="M256,317.615l8.79-6.02l20.507-14.045v-22.95c19.198-9.237,33.347-27.276,37.257-48.879h7.027  c11.118,0,20.13-9.013,20.13-20.13v-1.759c0-11.118-9.012-20.131-20.13-20.131h-5.923v-12.896c-28.72,9.248-59.02,9.92-67.049,9.92  c-1.049,0-1.715-0.011-1.951-0.016c-28.922,0-50.432-3.382-66.316-7.915v10.906h-6.077c-11.118,0-20.13,9.013-20.13,20.131v1.759  c0,11.117,9.012,20.13,20.13,20.13h7.182c3.91,21.603,18.059,39.642,37.257,48.879v22.95L256,317.615z M285.297,193.471  c3.637,0,6.585,2.948,6.585,6.585c0,3.636-2.948,6.584-6.585,6.584c-3.636,0-6.584-2.948-6.584-6.584  C278.713,196.419,281.661,193.471,285.297,193.471z M226.703,193.471c3.637,0,6.584,2.948,6.584,6.585  c0,3.636-2.947,6.584-6.584,6.584s-6.585-2.948-6.585-6.584C220.118,196.419,223.066,193.471,226.703,193.471z M222.047,228.832  c0-2.021,1.639-3.659,3.659-3.659h60.588c2.021,0,3.659,1.639,3.659,3.659c0,18.752-15.201,33.953-33.953,33.953  S222.047,247.584,222.047,228.832z">
                                                </path>
                                                <path
                                                    d="M400.512,468.354c0,0-6.155-53.659-21.646-102.091c-6.369-19.912-20.064-36.658-38.297-46.888  c-6.063-3.402-12.786-7.008-19.752-10.451l-1.14,2.678l-38.837,91.285l-10.784-58.322c-0.621-3.359-3.553-5.799-6.97-5.799h-14.171  c-3.418,0-6.35,2.439-6.971,5.799l-10.784,58.322l-38.837-91.285l-1.14-2.678c-6.966,3.443-13.689,7.049-19.752,10.451  c-18.232,10.229-31.927,26.976-38.296,46.888c-15.492,48.432-21.647,102.091-21.647,102.091H256H400.512z M303.15,397.908h14.964  c2.448,0,4.555,1.527,5.572,3.755c2.629,5.753,11.043,6.353,11.043,6.353s8.413-0.6,11.042-6.353  c1.019-2.228,3.124-3.755,5.572-3.755h14.965c2.065,0,3.226,2.377,1.955,4.006l-6.856,8.785c-1.581,2.027-4.009,3.213-6.58,3.213  h-5.378c-2.79,0-5.499,0.933-7.697,2.65l-4.641,3.629c-1.399,1.094-3.365,1.094-4.765,0l-4.641-3.629  c-2.198-1.718-4.907-2.65-7.696-2.65h-5.379c-2.57,0-4.998-1.186-6.58-3.213l-6.855-8.785  C299.925,400.285,301.085,397.908,303.15,397.908z">
                                                </path>
                                                <path
                                                    d="M143.276,137.223c23.124-6.964,65.557-17.577,109.965-17.818v-0.013c0.257,0,0.515,0.006,0.771,0.006  c0.255,0,0.508-0.006,0.763-0.006v0.013c45.037,0.237,88.071,10.868,111.494,17.834c0.546-1.368,0.979-2.705,1.308-4  c2.218-8.713-1.692-17.883-8.916-21.446c-6.514-3.214-17.772-11.682-34.817-33.71c-0.298-0.385-0.597-0.767-0.896-1.145  c-35.22-44.389-101.124-44.389-136.344,0c-0.3,0.378-0.599,0.76-0.896,1.145c-17.045,22.028-28.304,30.496-34.818,33.71  c-7.224,3.563-11.133,12.733-8.916,21.446C142.302,134.528,142.732,135.859,143.276,137.223z M220.779,72.507h16.109  c2.636,0,4.902,1.906,5.998,4.686c2.831,7.178,11.889,7.926,11.889,7.926s9.058-0.748,11.888-7.926  c1.096-2.779,3.362-4.686,5.999-4.686h16.108c2.224,0,3.473,2.966,2.105,4.997l-7.381,10.964c-1.703,2.528-4.316,4.007-7.084,4.007  h-5.79c-3.003,0-5.92,1.165-8.285,3.309l-4.996,4.527c-1.507,1.365-3.622,1.365-5.129,0l-4.996-4.527  c-2.366-2.144-5.283-3.309-8.286-3.309h-5.79c-2.768,0-5.381-1.479-7.084-4.007l-7.381-10.964  C217.307,75.473,218.556,72.507,220.779,72.507z">
                                                </path>
                                                <path
                                                    d="M323.658,141.508c-0.637-0.072-1.287-0.144-1.936-0.216c-18.74-2.073-42.207-3.857-67.71-3.893  c-40.928,0.058-76.562,4.734-95.41,7.771c3.486,3.35,12.166,10.066,29.739,15.548c14.951,4.664,36.321,8.426,66.434,8.426  c0.576,0.008,37.126,0.533,68.883-10.568c9.563-3.343,18.682-7.74,26.262-13.527C343.068,143.971,334.151,142.7,323.658,141.508z">
                                                </path>
                                            </svg></span>
                                        <h3 class="u-align-center u-custom-font u-text u-text-default u-text-5">Truck
                                            Driver</h3>
                                        <p class="u-align-left u-custom-font u-text u-text-palette-5-dark-2 u-text-6">
                                            Accept the Live trip to pick up location to deliver location and get earn
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="u-size-30">
                            <div class="u-layout-col">
                                <div class="u-container-style u-layout-cell u-radius-10 u-size-20 u-white u-layout-cell-3">
                                    <div class="u-container-layout u-container-layout-4"><span
                                            class="u-custom-color-1 u-icon u-icon-circle u-spacing-18 u-text-white u-icon-3"><svg
                                                class="u-svg-link" preserveAspectRatio="xMidYMin slice"
                                                viewBox="0 0 64 64" style="">
                                                <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-c3ac">
                                                </use>
                                            </svg><svg class="u-svg-content" viewBox="0 0 64 64" id="svg-c3ac"
                                                style="enable-background:new 0 0 64 64;">
                                                <g>
                                                    <path
                                                        d="M63.69172,44.81383c-0.62661-1.75697-1.91092-3.12349-3.61652-3.87351s-3.5858-0.7603-5.30169-0.03085L43.2661,45.76935   c0.01028-0.13358,0.02057-0.28772,0.02057-0.43158c0-2.23984-1.81861-4.05838-4.05851-4.05838h-8.30176   c-0.33914,0-0.66787-0.07193-0.97603-0.21579l-7.03815-3.17485c-1.09932-0.50344-2.32205-0.77059-3.53437-0.77059h-5.95927   v-0.57537c0-1.13017-0.91432-2.0549-2.0549-2.0549H0v25.93287h11.36368c1.14058,0,2.0549-0.92467,2.0549-2.0549v-1.61304h3.29808   l12.27812,3.94538c1.01717,0.31851,2.06519,0.48294,3.12337,0.48294c1.66459,0,3.32893-0.40072,4.80853-1.19188L64,45.64606   L63.69172,44.81383z M7.22301,56.60895c-0.79116,0-1.43833-0.6473-1.43833-1.43846c0-0.80138,0.64717-1.44868,1.43833-1.44868   s1.43846,0.6473,1.43846,1.44868C8.66147,55.96165,8.01417,56.60895,7.22301,56.60895z M35.97109,58.1707   c-1.94178,1.03767-4.25354,1.23289-6.34958,0.56508l-12.43214-3.9968l-3.77079-0.04108V39.17307h5.95927   c0.92461,0,1.84946,0.2055,2.68163,0.58566l7.03802,3.18514c0.57543,0.25686,1.19188,0.39043,1.82889,0.39043h8.30176   c1.1096,0,2.0036,0.9041,2.0036,2.00348c0,1.10966-0.894,2.00354-2.0036,2.00354h-10.7471v2.0549h10.7471   c0.75014,0,1.44874-0.19522,2.04474-0.5548L55.57495,42.8c1.19175-0.50344,2.49664-0.49316,3.67836,0.02057   c0.90404,0.40066,1.64377,1.05824,2.13693,1.89048L35.97109,58.1707z">
                                                    </path>
                                                    <path
                                                        d="M9.30727,30.34497l6.39875-3.54516l6.26605,3.77493l-1.39431-7.18112l4.59757-3.98721l-1.69745,7.31326   c-0.09231,0.39533,0.05719,0.80771,0.38128,1.05254c0.32509,0.24482,0.76156,0.27542,1.11675,0.07826l7.1129-3.93973   l6.96339,4.19509c0.33587,0.20422,0.7768,0.20085,1.11876-0.03813c0.33212-0.23228,0.49667-0.63915,0.41941-1.03749   l-1.54921-7.98131l0.14624-0.12686l4.60622,4.29712l-1.65393,7.12581l6.39875-3.54516l6.26593,3.77493l-1.39418-7.18112   l5.52631-4.79279l-7.26039-0.893l-2.85057-6.73701l-3.09289,6.62914l-5.57573,0.4813l5.02689-4.35927   c0.30703-0.26589,0.42744-0.68731,0.30904-1.07561c-0.1184-0.3883-0.45353-0.67075-0.85688-0.72042l-8.07011-0.99233   L33.3982,3.44598c-0.15853-0.37376-0.52175-0.61958-0.92712-0.62711c-0.00702,0-0.01304,0-0.01906,0   c-0.39834,0-0.76256,0.23078-0.93113,0.59299l-3.43755,7.36775l-8.10021,0.69935c-0.88109,0.07543-1.26465,1.16423-0.61306,1.77496   l5.58025,5.20499l-6.10664-0.75109l-2.85045-6.73701l-3.09289,6.62914L5.6121,18.22908l5.34897,4.99008L9.30727,30.34497z    M28.85192,12.77583c0.36623-0.03161,0.68731-0.25586,0.84283-0.58898l2.71111-5.81203l2.49939,5.90634   c0.14348,0.33864,0.45654,0.57443,0.82076,0.61958l6.36538,0.78263l-4.84528,4.20212   c-0.27794,0.24081-0.40536,0.61105-0.33512,0.97176l1.2221,6.29615l-5.49345-3.30912   c-0.31649-0.19146-0.71086-0.19536-1.02745-0.01856l-5.61085,3.10794l1.44987-6.24749   c0.08328-0.3577-0.03111-0.73296-0.29901-0.9838l-4.69076-4.3752L28.85192,12.77583z">
                                                    </path>
                                                </g>
                                            </svg></span>
                                        <h3 class="u-align-center u-custom-font u-text u-text-default u-text-7">Frieght
                                            Partner</h3>
                                        <p class="u-align-left u-custom-font u-text u-text-palette-5-dark-2 u-text-8">
                                            Find loads to give specific rate with assigning driver and vehicle&nbsp;</p>
                                    </div>
                                </div>
                                <div class="u-container-style u-layout-cell u-radius-10 u-size-40 u-white u-layout-cell-4">
                                    <div class="u-container-layout u-container-layout-5"><span
                                            class="u-custom-color-1 u-icon u-icon-circle u-spacing-18 u-icon-4"><svg
                                                class="u-svg-link" preserveAspectRatio="xMidYMin slice"
                                                viewBox="0 0 24 24" style="">
                                                <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-2d77">
                                                </use>
                                            </svg><svg class="u-svg-content" viewBox="0 0 24 24" id="svg-2d77">
                                                <path
                                                    d="M20.53,7H19V2a1,1,0,0,0-.44-.83,1,1,0,0,0-.93-.1l-15,6a1.16,1.16,0,0,0-.36.25A2.49,2.49,0,0,0,1,9.47V20.53A2.48,2.48,0,0,0,3.47,23H20.53A2.48,2.48,0,0,0,23,20.53V9.47A2.48,2.48,0,0,0,20.53,7ZM17,7H8.19L17,3.48Zm4,10H17a2,2,0,0,1,0-4h4Zm-4-6a4,4,0,0,0,0,8h4v1.53a.47.47,0,0,1-.47.47H3.47A.47.47,0,0,1,3,20.53V9.47A.47.47,0,0,1,3.47,9H20.53a.47.47,0,0,1,.47.47V11Z">
                                                </path>
                                                <circle cx="18" cy="15" r="1"></circle>
                                            </svg></span>
                                        <h3 class="u-align-center u-custom-font u-text u-text-default u-text-9">Frieght
                                            Payment</h3>
                                        <p class="u-align-left u-custom-font u-text u-text-palette-5-dark-2 u-text-10">
                                            Our payment gateway charge alternatives for the benefit of drivers with the
                                            choice to choose one default charge option.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="u-border-1 u-border-custom-color-1 u-line u-line-horizontal u-line-1"></div>
        </div>
    </section>
    <section class="u-align-center u-black u-clearfix u-section-6 margin__top__flgscreen" id="sec-a3fc">
        <div class="u-clearfix u-sheet u-sheet-1">
            <a href="https://play.google.com/store/apps/details?id=com.trolla.seal.loader" target="_blank">
                <img class="u-image u-image-round u-preserve-proportions u-radius-10 u-image-1"
                    src="{{ asset('assets/public/images/Google_Play_Store_badge_EN1.svg') }}" alt=""
                    data-image-width="5436" data-image-height="1604" data-animation-name="zoomIn"
                    data-animation-duration="1000" data-animation-direction="">
                <h3 class="u-custom-font u-text u-text-default u-text-1" data-animation-name="zoomIn"
                    data-animation-duration="1000" data-animation-direction="">Download our app<span
                        style="font-weight: 700;"></span>&nbsp;&nbsp;<span class="u-icon u-icon-1"><svg
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
<script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#btn').on({
                "click": function() {
                    $('.pop').css({
                        "transform": "scale(1,1)"
                    });

                }
            })

            $('#myModal').on('hidden.bs.modal', function () {

                var video = $("#yt-player").attr("src");
                $("#yt-player").attr("src","");
                $("#yt-player").attr("src",video);
            });
        })
    </script>
@endsection
