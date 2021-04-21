{{-- Extends layout --}}
@extends('layout.default')

{{-- Content --}}
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card card-custom gutter-b">
                <div class="card-body">
                    <div class="d-flex">
                        <!--begin: Pic-->
                        <div class="flex-shrink-0 mr-7 mt-lg-0 mt-3">
                            <div class="d-none d-sm-block">
                                <img class="img-responsive" alt="image-{{ $base_book->slug }}"
                                     src="{{ $base_book->book_image }}" style="border-radius: 4px">
                            </div>
                        </div>
                        <!--end: Pic-->
                        <!--begin: Info-->
                        <div class="flex-grow-1">
                            <!--begin: Title-->
                            <div class="d-flex align-items-center justify-content-between flex-wrap mb-3">
                                <div class="mr-3">
                                    <!--begin::Name-->
                                    <span class="d-flex align-items-center text-dark font-size-h1 font-weight-bold mr-3">{{ $base_book->book_name }}
                                        <i class="flaticon2-correct text-success icon-md ml-2"></i></span>
                                    <!--end::Name-->
                                    <!--begin::Contacts-->
                                    <div class="d-flex flex-wrap my-2">
                                        <a href="#"
                                           class="text-muted text-hover-primary font-weight-bold mr-lg-8 mr-5 mb-lg-0 mb-2"
                                           data-toggle="popover" data-placement="top" data-content="Kitap Yazarı">
															<span class="svg-icon svg-icon-md svg-icon-gray-500 mr-1">
																<!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/Communication/Mail-notification.svg-->
																<svg xmlns="http://www.w3.org/2000/svg"
                                                                     xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                     width="24px" height="24px" viewBox="0 0 24 24"
                                                                     version="1.1">
    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <polygon points="0 0 24 0 24 24 0 24"/>
        <path d="M12,11 C9.790861,11 8,9.209139 8,7 C8,4.790861 9.790861,3 12,3 C14.209139,3 16,4.790861 16,7 C16,9.209139 14.209139,11 12,11 Z"
              fill="#000000" fill-rule="nonzero" opacity="0.3"/>
        <path d="M3.00065168,20.1992055 C3.38825852,15.4265159 7.26191235,13 11.9833413,13 C16.7712164,13 20.7048837,15.2931929 20.9979143,20.2 C21.0095879,20.3954741 20.9979143,21 20.2466999,21 C16.541124,21 11.0347247,21 3.72750223,21 C3.47671215,21 2.97953825,20.45918 3.00065168,20.1992055 Z"
              fill="#000000" fill-rule="nonzero"/>
    </g>
</svg>
                                                                <!--end::Svg Icon-->
															</span>{{ $base_book->author_name }}</a>
                                        <a href="#"
                                           class="text-muted text-hover-primary font-weight-bold mr-lg-8 mr-5 mb-lg-0 mb-2"
                                           data-toggle="popover" data-placement="top" data-content="Yayınevi">
															<span class="svg-icon svg-icon-md svg-icon-gray-500 mr-1">
																<!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/General/Lock.svg-->
																<svg xmlns="http://www.w3.org/2000/svg"
                                                                     xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                     width="24px" height="24px" viewBox="0 0 24 24"
                                                                     version="1.1">
    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <rect x="0" y="0" width="24" height="24"/>
        <path d="M8,4 L16,4 C17.1045695,4 18,4.8954305 18,6 L18,17.726765 C18,18.2790497 17.5522847,18.726765 17,18.726765 C16.7498083,18.726765 16.5087052,18.6329798 16.3242754,18.4639191 L12.6757246,15.1194142 C12.2934034,14.7689531 11.7065966,14.7689531 11.3242754,15.1194142 L7.67572463,18.4639191 C7.26860564,18.8371115 6.63603827,18.8096086 6.26284586,18.4024896 C6.09378519,18.2180598 6,17.9769566 6,17.726765 L6,6 C6,4.8954305 6.8954305,4 8,4 Z"
              fill="#000000"/>
    </g>
