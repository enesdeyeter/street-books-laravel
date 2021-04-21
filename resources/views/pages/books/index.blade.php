{{-- Extends layout --}}
@extends('layout.default')

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
                    <div class="card-toolbar">
                        <a href="#" class="btn btn-light-primary font-weight-bolder font-size-sm">Tümünü Gör</a>
                    </div>
                </div>
                <!--end::Header-->
                <!--begin::Body-->
                <div class="card-body pt-0 pb-10" style="text-align: center;">
                    <div class="tab-content">
                        <div class="row">

                            {{--@foreach ($allBooks as $book)
                                <div class="col-md-2 gutter-b overlay">
                                    <div class="book ">
                                        <a href="books/{{$book->slug}}"><img src="{{ $book->book_image }}" class="img-responsive"></a>
                                    </div>
                                </div>
                            @endforeach--}}


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
