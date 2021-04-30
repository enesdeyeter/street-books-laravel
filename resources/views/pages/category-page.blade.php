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

    <div class="row">
        <div class="col-lg-12">
            <div class="card card-custom gutter-b">
                <!--begin::Body-->
                <div class="card-body d-flex align-items-center justify-content-between flex-wrap py-3">
                    <!--begin::Info-->
                    <div class="d-flex align-items-center mr-2 py-2">
                        <h3 class="font-weight-bold mb-0 mr-1">Sırala</h3>

                        <div class="mr-2">
                            <div class="col-12">
                                <select class="form-control" id="exampleSelectl">
                                    <option>Varsayılan</option>
                                    <option>Kitap Adı (A-Z)</option>
                                    <option>Kitap Adı (Z-A)</option>
                                    <option>En Yeniler</option>
                                    <option>En Çok Yorum Yapılan</option>
                                    <option>En Çok Tavsiye Edilen</option>
                                </select>
                            </div>
                        </div>

                        <h3 class="text-muted font-weight-light mb-0 ml-2 mr-2">|</h3>

                        <h3 class="font-weight-bold mb-0 ml-3 mr-1">Göster</h3>

                        <div class="">
                            <div class="col-12">
                                <select class="form-control" id="exampleSelectl">
                                    <option>12</option>
                                    <option>15</option>
                                    <option>25</option>
                                    <option>50</option>
                                    <option>75</option>
                                </select>
                            </div>
                        </div>
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
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <!--begin::Advance Table Widget 4-->
            <div class="card card-custom card-stretch gutter-b">
                <!--begin::Header-->
                <div class="card-header border-0 py-5">
                    <h3 class="card-title align-items-start flex-column">
                        <span class="card-label font-weight-bolder text-dark">{{ $page_title }} </span>
                        <span class="text-muted mt-3 font-weight-bold font-size-sm"> Bu kategoriye ait {{ $category_result->count() }} kitap bulundu </span>
                    </h3>
                </div>
                <!--end::Header-->
                <!--begin::Body-->
                <div class="card-body pt-0 pb-5" style="text-align: center;">
                    <div class="tab-content">
                        <div class="row">

                            @foreach ($category_result as $book)
                                <div class="col col-xl-2 col-md-3 text-capitalize" data-toggle="popover" data-placement="top" data-content="{{ $book->book_name }}">
                                    <div class="book">
                                        <a href="{{ url('books/'.$book->slug) }}">
                                            <img src="{{ asset($book->book_image) }}" class="img-responsive" alt="image-{{ $book->slug }}">
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
    <script src="{{ asset('js/pages/custom/wizard/wizard-2.js?v=7.0.5')}} "></script>
    <script src="{{ asset('js/pages/custom/contacts/edit-contact.js') }}"></script>

@endsection
