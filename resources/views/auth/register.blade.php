<!DOCTYPE html>
<html lang="tr">
<!--begin::Head-->
<head><base href="../../../">
    <meta charset="utf-8" />
    <title>Kayıt Ol | Street Books</title>
    <meta name="description" content="Login page example" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!--begin::Fonts-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
    <!--end::Fonts-->
    <!--begin::Page Custom Styles(used by this page)-->
    <link href="{{asset('css/pages/login/login-1.css?v=7.0.5')}}" rel="stylesheet" type="text/css" />
    <!--end::Page Custom Styles-->
    <!--begin::Global Theme Styles(used by all pages)-->
    <link href="{{asset('plugins/global/plugins.bundle.css?v=7.0.5')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('plugins/custom/prismjs/prismjs.bundle.css?v=7.0.5')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('css/style.bundle.css?v=7.0.5')}}" rel="stylesheet" type="text/css" />
    <!--end::Global Theme Styles-->
    <!--begin::Layout Themes(used by all pages)-->
    <link href="{{asset('css/themes/layout/header/base/light.css?v=7.0.5')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('css/themes/layout/header/menu/light.css?v=7.0.5')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('css/themes/layout/brand/dark.css?v=7.0.5')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('css/themes/layout/aside/dark.css?v=7.0.5')}}" rel="stylesheet" type="text/css" />
    <!--end::Layout Themes-->
    <link rel="shortcut icon" href="{{asset('media/logos/favicon.png')}}" />
</head>
<!--end::Head-->
<!--begin::Body-->
<body id="kt_body" class="header-fixed header-mobile-fixed subheader-enabled subheader-fixed aside-enabled aside-fixed aside-minimize-hoverable page-loading">
<!--begin::Main-->
<div class="d-flex flex-column flex-root">
    <!--begin::Login-->
    <div class="login login-1 login-signup-on d-flex flex-column flex-lg-row flex-column-fluid bg-white" id="kt_login">
        <!--begin::Aside-->
        <div class="login-aside d-flex flex-column flex-row-auto" style="background-color: #f3f6f9;">
            <!--begin::Aside Top-->
            <div class="d-flex flex-column-auto flex-column pt-lg-40 pt-15">
                <!--begin::Aside header-->
                <a href="#" class="text-center mb-10">
                    <img src="{{asset('media/logos/logo-dark.png')}}" class="max-h-70px" alt="street-books-logo" style="width: 346px"/>
                </a>
                <!--end::Aside header-->
                <!--begin::Aside title-->
                <h3 class="font-weight-bolder text-center font-size-h4 font-size-h1-lg" style="color: #986923;">Kitaplar ile dolu bir dünyaya giriş yapmak için son bir adımınız kaldı.</h3>
                <h5 class="font-weight-bolder text-center font-size-h5 font-size-h5-lg" style="color: #986923; opacity: .7; margin-top: 10px">hemen formu doldurun ve bize katılın</h5>
                <!--end::Aside title-->
            </div>
            <!--end::Aside Top-->
            <!--begin::Aside Bottom-->
            <div class="aside-img d-flex flex-row-fluid bgi-no-repeat bgi-position-y-bottom bgi-position-x-center" style="background-image: url({{asset('/media/svg/illustrations/register1.svg')}})"></div>
            <!--end::Aside Bottom-->
        </div>
        <!--begin::Aside-->
        <!--begin::Content-->
        <div class="login-content flex-row-fluid d-flex flex-column justify-content-center position-relative overflow-hidden p-7 mx-auto">
            <!--begin::Content body-->
            <a href="{{route('home')}}" class="btn btn-primary font-weight-bolder font-size-h6 px-8 py-4 my-3 mr-3">
                <i class="fas fa-long-arrow-alt-left"></i>Anasayfa
            </a>
            <div class="d-flex flex-column-fluid flex-center">
                <!--begin::Signup-->
                <div class="login-form login-signup">
                    <!--begin::Form-->
                    <form class="form" method="POST" action="{{ route('register') }}" novalidate="novalidate">
                    @csrf
                    <!--begin::Title-->
                        <div class="pb-13 pt-lg-0 pt-5">
                            <h3 class="font-weight-bolder text-dark font-size-h4 font-size-h1-lg">Kayıt Ol</h3>
                            <span class="text-muted font-weight-bold font-size-h4">Zaten bir hesabın mı var?
									<a href="{{ route('login') }}" id="kt_login_signup" class="text-primary font-weight-bolder">Giriş Yap</a>
                            </span>
                        </div>
                        <!--end::Title-->
                        <!--begin::Form group-->
                        <div class="form-group">
                            <label for="name" class="col-md-4 col-form-label text-md-right" style="display: none">{{ __('Name') }}</label>
                            <input id="name" type="text" class="form-control form-control-solid h-auto py-7 px-6 rounded-lg font-size-h6 @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="İsim Soyisim">

                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                        <!--end::Form group-->
                        <!--begin::Form group-->
                        <div class="form-group">
                            <label for="email" class="col-md-4 col-form-label text-md-right" style="display: none">{{ __('E-Mail Address') }}</label>
                            <input id="email" type="email" class="form-control form-control-solid h-auto py-7 px-6 rounded-lg font-size-h6 @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="E-Mail Address">

                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                        <!--end::Form group-->
                        <!--begin::Form group-->
                        <div class="form-group">
                            <label for="password" class="col-md-4 col-form-label text-md-right" style="display: none">{{ __('Password') }}</label>
                            <input id="password" type="password" class="form-control form-control-solid h-auto py-7 px-6 rounded-lg font-size-h6 @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Şifre">

                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                        <!--end::Form group-->
                        <!--begin::Form group-->
                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right" style="display: none">{{ __('Confirm Password') }}</label>
                            <input id="password-confirm" type="password" class="form-control form-control-solid h-auto py-7 px-6 rounded-lg font-size-h6" name="password_confirmation" required autocomplete="new-password" placeholder="Şifreyi Onayla">
                        </div>
                        <!--end::Form group-->
                        <div class="row pb-5">
                            <div class="col-md-12">
                                <div class="text-muted">
                                    “Kayıt Ol” butonuna tıklayarak Street Books <a target="_blank" href="">Hizmet Şartları, Gizlilik Sözleşmesi</a> ve en az 12 yaşında oldunuğu doğrulamış olursunuz.
                                </div>
                            </div>
                        </div>
                        <!--begin::Form group-->
                        <div class="form-group d-flex flex-wrap pb-lg-0 pb-3">
                            <button type="submit" class="btn btn-light-success font-weight-bolder font-size-h6 px-8 py-4 my-3 mr-3">
                                {{ __('Kayıt Ol') }}
                            </button>
                            <button type="reset" class="btn btn-light-primary font-weight-bolder font-size-h6 px-8 py-4 my-3">Temizle</button>
                        </div>
                        <!--end::Form group-->
                    </form>

                    <!--end::Form-->
                </div>
                <!--end::Signup-->


            </div>
            <!--end::Content body-->
        </div>
        <!--end::Content-->
    </div>
    <!--end::Login-->
