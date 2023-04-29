<!DOCTYPE html>
<html style="font-size: 16px;">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>@yield('title') </title>

    <meta name="description" content="@yield('meta-description', '')">
    <meta name="keywords" content="@yield('meta-keywords', '')">
    <base href="https://www.trollaexpress.com/">
    <meta name="robots" content="INDEX,FOLLOW" />
    <meta name="author" content="https://www.trollaexpress.com/" />
    <meta property="og:url" content="@yield('url', '')" />
    <meta property="og:title" content="@yield('ogtitle', '')" />
    <meta property="og:description" content="@yield('meta-og-description', '')" />
    <meta property="og:image" content="https://www.trollaexpress.com/@yield('image', '')" />
    <!-- Link Font awsome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="shortcut icon" href="{{ asset('assets/public/img/mono.png') }}">
    <link rel="stylesheet" href="{{ asset('assets/public/css/nicepage.css').'?version=2.0.0' }}" media="screen">
    {{-- <link rel="stylesheet" href="{{ asset('assets/public/css/Home.css') }}" media="screen"> --}}

    <link rel="stylesheet" href="{{ asset('assets/public/css/Home1.css').'?version=2.0.0' }}" media="screen">

    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/sweetalert2@9.17.2/dist/sweetalert2.min.css">
        <link rel="stylesheet" href="{{ asset('assets/vendor/px-pagination/px-pagination.css') }}">

        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
      
    <!--Fonts-->
    @yield('custom-css')

</head>

<body id="body" data-home-page="home" data-home-page-title="Home"
    class="u-body u-overlap u-overlap-contrast u-overlap-transparent">

    @include('public.header')


    @yield('body')


    @include('public.footer')




    <script async src="https://www.googletagmanager.com/gtag/js?id=G-3J3RSSWVSS"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-3J3RSSWVSS');
    </script>
    <script class="u-script" type="text/javascript" src="{{ asset('assets/public/js/nicepage.js') }}" defer=""></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9.17.2/dist/sweetalert2.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.3.min.js" ></script>
    <script src="{{ asset('assets/vendor/px-pagination/px-pagination.js') }}"></script>
    @yield('custom-js')
</body>

</html>
