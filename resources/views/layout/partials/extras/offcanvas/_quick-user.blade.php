@php
    $direction = config('layout.extras.user.offcanvas.direction', 'right');
@endphp

@if(Auth::check())
    {{-- User Panel --}}
    <div id="kt_quick_user" class="offcanvas offcanvas-{{ $direction }} p-10">
        {{-- Header --}}
        <div class="offcanvas-header d-flex align-items-center justify-content-between pb-5">
            <h3 class="font-weight-bold m-0">
                Kullanıcı Profili
            </h3>
            <a href="#" class="btn btn-xs btn-icon btn-light btn-hover-primary" id="kt_quick_user_close">
                <i class="ki ki-close icon-xs text-muted"></i>
            </a>
        </div>

        {{-- Content --}}
        <div class="offcanvas-content pr-5 mr-n5">
            {{-- Header --}}
            <div class="d-flex align-items-center mt-5">
                <div class="symbol symbol-light-success symbol-100 mr-5">
                    <span class="symbol-label font-size-h1 text-success font-weight-bold text-uppercase">{{ substr(Auth::user()->name, 0, 1) }}</span>
                    <i class="symbol-badge bg-success"></i>
                </div>
                <div class="d-flex flex-column">
                    <a href="#" class="font-weight-bold font-size-h5 text-dark-75 text-hover-primary text-capitalize">
                        @if(Auth::check())
                            {{Auth::user()->name}}
                        @else
                            kimsin mk
                        @endif
                    </a>
                    <div class="text-muted mt-1">
                        <span class="text-hover-primary">{{ Auth::user()->email }}</span>
                    </div>
                    <div class="text-muted mt-1">
                        <span class="text-hover-primary"> Kayıt tarihi: <b>{{ Auth::user()->created_at->format('d/m/Y') }}</b></span>
                    </div>
                </div>
            </div>

            <a href="{{route('profile')}}" class="btn btn-primary btn-block mt-5">Profile Git</a>
            <a href="{{route('logout')}}" class="btn btn-light-danger btn-block mt-5">Çıkış Yap</a>

            {{-- Separator --}}
            <div class="separator separator-dashed mt-8 mb-5"></div>

            {{-- Nav --}}
            <div class="navi navi-spacer-x-0 p-0">
                {{-- Item --}}
                <a href="{{url('book/add')}}" class="navi-item">
                    <div class="navi-link">
                        <div class="symbol symbol-40 symbol-light-success mr-3">
                            <div class="symbol-label">
                                {{ Metronic::getSVG("media/svg/icons/Home/Library.svg", "svg-icon-md svg-icon-success") }}
                            </div>
                        </div>
                        <div class="navi-text">
                            <div class="font-weight-bold">
                                Kitap Öner <span class="label label-light-success label-inline float-right font-weight-bold pulse pulse-success">yeni <span class="pulse-ring"></span></span>
                            </div>
                        </div>
                    </div>
                </a>

                {{-- Item --}}
                <a href="{{route('coming-soon')}}" class="navi-item">
                    <div class="navi-link">
                        <div class="symbol symbol-40 symbol-light-success mr-3">
                            <div class="symbol-label">
                                {{ Metronic::getSVG("media/svg/icons/Design/Edit.svg", "svg-icon-md svg-icon-success") }}
                            </div>
                        </div>
                        <div class="navi-text">
                            <div class="font-weight-bold">
                                Düzenleme Öner <span class="label label-light-primary label-inline float-right font-weight-bold pulse pulse-primary">yakında <span class="pulse-ring"></span></span>
                            </div>
                        </div>
                    </div>
                </a>

                {{-- Item --}}
                <a href="{{route('coming-soon')}}" class="navi-item">
                    <div class="navi-link">
                        <div class="symbol symbol-40 symbol-light-danger mr-3">
                            <div class="symbol-label">
                                {{ Metronic::getSVG("media/svg/icons/Code/Warning-2.svg", "svg-icon-md svg-icon-danger") }}
                            </div>
                        </div>
                        <div class="navi-text">
                            <div class="font-weight-bold">
                                Kitap Şikayet Et <span class="label label-light-primary label-inline float-right font-weight-bold pulse pulse-primary">yakında <span class="pulse-ring"></span></span>
                            </div>
                        </div>
                    </div>
                </a>

                {{-- Item --}}
                <a href="{{route('coming-soon')}}" class="navi-item">
                    <div class="navi-link">
                        <div class="symbol symbol-40 symbol-light-danger mr-3">
                            <div class="symbol-label">
                                {{ Metronic::getSVG("media/svg/icons/Communication/Chat-error.svg", "svg-icon-md svg-icon-danger") }}
                            </div>
                        </div>
                        <div class="navi-text">
                            <div class="font-weight-bold">
                                Yorum Şikayet Et <span class="label label-light-primary label-inline float-right font-weight-bold pulse pulse-primary">yakında <span class="pulse-ring"></span></span>
                            </div>
                        </div>
                    </div>
                </a>
            </div>

            {{-- Separator --}}
            <div class="separator separator-dashed my-7"></div>

        </div>
    </div>

@else

@endif
