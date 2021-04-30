{{-- Extends layout --}}
@extends('layout.default')

{{-- Content --}}
@section('content')

    {{-- kayıt ol / giriş yap --}}
    <div class="row">
        <div class="col-md-12">
            <!--begin::Tiles Widget 7-->
            <div class="card card-custom bgi-no-repeat gutter-b card-stretch"
                 style="background-color: #1B283F; background-position: calc(100% + 0.5rem) calc(100% + 0.5rem); background-size: 90% auto; background-image: url({{ asset('media/svg/patterns/rhone.svg') }})">
                <!--begin::Body-->
                <div class="card-body">
                    <div class="p-4">

                        <div class="row">
                            <div class="col-lg-6 col-md-4 col-sm-12 col-xs-12 gutter-a">
                                <div class="card card-custom">
                                    <div class="card-header">
                                        <div class="card-title">
                                            <h3 class="card-label">Hemen ücretsiz bir hesap oluştur!</h3>
                                        </div>
                                        <div class="card-toolbar">
                                            <a href="{{route('register')}}" class="btn btn-primary font-weight-bolder font-size-sm mr-3">
                                                Hesap Oluştur <i class="fas fa-long-arrow-alt-right ml-3"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <!--end::Body-->
            </div>
            <!--end::Tiles Widget 7-->
        </div>
    </div>

    {{-- kategoriler / yorumlar --}}
    <div class="row">
        <div class="col-lg-4 col-md-6 col-sm-12">
            <!--begin::List Widget 7-->
            <div class="card card-custom card-stretch gutter-b">
                <!--begin::Header-->
                <div class="card-header border-0 py-5">
                    <h3 class="card-title align-items-start flex-column">
                        <span class="card-label font-weight-bolder text-dark">Popüler Kategoriler</span>
                        <span class="text-muted mt-3 font-weight-bold font-size-sm">Kategorilere hızlıca göz atın</span>
                    </h3>
                </div>
                <!--end::Header-->
                <!--begin::Body-->
                <div class="card-body pt-0">

                    @foreach($top3Categories as $item)

                    <div class="d-flex align-items-center flex-wrap mb-8">
                        <!--begin::Symbol-->
                        <div class="symbol symbol-50 symbol-light-primary mr-4">
                            <span class="symbol-label">
                                <span class="svg-icon svg-icon-primary svg-icon-2x">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																	<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																		<rect x="0" y="0" width="24" height="24"></rect>
																		<path d="M5,3 L6,3 C6.55228475,3 7,3.44771525 7,4 L7,20 C7,20.5522847 6.55228475,21 6,21 L5,21 C4.44771525,21 4,20.5522847 4,20 L4,4 C4,3.44771525 4.44771525,3 5,3 Z M10,3 L11,3 C11.5522847,3 12,3.44771525 12,4 L12,20 C12,20.5522847 11.5522847,21 11,21 L10,21 C9.44771525,21 9,20.5522847 9,20 L9,4 C9,3.44771525 9.44771525,3 10,3 Z" fill="#000000"></path>
																		<rect fill="#000000" opacity="0.3" transform="translate(17.825568, 11.945519) rotate(-19.000000) translate(-17.825568, -11.945519)" x="16.3255682" y="2.94551858" width="3" height="18" rx="1"></rect>
																	</g>
                                    </svg>
                                </span>
                            </span>
                        </div>
                        <!--end::Symbol-->
                        <!--begin::Text-->
                        <div class="d-flex flex-column flex-grow-1 mr-2">
                            <span class="font-weight-bold text-dark-75 text-hover-primary font-size-lg mb-1">{{$item->name}}</span>
                            <a href="categories/{{$item->slug}}" class="text-muted text-hover-primary font-weight-bold">kategoriye git ></a>
                        </div>
                        <!--end::Text-->
                        <span class="label label-xl label-light label-inline font-weight-bolder text-primary p-3">{{$item->adet}} kitap</span>
                    </div>

                    @endforeach
                        <a href="{{route('register')}}" class="btn btn-light-primary btn-block font-size-sm mr-3">
                            Kitapları Gör
                        </a>
                </div>
                <!--end::Body-->
            </div>
            <!--end::List Widget 7-->
        </div>

        <div class="col-lg-8 col-md-6 col-sm-12">
            <!--begin::Advance Table Widget 4-->
            <div class="card card-custom card-stretch gutter-b">
                <!--begin::Header-->
                <div class="card-header border-0 py-5">
                    <h3 class="card-title align-items-start flex-column">
                        <span class="card-label font-weight-bolder text-dark">Popüler Kitaplar <i class="fa fa-info-circle text-hover-primary"  data-toggle="popover" data-placement="top" data-content="Yapılan tavsiye sayılarına göre"></i> </span>
                        <span class="text-muted mt-3 font-weight-bold font-size-sm">Diğer kullanıcılar tarfından en çok tercih edilen kitaplar</span>
                    </h3>
                    <div class="card-toolbar">
                        <a href="books" class="btn btn-light-primary font-weight-bolder font-size-sm">Tümünü Gör</a>
                    </div>
                </div>
                <!--end::Header-->
                <!--begin::Body-->
                <div class="card-body pt-0 pb-10" style="text-align: center;">
                    <div class="tab-content">
                        <div class="row">

                            @foreach ($popularBooks as $book)
                                <div class="col col-xl-3 col-md-3 text-capitalize" data-toggle="popover" data-placement="top" data-content="{{ $book->book_name }}">
                                    <div class="book">
                                        <a href="books/{{$book->slug}}">
                                            <img src="{{ $book->book_image }}" class="img-responsive" alt="image-{{ $book->slug }}">
                                        </a>
                                    </div>
                                </div>
                            @endforeach

                        </div>
                    </div>
                </div>
                <!--end::Body-->
            </div>
            <!--end::Advance Table Widget 4-->
        </div>
    </div>

    {{-- yeni eklenen kitaplar --}}
    <div class="row">
        <div class="col-lg-12">
            <!--begin::Advance Table Widget 4-->
            <div class="card card-custom card-stretch gutter-b">
                <!--begin::Header-->
                <div class="card-header border-0 py-5">
                    <h3 class="card-title align-items-start flex-column">
                        <span class="card-label font-weight-bolder text-dark">Yeni Eklenen Kitaplar</span>
                        <span class="text-muted mt-3 font-weight-bold font-size-sm">Diğer kullanıcılar tarfından eklenen son kitaplar</span>
                    </h3>
                    <div class="card-toolbar">
                        <a href="books" class="btn btn-light-primary font-weight-bolder font-size-sm">Tümünü Gör</a>
                    </div>
                </div>
                <!--end::Header-->
                <!--begin::Body-->
                <div class="card-body pt-0 pb-10" style="text-align: center;">
                    <div class="tab-content">
                        <div class="row">

                            @foreach ($allBooks as $book)
                                <div class="col col-xl-2 col-md-3 text-capitalize" data-toggle="popover" data-placement="top" data-content="{{ $book->book_name }}">
                                    <div class="book">
                                        <a href="books/{{$book->slug}}">
                                            <img src="{{ $book->book_image }}" class="img-responsive" alt="image-{{ $book->slug }}">
                                        </a>
                                    </div>
                                </div>
                            @endforeach

                        </div>
                    </div>
                </div>
                <!--end::Body-->
            </div>
            <!--end::Advance Table Widget 4-->
        </div>
    </div>

    {{-- reklamr --}}
    <div class="row">
        <div class="col-lg-8 col-md-12 col-sm-12">
            <div class="card card-custom card-stretch gutter-b">
                <div class="card-body d-flex p-0">
                    <div
                        class="flex-grow-1 p-12 card-rounded bgi-no-repeat d-flex flex-column justify-content-center align-items-start"
                        style="background-color: #FFF4DE; background-position: right bottom; background-size: auto 100%; background-image: url({{asset("media/svg/humans/custom-8.svg")}})">
                        <h4 class="text-danger font-weight-bolder m-0">%25 indirim kazanmak için hesabını doğrula</h4>
                        <p class="text-dark-50 my-5 font-size-xl font-weight-bold">Start with a modern site design and
                            customize it with your branding content,
                            <br>and features. All Premium blogs include custom CSS.</p>
                        <a href="#" class="btn btn-danger font-weight-bold py-2 px-6">Hesap Hesabını Doğrula</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-4 col-md-12 col-sm-12">
            <div class="card card-custom card-stretch gutter-b">
                <div class="card-body p-0 d-flex">
                    <div
                        class="d-flex align-items-start justify-content-start flex-grow-1 bg-light-warning p-8 card-rounded flex-grow-1 position-relative">
                        <div class="d-flex flex-column align-items-start flex-grow-1 h-100">
                            <div class="p-1 flex-grow-1">
                                <h4 class="text-warning font-weight-bolder">Bize Bildirin</h4>
                                <p class="text-dark-50 font-weight-bold mt-3 mr-10">Street Books'ta eksik kitap olduğunu
                                    düşüyorsanız lütfen bize bildirin.</p>
                            </div>
                            <a href="#" class="btn btn-link btn-link-warning font-weight-bold">Kitap isteğinde bulun
                                <span class="svg-icon svg-icon-lg svg-icon-warning">
																		<!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Arrow-right.svg-->
																		<svg xmlns="http://www.w3.org/2000/svg"
                                                                             xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                             width="24px" height="24px"
                                                                             viewBox="0 0 24 24" version="1.1">
																			<g stroke="none" stroke-width="1"
                                                                               fill="none" fill-rule="evenodd">
																				<polygon
                                                                                    points="0 0 24 0 24 24 0 24"></polygon>
																				<rect fill="#000000" opacity="0.3"
                                                                                      transform="translate(12.000000, 12.000000) rotate(-90.000000) translate(-12.000000, -12.000000)"
                                                                                      x="11" y="5" width="2" height="14"
                                                                                      rx="1"></rect>
																				<path
                                                                                    d="M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z"
                                                                                    fill="#000000" fill-rule="nonzero"
                                                                                    transform="translate(14.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-14.999999, -11.999997)"></path>
																			</g>
																		</svg>
                                    <!--end::Svg Icon-->
																	</span>
                            </a>
                        </div>
                        <div class="position-absolute right-0 bottom-0 mr-5 overflow-hidden">
                            <img src="{{asset("media/svg/humans/custom-13.svg")}}"
                                 class="max-h-200px max-h-xl-275px mb-n20" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- en çok beğenilen kitaplar --}}
    <div class="row">
        <div class="col-lg-12">
            <!--begin::Advance Table Widget 4-->
            <div class="card card-custom card-stretch gutter-b">
                <!--begin::Header-->
                <div class="card-header border-0 py-5">
                    <h3 class="card-title align-items-start flex-column">
                        <span class="card-label font-weight-bolder text-dark">En Çok Tavsiye Edilen Kitaplar <i class="fa fa-info-circle text-hover-primary"  data-toggle="popover" data-placement="top" data-content="Yapılan pozitif tavsiye sayılarına göre"></i></span>
                        <span class="text-muted mt-3 font-weight-bold font-size-sm">Kullanıcılar tarafından en çok tavsiye edilen kitaplar</span>
                    </h3>
                    <div class="card-toolbar">
                        <a href="books" class="btn btn-light-primary font-weight-bolder font-size-sm">Tümünü Gör</a>
                    </div>
                </div>
                <!--end::Header-->
                <!--begin::Body-->
                <div class="card-body pt-0 pb-10" style="text-align: center;">
                    <div class="tab-content">
                        <div class="row">
                            @foreach ($bestBooks as $book)
                                <div class="col col-xl-2 col-md-3 text-capitalize" data-toggle="popover" data-placement="top" data-content="{{ $book->book_name }}">
                                    <div class="book">
                                        <a href="books/{{$book->slug}}">
                                            <img src="{{ $book->book_image }}" class="img-responsive" alt="image-{{ $book->slug }}">
                                        </a>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <!--end::Body-->
            </div>
            <!--end::Advance Table Widget 4-->
        </div>
    </div>

@endsection

{{-- Scripts Section --}}
@section('scripts')
    <script src="{{ asset('js/pages/widgets.js') }}" type="text/javascript"></script>
@endsection