</svg>
                                                                <!--end::Svg Icon-->
															</span>{{ $base_book->publisher }}</a>
                                        <a href="#"
                                           class="text-muted text-hover-primary font-weight-bold mr-lg-8 mr-5 mb-lg-0 mb-2"
                                           data-toggle="popover" data-placement="top" data-content="Kitap Kategorisi">
															<span class="svg-icon svg-icon-md svg-icon-gray-500 mr-1">
																<!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/Map/Marker2.svg-->
																<svg xmlns="http://www.w3.org/2000/svg"
                                                                     xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                     width="24px" height="24px" viewBox="0 0 24 24"
                                                                     version="1.1">
    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <rect x="0" y="0" width="24" height="24"/>
        <path d="M12.4644661,14.5355339 L9.46446609,14.5355339 C8.91218134,14.5355339 8.46446609,14.9832492 8.46446609,15.5355339 C8.46446609,16.0878187 8.91218134,16.5355339 9.46446609,16.5355339 L12.4644661,16.5355339 L12.4644661,17.5355339 C12.4644661,18.6401034 11.5690356,19.5355339 10.4644661,19.5355339 L6.46446609,19.5355339 C5.35989659,19.5355339 4.46446609,18.6401034 4.46446609,17.5355339 L4.46446609,13.5355339 C4.46446609,12.4309644 5.35989659,11.5355339 6.46446609,11.5355339 L10.4644661,11.5355339 C11.5690356,11.5355339 12.4644661,12.4309644 12.4644661,13.5355339 L12.4644661,14.5355339 Z"
              fill="#000000" opacity="0.3"
              transform="translate(8.464466, 15.535534) rotate(-45.000000) translate(-8.464466, -15.535534) "/>
        <path d="M11.5355339,9.46446609 L14.5355339,9.46446609 C15.0878187,9.46446609 15.5355339,9.01675084 15.5355339,8.46446609 C15.5355339,7.91218134 15.0878187,7.46446609 14.5355339,7.46446609 L11.5355339,7.46446609 L11.5355339,6.46446609 C11.5355339,5.35989659 12.4309644,4.46446609 13.5355339,4.46446609 L17.5355339,4.46446609 C18.6401034,4.46446609 19.5355339,5.35989659 19.5355339,6.46446609 L19.5355339,10.4644661 C19.5355339,11.5690356 18.6401034,12.4644661 17.5355339,12.4644661 L13.5355339,12.4644661 C12.4309644,12.4644661 11.5355339,11.5690356 11.5355339,10.4644661 L11.5355339,9.46446609 Z"
              fill="#000000"
              transform="translate(15.535534, 8.464466) rotate(-45.000000) translate(-15.535534, -8.464466) "/>
    </g>
</svg>
                                                                <!--end::Svg Icon-->
															</span>{{ $check->getCategoryName->name }}</a>
                                        <a href="#" class="text-muted text-hover-primary font-weight-bold"
                                           data-toggle="popover" data-placement="top" data-content="ISBN Numarası">
															<span class="svg-icon svg-icon-md svg-icon-gray-500 mr-1">
																<!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/Map/Marker2.svg-->
																<svg xmlns="http://www.w3.org/2000/svg"
                                                                     xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                     width="24px" height="24px" viewBox="0 0 24 24"
                                                                     version="1.1">
    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <rect x="0" y="0" width="24" height="24"/>
        <path d="M13,5 L15,5 L15,20 L13,20 L13,5 Z M5,5 L5,20 L3,20 C2.44771525,20 2,19.5522847 2,19 L2,6 C2,5.44771525 2.44771525,5 3,5 L5,5 Z M16,5 L18,5 L18,20 L16,20 L16,5 Z M20,5 L21,5 C21.5522847,5 22,5.44771525 22,6 L22,19 C22,19.5522847 21.5522847,20 21,20 L20,20 L20,5 Z"
              fill="#000000"/>
        <polygon fill="#000000" opacity="0.3" points="9 5 9 20 7 20 7 5"/>
    </g>
