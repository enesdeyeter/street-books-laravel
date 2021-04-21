{{-- Extends layout --}}
@extends('layout.default')

{{-- Content --}}
@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="card card-custom gutter-b">
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between p-4 flex-lg-wrap flex-xl-nowrap">
                            <div class="d-flex flex-column mr-5">
                                <a href="#" class="h4 text-dark text-hover-primary mb-5">
                                    Kitaplar Hakkında Görüş Bildirin
                                </a>
                                <p class="text-dark-50">
                                    Okumuş olduğunuz kitap hakkında görüş bildirin. Bildirdiğiniz görüşler, kitabı
                                    okumak isteyen diğer okuyucular için fikir sahibi olmalarını sağlar.
                                </p>
                            </div>
                            <div class="ml-6 ml-lg-0 ml-xxl-6 flex-shrink-0">
                                <a href="#" target="_blank"
                                   class="btn font-weight-bolder text-uppercase btn-success py-4 px-6">
                                    Görüş Bildir <i class="fa fa-long-arrow-alt-right pl-3"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card card-custom gutter-b">
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between p-4 flex-lg-wrap flex-xl-nowrap">
                            <div class="d-flex flex-column mr-5">
                                <a href="#" class="h4 text-dark text-hover-primary mb-5">
                                    Eksik Kitap Bildirin
                                </a>
                                <p class="text-dark-50">
                                    Street Books'ta eksik olduğunu düşündüğünüz kitaplar varsa lütfen bize bildirin.
                                    Bildirdiğiniz kitap en kısa sürede sisteme eklenecektir.
                                </p>
                            </div>
                            <div class="ml-6 ml-lg-0 ml-xxl-6 flex-shrink-0">
                                <a href="#" target="_blank"
                                   class="btn btn-warning font-weight-bolder text-uppercase btn-success py-4 px-6">
                                    Kitap Bildirin <i class="fa fa-long-arrow-alt-right pl-3"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!--            <div class="col-md-6">
                            <div class="card card-custom gutter-b bg-diagonal bg-diagonal-light-warning">
                                <div class="card-body">
                                    <div class="d-flex align-items-center justify-content-between p-4 flex-lg-wrap flex-xl-nowrap">
                                        <div class="d-flex flex-column mr-5">
                                            <a href="#" class="h4 text-dark text-hover-primary mb-5">
                                                Bize Bildirin
                                            </a>
                                            <p class="text-dark-50">
                                                Street Books'ta eksik kitap olduğunu düşüyorsanız lütfen bize bildirin.
                                            </p>
                                        </div>
                                        <div class="ml-6 ml-lg-0 ml-xxl-6 flex-shrink-0">
                                            <a href="#" target="_blank" class="btn btn-warning font-weight-bolder text-uppercase font-size-sm">
                                                Make A Call
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>-->
        </div>
        <!--begin::Profile 4-->
        <div class="d-flex flex-row">
            <!--begin::Aside-->
            <div class="flex-row-auto offcanvas-mobile w-300px w-xl-350px" id="kt_profile_aside">
                <!--begin::Card-->
                <div class="card card-custom gutter-b">
                    <!--begin::Body-->
                    <div class="card-body">
                        <!--begin::User-->
                        <div class="d-flex align-items-center">
                            <div class="symbol symbol-light-success symbol-60 symbol-xxl-100 mr-5 align-self-start align-self-xxl-center">
                                <span class="symbol-label font-size-h1 text-success font-weight-bold text-uppercase">{{ substr(Auth::user()->name, 0, 1) }}</span>
                                <i class="symbol-badge bg-success"></i>
                            </div>
                            <div>
                                <a href="#"
                                   class="font-weight-bold font-size-h5 text-dark-75 text-hover-primary text-capitalize">{{ Auth::user()->name }}</a>
                                <div class="text-muted">Kayıt Tarihi:
                                    <b>{{ Auth::user()->created_at->format('d/m/Y') }}</b></div>
                            </div>
                        </div>
                        <!--end::User-->
                        <!--begin::Contact-->
                        <div class="pt-8 pb-6">
                            <div class="d-flex align-items-center justify-content-between mb-2">
                                <span class="font-weight-bold mr-2">Kullanıcı Türü:</span>
                                <span class="label label-lg label-light-primary label-inline">Normal</span>
                            </div>
                            <div class="d-flex align-items-center justify-content-between mb-2">
                                <span class="font-weight-bold mr-2">Email:</span>
                                <a href="#" class="text-muted text-hover-primary">{{ Auth::user()->email }}</a>
                            </div>
                            <div class="d-flex align-items-center justify-content-between mb-2">
                                <span class="font-weight-bold mr-2">Cinsiyet:</span>
                                <span class="text-muted">Erkek</span>
                            </div>
                            <div class="d-flex align-items-center justify-content-between mb-2">
                                <span class="font-weight-bold mr-2">Şehir:</span>
                                <span class="text-muted">Bursa</span>
                            </div>
                        </div>
                        <!--end::Contact-->
                        <a href="#" class="btn btn-light-success font-weight-bold py-3 px-6 mt-5 text-center btn-block">Bilgilerini
                            Güncelle</a>
                    </div>
                    <!--end::Body-->
                </div>
                <!--end::Card-->

                <div class="card card-custom gutter-b">
                    <div class="card-body ">
                        <h4 class="pb-3">Hesabını Paylaş</h4>
                        <a href="#" class="btn btn-icon btn-facebook">
                            <i class="socicon-facebook"></i>
                        </a>
                        <a href="#" class="btn btn-icon btn-twitter">
                            <i class="socicon-twitter"></i>
                        </a>
                        <a href="#" class="btn btn-icon btn-instagram">
                            <i class="socicon-instagram"></i>
                        </a>
                        <a href="#" class="btn btn-icon btn-youtube">
                            <i class="socicon-youtube"></i>
                        </a>
                        <a href="#" class="btn btn-icon btn-linkedin">
                            <i class="socicon-linkedin"></i>
                        </a>
                        <a href="#" class="btn btn-icon btn-skype">
                            <i class="socicon-skype"></i>
                        </a>
                    </div>
                </div>
            </div>
            <!--end::Aside-->
            <!--begin::Content-->
            <div class="flex-row-fluid ml-lg-8">
                <!--begin::Advance Table Widget 8-->
                <div class="card card-custom gutter-b">
                    <!--begin::Header-->
                    <div class="card-header border-0 py-5">
                        <h3 class="card-title align-items-start flex-column">
                            <span class="card-label font-weight-bolder text-dark">Yaptığım Yorumlar</span>
                            <span class="text-muted mt-3 font-weight-bold font-size-sm">Kitaplar hakkında belirttiğin görüşler</span>
                        </h3>
                        <div class="card-toolbar">
                            <span class="font-weight-bolder font-size-sm text-muted text-hover-dark">68 yorum bulundu</span>
                        </div>
                    </div>
                    <!--end::Header-->
                    <!--begin::Body-->
                    <div class="card-body pt-0 pb-3">
                    @if(Auth::check())
                        <!--begin::Table-->
                            <div class="table-responsive">
                                <table class="table table-head-custom table-head-bg table-vertical-center table-borderless">
                                    <thead>
                                    <tr class="bg-gray-100 text-left">
                                        <th class="pl-7">Kitap</th>
                                        <th>Yorum</th>
                                        <th style="width: 120px !important;">Tarih</th>
                                        <th style="width: 50px !important;">Gör</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>
                                            <span class="text-dark-75 font-weight-bolder d-block font-size-lg">Tekvin</span>
                                            <span class="text-muted">Cem Yılmaz</span>
                                        </td>
                                        <td>
                                                <span class="text-dark-75 font-weight-normal d-block font-size-lg"
                                                      style="text-overflow: ellipsis; overflow: hidden; white-space: nowrap; width: 400px !important;">Sıcak evinde uzanmış öylece pinekleyen sen, hadi kalk gidiyoruz. Ee hadi neyi bekliyorsun?! Bak, söz bu kez ilgini çekecek bir yere götürüyorum seni. Evet evet gerçekten bu bambaşka bir hikaye!</span>
                                        </td>
                                        <td>18:12 21/04/2021</td>
                                        <td class="pr-0 text-right">
                                            <a href="books/tekvin"
                                               class="btn btn-icon btn-light btn-hover-primary btn-sm">
																		<span class="svg-icon svg-icon-md svg-icon-primary">
																			<!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Arrow-right.svg-->
																			<svg xmlns="http://www.w3.org/2000/svg"
                                                                                 xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                                 width="24px" height="24px"
                                                                                 viewBox="0 0 24 24" version="1.1">
																				<g stroke="none" stroke-width="1"
                                                                                   fill="none" fill-rule="evenodd">
																					<polygon
                                                                                        points="0 0 24 0 24 24 0 24"/>
																					<rect fill="#000000" opacity="0.3"
                                                                                          transform="translate(12.000000, 12.000000) rotate(-90.000000) translate(-12.000000, -12.000000)"
                                                                                          x="11" y="5" width="2"
                                                                                          height="14" rx="1"/>
																					<path d="M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z"
                                                                                          fill="#000000"
                                                                                          fill-rule="nonzero"
                                                                                          transform="translate(14.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-14.999999, -11.999997)"/>
																				</g>
																			</svg>
                                                                            <!--end::Svg Icon-->
																		</span>
                                            </a>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                    @else
                            <div class="alert alert-warning">
                                <p>henüz hiç yorum yapmadın... </p>
                            </div>
                    @endif

                    <!--end::Table-->
                    </div>
                    <!--end::Body-->
                </div>
                <!--end::Advance Table Widget 8-->
            </div>
            <!--end::Content-->
        </div>
        {{-- en çok beğenilen kitaplar --}}
        <div class="row">
            <div class="col-lg-12">
                <!--begin::Advance Table Widget 4-->
                <div class="card card-custom card-stretch gutter-b">
                    <!--begin::Header-->
                    <div class="card-header border-0 py-5">
                        <h3 class="card-title align-items-start flex-column">
                            <span class="card-label font-weight-bolder text-dark">En Çok Beğenilen Kitaplar</span>
                            <span class="text-muted mt-3 font-weight-bold font-size-sm">More than 400+ new members</span>
                        </h3>
                        <div class="card-toolbar">
                            <a href="#" class="btn btn-light-primary font-weight-bolder font-size-sm">Tümünü Gör</a>
                        </div>
                    </div>
                    <!--end::Header-->
                    <!--begin::Body-->
                    <div class="card-body pt-0 pb-10" style="text-align: center;">
                        <div class="tab-content">
                            <div class="row">
                                <div class="col-md-2 gutter-b">
                                    <div class="book">
                                        <a href=""><img src="{{asset("media/books/13.png")}}"
                                                        class="img-responsive"></a>
                                    </div>
                                </div>
                                <div class="col-md-2 gutter-b">
                                    <div class="book">
                                        <a href=""><img src="{{asset("media/books/12.png")}}"
                                                        class="img-responsive"></a>
                                    </div>
                                </div>
                                <div class="col-md-2 gutter-b">
                                    <div class="book">
                                        <a href=""><img src="{{asset("media/books/11.png")}}"
                                                        class="img-responsive"></a>
                                    </div>
                                </div>
                                <div class="col-md-2 gutter-b">
                                    <div class="book">
                                        <a href=""><img src="{{asset("media/books/10.png")}}"
                                                        class="img-responsive"></a>
                                    </div>
                                </div>
                                <div class="col-md-2 gutter-b">
                                    <div class="book">
                                        <a href=""><img src="{{asset("media/books/8.png")}}" class="img-responsive"></a>
                                    </div>
                                </div>
                                <div class="col-md-2 gutter-b">
                                    <div class="book">
                                        <a href=""><img src="{{asset("media/books/7.png")}}" class="img-responsive"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end::Body-->
                </div>
                <!--end::Advance Table Widget 4-->
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <!--begin::Advance Table Widget 4-->
                <div class="card card-custom card-stretch gutter-b">
                    <!--begin::Header-->
                    <div class="card-header border-0 py-5">
                        <h3 class="card-title align-items-start flex-column">
                            <span class="card-label font-weight-bolder text-dark">En Çok Beğenilen Kitaplar</span>
                            <span class="text-muted mt-3 font-weight-bold font-size-sm">More than 400+ new members</span>
                        </h3>
                        <div class="card-toolbar">
                            <a href="#" class="btn btn-light-primary font-weight-bolder font-size-sm">Tümünü Gör</a>
                        </div>
                    </div>
                    <!--end::Header-->
                    <!--begin::Body-->
                    <div class="card-body pt-0 pb-10" style="text-align: center;">
                        <div class="tab-content">
                            <div class="row">
                                <div class="col-md-2 gutter-b">
                                    <div class="book">
                                        <a href=""><img src="{{asset("media/books/13.png")}}"
                                                        class="img-responsive"></a>
                                    </div>
                                </div>
                                <div class="col-md-2 gutter-b">
                                    <div class="book">
                                        <a href=""><img src="{{asset("media/books/12.png")}}"
                                                        class="img-responsive"></a>
                                    </div>
                                </div>
                                <div class="col-md-2 gutter-b">
                                    <div class="book">
                                        <a href=""><img src="{{asset("media/books/11.png")}}"
                                                        class="img-responsive"></a>
                                    </div>
                                </div>
                                <div class="col-md-2 gutter-b">
                                    <div class="book">
                                        <a href=""><img src="{{asset("media/books/10.png")}}"
                                                        class="img-responsive"></a>
                                    </div>
                                </div>
                                <div class="col-md-2 gutter-b">
                                    <div class="book">
                                        <a href=""><img src="{{asset("media/books/8.png")}}" class="img-responsive"></a>
                                    </div>
                                </div>
                                <div class="col-md-2 gutter-b">
                                    <div class="book">
                                        <a href=""><img src="{{asset("media/books/7.png")}}" class="img-responsive"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end::Body-->
                </div>
                <!--end::Advance Table Widget 4-->
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <!--begin::Advance Table Widget 4-->
                <div class="card card-custom card-stretch gutter-b">
                    <!--begin::Header-->
                    <div class="card-header border-0 py-5">
                        <h3 class="card-title align-items-start flex-column">
                            <span class="card-label font-weight-bolder text-dark">En Çok Beğenilen Kitaplar</span>
                            <span class="text-muted mt-3 font-weight-bold font-size-sm">More than 400+ new members</span>
                        </h3>
                        <div class="card-toolbar">
                            <a href="#" class="btn btn-light-primary font-weight-bolder font-size-sm">Tümünü Gör</a>
                        </div>
                    </div>
                    <!--end::Header-->
                    <!--begin::Body-->
                    <div class="card-body pt-0 pb-10" style="text-align: center;">
                        <div class="tab-content">
                            <div class="row">
                                <div class="col-md-2 gutter-b">
                                    <div class="book">
                                        <a href=""><img src="{{asset("media/books/13.png")}}"
                                                        class="img-responsive"></a>
                                    </div>
                                </div>
                                <div class="col-md-2 gutter-b">
                                    <div class="book">
                                        <a href=""><img src="{{asset("media/books/12.png")}}"
                                                        class="img-responsive"></a>
                                    </div>
                                </div>
                                <div class="col-md-2 gutter-b">
                                    <div class="book">
                                        <a href=""><img src="{{asset("media/books/11.png")}}"
                                                        class="img-responsive"></a>
                                    </div>
                                </div>
                                <div class="col-md-2 gutter-b">
                                    <div class="book">
                                        <a href=""><img src="{{asset("media/books/10.png")}}"
                                                        class="img-responsive"></a>
                                    </div>
                                </div>
                                <div class="col-md-2 gutter-b">
                                    <div class="book">
                                        <a href=""><img src="{{asset("media/books/8.png")}}" class="img-responsive"></a>
                                    </div>
                                </div>
                                <div class="col-md-2 gutter-b">
                                    <div class="book">
                                        <a href=""><img src="{{asset("media/books/7.png")}}" class="img-responsive"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end::Body-->
                </div>
                <!--end::Advance Table Widget 4-->
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <!--begin::Advance Table Widget 4-->
                <div class="card card-custom card-stretch gutter-b">
                    <!--begin::Header-->
                    <div class="card-header border-0 py-5">
                        <h3 class="card-title align-items-start flex-column">
                            <span class="card-label font-weight-bolder text-dark">En Çok Beğenilen Kitaplar</span>
                            <span class="text-muted mt-3 font-weight-bold font-size-sm">More than 400+ new members</span>
                        </h3>
                        <div class="card-toolbar">
                            <a href="#" class="btn btn-light-primary font-weight-bolder font-size-sm">Tümünü Gör</a>
                        </div>
                    </div>
                    <!--end::Header-->
                    <!--begin::Body-->
                    <div class="card-body pt-0 pb-10" style="text-align: center;">
                        <div class="tab-content">
                            <div class="row">
                                <div class="col-md-2 gutter-b">
                                    <div class="book">
                                        <a href=""><img src="{{asset("media/books/13.png")}}"
                                                        class="img-responsive"></a>
                                    </div>
                                </div>
                                <div class="col-md-2 gutter-b">
                                    <div class="book">
                                        <a href=""><img src="{{asset("media/books/12.png")}}"
                                                        class="img-responsive"></a>
                                    </div>
                                </div>
                                <div class="col-md-2 gutter-b">
                                    <div class="book">
                                        <a href=""><img src="{{asset("media/books/11.png")}}"
                                                        class="img-responsive"></a>
                                    </div>
                                </div>
                                <div class="col-md-2 gutter-b">
                                    <div class="book">
                                        <a href=""><img src="{{asset("media/books/10.png")}}"
                                                        class="img-responsive"></a>
                                    </div>
                                </div>
                                <div class="col-md-2 gutter-b">
                                    <div class="book">
                                        <a href=""><img src="{{asset("media/books/8.png")}}" class="img-responsive"></a>
                                    </div>
                                </div>
                                <div class="col-md-2 gutter-b">
                                    <div class="book">
                                        <a href=""><img src="{{asset("media/books/7.png")}}" class="img-responsive"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end::Body-->
                </div>
                <!--end::Advance Table Widget 4-->
            </div>
        </div>
        <!--end::Profile 4-->
    </div>

@endsection

{{-- Scripts Section --}}
@section('scripts')
    <script src="{{ asset('js/pages/widgets.js') }}" type="text/javascript"></script>
@endsection
