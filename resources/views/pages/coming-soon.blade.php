{{-- Extends layout --}}
@extends('layout.default')

{{-- Content --}}
@section('content')

    <div class="d-flex flex-row-fluid bgi-size-cover bgi-position-center" style="background-image: url('{{asset('/media/error/bg-3.jpg')}}'); border-radius: 4px;">
        <div class="container">
            <div class="d-flex align-items-stretch text-center flex-column py-40">
                <!--begin::Heading-->
                <h1 class="text-dark font-weight-bolder display-3 text-uppercase mb-12">hazırlanıyor</h1>
                <h1 class="text-dark font-weight-bolder mb-12">Bu sayfa henüz tasarım aşamasında. <br>Lütfen kısa bir zaman içerisinde tekrar ziyaret ediniz.</h1>
                <div>
                    <a href="{{route('home')}}" class="btn btn-light-primary font-weight-bolder font-size-sm px-10">Anasayfa'ya dön</a>

                </div>
                <!--end::Heading-->
            </div>
        </div>
    </div>

@endsection