</svg>
                                                                <!--end::Svg Icon-->
															</span>{{ $base_book->isbn }}</a>
                                    </div>
                                    <!--end::Contacts-->
                                </div>
                                <div class="my-lg-0 my-1" data-toggle="popover" data-placement="top" data-content="Kitabı ekleyen kişi">
                                    <a href="#" class="btn btn-sm btn-light-primary font-weight-bolder text-uppercase mr-3"><i class="fa fa-info-circle"></i> {{Auth::user()->name}}</a>
                                </div>
                            </div>
                            <!--end: Title-->
                            <div class="separator separator-solid"></div>

                            <div class="mb-3 mt-3">
                                <h6>kitabı sosyal medyada paylaş: </h6>
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
                                <div class="" style="display: contents; float: right">
                                    <a href="#comment" class="btn btn-light-primary font-weight-bold"
                                       style="float: right">
                                        Kitap hakkında görüş bildir
                                    </a>
                                </div>
                            </div>
                            <div class="separator separator-solid"></div>
                            <!--begin: Content-->
                            <div class="d-flex align-items-end flex-wrap justify-content-between">
                                <div class="flex-grow-1 font-weight-bold text-dark-50 font-size-lg py-5 py-lg-2 mr-5">{{ $base_book->description }}</div>
                            </div>
                            <!--end: Content-->
                        </div>
                        <!--end: Info-->
                    </div>
                    <div class="separator separator-solid my-7"></div>
                    <!--begin: Items-->
                    <div class="d-flex align-items-center flex-wrap">
                        <!--begin: Item-->
                        <div class="d-flex align-items-center flex-lg-fill mr-5 my-1">
                            <span class="svg-icon svg-icon-primary svg-icon-2x mr-4"><!--begin::Svg Icon | path:/var/www/preview.keenthemes.com/metronic/releases/2021-04-09-093151/theme/html/demo1/dist/../src/media/svg/icons/General/User.svg--><svg
                                    xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                    width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <polygon points="0 0 24 0 24 24 0 24"/>
        <path d="M12,11 C9.790861,11 8,9.209139 8,7 C8,4.790861 9.790861,3 12,3 C14.209139,3 16,4.790861 16,7 C16,9.209139 14.209139,11 12,11 Z"
              fill="#000000" fill-rule="nonzero" opacity="0.3"/>
        <path d="M3.00065168,20.1992055 C3.38825852,15.4265159 7.26191235,13 11.9833413,13 C16.7712164,13 20.7048837,15.2931929 20.9979143,20.2 C21.0095879,20.3954741 20.9979143,21 20.2466999,21 C16.541124,21 11.0347247,21 3.72750223,21 C3.47671215,21 2.97953825,20.45918 3.00065168,20.1992055 Z"
              fill="#000000" fill-rule="nonzero"/>
    </g>
</svg><!--end::Svg Icon--></span>
                            <div class="d-flex flex-column text-dark-75">
                                <span class="font-weight-bold font-size-sm">Yazar</span>
                                <span class="font-weight-bolder font-size-h5">{{ $base_book->author_name }}</span>
                            </div>
                        </div>
                        <!--end: Item-->
                        <!--begin: Item-->
                        <div class="d-flex align-items-center flex-lg-fill mr-5 my-1">
												<span class="svg-icon svg-icon-primary svg-icon-2x mr-4"><!--begin::Svg Icon | path:/var/www/preview.keenthemes.com/metronic/releases/2021-04-09-093151/theme/html/demo1/dist/../src/media/svg/icons/General/Bookmark.svg--><svg
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                        height="24px" viewBox="0 0 24 24" version="1.1">
    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <rect x="0" y="0" width="24" height="24"/>
        <path d="M8,4 L16,4 C17.1045695,4 18,4.8954305 18,6 L18,17.726765 C18,18.2790497 17.5522847,18.726765 17,18.726765 C16.7498083,18.726765 16.5087052,18.6329798 16.3242754,18.4639191 L12.6757246,15.1194142 C12.2934034,14.7689531 11.7065966,14.7689531 11.3242754,15.1194142 L7.67572463,18.4639191 C7.26860564,18.8371115 6.63603827,18.8096086 6.26284586,18.4024896 C6.09378519,18.2180598 6,17.9769566 6,17.726765 L6,6 C6,4.8954305 6.8954305,4 8,4 Z"
              fill="#000000"/>
    </g>
