{{-- Extends layout --}}
@extends('layout.default')

{{-- Styles Section --}}
@section('styles')
    <link href="{{ asset('/css/pages/wizard/wizard-2.css?v=7.0.5')}} " rel="stylesheet" type="text/css"/>
@endsection

{{-- Content --}}
@section('content')

    <h1>kitap sonuç sayfası</h1>

@endsection

{{-- Scripts Section --}}
@section('scripts')
    <script src="{{ asset('js/pages/widgets.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/pages/custom/wizard/wizard-2.js?v=7.0.5')}} "></script>
    <script src="{{ asset('js/pages/custom/contacts/edit-contact.js') }}"></script>
@endsection
