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
                                    Bildirdiğiniz kitaplar anında sisteme eklenecektir.
                                </p>
                            </div>
                            <div class="ml-6 ml-lg-0 ml-xxl-6 flex-shrink-0">
                                <a href="{{ url('book/add') }}" target="_blank"
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
        <div class="row">
            <!--begin::Aside-->
            <div class="col-xl-4" id="kt_profile_aside">
                <!--begin::Card-->
                <div class="card card-custom gutter-b">
                    <!--begin::Header-->
                    <div class="card-header h-auto py-4">
                        <div class="card-title">
                            <div
                                class="symbol symbol-light-success symbol-60 symbol-xxl-100 mr-5 align-self-start align-self-xxl-center">
                                <span
                                    class="symbol-label font-size-h1 text-success font-weight-bold text-uppercase">{{ substr(Auth::user()->name, 0, 1) }}</span>
                                <i class="symbol-badge bg-success"></i>
                            </div>
                            <h3 class="card-label">{{ Auth::user()->name }}
                                <span class="d-block text-muted pt-2 font-size-sm"><a
                                        href="#">{{ Auth::user()->email }}</a> </span>
                            </h3>
                        </div>
                    </div>
                    <!--end::Header-->
                    <!--begin::Body-->
                    <div class="card-body py-4">
                        <div class="form-group row my-2">
                            <label class="col-5 col-form-label">Kullanıcı Türü:</label>
                            <div class="col-7">
                                <span class="form-control-plaintext font-weight-bolder"><span
                                        class="label label-lg label-light-primary label-inline">Normal</span></span>
                            </div>
                        </div>
                        <div class="form-group row my-2">
                            <label class="col-5 col-form-label">Kayıt Tarihi:</label>
                            <div class="col-7">
                                <span class="form-control-plaintext font-weight-bolder">
                                    <b>{{ Auth::user()->created_at->format('d/m/Y') }}</b>
                                </span>
                            </div>
                        </div>
                        <div class="form-group row my-2">
                            <label class="col-5 col-form-label">Cinsiyet:</label>
                            <div class="col-7">
                                <span class="form-control-plaintext font-weight-bolder">Kadın</span>
                            </div>
                        </div>
                        <div class="form-group row my-2">
                            <label class="col-5 col-form-label">Şehir:</label>
                            <div class="col-7">
                                <span class="form-control-plaintext font-weight-bolder">Bursa</span>
                            </div>
                        </div>
                    </div>
                    <!--end::Body-->
                    <!--begin::Footer-->
                    <div class="card-footer">
                        <a href="#" class="btn btn-success font-weight-bold mr-2 btn-block">Bilgileri Güncelle</a>
                    </div>
                    <!--end::Footer-->
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
            <div class="col-xl-8">
                <!--begin::Advance Table Widget 8-->
                <div class="card card-custom gutter-b">
                    <!--begin::Header-->
                    <div class="card-header border-0 py-5">
                        <h3 class="card-title align-items-start flex-column">
                            <span class="card-label font-weight-bolder text-dark">Yaptığım Yorumlar</span>
                            <span class="text-muted mt-3 font-weight-bold font-size-sm">Kitaplar hakkında belirttiğin görüşler</span>
                        </h3>
                        <div class="card-toolbar">
                  <span
                      class="font-weight-bolder font-size-sm text-muted text-hover-dark">68 yorum bulundu</span>
                        </div>
                    </div>
                    <!--end::Header-->
                    <!--begin::Body-->
                    <div class="card-body pt-0 pb-3">
                    @if(Auth::check())
                        <!--begin::Table-->
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="card card-custom card-collapsed gutter-b" data-card="true"
                                         id="kt_card_4">
                                        <div class="card-header">
                                            <div class="card-title">
                                                <h3 class="card-label">Şeker Portakalı</h3>
                                            </div>
                                            <div class="card-toolbar">
                                                <a href="#" class="btn btn-icon btn-sm btn-light-primary"
                                                   data-card-tool="toggle">
                                                    <i class="ki ki-arrow-up icon-nm"></i>
                                                </a>
                                                <a href="#" class="btn btn-icon btn-sm btn-light-primary ml-3"
                                                   data-card-tool="toggle">
                                                    <i class="fa fa-eye"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="pt-4 d-flex flex-column justify-content-between">
                                                <!--begin::User-->
                                                <div class="d-flex align-items-center mb-7">
                                                    <!--begin::Pic-->
                                                    <div class="flex-shrink-0 mr-4 mt-lg-0 mt-3">
                                                        <img class="img-responsive" alt="Pic"
                                                             src="{{asset('uploads/book_image/seker-portakali-6469704432632.jpeg')}}"
                                                             style="width: 80px !important; max-width: 100px !important;">

                                                    </div>
                                                    <!--end::Pic-->
                                                    <!--begin::Title-->
                                                    <div class="d-flex flex-column">
                                                        <a href="#" class="text-dark font-weight-bold text-hover-primary font-size-h4 mb-0">Şeker Portakalı</a>
                                                        <span class="font-weight-bold text-dark-75">Lorem ipsum dolor</span>
                                                        <span class="font-weight-bold text-dark-50">14:28 27/04/2021</span>
                                                    </div>
                                                    <!--end::Title-->
                                                </div>
                                                <!--end::User-->
                                                <!--begin::Desc-->
                                                <p class="mb-7">Lorem ipsum dolor sit amet, consectetur adipisicing
                                                    elit. Corporis dolorum fugit illo itaque iusto maxime neque nihil,
                                                    nisi possimus quaerat, rerum sed temporibus! A debitis esse fugit
                                                    provident soluta unde. Lorem ipsum dolor sit amet, consectetur
                                                    adipisicing elit. Accusamus architecto blanditiis consequatur
                                                    eligendi enim eveniet fuga fugiat iure, modi molestiae molestias non
                                                    sequi! Accusamus non numquam quo sapiente sed, tempore? Lorem ipsum
                                                    dolor sit amet, consectetur adipisicing elit. Ab commodi dignissimos
                                                    maiores nisi officia quibusdam quidem quod veniam. Autem consequatur
                                                    eius expedita ipsam omnis saepe sit tempora tenetur unde vero.</p>
                                                <!--end::Desc-->
                                                <!--end::Info-->
                                                <a href="#"
                                                   class="btn btn-block btn-sm btn-light-warning font-weight-bolder text-uppercase py-4">write
                                                    message</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
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
                            <span
                                class="text-muted mt-3 font-weight-bold font-size-sm">More than 400+ new members</span>
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
                            <span
                                class="text-muted mt-3 font-weight-bold font-size-sm">More than 400+ new members</span>
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
                            <span
                                class="text-muted mt-3 font-weight-bold font-size-sm">More than 400+ new members</span>
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
                            <span
                                class="text-muted mt-3 font-weight-bold font-size-sm">More than 400+ new members</span>
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
    <script src="{{asset('js/pages/features/cards/tools.js?v=7.0.5')}}"></script>
@endsection