</svg><!--end::Svg Icon--></span>
                            <div class="d-flex flex-column text-dark-75">
                                <span class="font-weight-bold font-size-sm">Yayınevi</span>
                                <span class="font-weight-bolder font-size-h5">{{ $base_book->publisher }}</span>
                            </div>
                        </div>
                        <!--end: Item-->
                        <!--begin: Item-->
                        <div class="d-flex align-items-center flex-lg-fill mr-5 my-1">
												<span class="svg-icon svg-icon-primary svg-icon-2x mr-4"><!--begin::Svg Icon | path:/var/www/preview.keenthemes.com/metronic/releases/2021-04-09-093151/theme/html/demo1/dist/../src/media/svg/icons/Home/Book-open.svg--><svg
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                        height="24px" viewBox="0 0 24 24" version="1.1">
    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <rect x="0" y="0" width="24" height="24"/>
        <path d="M13.6855025,18.7082217 C15.9113859,17.8189707 18.682885,17.2495635 22,17 C22,16.9325178 22,13.1012863 22,5.50630526 L21.9999762,5.50630526 C21.9999762,5.23017604 21.7761292,5.00632908 21.5,5.00632908 C21.4957817,5.00632908 21.4915635,5.00638247 21.4873465,5.00648922 C18.658231,5.07811173 15.8291155,5.74261533 13,7 C13,7.04449645 13,10.79246 13,18.2438906 L12.9999854,18.2438906 C12.9999854,18.520041 13.2238496,18.7439052 13.5,18.7439052 C13.5635398,18.7439052 13.6264972,18.7317946 13.6855025,18.7082217 Z"
              fill="#000000"/>
        <path d="M10.3144829,18.7082217 C8.08859955,17.8189707 5.31710038,17.2495635 1.99998542,17 C1.99998542,16.9325178 1.99998542,13.1012863 1.99998542,5.50630526 L2.00000925,5.50630526 C2.00000925,5.23017604 2.22385621,5.00632908 2.49998542,5.00632908 C2.50420375,5.00632908 2.5084219,5.00638247 2.51263888,5.00648922 C5.34175439,5.07811173 8.17086991,5.74261533 10.9999854,7 C10.9999854,7.04449645 10.9999854,10.79246 10.9999854,18.2438906 L11,18.2438906 C11,18.520041 10.7761358,18.7439052 10.4999854,18.7439052 C10.4364457,18.7439052 10.3734882,18.7317946 10.3144829,18.7082217 Z"
              fill="#000000" opacity="0.3"/>
    </g>
