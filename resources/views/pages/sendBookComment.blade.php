{{-- Extends layout --}}
@extends('layout.default')

@section('styles')
    <style>
        #show-photo {
            display: none;
        }

        @media (max-width: 570px) {
            #show-photo {
                display: block;
            }
        }
    </style>
@endsection

{{-- Content --}}
@section('content')

    <div class="content pt-0 d-flex flex-column flex-column-fluid" id="kt_content">
        <!--begin::Entry-->
        <!--begin::Hero-->
        <div class="d-flex flex-row-fluid bgi-size-cover bgi-position-center" style="background-image: url('{{asset('/media/error/bg-3.jpg')}}'); border-radius: 4px;">
            <div class="container">
                <div class="d-flex align-items-stretch text-center flex-column py-40">
                    <!--begin::Heading-->
                    <h1 class="text-dark font-weight-bolder mb-12">Hakkında yorum yapmak istediğiniz kitabı bulun</h1>
                    <!--end::Heading-->
                    <!--begin::Form-->
                    <form class="d-flex position-relative w-75 px-lg-40 m-auto" method="post" action={{route('commentableBook')}}>
                        @csrf
                        <div class="input-group">
                            <!--begin::Icon-->
                            <div class="input-group-prepend">
												<span class="input-group-text bg-light border-0 py-7 px-8">
													<span class="svg-icon svg-icon-xl">
														<!--begin::Svg Icon | path:assets/media/svg/icons/General/Search.svg-->
														<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
															<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																<rect x="0" y="0" width="24" height="24"></rect>
																<path d="M14.2928932,16.7071068 C13.9023689,16.3165825 13.9023689,15.6834175 14.2928932,15.2928932 C14.6834175,14.9023689 15.3165825,14.9023689 15.7071068,15.2928932 L19.7071068,19.2928932 C20.0976311,19.6834175 20.0976311,20.3165825 19.7071068,20.7071068 C19.3165825,21.0976311 18.6834175,21.0976311 18.2928932,20.7071068 L14.2928932,16.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"></path>
																<path d="M11,16 C13.7614237,16 16,13.7614237 16,11 C16,8.23857625 13.7614237,6 11,6 C8.23857625,6 6,8.23857625 6,11 C6,13.7614237 8.23857625,16 11,16 Z M11,18 C7.13400675,18 4,14.8659932 4,11 C4,7.13400675 7.13400675,4 11,4 C14.8659932,4 18,7.13400675 18,11 C18,14.8659932 14.8659932,18 11,18 Z" fill="#000000" fill-rule="nonzero"></path>
															</g>
														</svg>
                                                        <!--end::Svg Icon-->
													</span>
												</span>
                            </div>
                            <!--end::Icon-->
                            <!--begin::Input-->
                            <input type="text" class="form-control h-auto border-0 py-7 px-1 font-size-h6 form-control-solid" name="book_name" placeholder="Kitap adı giriniz..." autocomplete="off">
                            <!--end::Input-->
                        </div>
                    </form>
                    <!--end::Form-->
                </div>
            </div>
        </div>
        <!--end::Hero-->
        <!--begin::Section-->
        <div class="py-8">
            <div class="row">
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
                                    <div class="text-dark-75">Sizin için derlerdik. <a href="{{route('coming-soon')}}">incele ></a></div>
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
                                    <div class="text-dark-75">Sizin için derlerdik. <a href="{{route('coming-soon')}}">incele ></a></div>
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
                                    <div class="text-dark-75">Sizin için derlerdik. <a href="{{route('coming-soon')}}">incele ></a></div>
                                </div>
                                <!--end::Content-->
                            </div>
                        </div>
                    </div>
                    <!--end::Callout-->
                </div>
            </div>
        </div>
        <!--end::Section-->
        @if(isset($foundBook))
        <div class="">
            <div class="card card-custom gutter-b">
                <div class="card-body">
                    <div id="show-photo">
                        <div class="mb-7 text-center">
                            <img class="img-responsive" alt="image-{{ $foundBook->slug }}"
                                 src="{{ asset($foundBook->book_image) }}"
                                 style="border-radius: 4px; max-width: 280px !important; max-height: 600px !important;">
                        </div>
                    </div>
                    <!--begin::Top-->
                    <div class="d-flex">
                        <!--begin: Pic-->
                        <div class="flex-shrink-0 mr-7 mt-lg-0 mt-3">
                            <div class="d-none d-sm-block">
                                <img class="img-responsive" alt="image-{{ $foundBook->slug }}"
                                     src="{{ asset($foundBook->book_image) }}"
                                     style="border-radius: 4px; max-width: 400px !important; max-height: 600px !important;">
                            </div>
                        </div>
                        <!--end::Pic-->
                        <!--begin: Info-->
                        <div class="flex-grow-1">
                            <!--begin::Title-->
                            <div class="d-flex align-items-center justify-content-between flex-wrap mt-2">
                                <!--begin::User-->
                                <div class="mr-3">
                                    <!--begin::Name-->
                                    <a href="{{ url('books/'.$foundBook->slug) }}" class="d-flex align-items-center text-dark text-hover-primary font-size-h1 font-weight-bold mr-3" >{{ $foundBook->book_name }}
                                        <i class="flaticon2-correct text-success icon-md ml-2"></i></a>
                                    <!--end::Name-->
                                    <!--begin::Contacts-->
                                    <div class="d-flex flex-wrap my-2">
                                        <a href="#" class="text-muted text-hover-primary font-weight-bold mr-lg-8 mr-5 mb-lg-0 mb-2" data-toggle="popover" data-placement="top" data-content="Kitap Yazarı">
															<span class="svg-icon svg-icon-md svg-icon-gray-500 mr-1">
																<!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Mail-notification.svg-->
																<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																	<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                   <polygon points="0 0 24 0 24 24 0 24"/>
                                                   <path
                                                       d="M12,11 C9.790861,11 8,9.209139 8,7 C8,4.790861 9.790861,3 12,3 C14.209139,3 16,4.790861 16,7 C16,9.209139 14.209139,11 12,11 Z"
                                                       fill="#000000" fill-rule="nonzero" opacity="0.3"/>
                                                   <path
                                                       d="M3.00065168,20.1992055 C3.38825852,15.4265159 7.26191235,13 11.9833413,13 C16.7712164,13 20.7048837,15.2931929 20.9979143,20.2 C21.0095879,20.3954741 20.9979143,21 20.2466999,21 C16.541124,21 11.0347247,21 3.72750223,21 C3.47671215,21 2.97953825,20.45918 3.00065168,20.1992055 Z"
                                                       fill="#000000" fill-rule="nonzero"/>
                                                </g>
																</svg>
                                                                <!--end::Svg Icon-->
															</span>{{ $foundBook->author_name }}</a>
                                        <a href="#" class="text-muted text-hover-primary font-weight-bold mr-lg-8 mr-5 mb-lg-0 mb-2" data-toggle="popover" data-placement="top" data-content="Kitap Kategorisi">
															<span class="svg-icon svg-icon-md svg-icon-gray-500 mr-1">
																<!--begin::Svg Icon | path:assets/media/svg/icons/General/Lock.svg-->
																<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																	<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                   <rect x="0" y="0" width="24" height="24"/>
                                                   <path
                                                       d="M12.4644661,14.5355339 L9.46446609,14.5355339 C8.91218134,14.5355339 8.46446609,14.9832492 8.46446609,15.5355339 C8.46446609,16.0878187 8.91218134,16.5355339 9.46446609,16.5355339 L12.4644661,16.5355339 L12.4644661,17.5355339 C12.4644661,18.6401034 11.5690356,19.5355339 10.4644661,19.5355339 L6.46446609,19.5355339 C5.35989659,19.5355339 4.46446609,18.6401034 4.46446609,17.5355339 L4.46446609,13.5355339 C4.46446609,12.4309644 5.35989659,11.5355339 6.46446609,11.5355339 L10.4644661,11.5355339 C11.5690356,11.5355339 12.4644661,12.4309644 12.4644661,13.5355339 L12.4644661,14.5355339 Z"
                                                       fill="#000000" opacity="0.3"
                                                       transform="translate(8.464466, 15.535534) rotate(-45.000000) translate(-8.464466, -15.535534) "/>
                                                   <path
                                                       d="M11.5355339,9.46446609 L14.5355339,9.46446609 C15.0878187,9.46446609 15.5355339,9.01675084 15.5355339,8.46446609 C15.5355339,7.91218134 15.0878187,7.46446609 14.5355339,7.46446609 L11.5355339,7.46446609 L11.5355339,6.46446609 C11.5355339,5.35989659 12.4309644,4.46446609 13.5355339,4.46446609 L17.5355339,4.46446609 C18.6401034,4.46446609 19.5355339,5.35989659 19.5355339,6.46446609 L19.5355339,10.4644661 C19.5355339,11.5690356 18.6401034,12.4644661 17.5355339,12.4644661 L13.5355339,12.4644661 C12.4309644,12.4644661 11.5355339,11.5690356 11.5355339,10.4644661 L11.5355339,9.46446609 Z"
                                                       fill="#000000"
                                                       transform="translate(15.535534, 8.464466) rotate(-45.000000) translate(-15.535534, -8.464466) "/>
                                                </g>
																</svg>
                                                                <!--end::Svg Icon-->
															</span>{{ $foundBook->getCategoryName->name }}</a>
                                        <a href="#" class="text-muted text-hover-primary font-weight-bold mr-lg-8 mr-5 mb-lg-0 mb-2" data-toggle="popover" data-placement="top" data-content="Yayınevi">
															<span class="svg-icon svg-icon-md svg-icon-gray-500 mr-1">
																<!--begin::Svg Icon | path:assets/media/svg/icons/General/Lock.svg-->
																<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																	<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                   <rect x="0" y="0" width="24" height="24"/>
                                                   <path
                                                       d="M8,4 L16,4 C17.1045695,4 18,4.8954305 18,6 L18,17.726765 C18,18.2790497 17.5522847,18.726765 17,18.726765 C16.7498083,18.726765 16.5087052,18.6329798 16.3242754,18.4639191 L12.6757246,15.1194142 C12.2934034,14.7689531 11.7065966,14.7689531 11.3242754,15.1194142 L7.67572463,18.4639191 C7.26860564,18.8371115 6.63603827,18.8096086 6.26284586,18.4024896 C6.09378519,18.2180598 6,17.9769566 6,17.726765 L6,6 C6,4.8954305 6.8954305,4 8,4 Z"
                                                       fill="#000000"/>
                                                </g>
																</svg>
                                                                <!--end::Svg Icon-->
															</span>{{ $foundBook->publisher }}</a>
                                        <a href="#" class="text-muted text-hover-primary font-weight-bold mr-lg-8 mr-5 mb-lg-0 mb-2" data-toggle="popover" data-placement="top" data-content="Sayfa Sayısı">
															<span class="svg-icon svg-icon-md svg-icon-gray-500 mr-1">
																<!--begin::Svg Icon | path:assets/media/svg/icons/General/Lock.svg-->
																<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																	<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                           <rect x="0" y="0" width="24" height="24"></rect>
                           <path d="M13.6855025,18.7082217 C15.9113859,17.8189707 18.682885,17.2495635 22,17 C22,16.9325178 22,13.1012863 22,5.50630526 L21.9999762,5.50630526 C21.9999762,5.23017604 21.7761292,5.00632908 21.5,5.00632908 C21.4957817,5.00632908 21.4915635,5.00638247 21.4873465,5.00648922 C18.658231,5.07811173 15.8291155,5.74261533 13,7 C13,7.04449645 13,10.79246 13,18.2438906 L12.9999854,18.2438906 C12.9999854,18.520041 13.2238496,18.7439052 13.5,18.7439052 C13.5635398,18.7439052 13.6264972,18.7317946 13.6855025,18.7082217 Z" fill="#000000"></path>
                           <path d="M10.3144829,18.7082217 C8.08859955,17.8189707 5.31710038,17.2495635 1.99998542,17 C1.99998542,16.9325178 1.99998542,13.1012863 1.99998542,5.50630526 L2.00000925,5.50630526 C2.00000925,5.23017604 2.22385621,5.00632908 2.49998542,5.00632908 C2.50420375,5.00632908 2.5084219,5.00638247 2.51263888,5.00648922 C5.34175439,5.07811173 8.17086991,5.74261533 10.9999854,7 C10.9999854,7.04449645 10.9999854,10.79246 10.9999854,18.2438906 L11,18.2438906 C11,18.520041 10.7761358,18.7439052 10.4999854,18.7439052 C10.4364457,18.7439052 10.3734882,18.7317946 10.3144829,18.7082217 Z" fill="#000000" opacity="0.3"></path>
                        </g>
																</svg>
                                                                <!--end::Svg Icon-->
															</span>{{ $foundBook->pages }}</a>
                                        <a href="#" class="text-muted text-hover-primary font-weight-bold" data-toggle="popover" data-placement="top" data-content="ISBN Numarası">
															<span class="svg-icon svg-icon-md svg-icon-gray-500 mr-1">
																<!--begin::Svg Icon | path:assets/media/svg/icons/Map/Marker2.svg-->
																<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																	<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                   <rect x="0" y="0" width="24" height="24"/>
                                                   <path
                                                       d="M13,5 L15,5 L15,20 L13,20 L13,5 Z M5,5 L5,20 L3,20 C2.44771525,20 2,19.5522847 2,19 L2,6 C2,5.44771525 2.44771525,5 3,5 L5,5 Z M16,5 L18,5 L18,20 L16,20 L16,5 Z M20,5 L21,5 C21.5522847,5 22,5.44771525 22,6 L22,19 C22,19.5522847 21.5522847,20 21,20 L20,20 L20,5 Z"
                                                       fill="#000000"/>
                                                   <polygon fill="#000000" opacity="0.3" points="9 5 9 20 7 20 7 5"/>
                                                </g>
																</svg>
                                                                <!--end::Svg Icon-->
															</span>{{ $foundBook->isbn }}</a>
                                    </div>
                                    <!--end::Contacts-->
                                </div>
                                <!--begin::User-->
                                <!--begin::Actions-->
                                <div class="my-lg-0 my-1">
                                    <a href="{{ url('books/'.$foundBook->slug) }}" class="btn btn-sm btn-primary font-weight-bolder text-uppercase">Kitaba Git</a>
                                </div>
                                <!--end::Actions-->
                            </div>
                            <!--end::Title-->
                            <!--begin::Content-->
                            <div class="d-flex align-items-center flex-wrap">
                                <!--begin::Description-->
                                <div class="flex-grow-1 font-weight-bold text-dark-50 py-2 py-lg-2 mr-5">{!!  $foundBook->description  !!}</div>
                                <!--end::Description-->
                            </div>
                            <!--end::Content-->
                        </div>
                        <!--end::Info-->
                    </div>
                </div>
            </div>
        </div>
        @endif

        <!--begin::Section-->
        <div class="mb-8">
            <div class="card">
                <div class="card-body">
                    <div class="p-6">
                        <h2 class="text-dark mb-8">Son Eklenen Kitaplar</h2>

                        <div class="row">
                            @foreach ($books as $item)
                                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
                                    <!--begin::Card-->
                                    <div class="card card-custom gutter-b card-stretch text-center">
                                        <div class="card-body">
                                            <div class="d-flex flex-column align-items-center" style="margin-top: -10px">

                                                <div class="book">
                                                    <a href="books/{{$item->slug}}">
                                                        <img src="{{ $item->book_image }}" class="img-responsive" alt="image-{{ $item->slug }}">
                                                    </a>
                                                </div>

                                                <a href="categories/{{$item->slug}}" class="text-dark-75 font-weight-bold mt-5 text-hover-primary font-size-lg">{{$item->book_name}}</a>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end:: Card-->
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--end::Section-->
        <!--begin::Section-->
        <div class="">
            <div class="row">
                <div class="col-lg-12">
                    <!--begin::Callout-->
                    <div class="card card-custom p-6">
                        <div class="card-body">
                            <div class="row">
                                <!--begin::Content-->
                                <div class="col-sm-10">
                                    <h2 class="text-dark mb-4"> Eksik Kitap Bildirin</h2>
                                    <p class="text-dark-50 line-height-lg">Street Books'ta eksik olduğunu düşündüğünüz kitaplar varsa lütfen bize bildirin.
                                        Bildirdiğiniz kitaplar anında sisteme eklenecektir.</p>
                                </div>
                                <!--end::Content-->
                                <!--begin::Button-->
                                <div class="col-sm-2 d-flex align-items-center justify-content-sm-end">
                                    <a href="{{ url('book/add') }}" target="_blank" class="btn font-weight-bolder text-uppercase font-size-lg btn-success py-3 px-6">Kitap Bildirin</a>

                                </div>
                                <!--end::Button-->
                            </div>
                        </div>
                    </div>
                    <!--end::Callout-->
                </div>
            </div>
        </div>
        <!--end::Section-->
        <!--end::Entry-->
    </div>

@endsection
