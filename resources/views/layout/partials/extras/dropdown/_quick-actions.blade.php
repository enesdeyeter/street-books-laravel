{{-- Header --}}
@if (config('layout.extras.quick-actions.dropdown.style') == 'light')
    <div class="d-flex flex-column flex-center py-10 bg-dark-o-5 rounded-top bg-light">
        <h4 class="text-dark font-weight-bold text-uppercase">
            Kısayollar
        </h4>
        <span class="btn btn-success btn-sm font-weight-bold font-size-sm mt-2"></span>
    </div>
@else
    <div class="d-flex flex-column flex-center py-10 bgi-size-cover bgi-no-repeat rounded-top" style="background-image: url('{{ asset('media/misc/bg-1.jpg') }}')">
        <h4 class="text-white font-weight-bold text-uppercase">
            Kısayollar
        </h4>
    </div>
@endif

{{-- Nav --}}
<div class="row row-paddingless">
    {{-- Item --}}
    <div class="col-6">
        <a href="{{ route('coming-soon') }}" class="d-block py-10 px-5 text-center bg-hover-light border-right border-bottom">
            {{ Metronic::getSVG("media/svg/icons/Home/Library.svg", "svg-icon-3x svg-icon-success") }}
            <span class="d-block text-dark-75 font-weight-bold font-size-h6 mt-2 mb-1">Kitap Öner</span>
        </a>
    </div>

    {{-- Item --}}
    <div class="col-6">
        <a href="{{ route('coming-soon') }}" class="d-block py-10 px-5 text-center bg-hover-light border-bottom">
            {{ Metronic::getSVG("media/svg/icons/Design/Edit.svg", "svg-icon-3x svg-icon-success") }}
            <span class="d-block text-dark-75 font-weight-bold font-size-h6 mt-2 mb-1">Düzenleme Öner</span>
        </a>
    </div>

    {{-- Item --}}
    <div class="col-6">
        <a href="{{ route('coming-soon') }}" class="d-block py-10 px-5 text-center bg-hover-light border-right">
            {{ Metronic::getSVG("media/svg/icons/Code/Warning-2.svg", "svg-icon-3x svg-icon-danger") }}
            <span class="d-block text-dark-75 font-weight-bold font-size-h6 mt-2 mb-1">Kitap Şikayet Et</span>
        </a>
    </div>

    {{-- Item --}}
    <div class="col-6">
        <a href="{{ route('coming-soon') }}" class="d-block py-10 px-5 text-center bg-hover-light">
            {{ Metronic::getSVG("media/svg/icons/Communication/Chat-error.svg", "svg-icon-3x svg-icon-danger") }}
            <span class="d-block text-dark-75 font-weight-bold font-size-h6 mt-2 mb-1">Yorum Şikayet Et</span>
        </a>
    </div>
</div>