</svg><!--end::Svg Icon--></span>
                            <div class="d-flex flex-column text-dark-75">
                                <span class="font-weight-bold font-size-sm">Sayfa Sayısı</span>
                                <span class="font-weight-bolder font-size-h5">{{ $base_book->pages }}</span>
                            </div>
                        </div>
                        <!--end: Item-->
                        <!--begin: Item-->
                        <div class="d-flex align-items-center flex-lg-fill mr-5 my-1">
												<span class="svg-icon svg-icon-success svg-icon-2x mr-4">
                                                    <!--begin::Svg Icon | path:/var/www/preview.keenthemes.com/metronic/releases/2021-04-09-093151/theme/html/demo1/dist/../src/media/svg/icons/General/Like.svg-->
                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                         xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                         height="24px" viewBox="0 0 24 24" version="1.1">
                                                        <g stroke="none" stroke-width="1" fill="none"
                                                           fill-rule="evenodd">
                                                            <rect x="0" y="0" width="24" height="24"/>
                                                            <path d="M9,10 L9,19 L10.1525987,19.3841996 C11.3761964,19.7920655 12.6575468,20 13.9473319,20 L17.5405883,20 C18.9706314,20 20.2018758,18.990621 20.4823303,17.5883484 L21.231529,13.8423552 C21.5564648,12.217676 20.5028146,10.6372006 18.8781353,10.3122648 C18.6189212,10.260422 18.353992,10.2430672 18.0902299,10.2606513 L14.5,10.5 L14.8641964,6.49383981 C14.9326895,5.74041495 14.3774427,5.07411874 13.6240179,5.00562558 C13.5827848,5.00187712 13.5414031,5 13.5,5 L13.5,5 C12.5694044,5 11.7070439,5.48826024 11.2282564,6.28623939 L9,10 Z"
                                                                  fill="#000000"/>
                                                            <rect fill="#000000" opacity="0.3" x="2" y="9" width="5"
                                                                  height="11" rx="1"/>
                                                        </g>
                                                    </svg><!--end::Svg Icon-->
                                                </span>
                            <div class="d-flex flex-column text-dark-75">
                                <span class="font-weight-bold font-size-sm">Tavsiye Edenler</span>
                                <span class="font-weight-bolder font-size-h5">{{ $base_book->like }} Kişi</span>
                            </div>
                        </div>
                        <!--end: Item-->
                        <!--begin: Item-->
                        <div class="d-flex align-items-center flex-lg-fill my-1">
												<span class="svg-icon svg-icon-danger svg-icon-2x mr-4"
                                                      style="transform: rotateX(180deg)">
                                                    <!--begin::Svg Icon | path:/var/www/preview.keenthemes.com/metronic/releases/2021-04-09-093151/theme/html/demo1/dist/../src/media/svg/icons/General/Like.svg-->
                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                         xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                         height="24px" viewBox="0 0 24 24" version="1.1">
                                                        <g stroke="none" stroke-width="1" fill="none"
                                                           fill-rule="evenodd">
                                                            <rect x="0" y="0" width="24" height="24"/>
                                                            <path d="M9,10 L9,19 L10.1525987,19.3841996 C11.3761964,19.7920655 12.6575468,20 13.9473319,20 L17.5405883,20 C18.9706314,20 20.2018758,18.990621 20.4823303,17.5883484 L21.231529,13.8423552 C21.5564648,12.217676 20.5028146,10.6372006 18.8781353,10.3122648 C18.6189212,10.260422 18.353992,10.2430672 18.0902299,10.2606513 L14.5,10.5 L14.8641964,6.49383981 C14.9326895,5.74041495 14.3774427,5.07411874 13.6240179,5.00562558 C13.5827848,5.00187712 13.5414031,5 13.5,5 L13.5,5 C12.5694044,5 11.7070439,5.48826024 11.2282564,6.28623939 L9,10 Z"
                                                                  fill="#000000"/>
                                                            <rect fill="#000000" opacity="0.3" x="2" y="9" width="5"
                                                                  height="11" rx="1"/>
                                                        </g>
                                                    </svg><!--end::Svg Icon-->
                                                </span>
                            <div class="d-flex flex-column text-dark-75">
                                <span class="font-weight-bold font-size-sm">Tavsiye Etmeyenler</span>
                                <span class="font-weight-bolder font-size-h5">{{ $base_book->dislike }} Kişi</span>
                            </div>
                        </div>
                        <!--end: Item-->
                    </div>
                    <!--begin: Items-->
                </div>
            </div>
        </div>

        <!--        <div class="col-md-4">
                    &lt;!&ndash;begin::List Widget 7&ndash;&gt;
                    <div class="card card-custom card-stretch gutter-b">
                        &lt;!&ndash;begin::Header&ndash;&gt;
                        <div class="card-header border-0">
                            <h3 class="card-title font-weight-bolder text-dark">Trends</h3>
                            <div class="card-toolbar">
                                <div class="dropdown dropdown-inline">
                                    <a href="#" class="btn btn-clean btn-hover-light-primary btn-sm btn-icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="ki ki-bold-more-ver"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-md dropdown-menu-right">
                                        &lt;!&ndash;begin::Naviigation&ndash;&gt;
                                        <ul class="navi">
                                            <li class="navi-header font-weight-bold py-5">
                                                <span class="font-size-lg">Add New:</span>
                                                <i class="flaticon2-information icon-md text-muted" data-toggle="tooltip" data-placement="right" title="" data-original-title="Click to learn more..."></i>
                                            </li>
                                            <li class="navi-separator mb-3 opacity-70"></li>
                                            <li class="navi-item">
                                                <a href="#" class="navi-link">
                                                                                <span class="navi-icon">
                                                                                    <i class="flaticon2-shopping-cart-1"></i>
                                                                                </span>
                                                    <span class="navi-text">Order</span>
                                                </a>
                                            </li>
                                            <li class="navi-item">
                                                <a href="#" class="navi-link">
                                                                                <span class="navi-icon">
                                                                                    <i class="navi-icon flaticon2-calendar-8"></i>
                                                                                </span>
                                                    <span class="navi-text">Members</span>
                                                    <span class="navi-label">
                                                                                    <span class="label label-light-danger label-rounded font-weight-bold">3</span>
                                                                                </span>
                                                </a>
                                            </li>
                                            <li class="navi-item">
                                                <a href="#" class="navi-link">
                                                                                <span class="navi-icon">
                                                                                    <i class="navi-icon flaticon2-telegram-logo"></i>
                                                                                </span>
                                                    <span class="navi-text">Project</span>
                                                </a>
                                            </li>
                                            <li class="navi-item">
                                                <a href="#" class="navi-link">
                                                                                <span class="navi-icon">
                                                                                    <i class="navi-icon flaticon2-new-email"></i>
                                                                                </span>
                                                    <span class="navi-text">Record</span>
                                                    <span class="navi-label">
                                                                                    <span class="label label-light-success label-rounded font-weight-bold">5</span>
                                                                                </span>
                                                </a>
                                            </li>
                                            <li class="navi-separator mt-3 opacity-70"></li>
                                            <li class="navi-footer pt-5 pb-4">
                                                <a class="btn btn-light-primary font-weight-bolder btn-sm" href="#">More options</a>
                                                <a class="btn btn-clean font-weight-bold btn-sm d-none" href="#" data-toggle="tooltip" data-placement="right" title="" data-original-title="Click to learn more...">Learn more</a>
                                            </li>
                                        </ul>
                                        &lt;!&ndash;end::Naviigation&ndash;&gt;
                                    </div>
                                </div>
                            </div>
                        </div>
                        &lt;!&ndash;end::Header&ndash;&gt;
                        &lt;!&ndash;begin::Body&ndash;&gt;
                        <div class="card-body pt-0">
                            &lt;!&ndash;begin::Item&ndash;&gt;
                            <div class="d-flex align-items-center flex-wrap mb-10">
                                &lt;!&ndash;begin::Symbol&ndash;&gt;
                                <div class="symbol symbol-50 symbol-light mr-5">
                                                                <span class="symbol-label">
                                                                    <img src="assets/media/svg/misc/006-plurk.svg" class="h-50 align-self-center" alt="">
                                                                </span>
                                </div>
                                &lt;!&ndash;end::Symbol&ndash;&gt;
                                &lt;!&ndash;begin::Text&ndash;&gt;
                                <div class="d-flex flex-column flex-grow-1 mr-2">
                                    <a href="#" class="font-weight-bold text-dark-75 text-hover-primary font-size-lg mb-1">Top Authors</a>
                                    <span class="text-muted font-weight-bold">Mark, Rowling, Esther</span>
                                </div>
                                &lt;!&ndash;end::Text&ndash;&gt;
                                <span class="label label-xl label-light label-inline my-lg-0 my-2 text-dark-50 font-weight-bolder">+82$</span>
                            </div>
                            &lt;!&ndash;end::Item&ndash;&gt;
                            &lt;!&ndash;begin::Item&ndash;&gt;
                            <div class="d-flex align-items-center flex-wrap mb-10">
                                &lt;!&ndash;begin::Symbol&ndash;&gt;
                                <div class="symbol symbol-50 symbol-light mr-5">
                                                                <span class="symbol-label">
                                                                    <img src="assets/media/svg/misc/015-telegram.svg" class="h-50 align-self-center" alt="">
                                                                </span>
                                </div>
                                &lt;!&ndash;end::Symbol&ndash;&gt;
                                &lt;!&ndash;begin::Text&ndash;&gt;
                                <div class="d-flex flex-column flex-grow-1 mr-2">
                                    <a href="#" class="font-weight-bold text-dark-75 text-hover-primary font-size-lg mb-1">Popular Authors</a>
                                    <span class="text-muted font-weight-bold">Randy, Steve, Mike</span>
                                </div>
                                &lt;!&ndash;end::Text&ndash;&gt;
                                <span class="label label-xl label-light label-inline my-lg-0 my-2 text-dark-50 font-weight-bolder">+280$</span>
                            </div>
                            &lt;!&ndash;end::Item&ndash;&gt;
                            &lt;!&ndash;begin::Item&ndash;&gt;
                            <div class="d-flex align-items-center flex-wrap mb-10">
                                &lt;!&ndash;begin::Symbol&ndash;&gt;
                                <div class="symbol symbol-50 symbol-light mr-5">
                                                                <span class="symbol-label">
                                                                    <img src="assets/media/svg/misc/003-puzzle.svg" class="h-50 align-self-center" alt="">
                                                                </span>
                                </div>
                                &lt;!&ndash;end::Symbol&ndash;&gt;
                                &lt;!&ndash;begin::Text&ndash;&gt;
                                <div class="d-flex flex-column flex-grow-1 mr-2">
                                    <a href="#" class="font-weight-bold text-dark-75 text-hover-primary font-size-lg mb-1">New Users</a>
                                    <span class="text-muted font-weight-bold">John, Pat, Jimmy</span>
                                </div>
                                &lt;!&ndash;end::Text&ndash;&gt;
                                <span class="label label-xl label-light label-inline my-lg-0 my-2 text-dark-50 font-weight-bolder">+4500$</span>
                            </div>
                            &lt;!&ndash;end::Item&ndash;&gt;
                            &lt;!&ndash;begin::Item&ndash;&gt;
                            <div class="d-flex align-items-center flex-wrap mb-10">
                                &lt;!&ndash;begin::Symbol&ndash;&gt;
                                <div class="symbol symbol-50 symbol-light mr-5">
                                                                <span class="symbol-label">
                                                                    <img src="assets/media/svg/misc/005-bebo.svg" class="h-50 align-self-center" alt="">
                                                                </span>
                                </div>
                                &lt;!&ndash;end::Symbol&ndash;&gt;
                                &lt;!&ndash;begin::Text&ndash;&gt;
                                <div class="d-flex flex-column flex-grow-1 mr-2">
                                    <a href="#" class="font-weight-bold text-dark-75 text-hover-primary font-size-lg mb-1">Active Customers</a>
                                    <span class="text-muted font-weight-bold">Sandra, Tim, Louis</span>
                                </div>
                                &lt;!&ndash;end::Text&ndash;&gt;
                                <span class="label label-xl label-light label-inline my-lg-0 my-2 text-dark-50 font-weight-bolder">+4500$</span>
                            </div>
                            &lt;!&ndash;end::Item&ndash;&gt;
                            &lt;!&ndash;begin::Item&ndash;&gt;
                            <div class="d-flex align-items-center flex-wrap">
                                &lt;!&ndash;begin::Symbol&ndash;&gt;
                                <div class="symbol symbol-50 symbol-light mr-5">
                                                                <span class="symbol-label">
                                                                    <img src="assets/media/svg/misc/014-kickstarter.svg" class="h-50 align-self-center" alt="">
                                                                </span>
                                </div>
                                &lt;!&ndash;end::Symbol&ndash;&gt;
                                &lt;!&ndash;begin::Text&ndash;&gt;
                                <div class="d-flex flex-column flex-grow-1 mr-2">
                                    <a href="#" class="font-weight-bold text-dark-75 text-hover-primary font-size-lg mb-1">Bestseller Theme</a>
                                    <span class="text-muted font-weight-bold">Disco, Retro, Sports</span>
                                </div>
                                &lt;!&ndash;end::Text&ndash;&gt;
                                <span class="label label-xl label-light label-inline my-lg-0 my-2 text-dark-50 font-weight-bolder">+4500$</span>
                            </div>
                            &lt;!&ndash;end::Item&ndash;&gt;
                        </div>
                        &lt;!&ndash;end::Body&ndash;&gt;
                    </div>
                    &lt;!&ndash;end::List Widget 7&ndash;&gt;
                </div>-->
    </div>

    <div class="row">
        <div class="col-md-8">
            <div class="card card-custom gutter-b bg-diagonal bg-diagonal-light-light">
                <div class="card-body">
                    <div class="d-flex align-items-center justify-content-between p-4 flex-lg-wrap flex-xl-nowrap">
                        <div class="d-flex flex-column mr-5">
                            <span href="#" class="h4 text-dark mb-5">
                                Bu kitabı diğer kullanıcılara<br>tavsiye eder misiniz?
                            </span>
                        </div>
                        @if(\Illuminate\Support\Facades\Auth::check())
                            <div class="ml-6 ml-lg-0 ml-xxl-6 flex-shrink-0" style="display: flex">
                                <form action="{{--{{route('like')}}--}}" method="POST">
                                    @csrf
                                    <input type="hidden" id="book_id" name="book_id" value="{{ $base_book->id }}">

                                    <button type="submit" class="btn btn-light-success font-weight-bolder mr-2 mb-2">
                                    <span class="svg-icon svg-icon-2x">
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                             xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                             height="24px" viewBox="0 0 24 24" version="1.1">
                                            <g stroke="none" stroke-width="1" fill="none"
                                               fill-rule="evenodd">
                                                <rect x="0" y="0" width="24" height="24"/>
                                                <path d="M9,10 L9,19 L10.1525987,19.3841996 C11.3761964,19.7920655 12.6575468,20 13.9473319,20 L17.5405883,20 C18.9706314,20 20.2018758,18.990621 20.4823303,17.5883484 L21.231529,13.8423552 C21.5564648,12.217676 20.5028146,10.6372006 18.8781353,10.3122648 C18.6189212,10.260422 18.353992,10.2430672 18.0902299,10.2606513 L14.5,10.5 L14.8641964,6.49383981 C14.9326895,5.74041495 14.3774427,5.07411874 13.6240179,5.00562558 C13.5827848,5.00187712 13.5414031,5 13.5,5 L13.5,5 C12.5694044,5 11.7070439,5.48826024 11.2282564,6.28623939 L9,10 Z"
                                                      fill="#000000"/>
                                                <rect fill="#000000" opacity="0.3" x="2" y="9"
                                                      width="5" height="11" rx="1"/>
                                            </g>
                                        </svg>
                                    </span>Evet, tavsiye ederim
                                    </button>
                                </form>

                                <form action="{{--{{route('dislike')}}--}}" method="POST">
                                    @csrf
                                    <input type="hidden" id="book_id" name="book_id" value="{{ $base_book->id }}">

                                    <button type="submit" class="btn btn-light-danger font-weight-bolder mr-2">
                                    <span class="svg-icon svg-icon-2x">
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                             style="transform: rotateX(180deg)"
                                             xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                             height="24px" viewBox="0 0 24 24" version="1.1">
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <rect x="0" y="0" width="24" height="24"/>
                                                <path d="M9,10 L9,19 L10.1525987,19.3841996 C11.3761964,19.7920655 12.6575468,20 13.9473319,20 L17.5405883,20 C18.9706314,20 20.2018758,18.990621 20.4823303,17.5883484 L21.231529,13.8423552 C21.5564648,12.217676 20.5028146,10.6372006 18.8781353,10.3122648 C18.6189212,10.260422 18.353992,10.2430672 18.0902299,10.2606513 L14.5,10.5 L14.8641964,6.49383981 C14.9326895,5.74041495 14.3774427,5.07411874 13.6240179,5.00562558 C13.5827848,5.00187712 13.5414031,5 13.5,5 L13.5,5 C12.5694044,5 11.7070439,5.48826024 11.2282564,6.28623939 L9,10 Z"
                                                      fill="#000000"/>
                                                <rect fill="#000000" opacity="0.3" x="2" y="9" width="5" height="11"
                                                      rx="1"/>
                                            </g>
                                        </svg>
                                    </span> Hayır, tavsiye etmem
                                    </button>
                                </form>
                            </div>
                        @else
                            <div class="ml-6 ml-lg-0 ml-xxl-6 flex-shrink-0">
                                <p class="font-size-h6 mb-0">Giriş yapmanız gerekiyor. <u><a href="{{route('login')}}" class="font-weight-boldest">Giriş Yap</a></u> </p>
                                <p class="font-size-lg text-muted">Kitap hakkında görüş bildirmek için giriş yapmalısınız.</p>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card card-custom gutter-b bg-diagonal bg-diagonal-light-light">
                <div class="card-body">
                    <div class="d-flex align-items-center justify-content-between p-4 flex-lg-wrap flex-xl-nowrap">
                        <div class="d-flex flex-column mr-5">
                            <span href="#" class="h4 text-dark mb-5">
                                Bu kategorideki <br> diğer kitapları incele
                            </span>
                        </div>
                        <div class="ml-6 ml-lg-0 ml-xxl-6 flex-shrink-0" style="display: flex">
                            <a href="" class="btn btn-light-primary font-weight-bolder mr-2 mb-2">
                                İncele
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <hr>
    <div class="row" id="comment">
        <div class="col-md-12">
            <h3 class="display-4 font-weight-bold mt-5 mb-5 text-center">Diğer okuyucuların görüşleri</h3>

        </div>
    </div>


@endsection

{{-- Scripts Section --}}
@section('scripts')
    <script src="{{ asset('js/pages/widgets.js') }}" type="text/javascript"></script>
@endsection
