{{-- Extends layout --}}
@extends('layout.default')

@section('styles')
    <style>
        @media (max-width:570px){
            .book img{
                width: 124px !important;
                height: 190px !important;
                object-fit: cover;
                border-radius: 4px;
                transition: all .5s;
            }
        }
    </style>
@endsection

{{-- Content --}}
@section('content')


    <div class="d-flex flex-row">
        <!--begin::Aside-->
        <div class="flex-row-auto offcanvas-mobile w-200px w-xxl-275px" id="kt_todo_aside">
            <!--begin::Card-->
            <div class="card card-custom card-stretch">
                <!--begin::Body-->
                <div class="card-body px-5">
                    <!--begin:Nav-->
                    <div class="navi navi-hover navi-active navi-link-rounded navi-bold navi-icon-center navi-light-icon">
                        {{--web--}}
                        <div class="navi-section mb-2 font-size-h1 font-weight-bold pb-0 text-uppercase">Kategoriler</div>
                        <hr>

                        @foreach($categories as $item)
                        <!--begin:Item-->
                            <div class="navi-item my-2">
                                <a href="{{$item->slug}}" class="navi-link @if(Request::segment(2) == $item->slug) active @endif" >
															<span class="navi-icon mr-4">
																<span class="svg-icon svg-icon-lg">
																	<!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Mail-heart.svg-->
																	<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																		<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																			<polygon points="0 0 24 0 24 24 0 24"></polygon>
																			<path d="M12.2928955,6.70710318 C11.9023712,6.31657888 11.9023712,5.68341391 12.2928955,5.29288961 C12.6834198,4.90236532 13.3165848,4.90236532 13.7071091,5.29288961 L19.7071091,11.2928896 C20.085688,11.6714686 20.0989336,12.281055 19.7371564,12.675721 L14.2371564,18.675721 C13.863964,19.08284 13.2313966,19.1103429 12.8242777,18.7371505 C12.4171587,18.3639581 12.3896557,17.7313908 12.7628481,17.3242718 L17.6158645,12.0300721 L12.2928955,6.70710318 Z" fill="#000000" fill-rule="nonzero"></path>
																			<path d="M3.70710678,15.7071068 C3.31658249,16.0976311 2.68341751,16.0976311 2.29289322,15.7071068 C1.90236893,15.3165825 1.90236893,14.6834175 2.29289322,14.2928932 L8.29289322,8.29289322 C8.67147216,7.91431428 9.28105859,7.90106866 9.67572463,8.26284586 L15.6757246,13.7628459 C16.0828436,14.1360383 16.1103465,14.7686056 15.7371541,15.1757246 C15.3639617,15.5828436 14.7313944,15.6103465 14.3242754,15.2371541 L9.03007575,10.3841378 L3.70710678,15.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" transform="translate(9.000003, 11.999999) rotate(-270.000000) translate(-9.000003, -11.999999)"></path>
																		</g>
																	</svg>
                                                                    <!--end::Svg Icon-->
																</span>
															</span>
                                    <span class="navi-text font-weight-bolder font-size-lg">{{$item->name}}</span>
                                    @if($loop->iteration <= 3)
                                        <span class="label label-sm label-light-info label-inline text-info pulse pulse-info p-3">Popüler<span class="pulse-ring"></span></span>
                                    @endif

                                    @if($loop->iteration == 8)
                                        <span class="label label-sm label-light-success label-inline text-success pulse pulse-success p-3">Yeni<span class="pulse-ring"></span></span>
                                    @endif
                                </a>
                            </div>
                            <!--end:Item-->
                        @endforeach
                    </div>


                    <!--end:Nav-->
                </div>
                <!--end::Body-->
            </div>
            <!--end::Card-->
        </div>

        <div class="flex-row-fluid d-flex flex-column ml-lg-8">
            <div class="d-flex flex-column flex-grow-1">

                <div class="card card-custom gutter-b">
                    <!--begin::Body-->
                    <div class="card-body d-flex align-items-center justify-content-between flex-wrap py-3">
                        <!--begin::Info-->
                        <div class="d-flex align-items-center mr-2 py-2">
                            <h3 class="font-weight-bold mb-0 mr-1">{{ $page_title }} <span class="text-muted font-size-h6">({{ $category_result->count() }})</span></h3>
                        </div>
                        <!--end::Info-->
                        <!--begin::Users-->
                        <div class="symbol-hover py-2">
                            <div class="symbol symbol-30 symbol-light-primary">
                                <span class="symbol-label font-weight-bold">
                                    <i class="fas fa-th-list"></i>
                                </span>
                            </div>

                            <div class="symbol symbol-30 symbol-light-primary">
                                <span class="symbol-label font-weight-bold">
                                    <i class="fas fa-th text-dark-75"></i>
                                </span>
                            </div>
                        </div>
                        <!--end::Users-->
                    </div>
                    <!--end::Body-->
                </div>

                <div class="card card-custom card-collapsed gutter-b d-block d-sm-none" data-card="true" id="kt_card_4">
                    <div class="card-header">

                        <div class="card-title">
                            <h3 class="card-label">Kategoriler</h3>
                        </div>
                        <div class="card-toolbar">
                            <a href="#" class="btn btn-icon btn-sm btn-light-primary mr-1" data-card-tool="toggle">
                                <i class="ki ki-arrow-up icon-nm"></i>
                            </a>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="navi navi-hover navi-active navi-link-rounded navi-bold navi-icon-center navi-light-icon">
                            {{-- mobil--}}
                            @foreach($categories as $item)
                                <div class="navi-item my-2">
                                    <a href="{{$item->slug}}" class="navi-link  @if(Request::segment(2) == $item->slug) active @endif">
															<span class="navi-icon mr-4">
																<span class="svg-icon svg-icon-lg">
																	<!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Mail-heart.svg-->
																	<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																		<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																			<polygon points="0 0 24 0 24 24 0 24"></polygon>
																			<path d="M12.2928955,6.70710318 C11.9023712,6.31657888 11.9023712,5.68341391 12.2928955,5.29288961 C12.6834198,4.90236532 13.3165848,4.90236532 13.7071091,5.29288961 L19.7071091,11.2928896 C20.085688,11.6714686 20.0989336,12.281055 19.7371564,12.675721 L14.2371564,18.675721 C13.863964,19.08284 13.2313966,19.1103429 12.8242777,18.7371505 C12.4171587,18.3639581 12.3896557,17.7313908 12.7628481,17.3242718 L17.6158645,12.0300721 L12.2928955,6.70710318 Z" fill="#000000" fill-rule="nonzero"></path>
																			<path d="M3.70710678,15.7071068 C3.31658249,16.0976311 2.68341751,16.0976311 2.29289322,15.7071068 C1.90236893,15.3165825 1.90236893,14.6834175 2.29289322,14.2928932 L8.29289322,8.29289322 C8.67147216,7.91431428 9.28105859,7.90106866 9.67572463,8.26284586 L15.6757246,13.7628459 C16.0828436,14.1360383 16.1103465,14.7686056 15.7371541,15.1757246 C15.3639617,15.5828436 14.7313944,15.6103465 14.3242754,15.2371541 L9.03007575,10.3841378 L3.70710678,15.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" transform="translate(9.000003, 11.999999) rotate(-270.000000) translate(-9.000003, -11.999999)"></path>
																		</g>
																	</svg>
                                                                    <!--end::Svg Icon-->
																</span>
															</span>
                                        <span class="navi-text font-weight-bolder font-size-lg">{{$item->name}}</span>
                                        @if($loop->iteration <= 3)
                                            <span class="label label-sm label-light-info label-inline text-info pulse pulse-info p-3">Popüler<span class="pulse-ring"></span></span>
                                        @endif

                                        @if($loop->iteration == 8)
                                            <span class="label label-sm label-light-success label-inline text-success pulse pulse-success p-3">Yeni<span class="pulse-ring"></span></span>
                                        @endif
                                    </a>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>



                <!--kitaplar-->
                <div class="row">
                    {{-- kitaplar--}}
                    @foreach ($category_result as $item)
                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
                            <!--begin::Card-->
                            <div class="card card-custom gutter-b card-stretch text-center">
                                <div class="card-body">
                                    <div class="d-flex flex-column align-items-center" style="margin-top: -10px">

                                        <div class="book">
                                            <a href="{{url('books/'.$item->slug)}}">
                                                <img src="{{ asset($item->book_image) }}" class="img-responsive" alt="image-{{ $item->slug }}">
                                            </a>
                                        </div>

                                        <a href="{{url('books/'.$item->slug)}}" class="text-dark-75 font-weight-bold mt-5 text-hover-primary font-size-lg">{{$item->book_name}}</a>
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

@endsection

{{-- Scripts Section --}}
@section('scripts')
    <script src="{{ asset('js/pages/widgets.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/pages/custom/wizard/wizard-2.js?v=7.0.5')}} "></script>
    <script src="{{ asset('js/pages/custom/contacts/edit-contact.js') }}"></script>

@endsection
