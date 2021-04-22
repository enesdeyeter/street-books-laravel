{{-- Subheader V1 --}}

<div class="subheader py-2 {{ Metronic::printClasses('subheader', false) }}" id="kt_subheader">
    <div class="{{ Metronic::printClasses('subheader-container', false) }} d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">

		{{-- Info --}}
        <div class="d-flex align-items-center flex-wrap mr-1">

			{{-- Page Title --}}
            <h5 class="text-dark font-weight-bold text-uppercase my-2 mr-5">
                {{ @$page_title }}

                @if (isset($page_description) && config('layout.subheader.displayDesc'))
                    <small>{{ @$page_description }}</small>
                @endif
            </h5>

            @if (!empty($page_breadcrumbs))
				{{-- Separator --}}
                <div class="subheader-separator subheader-separator-ver my-2 mr-4 d-none"></div>

				{{-- Breadcrumb --}}
                <ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 my-2">
                    <li class="breadcrumb-item"><a href="#"><i class="flaticon2-shelter text-muted icon-1x"></i></a></li>
                    @foreach ($page_breadcrumbs as $k => $item)
						<li class="breadcrumb-item">
                        	<a href="{{ url($item['page']) }}" class="text-muted">
                            	{{ $item['title'] }}
                        	</a>
						</li>
                    @endforeach
                </ul>
            @endif
        </div>

		{{-- Toolbar --}}
        <div class="d-flex align-items-center">

            @hasSection('page_toolbar')
                @section('page_toolbar')
            @endif

            <div class="dropdown dropdown-inline" data-toggle="tooltip" title="Eylemler " data-placement="left">
                <a href="#" class="btn btn-icon"data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    {{ Metronic::getSVG("media/svg/icons/General/Settings-1.svg", "svg-icon-success svg-icon-2x") }}
                </a>
                <div class="dropdown-menu p-0 m-0 dropdown-menu-md dropdown-menu-right">
                    {{-- Navigation --}}
                    <ul class="navi navi-hover">
                        <li class="navi-header font-weight-bold">
                            Hızlı eylemler:
                        </li>
                        <li class="navi-separator mb-3"></li>
                        <li class="navi-item">
                            <a href="" class="navi-link" onclick="location.reload()">
                                <span class="navi-icon"><i class="flaticon2-refresh-button"></i></span>
                                <span class="navi-text">Sayfayı yenile</span>
                            </a>
                        </li>
                        <li class="navi-item">
                            <a href="#" class="navi-link" onclick="window.print();">
                                <span class="navi-icon"><i class="flaticon2-print"></i></span>
                                <span class="navi-text">Sayfayı yazdır</span>
                            </a>
                        </li>
                        <li class="navi-separator mt-3"></li>
                        <li class="navi-footer">
                            <a class="btn btn-light-success font-weight-bolder btn-sm" href="#">Öneride bulun</a>
                            <a class="btn btn-clean font-weight-bold text-danger btn-sm" href="#">Şikayet et</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

    </div>
</div>
