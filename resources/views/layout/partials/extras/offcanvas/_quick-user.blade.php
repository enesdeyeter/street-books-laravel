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
                <a href="#" class="navi-item">
                    <div class="navi-link">
                        <div class="symbol symbol-40 bg-light mr-3">
                            <div class="symbol-label">
                                {{ Metronic::getSVG("media/svg/icons/General/Notification2.svg", "svg-icon-md svg-icon-success") }}
                            </div>
                        </div>
                        <div class="navi-text">
                            <div class="font-weight-bold">
                                My Profile
                            </div>
                            <div class="text-muted">
                                Account settings and more
                                <span class="label label-light-danger label-inline font-weight-bold">update</span>
                            </div>
                        </div>
                    </div>
                </a>

                {{-- Item --}}
                <a href="#"  class="navi-item">
                    <div class="navi-link">
                        <div class="symbol symbol-40 bg-light mr-3">
                            <div class="symbol-label">
                                {{ Metronic::getSVG("media/svg/icons/Shopping/Chart-bar1.svg", "svg-icon-md svg-icon-warning") }}
                            </div>
                        </div>
                        <div class="navi-text">
                            <div class="font-weight-bold">
                                My Messages
                            </div>
                            <div class="text-muted">
                                Inbox and tasks
                            </div>
                        </div>
                    </div>
                </a>

                {{-- Item --}}
                <a href="#"  class="navi-item">
                    <div class="navi-link">
                        <div class="symbol symbol-40 bg-light mr-3">
                            <div class="symbol-label">
                                {{ Metronic::getSVG("media/svg/icons/Files/Selected-file.svg", "svg-icon-md svg-icon-danger") }}
                            </div>
                        </div>
                        <div class="navi-text">
                            <div class="font-weight-bold">
                                My Activities
                            </div>
                            <div class="text-muted">
                                Logs and notifications
                            </div>
                        </div>
                    </div>
                </a>

                {{-- Item --}}
                <a href="#" class="navi-item">
                    <div class="navi-link">
                        <div class="symbol symbol-40 bg-light mr-3">
                            <div class="symbol-label">
                                {{ Metronic::getSVG("media/svg/icons/Communication/Mail-opened.svg", "svg-icon-md svg-icon-primary") }}
                            </div>
                        </div>
                        <div class="navi-text">
                            <div class="font-weight-bold">
                                My Tasks
                            </div>
                            <div class="text-muted">
                                latest tasks and projects
                            </div>
                        </div>
                    </div>
                </a>
            </div>

            {{-- Separator --}}
            <div class="separator separator-dashed my-7"></div>

            {{-- Notifications --}}
            <div>
                {{-- Heading --}}
                <h5 class="mb-5">
                    Recent Notifications
                </h5>

                {{-- Item --}}
                <div class="d-flex align-items-center bg-light-warning rounded p-5 gutter-b">
	            <span class="svg-icon svg-icon-warning mr-5">
	                {{ Metronic::getSVG("media/svg/icons/Home/Library.svg", "svg-icon-lg") }}
	            </span>

                    <div class="d-flex flex-column flex-grow-1 mr-2">
                        <a href="#" class="font-weight-normal text-dark-75 text-hover-primary font-size-lg mb-1">Another purpose persuade</a>
                        <span class="text-muted font-size-sm">Due in 2 Days</span>
                    </div>

                    <span class="font-weight-bolder text-warning py-1 font-size-lg">+28%</span>
                </div>

                {{-- Item --}}
                <div class="d-flex align-items-center bg-light-success rounded p-5 gutter-b">
	            <span class="svg-icon svg-icon-success mr-5">
	                {{ Metronic::getSVG("media/svg/icons/Communication/Write.svg", "svg-icon-lg") }}
	            </span>
                    <div class="d-flex flex-column flex-grow-1 mr-2">
                        <a href="#" class="font-weight-normal text-dark-75 text-hover-primary font-size-lg mb-1">Would be to people</a>
                        <span class="text-muted font-size-sm">Due in 2 Days</span>
                    </div>

                    <span class="font-weight-bolder text-success py-1 font-size-lg">+50%</span>
                </div>

                {{-- Item --}}
                <div class="d-flex align-items-center bg-light-danger rounded p-5 gutter-b">
	            <span class="svg-icon svg-icon-danger mr-5">
	                {{ Metronic::getSVG("media/svg/icons/Communication/Group-chat.svg", "svg-icon-lg") }}
	            </span>
                    <div class="d-flex flex-column flex-grow-1 mr-2">
                        <a href="#" class="font-weight-normel text-dark-75 text-hover-primary font-size-lg mb-1">Purpose would be to persuade</a>
                        <span class="text-muted font-size-sm">Due in 2 Days</span>
                    </div>

                    <span class="font-weight-bolder text-danger py-1 font-size-lg">-27%</span>
                </div>

                {{-- Item --}}
                <div class="d-flex align-items-center bg-light-info rounded p-5">
	            <span class="svg-icon svg-icon-info mr-5">
	                {{ Metronic::getSVG("media/svg/icons/General/Attachment2.svg", "svg-icon-lg") }}
	            </span>

                    <div class="d-flex flex-column flex-grow-1 mr-2">
                        <a href="#" class="font-weight-normel text-dark-75 text-hover-primary font-size-lg mb-1">The best product</a>
                        <span class="text-muted font-size-sm">Due in 2 Days</span>
                    </div>

                    <span class="font-weight-bolder text-info py-1 font-size-lg">+8%</span>
                </div>
            </div>
        </div>
    </div>

@else

@endif