</div>
<!--end::Main-->
<script>var HOST_URL = "https://keenthemes.com/metronic/tools/preview";</script>
<!--begin::Global Config(global config for global JS scripts)-->
<script>var KTAppSettings = { "breakpoints": { "sm": 576, "md": 768, "lg": 992, "xl": 1200, "xxl": 1400 }, "colors": { "theme": { "base": { "white": "#ffffff", "primary": "#3699FF", "secondary": "#E5EAEE", "success": "#1BC5BD", "info": "#8950FC", "warning": "#FFA800", "danger": "#F64E60", "light": "#E4E6EF", "dark": "#181C32" }, "light": { "white": "#ffffff", "primary": "#E1F0FF", "secondary": "#EBEDF3", "success": "#C9F7F5", "info": "#EEE5FF", "warning": "#FFF4DE", "danger": "#FFE2E5", "light": "#F3F6F9", "dark": "#D6D6E0" }, "inverse": { "white": "#ffffff", "primary": "#ffffff", "secondary": "#3F4254", "success": "#ffffff", "info": "#ffffff", "warning": "#ffffff", "danger": "#ffffff", "light": "#464E5F", "dark": "#ffffff" } }, "gray": { "gray-100": "#F3F6F9", "gray-200": "#EBEDF3", "gray-300": "#E4E6EF", "gray-400": "#D1D3E0", "gray-500": "#B5B5C3", "gray-600": "#7E8299", "gray-700": "#5E6278", "gray-800": "#3F4254", "gray-900": "#181C32" } }, "font-family": "Poppins" };</script>
<!--end::Global Config-->
<!--begin::Global Theme Bundle(used by all pages)-->
<script src="{{asset('plugins/global/plugins.bundle.js?v=7.0.5')}}"></script>
<script src="{{asset('plugins/custom/prismjs/prismjs.bundle.js?v=7.0.5')}}"></script>
<script src="{{asset('js/scripts.bundle.js?v=7.0.5')}}"></script>
<!--end::Global Theme Bundle-->
<!--begin::Page Scripts(used by this page)-->
<script src="{{asset('js/pages/custom/login/login-general.js?v=7.0.5')}}"></script>
<!--end::Page Scripts-->
</body>
<!--end::Body-->
</html>
