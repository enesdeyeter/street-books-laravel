<!DOCTYPE html>
<html lang="tr">
<!--begin::Head-->
<head>
    <meta charset="utf-8" />
    <title>404 - Error Page | Street Books</title>
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!--begin::Fonts-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
    <!--end::Fonts-->
    <!--begin::Page Custom Styles(used by this page)-->
    <link href="{{asset('css/pages/error/error-6.css?v=7.0.5')}}" rel="stylesheet" type="text/css" />
    <!--end::Page Custom Styles-->
    <!--begin::Global Theme Styles(used by all pages)-->
    <link href="{{asset('plugins/global/plugins.bundle.css?v=7.0.5')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('plugins/custom/prismjs/prismjs.bundle.css?v=7.0.5')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('css/style.bundle.css?v=7.0.5')}}" rel="stylesheet" type="text/css" />
    <!--begin::Layout Themes(used by all pages)-->
    <link href="{{asset('css/themes/layout/header/base/light.css?v=7.0.5')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('css/themes/layout/header/menu/light.css?v=7.0.5')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('css/themes/layout/brand/dark.css?v=7.0.5')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('css/themes/layout/aside/dark.css?v=7.0.5')}}" rel="stylesheet" type="text/css" />
    <!--end::Layout Themes-->
    <link rel="shortcut icon" href="{{asset('/media/logos/favicon.ico')}}" />
</head>
<!--end::Head-->
<!--begin::Body-->
<body id="kt_body" class="header-fixed header-mobile-fixed subheader-enabled subheader-fixed aside-enabled aside-fixed aside-minimize-hoverable page-loading ">
<!--begin::Main-->
<div class="d-flex flex-column flex-root">
    <!--begin::Error-->
    <div class="error error-6 d-flex flex-row-fluid bgi-size-cover bgi-position-center" style="background-image: url({{asset('/media/error/bg6.jpg')}});">
        <!--begin::Content-->
        <div class="d-flex flex-column flex-row-fluid text-center">
            <a href="{{ url('/home') }}" class="btn btn-outline-white font-weight-bolder font-size-h6 px-8 py-4 my-3 mt-25 mr-35 ml-35">
                <i class="fas fa-long-arrow-alt-left"></i>Güvenli alana geri dön
            </a>
            <h1 class="error-title font-weight-boldest text-white mb-12" style="margin-top: 2rem;">Oops...</h1>
            <p class="display-3 font-weight-bold text-white">Üzgünüz, aradığınız sayfayı bulamıyoruz.</p>
            <p class="font-size-h1 text-white">Girilen URL'de bir yazım hatası olabilir veya aradığınız sayfa artık mevcut olmayabilir.</p>
        </div>
        <!--end::Content-->
    </div>
    <!--end::Error-->
</div>
<!--end::Global Config-->
<!--begin::Global Theme Bundle(used by all pages)-->
<script src="{{asset('plugins/global/plugins.bundle.js?v=7.0.5')}}"></script>
<script src="{{asset('plugins/custom/prismjs/prismjs.bundle.js?v=7.0.5')}}"></script>
<script src="{{asset('js/scripts.bundle.js?v=7.0.5')}}"></script>
<!--end::Global Theme Bundle-->
</body>
<!--end::Body-->
</html>
