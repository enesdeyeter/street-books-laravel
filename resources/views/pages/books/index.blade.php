{{-- Extends layout --}}
@extends('layout.default')

{{-- Scripts Section --}}
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
                        <span class="card-label font-weight-bolder text-dark">Yeni Eklenen Kitaplar</span>
                        <span class="text-muted mt-3 font-weight-bold font-size-sm">More than 400+ new members</span>
                    </h3>
                </div>
                <!--end::Header-->
                <!--begin::Body-->
                <div class="card-body pt-0 pb-5" style="text-align: center;">
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

                <div class="row">
                    <div class="col-md-12">
                        <div class="d-flex justify-content-center pb-5">
                            {{ $allBooks->links() }}
                        </div>
                    </div>
                </div>
            </div>
            <!--end::Advance Table Widget 4-->
        </div>
    </div>

@endsection

{{-- Scripts Section --}}
@section('scripts')
    <script src="{{ asset('js/pages/widgets.js') }}" type="text/javascript"></script>
@endsection
