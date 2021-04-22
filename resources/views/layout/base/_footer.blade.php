{{-- Footer --}}

<div class="footer bg-white py-4 d-flex flex-lg-column {{ Metronic::printClasses('footer', false) }}" id="kt_footer">
    {{-- Container --}}
    <div class="{{ Metronic::printClasses('footer-container', false) }} d-flex flex-column flex-md-row align-items-center justify-content-between">
        {{-- Copyright --}}
        <div class="text-dark order-2 order-md-1">
            <span class="text-muted font-weight-bold">{{ date("Y") }} &copy;</span>
            <a href="{{ url('home') }}" class="text-muted font-weight-bold">
                Street Books
                {{--<img src="{{ asset('media/logos/logo-dark.png') }}" alt="street-books-logo" style="width: 127px; opacity: .2">--}}
            </a>
            {{--            <a href="" target="_blank" class="text-dark-75 text-hover-primary">StreetBooks</a>--}}
        </div>

        {{-- Nav --}}
        <div class="nav nav-dark order-1 order-md-2">
            <a href="" target="_blank" class="nav-link pr-3 pl-0 disabled">enesdeyeter</a>
            <a href="change-log" target="_blank" class="nav-link pr-3 pl-0">v1.6</a>
        </div>
    </div>
</div>
