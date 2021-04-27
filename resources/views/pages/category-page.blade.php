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
