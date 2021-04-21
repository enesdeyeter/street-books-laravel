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
                    <div class="card-toolbar">
                        <a href="#" class="btn btn-light-primary btn-sm font-weight-bolder font-size-sm">Tümünü Gör</a>
                    </div>
                </div>
                <!--end::Header-->
                <!--begin::Body-->
                <div class="card-body pt-0">
                    <div class="d-flex align-items-center flex-wrap mb-8">
                        <!--begin::Symbol-->
                        <div class="symbol symbol-50 symbol-light-success mr-5">
                            <span class="symbol-label">
                                <span class="svg-icon svg-icon-success svg-icon-2x">
                                    <!--begin::Svg Icon | path:/var/www/preview.keenthemes.com/metronic/releases/2021-04-09-093151/theme/html/demo1/dist/../src/media/svg/icons/General/Thunder-move.svg-->
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <rect x="0" y="0" width="24" height="24"/>
                                            <path d="M16.3740377,19.9389434 L22.2226499,11.1660251 C22.4524142,10.8213786 22.3592838,10.3557266 22.0146373,10.1259623 C21.8914367,10.0438285 21.7466809,10 21.5986122,10 L17,10 L17,4.47708173 C17,4.06286817 16.6642136,3.72708173 16.25,3.72708173 C15.9992351,3.72708173 15.7650616,3.85240758 15.6259623,4.06105658 L9.7773501,12.8339749 C9.54758575,13.1786214 9.64071616,13.6442734 9.98536267,13.8740377 C10.1085633,13.9561715 10.2533191,14 10.4013878,14 L15,14 L15,19.5229183 C15,19.9371318 15.3357864,20.2729183 15.75,20.2729183 C16.0007649,20.2729183 16.2349384,20.1475924 16.3740377,19.9389434 Z" fill="#000000"/><path d="M4.5,5 L9.5,5 C10.3284271,5 11,5.67157288 11,6.5 C11,7.32842712 10.3284271,8 9.5,8 L4.5,8 C3.67157288,8 3,7.32842712 3,6.5 C3,5.67157288 3.67157288,5 4.5,5 Z M4.5,17 L9.5,17 C10.3284271,17 11,17.6715729 11,18.5 C11,19.3284271 10.3284271,20 9.5,20 L4.5,20 C3.67157288,20 3,19.3284271 3,18.5 C3,17.6715729 3.67157288,17 4.5,17 Z M2.5,11 L6.5,11 C7.32842712,11 8,11.6715729 8,12.5 C8,13.3284271 7.32842712,14 6.5,14 L2.5,14 C1.67157288,14 1,13.3284271 1,12.5 C1,11.6715729 1.67157288,11 2.5,11 Z" fill="#000000" opacity="0.3"/>
                                        </g>
                                    </svg>
                                    <!--end::Svg Icon-->
                                </span>
                            </span>
                        </div>
                        <!--end::Symbol-->
                        <!--begin::Text-->
                        <div class="d-flex flex-column flex-grow-1 mr-2">
                            <a href="#" class="font-weight-bold text-dark-75 text-hover-primary font-size-lg mb-1">Edebiyat</a>
                            <span class="text-muted font-weight-bold">5234 adet kitap</span>
                        </div>
                        <!--end::Text-->
                        <span class="label label-xl label-light-success label-inline my-lg-0 my-2 text-success font-weight-bolder font-size-h4 p-3"><span class="font-size-h6">#</span>1</span>
                    </div>

                    <div class="d-flex align-items-center flex-wrap mb-8">
                        <!--begin::Symbol-->
                        <div class="symbol symbol-50 symbol-light-primary mr-5">
                            <span class="symbol-label">
                                <span class="svg-icon svg-icon-primary svg-icon-2x">
                                    <!--begin::Svg Icon | path:/var/www/preview.keenthemes.com/metronic/releases/2021-04-09-093151/theme/html/demo1/dist/../src/media/svg/icons/General/Thunder-move.svg-->
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <rect x="0" y="0" width="24" height="24"/>
                                            <path d="M16.3740377,19.9389434 L22.2226499,11.1660251 C22.4524142,10.8213786 22.3592838,10.3557266 22.0146373,10.1259623 C21.8914367,10.0438285 21.7466809,10 21.5986122,10 L17,10 L17,4.47708173 C17,4.06286817 16.6642136,3.72708173 16.25,3.72708173 C15.9992351,3.72708173 15.7650616,3.85240758 15.6259623,4.06105658 L9.7773501,12.8339749 C9.54758575,13.1786214 9.64071616,13.6442734 9.98536267,13.8740377 C10.1085633,13.9561715 10.2533191,14 10.4013878,14 L15,14 L15,19.5229183 C15,19.9371318 15.3357864,20.2729183 15.75,20.2729183 C16.0007649,20.2729183 16.2349384,20.1475924 16.3740377,19.9389434 Z" fill="#000000"/><path d="M4.5,5 L9.5,5 C10.3284271,5 11,5.67157288 11,6.5 C11,7.32842712 10.3284271,8 9.5,8 L4.5,8 C3.67157288,8 3,7.32842712 3,6.5 C3,5.67157288 3.67157288,5 4.5,5 Z M4.5,17 L9.5,17 C10.3284271,17 11,17.6715729 11,18.5 C11,19.3284271 10.3284271,20 9.5,20 L4.5,20 C3.67157288,20 3,19.3284271 3,18.5 C3,17.6715729 3.67157288,17 4.5,17 Z M2.5,11 L6.5,11 C7.32842712,11 8,11.6715729 8,12.5 C8,13.3284271 7.32842712,14 6.5,14 L2.5,14 C1.67157288,14 1,13.3284271 1,12.5 C1,11.6715729 1.67157288,11 2.5,11 Z" fill="#000000" opacity="0.3"/>
                                        </g>
                                    </svg>
                                    <!--end::Svg Icon-->
                                </span>
                            </span>
                        </div>
                        <!--end::Symbol-->
                        <!--begin::Text-->
                        <div class="d-flex flex-column flex-grow-1 mr-2">
                            <a href="#" class="font-weight-bold text-dark-75 text-hover-primary font-size-lg mb-1">Roman</a>
                            <span class="text-muted font-weight-bold">5231 adet kitap</span>
                        </div>
                        <!--end::Text-->
                        <span class="label label-xl label-light-primary label-inline my-lg-0 my-2 text-primary font-weight-bolder font-size-h4 p-3"><span class="font-size-h6">#</span>2</span>
                    </div>

                    <div class="d-flex align-items-center flex-wrap mb-8">
                        <!--begin::Symbol-->
                        <div class="symbol symbol-50 symbol-light-warning mr-5">
                            <span class="symbol-label">
                                <span class="svg-icon svg-icon-warning svg-icon-2x">
                                    <!--begin::Svg Icon | path:/var/www/preview.keenthemes.com/metronic/releases/2021-04-09-093151/theme/html/demo1/dist/../src/media/svg/icons/General/Thunder-move.svg-->
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <rect x="0" y="0" width="24" height="24"/>
                                            <path d="M16.3740377,19.9389434 L22.2226499,11.1660251 C22.4524142,10.8213786 22.3592838,10.3557266 22.0146373,10.1259623 C21.8914367,10.0438285 21.7466809,10 21.5986122,10 L17,10 L17,4.47708173 C17,4.06286817 16.6642136,3.72708173 16.25,3.72708173 C15.9992351,3.72708173 15.7650616,3.85240758 15.6259623,4.06105658 L9.7773501,12.8339749 C9.54758575,13.1786214 9.64071616,13.6442734 9.98536267,13.8740377 C10.1085633,13.9561715 10.2533191,14 10.4013878,14 L15,14 L15,19.5229183 C15,19.9371318 15.3357864,20.2729183 15.75,20.2729183 C16.0007649,20.2729183 16.2349384,20.1475924 16.3740377,19.9389434 Z" fill="#000000"/><path d="M4.5,5 L9.5,5 C10.3284271,5 11,5.67157288 11,6.5 C11,7.32842712 10.3284271,8 9.5,8 L4.5,8 C3.67157288,8 3,7.32842712 3,6.5 C3,5.67157288 3.67157288,5 4.5,5 Z M4.5,17 L9.5,17 C10.3284271,17 11,17.6715729 11,18.5 C11,19.3284271 10.3284271,20 9.5,20 L4.5,20 C3.67157288,20 3,19.3284271 3,18.5 C3,17.6715729 3.67157288,17 4.5,17 Z M2.5,11 L6.5,11 C7.32842712,11 8,11.6715729 8,12.5 C8,13.3284271 7.32842712,14 6.5,14 L2.5,14 C1.67157288,14 1,13.3284271 1,12.5 C1,11.6715729 1.67157288,11 2.5,11 Z" fill="#000000" opacity="0.3"/>
                                        </g>
                                    </svg>
                                    <!--end::Svg Icon-->
                                </span>
                            </span>
                        </div>
                        <!--end::Symbol-->
                        <!--begin::Text-->
                        <div class="d-flex flex-column flex-grow-1 mr-2">
                            <a href="#" class="font-weight-bold text-dark-75 text-hover-primary font-size-lg mb-1">Felsefe</a>
                            <span class="text-muted font-weight-bold">6325 adet kitap</span>
                        </div>
                        <!--end::Text-->
                        <span class="label label-xl label-light-warning label-inline my-lg-0 my-2 text-warning font-weight-bolder font-size-h4 p-3"><span class="font-size-h6">#</span>3</span>
                    </div>

                    <div class="d-flex align-items-center flex-wrap mb-8">
                        <!--begin::Symbol-->
                        <div class="symbol symbol-50 symbol-light-danger mr-5">
                            <span class="symbol-label">
                                <span class="svg-icon svg-icon-danger svg-icon-2x">
                                    <!--begin::Svg Icon | path:/var/www/preview.keenthemes.com/metronic/releases/2021-04-09-093151/theme/html/demo1/dist/../src/media/svg/icons/General/Thunder-move.svg-->
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <rect x="0" y="0" width="24" height="24"/>
                                            <path d="M16.3740377,19.9389434 L22.2226499,11.1660251 C22.4524142,10.8213786 22.3592838,10.3557266 22.0146373,10.1259623 C21.8914367,10.0438285 21.7466809,10 21.5986122,10 L17,10 L17,4.47708173 C17,4.06286817 16.6642136,3.72708173 16.25,3.72708173 C15.9992351,3.72708173 15.7650616,3.85240758 15.6259623,4.06105658 L9.7773501,12.8339749 C9.54758575,13.1786214 9.64071616,13.6442734 9.98536267,13.8740377 C10.1085633,13.9561715 10.2533191,14 10.4013878,14 L15,14 L15,19.5229183 C15,19.9371318 15.3357864,20.2729183 15.75,20.2729183 C16.0007649,20.2729183 16.2349384,20.1475924 16.3740377,19.9389434 Z" fill="#000000"/><path d="M4.5,5 L9.5,5 C10.3284271,5 11,5.67157288 11,6.5 C11,7.32842712 10.3284271,8 9.5,8 L4.5,8 C3.67157288,8 3,7.32842712 3,6.5 C3,5.67157288 3.67157288,5 4.5,5 Z M4.5,17 L9.5,17 C10.3284271,17 11,17.6715729 11,18.5 C11,19.3284271 10.3284271,20 9.5,20 L4.5,20 C3.67157288,20 3,19.3284271 3,18.5 C3,17.6715729 3.67157288,17 4.5,17 Z M2.5,11 L6.5,11 C7.32842712,11 8,11.6715729 8,12.5 C8,13.3284271 7.32842712,14 6.5,14 L2.5,14 C1.67157288,14 1,13.3284271 1,12.5 C1,11.6715729 1.67157288,11 2.5,11 Z" fill="#000000" opacity="0.3"/>
                                        </g>
                                    </svg>
                                    <!--end::Svg Icon-->
                                </span>
                            </span>
                        </div>
                        <!--end::Symbol-->
                        <!--begin::Text-->
                        <div class="d-flex flex-column flex-grow-1 mr-2">
                            <a href="#" class="font-weight-bold text-dark-75 text-hover-primary font-size-lg mb-1">Araştırma-Tarih</a>
                            <span class="text-muted font-weight-bold">5614 adet kitap</span>
                        </div>
                        <!--end::Text-->
                        <span class="label label-xl label-light-danger label-inline my-lg-0 my-2 text-danger font-weight-bolder font-size-h4 p-3"><span class="font-size-h6">#</span>4</span>
                    </div>

                    <div class="d-flex align-items-center flex-wrap mb-8">
                        <!--begin::Symbol-->
                        <div class="symbol symbol-50 symbol-light-info mr-5">
                            <span class="symbol-label">
                                <span class="svg-icon svg-icon-info svg-icon-2x">
                                    <!--begin::Svg Icon | path:/var/www/preview.keenthemes.com/metronic/releases/2021-04-09-093151/theme/html/demo1/dist/../src/media/svg/icons/General/Thunder-move.svg-->
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <rect x="0" y="0" width="24" height="24"/>
                                            <path d="M16.3740377,19.9389434 L22.2226499,11.1660251 C22.4524142,10.8213786 22.3592838,10.3557266 22.0146373,10.1259623 C21.8914367,10.0438285 21.7466809,10 21.5986122,10 L17,10 L17,4.47708173 C17,4.06286817 16.6642136,3.72708173 16.25,3.72708173 C15.9992351,3.72708173 15.7650616,3.85240758 15.6259623,4.06105658 L9.7773501,12.8339749 C9.54758575,13.1786214 9.64071616,13.6442734 9.98536267,13.8740377 C10.1085633,13.9561715 10.2533191,14 10.4013878,14 L15,14 L15,19.5229183 C15,19.9371318 15.3357864,20.2729183 15.75,20.2729183 C16.0007649,20.2729183 16.2349384,20.1475924 16.3740377,19.9389434 Z" fill="#000000"/><path d="M4.5,5 L9.5,5 C10.3284271,5 11,5.67157288 11,6.5 C11,7.32842712 10.3284271,8 9.5,8 L4.5,8 C3.67157288,8 3,7.32842712 3,6.5 C3,5.67157288 3.67157288,5 4.5,5 Z M4.5,17 L9.5,17 C10.3284271,17 11,17.6715729 11,18.5 C11,19.3284271 10.3284271,20 9.5,20 L4.5,20 C3.67157288,20 3,19.3284271 3,18.5 C3,17.6715729 3.67157288,17 4.5,17 Z M2.5,11 L6.5,11 C7.32842712,11 8,11.6715729 8,12.5 C8,13.3284271 7.32842712,14 6.5,14 L2.5,14 C1.67157288,14 1,13.3284271 1,12.5 C1,11.6715729 1.67157288,11 2.5,11 Z" fill="#000000" opacity="0.3"/>
                                        </g>
                                    </svg>
                                    <!--end::Svg Icon-->
                                </span>
                            </span>
                        </div>
                        <!--end::Symbol-->
                        <!--begin::Text-->
                        <div class="d-flex flex-column flex-grow-1 mr-2">
                            <a href="#" class="font-weight-bold text-dark-75 text-hover-primary font-size-lg mb-1">Bilim-Kurgu</a>
                            <span class="text-muted font-weight-bold">6342 adet kitap</span>
                        </div>
                        <!--end::Text-->
                        <span class="label label-xl label-light-info label-inline my-lg-0 my-2 text-info font-weight-bolder font-size-h4 p-3"><span class="font-size-h6">#</span>5</span>
                    </div>
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
                        <span class="card-label font-weight-bolder text-dark">Son Yapılan Kitap Yorumları</span>
                        <span class="text-muted mt-3 font-weight-bold font-size-sm">More than 400+ new members</span>
                    </h3>
                    <div class="card-toolbar">
                        <a href="#" class="btn btn-info font-weight-bolder font-size-sm mr-3">New Report</a>
                        <a href="#" class="btn btn-danger font-weight-bolder font-size-sm">Create</a>
                    </div>
                </div>
                <!--end::Header-->
                <!--begin::Body-->
                <div class="card-body pt-0 pb-3">
                    <div class="tab-content">
                        <!--begin::Table-->
                        <div class="table-responsive">
                            <table class="table table-head-custom table-head-bg table-borderless table-vertical-center">
                                <thead>
                                <tr class="text-left text-uppercase">
                                    <th style="min-width: 250px" class="pl-7">
                                        <span class="text-dark-75">products</span>
                                    </th>
                                    <th style="min-width: 100px">earnings</th>
                                    <th style="min-width: 100px">comission</th>
                                    <th style="min-width: 100px">company</th>
                                    <th style="min-width: 130px">rating</th>
                                    <th style="min-width: 80px"></th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td class="pl-0 py-8">
                                        <div class="d-flex align-items-center">
                                            <div class="symbol symbol-50 symbol-light mr-4">
																					<span class="symbol-label">
																						<img
                                                                                            src="assets/media/svg/avatars/001-boy.svg"
                                                                                            class="h-75 align-self-end"
                                                                                            alt=""/>
																					</span>
                                            </div>
                                            <div>
                                                <a href="#"
                                                   class="text-dark-75 font-weight-bolder text-hover-primary mb-1 font-size-lg">Brad
                                                    Simmons</a>
                                                <span
                                                    class="text-muted font-weight-bold d-block">HTML, JS, ReactJS</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <span
                                            class="text-dark-75 font-weight-bolder d-block font-size-lg">$8,000,000</span>
                                        <span class="text-muted font-weight-bold">In Proccess</span>
                                    </td>
                                    <td>
                                        <span class="text-dark-75 font-weight-bolder d-block font-size-lg">$520</span>
                                        <span class="text-muted font-weight-bold">Paid</span>
                                    </td>
                                    <td>
                                        <span class="label label-lg label-light-danger label-inline">Edebiyat</span>
                                    </td>
                                    <td>
                                        <img src="assets/media/logos/stars.png" alt="image" style="width: 5.5rem"/>
                                        <span class="text-muted font-weight-bold d-block font-size-sm">Best Rated</span>
                                    </td>
                                    <td class="pr-0 text-right">
                                        <a href="#" class="btn btn-light-success font-weight-bolder font-size-sm">View
                                            Offer</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="pl-0 py-0">
                                        <div class="d-flex align-items-center">
                                            <div class="symbol symbol-50 symbol-light mr-4">
																					<span class="symbol-label">
																						<img
                                                                                            src="assets/media/svg/avatars/018-girl-9.svg"
                                                                                            class="h-75 align-self-end"
                                                                                            alt=""/>
																					</span>
                                            </div>
                                            <div>
                                                <a href="#"
                                                   class="text-dark-75 font-weight-bolder text-hover-primary mb-1 font-size-lg">Jessie
                                                    Clarcson</a>
                                                <span
                                                    class="text-muted font-weight-bold d-block">C#, ASP.NET, MS SQL</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <span
                                            class="text-dark-75 font-weight-bolder d-block font-size-lg">$23,000,000</span>
                                        <span class="text-muted font-weight-bold">Pending</span>
                                    </td>
                                    <td>
                                        <span class="text-dark-75 font-weight-bolder d-block font-size-lg">$1,600</span>
                                        <span class="text-muted font-weight-bold">Rejected</span>
                                    </td>
                                    <td>
                                        <span class="label label-lg label-light-danger label-inline">Edebiyat</span>
                                    </td>
                                    <td>
                                        <img src="assets/media/logos/stars.png" alt="image" style="width: 5.5rem"/>
                                        <span
                                            class="text-muted font-weight-bold d-block font-size-sm">Above Avarage</span>
                                    </td>
                                    <td class="pr-0 text-right">
                                        <a href="#" class="btn btn-light-success font-weight-bolder font-size-sm">View
                                            Offer</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="pl-0 py-8">
                                        <div class="d-flex align-items-center">
                                            <div class="symbol symbol-50 symbol-light mr-4">
                                                <span class="symbol-label">
                                                    <img src="assets/media/svg/avatars/047-girl-25.svg"
                                                         class="h-75 align-self-end" alt=""/>
                                                </span>
                                            </div>
                                            <div>
                                                <a href="#"
                                                   class="text-dark-75 font-weight-bolder text-hover-primary mb-1 font-size-lg">Lebron
                                                    Wayde</a>
                                                <span
                                                    class="text-muted font-weight-bold d-block">PHP, Laravel, VueJS</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <span
                                            class="text-dark-75 font-weight-bolder d-block font-size-lg">$34,000,000</span>
                                        <span class="text-muted font-weight-bold">Paid</span>
                                    </td>
                                    <td>
                                        <span class="text-dark-75 font-weight-bolder d-block font-size-lg">$6,700</span>
                                        <span class="text-muted font-weight-bold">Paid</span>
                                    </td>
                                    <td>
                                        <span class="label label-lg label-light-danger label-inline">Edebiyat</span>
                                    </td>
                                    <td>
                                        <img src="assets/media/logos/stars.png" alt="image" style="width: 5.5rem"/>
                                        <span class="text-muted font-weight-bold d-block font-size-sm">Best Rated</span>
                                    </td>
                                    <td class="pr-0 text-right">
                                        <a href="#" class="btn btn-light-success font-weight-bolder font-size-sm">View
                                            Offer</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="pl-0 py-0">
                                        <div class="d-flex align-items-center">
                                            <div class="symbol symbol-50 symbol-light mr-4">
                                                <span class="symbol-label">
                                                    <img src="assets/media/svg/avatars/014-girl-7.svg"
                                                         class="h-75 align-self-end" alt=""/>
                                                </span>
                                            </div>
                                            <div>
                                                <a href="#"
                                                   class="text-dark font-weight-bolder text-hover-primary mb-1 font-size-lg">Natali
                                                    Trump</a>
                                                <span class="text-muted font-weight-bold d-block">Python, PostgreSQL, ReactJS</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-left pr-0">
                                        <span
                                            class="text-dark-75 font-weight-bolder d-block font-size-lg">$2,600,000</span>
                                        <span class="text-muted font-weight-bold">Paid</span>
                                    </td>
                                    <td>
                                        <span
                                            class="text-dark-75 font-weight-bolder d-block font-size-lg">$14,000</span>
                                        <span class="text-muted font-weight-bold">Pending</span>
                                    </td>
                                    <td>
                                        <span class="label label-lg label-light-danger label-inline">Edebiyat</span>
                                    </td>
                                    <td>
                                        <img src="assets/media/logos/stars.png" style="width: 5.5rem" alt=""/>
                                        <span class="text-muted font-weight-bold d-block font-size-sm">Avarage</span>
                                    </td>
                                    <td class="pr-0 text-right">
                                        <a href="#" class="btn btn-light-success font-weight-bolder font-size-sm"
                                           style="width: 7rem">View Offer</a>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <!--end::Table-->
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
                            <div class="col-md-2 gutter-b overlay">
                                <div class="book ">
                                    <a href=""><img src="{{asset("media/books/1.png")}}" class="img-responsive"></a>
                                </div>
                            </div>
                            <div class="col-md-2 gutter-b">
                                <div class="book">
                                    <a href=""><img src="{{asset("media/books/2.png")}}" class="img-responsive"></a>
                                </div>
                            </div>
                            <div class="col-md-2 gutter-b">
                                <div class="book">
                                    <a href=""><img src="{{asset("media/books/3.png")}}" class="img-responsive"></a>
                                </div>
                            </div>
                            <div class="col-md-2 gutter-b">
                                <div class="book">
                                    <a href=""><img src="{{asset("media/books/4.png")}}" class="img-responsive"></a>
                                </div>
                            </div>
                            <div class="col-md-2 gutter-b">
                                <div class="book">
                                    <a href=""><img src="{{asset("media/books/5.png")}}" class="img-responsive"></a>
                                </div>
                            </div>
                            <div class="col-md-2 gutter-b">
                                <div class="book">
                                    <a href=""><img src="{{asset("media/books/6.png")}}" class="img-responsive"></a>
                                </div>
                            </div>

                            <div class="col-md-2 gutter-b">
                                <div class="book">
                                    <a href=""><img src="{{asset("media/books/7.png")}}" class="img-responsive"></a>
                                </div>
                            </div>
                            <div class="col-md-2 gutter-b">
                                <div class="book">
                                    <a href=""><img src="{{asset("media/books/8.png")}}" class="img-responsive"></a>
                                </div>
                            </div>
                            <div class="col-md-2 gutter-b">
                                <div class="book">
                                    <a href=""><img src="{{asset("media/books/9.png")}}" class="img-responsive"></a>
                                </div>
                            </div>
                            <div class="col-md-2 gutter-b">
                                <div class="book">
                                    <a href=""><img src="{{asset("media/books/10.png")}}" class="img-responsive"></a>
                                </div>
                            </div>
                            <div class="col-md-2 gutter-b">
                                <div class="book">
                                    <a href=""><img src="{{asset("media/books/11.png")}}" class="img-responsive"></a>
                                </div>
                            </div>
                            <div class="col-md-2 gutter-b">
                                <div class="book">
                                    <a href=""><img src="{{asset("media/books/12.png")}}" class="img-responsive"></a>
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
                                    <a href=""><img src="{{asset("media/books/13.png")}}" class="img-responsive"></a>
                                </div>
                            </div>
                            <div class="col-md-2 gutter-b">
                                <div class="book">
                                    <a href=""><img src="{{asset("media/books/12.png")}}" class="img-responsive"></a>
                                </div>
                            </div>
                            <div class="col-md-2 gutter-b">
                                <div class="book">
                                    <a href=""><img src="{{asset("media/books/11.png")}}" class="img-responsive"></a>
                                </div>
                            </div>
                            <div class="col-md-2 gutter-b">
                                <div class="book">
                                    <a href=""><img src="{{asset("media/books/10.png")}}" class="img-responsive"></a>
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

@endsection

{{-- Scripts Section --}}
@section('scripts')
    <script src="{{ asset('js/pages/widgets.js') }}" type="text/javascript"></script>
@endsection
