{{-- Extends layout --}}
@extends('layout.default')
{{-- Content --}}
@section('content')
    <div class="container">
        <div class="row">

            <div class="col-md-6">
                <div class="card card-custom gutter-b">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <!--begin::Callout-->
                                <div class="row">
                                    <!--begin::Content-->
                                    <div class="col-sm-8">
                                        <a href="#" class="h4 text-dark text-hover-primary">
                                            Kitaplar Hakkında Görüş Bildirin
                                        </a>
                                        <p class="text-dark-50 line-height-lg mt-5">
                                            Okumuş olduğunuz kitap hakkında görüş bildirin. Bildirdiğiniz görüşler,
                                            kitabı
                                            okumak isteyen diğer okuyucular için fikir sahibi olmalarını sağlar.
                                        </p>
                                    </div>
                                    <!--end::Content-->
                                    <!--begin::Button-->
                                    <div class="col-sm-4 d-flex align-items-center justify-content-sm-end">
                                        <a href="{{route('sendBookComment')}}" target="_blank"
                                           class="btn font-weight-bolder text-uppercase font-size-lg btn-primary py-3 px-6">Görüş
                                            Bildir</a>

                                    </div>
                                    <!--end::Button-->
                                </div>

                                <!--end::Callout-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card card-custom gutter-b">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <!--begin::Callout-->
                                <div class="row">
                                    <!--begin::Content-->
                                    <div class="col-sm-8">
                                        <a href="#" class="h4 text-dark text-hover-primary">
                                            Eksik Kitap Bildirin
                                        </a>
                                        <p class="text-dark-50 line-height-lg mt-5">Street Books'ta eksik olduğunu
                                            düşündüğünüz kitaplar varsa lütfen bize bildirin.
                                            Bildirdiğiniz kitaplar anında sisteme eklenecektir.</p>
                                    </div>
                                    <!--end::Content-->
                                    <!--begin::Button-->
                                    <div class="col-sm-4 d-flex align-items-center justify-content-sm-end">
                                        <a href="{{ url('book/add') }}" target="_blank"
                                           class="btn font-weight-bolder text-uppercase font-size-lg btn-primary py-3 px-6">Kitap
                                            Bildirin</a>

                                    </div>
                                    <!--end::Button-->
                                </div>

                                <!--end::Callout-->
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
                            <h3 class="card-label"><span class="text-muted pb-2 font-size-sm text-lowercase">kullanıcı adı</span><br>
                                {{ \Illuminate\Support\Str::slug(Auth::user()->name) }}</h3>
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
                            <label class="col-5 col-form-label">Ad Soyad:</label>
                            <div class="col-7">
                                <span
                                    class="form-control-plaintext font-weight-bolder text-capitalize">{{ Auth::user()->name }}</span>
                            </div>
                        </div>
                        <div class="form-group row my-2">
                            <label class="col-5 col-form-label">Email:</label>
                            <div class="col-7">
                                <span class="form-control-plaintext font-weight-bolder">{{ Auth::user()->email }}</span>
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
                    </div>
                    <!--end::Body-->
                    <!--begin::Footer-->
                    <div class="card-footer">
                        <a href="#" class="btn btn-success font-weight-bold mr-2 btn-block disabled">Bilgileri Güncelle</a>
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
                            <span class="text-muted mt-3 font-weight-bold font-size-sm">Kitaplar hakkında yaptığın tüm yorumlar</span>
                        </h3>
                        @if($comments[0]->approved == 1)
                            <div class="card-toolbar">
                                <span class="font-weight-bolder font-size-sm text-muted text-hover-dark">{{ $comments->count() }} yorum bulundu</span>
                            </div>
                        @else
                            <div class="card-toolbar">
                                <span class="font-weight-bolder font-size-sm text-muted text-hover-dark">0 yorum bulundu</span>
                            </div>
                        @endif
                    </div>
                    <!--end::Header-->
                    <!--begin::Body-->
                    <div class="card-body pt-0 pb-3">
                    @if($comments[0]->approved == 1)
                        <!--begin::Table-->
                            <div class="timeline timeline-3">
                                <div class="timeline-items mb-5">
                                    @foreach($comments as $item)

                                        <div class="timeline-item ">
                                            <div class="timeline-media">
                                                <a href="books/{{$item->slug}}"><img alt="image-book-{{$item->slug}}"
                                                                                     src="{{ $item->book_image }}"></a>
                                            </div>
                                            <div class="timeline-content">
                                                <div class="d-flex align-items-center justify-content-between mb-3">
                                                    <div class="mr-2">
                                                        <span
                                                            class="text-dark-75 text-hover-primary font-weight-bold">{{ $item->book_name }}</span>
                                                        @if ($loop->first)
                                                            <span
                                                                class="label label-light-success font-weight-bolder pulse pulse-success text-uppercase label-inline ml-2">
                                                            <span class="pulse-ring"></span>Yeni</span>
                                                        @endif
                                                        <br>
                                                        <span
                                                            class="text-muted">{{\Carbon\Carbon::parse($item->comment_create_at)->diffForHumans() }}</span>

                                                    </div>
                                                    <div class="dropdown ml-2" data-toggle="tooltip" title=""
                                                         data-placement="left" data-original-title="Yorumu gör">
                                                        <a href="books/{{ $item->slug }}"
                                                           class="btn btn-default btn-sm btn-sm btn-icon">
                                                            <i class="ki ki-long-arrow-next"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <p class="p-0">{{ $item->comment }}</p>
                                            </div>
                                        </div>

                                    @endforeach
                                </div>
                            </div>

                            {{ $comments->links() }}
                        @else
                            <div class="alert alert-warning" role="alert">
                                <h4 class="alert-heading">Uyarı!</h4>
                                <p>Maalesef sana ait hiçbir yorum bulamadık.</p>
                                <hr>
                                <p class="mb-0">İlk yorumunu yapmak için kitaplar sayfasına git. <a href="{{route('books')}}" class="font-weight-bold text-white text-hover-dark">kitaplara git ></a></p>
                            </div>
                        @endif

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
{{-- Scripts Section --}}
@section('scripts')
    <script src="{{ asset('js/pages/widgets.js') }}" type="text/javascript"></script>
    <script src="{{asset('js/pages/features/cards/tools.js?v=7.0.5')}}"></script>
@endsection
