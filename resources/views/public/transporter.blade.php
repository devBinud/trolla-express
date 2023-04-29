@extends('public.layout.layout')
@section('title', 'Services | Transporter')
@section('meta-description', '')
@section('meta-keywords', '')
@section('ogtitle', '')
@section('meta-og-description', '')
@section('url', 'https://www.trollaexpress.com/page?action=transporter')
@section('image', '')

@section('custom-css')
    <link rel="stylesheet" href="{{ asset('assets/public/css/Services.css') }}">
    <style>
        .transporter__paragraph-top{
            margin: 30px 20px;
            background:#fff;
            border-radius:10px;
            padding:23px;
            color:#000;
        }
        .transporter__paragraph-top h3{
            padding:20px 0;
            text-align:center
        }
        .transporter__img-description{
            padding:30px 0;
        }
        .transporter__img-description .transporter__img-description-box .transporter__img img{
            width:50%
        }
        .transporter__content__boxes{
            margin-top: 30px;
        }
        .transporter__content__box{
            display: flex;
            align-items: center;
            text-align: center;
            justify-content: center;
            flex-direction:column;
            padding:10px;
            border-radius:10px;
            box-shadow: rgba(60, 64, 67, 0.3) 0px 1px 2px 0px, rgba(60, 64, 67, 0.15) 0px 2px 6px 2px;
        }
        .transporter__content__box img{
            margin-bottom: 20px;
        }
        @media screen and (max-width:576px){
            .transporter__paragraph-top{
            margin: -23px;
            padding:10px;
            margin-top:20px;
            margin-bottom: 10px;
        } 
        }
    </style>
@endsection
@section('body')

 <section class="u-clearfix u-image u-shading u-section-1" id="sec-60a4" data-image-width="1280" data-image-height="627"
     style="background-image:linear-gradient(0deg, rgba(0,0,0,0.6), rgba(0,0,0,0.45)), url('{{ asset('assets/public/images/transporter.jpg') }}');">
        <div class="u-clearfix u-sheet u-sheet-1">
            <h1 class="u-custom-font u-text u-text-default u-text-1">TRANSPORTER SERVICE</h1>
            <h6 class="u-custom-font u-text u- u-text-default u-text-2">Features We Provide </h6>

            <div class="container">
                <div class="transporter__paragraph-top">
                    <h3>Brief Overview</h3>
                   <p style="font-weight:600">
                        ​Trolla is a transportation-focused cloud-based mobile application. It is a SaaS-based freight marketplace built on an asset-light networking concept and powered by a proprietary algorithm that quickly matches trucks with the best rates.
                            We are committed to optimising the Indian trucking industry by bringing together vehicle owners, carriers, and customers, enabling them to grow their own businesses faster and achieve superior B2B performance.
                            We manage everything from dispatching, route optimization, real-time driver tracking, and field personnel management to delivering SMS notifications to clients.
                            The objective is to improve income and costs for transporter/truck owners while decreasing operational costs and delivery times for shippers.
                            Customers (Shipper, Transporter/Truck Owner) will have access to this Trolla market place that connects empty load truckers with suppliers in need of deliveries via an annual membership.
                     </p>
                     <p style="font-weight:600">
                        ​Trolla is a transportation-focused cloud-based mobile application. It is a SaaS-based freight marketplace built on an asset-light networking concept and powered by a proprietary algorithm that quickly matches trucks with the best rates.
                            We are committed to optimising the Indian trucking industry by bringing together vehicle owners, carriers, and customers, enabling them to grow their own businesses faster and achieve superior B2B performance.
                            We manage everything from dispatching, route optimization, real-time driver tracking, and field personnel management to delivering SMS notifications to clients.
                            The objective is to improve income and costs for transporter/truck owners while decreasing operational costs and delivery times for shippers.
                            Customers (Shipper, Transporter/Truck Owner) will have access to this Trolla market place that connects empty load truckers with suppliers in need of deliveries via an annual membership.
                     </p>
                     <p style="font-weight:600">
                     The objective is to improve income and costs for transporter/truck owners while decreasing operational costs and delivery times for shippers.
                            Customers (Shipper, Transporter/Truck Owner) will have access to this Trolla market place that connects empty load truckers with suppliers in need of deliveries via an annual membership.
                     </p>
                </div>
            </div>
      
        </div>
    </section>
    <div class="transporter__img-description">
     <div class="container">
         <div class="transporter__img-description-box">
            <div class="row">
                <div class="col-md-6">
                  <div class="transporter__img">
                    <img class="img-fluid" src="{{asset('assets/public/images/transporter-screenshot.png')}}" alt="">
                  </div>
                </div>
                <div class="col-md-6">
                    <div class="transporter__content__boxes">
                        <h4>Features that provided</h4>
                        <p class="text-secondary">
                        The objective is to improve income and costs for transporter/truck owners while decreasing operational costs and delivery times for shippers. Customers (Shipper, Transporter/Truck Owner) will have access to this Trolla market place that connects empty load truckers with suppliers in need of deliveries via an annual membership.
                        </p>
                       <div class="row">
                        <div class="col-md-6 col-6 mt-2">
                            <div class="transporter__content__box">
                                <img src="{{asset('assets/public/images/icons/1.png')}}" alt="" width="50">
                                <!-- <h6>OPTIMIZE FLEET OPERATION</h6> -->
                                <h6>Optimize Fleet Operation</h6>
                            </div>
                        </div>
                        <div class="col-md-6 col-6 mt-2">
                            <div class="transporter__content__box">
                            <img src="{{asset('assets/public/images/icons/2.png')}}" alt="" width="50">
                                <h6>Inbuilt Tracking Operation</h6>
                            </div>
                        </div>
                        <div class="col-md-6 col-6 mt-lg-4 mt-3">
                            <div class="transporter__content__box">
                                <img src="{{asset('assets/public/images/icons/3.png')}}" alt="" width="50">

                                <h6>Goods Insurance Service</h6>
                            </div>
                        </div>
                        <div class="col-md-6 col-6 mt-lg-4 mt-3">
                            <div class="transporter__content__box">
                            <img src="{{asset('assets/public/images/icons/4.png')}}" alt="" width="50">

                                <h6>Earning Management</h6>
                            </div>
                        </div>
                       </div>
                    </div>
                </div>
            </div>
         </div>
     </div>
    </div>
    <section class="u-black u-clearfix u-section-3" id="sec-91ee">
        <div class="u-clearfix u-sheet u-sheet-1">
            <a href="https://play.google.com/store/apps/details?id=com.trolla.seal.transporter" target="_blank">
                <img class="u-image u-image-round u-radius-10 u-image-1" src="{{asset('assets/public/images/Google_Play_Store_badge_EN1.svg')}}"
                    alt="" data-image-width="5436" data-image-height="1604">
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


@endsection
