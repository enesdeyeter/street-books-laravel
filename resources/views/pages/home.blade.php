{{-- Extends layout --}}
@extends('layout.default')

{{-- Content --}}
@section('content')

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
                        <a href="{{route('books')}}" class="btn btn-light-primary btn-block font-size-sm mr-3">
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

    <div class="row gutter-b">
        <div class="col-lg-4">
            <!--begin::Callout-->
            <div class="card card-custom wave wave-animate-slow wave-primary mb-8 mb-lg-0">
                <div class="card-body">
                    <div class="d-flex align-items-center p-5">
                        <!--begin::Icon-->
                        <div class="mr-6">
													<span class="svg-icon svg-icon-primary svg-icon-4x">
														<!--begin::Svg Icon | path:assets/media/svg/icons/Home/Mirror.svg-->
														<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
															<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <rect x="0" y="0" width="24" height="24"/>
        <path d="M4,22 L2,22 C2,19.2385763 4.23857625,18 7,18 L17,18 C19.7614237,18 22,19.2385763 22,22 L20,22 C20,20.3431458 18.6568542,20 17,20 L7,20 C5.34314575,20 4,20.3431458 4,22 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"/>
        <rect fill="#000000" x="1" y="14" width="22" height="6" rx="1"/>
        <path d="M13,13 L11,13 L11,12 C11,11.4477153 10.5522847,11 10,11 L6,11 C5.44771525,11 5,11.4477153 5,12 L5,13 L4,13 C3.44771525,13 3,12.5522847 3,12 L3,8 C3,6.8954305 3.8954305,6 5,6 L19,6 C20.1045695,6 21,6.8954305 21,8 L21,12 C21,12.5522847 20.5522847,13 20,13 L19,13 L19,12 C19,11.4477153 18.5522847,11 18,11 L14,11 C13.4477153,11 13,11.4477153 13,12 L13,13 Z" fill="#000000" opacity="0.3"/>
    </g>
														</svg>
                                                        <!--end::Svg Icon-->
													</span>
                        </div>
                        <!--end::Icon-->
                        <!--begin::Content-->
                        <div class="d-flex flex-column">
                            <span class="text-dark text-hover-primary font-weight-bold font-size-h4 mb-3">Başucu Kitapları</span>
                            <div class="text-dark-75">Sizin için derlerdik. <a href="{{ route('coming-soon') }}">incele ></a></div>
                        </div>
                        <!--end::Content-->
                    </div>
                </div>
            </div>
            <!--end::Callout-->
        </div>
        <div class="col-lg-4">
            <!--begin::Callout-->
            <div class="card card-custom wave wave-animate-slow wave-danger mb-8 mb-lg-0">
                <div class="card-body">
                    <div class="d-flex align-items-center p-5">
                        <!--begin::Icon-->
                        <div class="mr-6">
													<span class="svg-icon svg-icon-danger svg-icon-4x">
														<!--begin::Svg Icon | path:assets/media/svg/icons/General/Thunder-move.svg-->
														<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
															<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																<rect x="0" y="0" width="24" height="24"></rect>
																<path d="M16.3740377,19.9389434 L22.2226499,11.1660251 C22.4524142,10.8213786 22.3592838,10.3557266 22.0146373,10.1259623 C21.8914367,10.0438285 21.7466809,10 21.5986122,10 L17,10 L17,4.47708173 C17,4.06286817 16.6642136,3.72708173 16.25,3.72708173 C15.9992351,3.72708173 15.7650616,3.85240758 15.6259623,4.06105658 L9.7773501,12.8339749 C9.54758575,13.1786214 9.64071616,13.6442734 9.98536267,13.8740377 C10.1085633,13.9561715 10.2533191,14 10.4013878,14 L15,14 L15,19.5229183 C15,19.9371318 15.3357864,20.2729183 15.75,20.2729183 C16.0007649,20.2729183 16.2349384,20.1475924 16.3740377,19.9389434 Z" fill="#000000"></path>
																<path d="M4.5,5 L9.5,5 C10.3284271,5 11,5.67157288 11,6.5 C11,7.32842712 10.3284271,8 9.5,8 L4.5,8 C3.67157288,8 3,7.32842712 3,6.5 C3,5.67157288 3.67157288,5 4.5,5 Z M4.5,17 L9.5,17 C10.3284271,17 11,17.6715729 11,18.5 C11,19.3284271 10.3284271,20 9.5,20 L4.5,20 C3.67157288,20 3,19.3284271 3,18.5 C3,17.6715729 3.67157288,17 4.5,17 Z M2.5,11 L6.5,11 C7.32842712,11 8,11.6715729 8,12.5 C8,13.3284271 7.32842712,14 6.5,14 L2.5,14 C1.67157288,14 1,13.3284271 1,12.5 C1,11.6715729 1.67157288,11 2.5,11 Z" fill="#000000" opacity="0.3"></path>
															</g>
														</svg>
                                                        <!--end::Svg Icon-->
													</span>
                        </div>
                        <!--end::Icon-->
                        <!--begin::Content-->
                        <div class="d-flex flex-column">
                            <span class="text-dark text-hover-primary font-weight-bold font-size-h4 mb-3">Ödüllü Kitaplar</span>
                            <div class="text-dark-75">Sizin için derlerdik. <a href="{{ route('coming-soon') }}">incele ></a></div>
                        </div>
                        <!--end::Content-->
                    </div>
                </div>
            </div>
            <!--end::Callout-->
        </div>
        <div class="col-lg-4">
            <!--begin::Callout-->
            <div class="card card-custom wave wave-animate-slow wave-success mb-8 mb-lg-0">
                <div class="card-body">
                    <div class="d-flex align-items-center p-5">
                        <!--begin::Icon-->
                        <div class="mr-6">
													<span class="svg-icon svg-icon-success svg-icon-4x">
														<!--begin::Svg Icon | path:assets/media/svg/icons/Design/Sketch.svg-->
														<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
															<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <rect x="0" y="0" width="24" height="24"></rect>
        <path d="M5,3 L6,3 C6.55228475,3 7,3.44771525 7,4 L7,20 C7,20.5522847 6.55228475,21 6,21 L5,21 C4.44771525,21 4,20.5522847 4,20 L4,4 C4,3.44771525 4.44771525,3 5,3 Z M10,3 L11,3 C11.5522847,3 12,3.44771525 12,4 L12,20 C12,20.5522847 11.5522847,21 11,21 L10,21 C9.44771525,21 9,20.5522847 9,20 L9,4 C9,3.44771525 9.44771525,3 10,3 Z" fill="#000000"></path>
        <rect fill="#000000" opacity="0.3" transform="translate(17.825568, 11.945519) rotate(-19.000000) translate(-17.825568, -11.945519) " x="16.3255682" y="2.94551858" width="3" height="18" rx="1"></rect>
    </g>
														</svg>
                                                        <!--end::Svg Icon-->
													</span>
                        </div>
                        <!--end::Icon-->
                        <!--begin::Content-->
                        <div class="d-flex flex-column">
                            <span class="text-dark text-hover-primary font-weight-bold font-size-h4 mb-3">Kitap Fuarı</span>
                            <div class="text-dark-75">Sizin için derlerdik. <a href="{{ route('coming-soon') }}">incele ></a></div>
                        </div>
                        <!--end::Content-->
                    </div>
                </div>
            </div>
            <!--end::Callout-->
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
                                 class="max-h-200px max-h-xl-275px mb-n20" alt="image-human">
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
