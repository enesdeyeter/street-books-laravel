{{-- Extends layout --}}
@extends('layout.default')

{{-- Styles Section --}}
@section('styles')
    <link href="{{ asset('/css/pages/wizard/wizard-2.css?v=7.0.5')}} " rel="stylesheet" type="text/css"/>
@endsection

{{-- Content --}}
@section('content')

    <div class="row">
        <div class="col-md-12">
            <div class="container">
                <div class="card card-custom">
                    @if($errors->any())
                        <div class="alert alert-danger">
                            @foreach($errors->all() as $error)
                                {{ $error }}
                            @endforeach
                        </div>
                    @endif
                    <br><br>
                    <div class="card-body p-0">
                        <!--begin: Wizard-->
                        <div class="wizard wizard-2" id="kt_wizard_v2" data-wizard-state="step-first"
                             data-wizard-clickable="false">
                            <!--begin: Wizard Nav-->
                            <div class="wizard-nav border-right py-8 px-8 py-lg-20 px-lg-10">
                                <!--begin::Wizard Step 1 Nav-->
                                <div class="wizard-steps">
                                    <div class="wizard-step" data-wizard-type="step" data-wizard-state="current">
                                        <div class="wizard-wrapper">
                                            <div class="wizard-icon">
																<span class="svg-icon svg-icon-2x"><!--begin::Svg Icon | path:/var/www/preview.keenthemes.com/metronic/releases/2021-04-09-093151/theme/html/demo1/dist/../src/media/svg/icons/Home/Book-open.svg--><svg
                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                        xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                                        height="24px" viewBox="0 0 24 24" version="1.1">
    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <rect x="0" y="0" width="24" height="24"/>
        <path d="M13.6855025,18.7082217 C15.9113859,17.8189707 18.682885,17.2495635 22,17 C22,16.9325178 22,13.1012863 22,5.50630526 L21.9999762,5.50630526 C21.9999762,5.23017604 21.7761292,5.00632908 21.5,5.00632908 C21.4957817,5.00632908 21.4915635,5.00638247 21.4873465,5.00648922 C18.658231,5.07811173 15.8291155,5.74261533 13,7 C13,7.04449645 13,10.79246 13,18.2438906 L12.9999854,18.2438906 C12.9999854,18.520041 13.2238496,18.7439052 13.5,18.7439052 C13.5635398,18.7439052 13.6264972,18.7317946 13.6855025,18.7082217 Z"
              fill="#000000"/>
        <path d="M10.3144829,18.7082217 C8.08859955,17.8189707 5.31710038,17.2495635 1.99998542,17 C1.99998542,16.9325178 1.99998542,13.1012863 1.99998542,5.50630526 L2.00000925,5.50630526 C2.00000925,5.23017604 2.22385621,5.00632908 2.49998542,5.00632908 C2.50420375,5.00632908 2.5084219,5.00638247 2.51263888,5.00648922 C5.34175439,5.07811173 8.17086991,5.74261533 10.9999854,7 C10.9999854,7.04449645 10.9999854,10.79246 10.9999854,18.2438906 L11,18.2438906 C11,18.520041 10.7761358,18.7439052 10.4999854,18.7439052 C10.4364457,18.7439052 10.3734882,18.7317946 10.3144829,18.7082217 Z"
              fill="#000000" opacity="0.3"/>
    </g>
</svg><!--end::Svg Icon--></span>
                                            </div>
                                            <div class="wizard-label">
                                                <h3 class="wizard-title">Kitap Bilgileri</h3>
                                                <div class="wizard-desc">1. Adım</div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end::Wizard Step 1 Nav-->
                                    <!--begin::Wizard Step 2 Nav-->
                                    <div class="wizard-step" data-wizard-type="step">
                                        <div class="wizard-wrapper">
                                            <div class="wizard-icon">
																<span class="svg-icon svg-icon-2x"><!--begin::Svg Icon | path:C:\wamp64\www\keenthemes\themes\metronic\theme\html\demo1\dist/../src/media/svg/icons\Code\Info-circle.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <rect x="0" y="0" width="24" height="24"/>
        <circle fill="#000000" opacity="0.3" cx="12" cy="12" r="10"/>
        <rect fill="#000000" x="11" y="10" width="2" height="7" rx="1"/>
        <rect fill="#000000" x="11" y="7" width="2" height="2" rx="1"/>
    </g>
</svg><!--end::Svg Icon--></span>
                                            </div>
                                            <div class="wizard-label">
                                                <h3 class="wizard-title">Kitap Açıklaması</h3>
                                                <div class="wizard-desc">2. Adım</div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end::Wizard Step 2 Nav-->
                                    <!--begin::Wizard Step 3 Nav-->
                                    <div class="wizard-step" data-wizard-type="step">
                                        <div class="wizard-wrapper">
                                            <div class="wizard-icon">
																<span class="svg-icon svg-icon-2x"><!--begin::Svg Icon | path:/var/www/preview.keenthemes.com/metronic/releases/2021-04-09-093151/theme/html/demo1/dist/../src/media/svg/icons/General/Bookmark.svg--><svg
                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                        xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                                        height="24px" viewBox="0 0 24 24" version="1.1">
    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <rect x="0" y="0" width="24" height="24"/>
        <path d="M8,4 L16,4 C17.1045695,4 18,4.8954305 18,6 L18,17.726765 C18,18.2790497 17.5522847,18.726765 17,18.726765 C16.7498083,18.726765 16.5087052,18.6329798 16.3242754,18.4639191 L12.6757246,15.1194142 C12.2934034,14.7689531 11.7065966,14.7689531 11.3242754,15.1194142 L7.67572463,18.4639191 C7.26860564,18.8371115 6.63603827,18.8096086 6.26284586,18.4024896 C6.09378519,18.2180598 6,17.9769566 6,17.726765 L6,6 C6,4.8954305 6.8954305,4 8,4 Z"
              fill="#000000"/>
    </g>
</svg><!--end::Svg Icon--></span>
                                            </div>
                                            <div class="wizard-label">
                                                <h3 class="wizard-title">Yayınevi Bilgileri</h3>
                                                <div class="wizard-desc">3. Adım</div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end::Wizard Step 3 Nav-->
                                    <!--begin::Wizard Step 3 Nav-->
                                    <div class="wizard-step" data-wizard-type="step">
                                        <div class="wizard-wrapper">
                                            <div class="wizard-icon">
																<span class="svg-icon svg-icon-2x">
																	<!--begin::Svg Icon | path:assets/media/svg/icons/General/Thunder-move.svg-->
																	<svg xmlns="http://www.w3.org/2000/svg"
                                                                         xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                         width="24px" height="24px" viewBox="0 0 24 24"
                                                                         version="1.1">
																		<g stroke="none" stroke-width="1" fill="none"
                                                                           fill-rule="evenodd">
																			<rect x="0" y="0" width="24" height="24"/>
																			<path
                                                                                d="M16.3740377,19.9389434 L22.2226499,11.1660251 C22.4524142,10.8213786 22.3592838,10.3557266 22.0146373,10.1259623 C21.8914367,10.0438285 21.7466809,10 21.5986122,10 L17,10 L17,4.47708173 C17,4.06286817 16.6642136,3.72708173 16.25,3.72708173 C15.9992351,3.72708173 15.7650616,3.85240758 15.6259623,4.06105658 L9.7773501,12.8339749 C9.54758575,13.1786214 9.64071616,13.6442734 9.98536267,13.8740377 C10.1085633,13.9561715 10.2533191,14 10.4013878,14 L15,14 L15,19.5229183 C15,19.9371318 15.3357864,20.2729183 15.75,20.2729183 C16.0007649,20.2729183 16.2349384,20.1475924 16.3740377,19.9389434 Z"
                                                                                fill="#000000"/>
																			<path
                                                                                d="M4.5,5 L9.5,5 C10.3284271,5 11,5.67157288 11,6.5 C11,7.32842712 10.3284271,8 9.5,8 L4.5,8 C3.67157288,8 3,7.32842712 3,6.5 C3,5.67157288 3.67157288,5 4.5,5 Z M4.5,17 L9.5,17 C10.3284271,17 11,17.6715729 11,18.5 C11,19.3284271 10.3284271,20 9.5,20 L4.5,20 C3.67157288,20 3,19.3284271 3,18.5 C3,17.6715729 3.67157288,17 4.5,17 Z M2.5,11 L6.5,11 C7.32842712,11 8,11.6715729 8,12.5 C8,13.3284271 7.32842712,14 6.5,14 L2.5,14 C1.67157288,14 1,13.3284271 1,12.5 C1,11.6715729 1.67157288,11 2.5,11 Z"
                                                                                fill="#000000" opacity="0.3"/>
																		</g>
																	</svg>
                                                                    <!--end::Svg Icon-->
																</span>
                                            </div>
                                            <div class="wizard-label">
                                                <h3 class="wizard-title">Detaylı Kitap Bilgileri</h3>
                                                <div class="wizard-desc">4. Adım</div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end::Wizard Step 3 Nav-->
                                </div>
                            </div>
                            <!--end: Wizard Nav-->
                            <!--begin: Wizard Body-->
                            <div class="wizard-body py-8 px-8 py-lg-20 px-lg-10">
                                <!--begin: Wizard Form-->
                                <div class="row">
                                    <div class="offset-xxl-2 col-xxl-8">
                                        <form class="form" id="kt_form" enctype="multipart/form-data" method="post"
                                              action="{{ route('add-book') }}">
                                        @csrf
                                        <!--begin: Wizard Step 1-->
                                            <div class="pb-5" data-wizard-type="step-content"
                                                 data-wizard-state="current">
                                                <h4 class="mb-10 font-weight-bold text-dark">Kitap Bilgilerini
                                                    Giriniz</h4>

                                                <div class="form-group">
                                                    <label class="">Kitap kapak fotoğrafı</label>
                                                    <div class="">
                                                        <div class="image-input image-input-outline"
                                                             id="kt_contacts_edit_avatar"
                                                             style="background-image: url({{ asset('/media/users/blank.png)')}} ">
                                                            <div class="image-input-wrapper"
                                                                 style="background-image: url({{asset('media/books/bg-book.png)')}}"></div>
                                                            <label
                                                                class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow"
                                                                data-action="change" data-toggle="tooltip" title=""
                                                                data-original-title="Fotoğraf Yükle">
                                                                <i class="fa fa-pen icon-sm text-muted"></i>
                                                                <input type="file" name="book_image"
                                                                       accept=".png, .jpg, .jpeg"/>
                                                                <input type="hidden" name="book_image"/>
                                                            </label>
                                                            <span
                                                                class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow"
                                                                data-action="cancel" data-toggle="tooltip"
                                                                title="Cancel avatar">
																	<i class="ki ki-bold-close icon-xs text-muted"></i>
																</span>
                                                            <span
                                                                class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow"
                                                                data-action="remove" data-toggle="tooltip"
                                                                title="Remove avatar">
																	<i class="ki ki-bold-close icon-xs text-muted"></i>
																</span>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!--begin::Input-->
                                                <div class="form-group">
                                                    <label>Kitap Adı</label>
                                                    <input type="text"
                                                           class="form-control form-control-solid form-control-lg"
                                                           name="book_name" placeholder="Kitap adı" value="{{ old('book_name') }}" autofocus/>
                                                    <span class="form-text text-muted">Eklemek istediğiniz kitabın adını giriniz.</span>
                                                </div>
                                                <!--end::Input-->

                                                <!--begin::Input-->
                                                <div class="form-group">
                                                    <label>Kitap Yazarı</label>
                                                    <input type="text"
                                                           class="form-control form-control-solid form-control-lg"
                                                           name="author_name" placeholder="Kitap yazarı" value="{{ old('author_name') }}"/>
                                                    <span class="form-text text-muted">Eklemek istediğiniz kitabın yazar adını giriniz.</span>
                                                </div>
                                                <!--end::Input-->
                                            </div>
                                            <!--end: Wizard Step 1-->

                                            <!--begin: Wizard Step 2-->
                                            <div class="pb-5" data-wizard-type="step-content">
                                                <h4 class="mb-10 font-weight-bold text-dark">Kitap Açıklaması</h4>
                                                <!--begin::Input-->
                                                <div class="form-group">
                                                    <textarea name="book_description" id="kt-ckeditor-1" rows="30">Kitap açıklaması giriniz... <br>{{ old('book_description') }}</textarea>
                                                    <span
                                                        class="form-text text-muted">Açıklama olarak basın bülteni açıklaması kullanmayı tercih ediniz.</span>
                                                </div>
                                                <!--end::Input-->
                                            </div>
                                            <!--end: Wizard Step 2-->

                                            <!--begin: Wizard Step 3-->
                                            <div class="pb-5" data-wizard-type="step-content">
                                                <h4 class="mb-10 font-weight-bold text-dark">Yayınevi Bilgilerini
                                                    Giriniz</h4>
                                                <!--begin::Input-->
                                                <div class="form-group">
                                                    <label>Yayınevi</label>
                                                    <input type="text"
                                                           class="form-control form-control-solid form-control-lg"
                                                           name="publisher" placeholder="Yayınevi adı"
                                                           value="{{ old('publisher') }}"/>
                                                    <span
                                                        class="form-text text-muted">Kitap yayınevi adını giriniz</span>
                                                </div>
                                                <!--end::Input-->
                                            </div>
                                            <!--end: Wizard Step 3-->

                                            <!--begin: Wizard Step 4-->
                                            <div class="pb-5" data-wizard-type="step-content">
                                                <h4 class="mb-10 font-weight-bold text-dark">Detaylı Kitap Bilgilerini
                                                    Giriniz</h4>
                                                <!--begin::Select-->
                                                <div class="form-group">
                                                    <label>Kitap Kategorisi</label>
                                                    <select name="category_id"
                                                            class="form-control form-control-solid form-control-lg">
                                                        <option value="">Seçiniz</option>
                                                        @foreach($allCategory as $cat)
                                                            <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <!--end::Select-->

                                                <div class="form-group">
                                                    <label>Kitap ISBN Numarası</label>
                                                    <div class="input-group">
                                                        <input type="text" class="form-control form-control-solid form-control-lg"
                                                               name="isbn_number" id="isbn_field" placeholder="Kitap ISBN Numarası"
                                                               value="{{ old('isbn_number') }}"/>
                                                        <div class="input-group-append">
                                                            <button class="btn btn-secondary" type="button" onclick="createISBN()">Oluştur!</button>
                                                        </div>
                                                    </div>
                                                    <span class="form-text text-muted">Varsa kitap ISBN numarasını giriniz</span>

                                                </div>

                                                <div class="form-group">
                                                    <label>Kitap İlk Baskı Yılı</label>
                                                    <div class="input-group">
                                                        <input class="date-own form-control form-control-solid form-control-lg" name="first_edition_year" type="text">
                                                    </div>
                                                    <span class="form-text text-muted">Kitabın ilk baskı yılını seçiniz</span>

                                                </div>

                                                <!--begin::Select-->
                                                <div class="form-group">
                                                    <label>Kitap Sayfa Sayısı</label>
                                                    <input type="text"
                                                           class="form-control form-control-solid form-control-lg"
                                                           name="page_number" placeholder="Kitap Sayfa Sayısı" value="{{ old('page_number') }}"
                                                           min="1" max="99999" maxlength="5"/>
                                                    <span
                                                        class="form-text text-muted">Kitap sayfa sayısını giriniz</span>
                                                </div>
                                                <!--end::Select-->
                                            </div>
                                            <!--end: Wizard Step 4-->

                                            <!--begin: Wizard Actions-->
                                            <div class="d-flex justify-content-between border-top mt-5 pt-10">
                                                <div class="mr-2">
                                                    <button type="button"
                                                            class="btn btn-light-primary font-weight-bold text-uppercase px-9 py-4"
                                                            data-wizard-type="action-prev">Önceki
                                                    </button>
                                                </div>
                                                <div>
                                                    <button type="submit"
                                                            class="btn btn-success font-weight-bold text-uppercase px-9 py-4"
                                                            data-wizard-type="action-submit">Kaydet
                                                    </button>
                                                    <button type="button"
                                                            class="btn btn-primary font-weight-bold text-uppercase px-9 py-4"
                                                            data-wizard-type="action-next">Sonraki
                                                    </button>
                                                </div>
                                            </div>
                                            <!--end: Wizard Actions-->
                                        </form>
                                    </div>
                                    <!--end: Wizard-->
                                </div>
                                <!--end: Wizard Form-->
                            </div>
                            <!--end: Wizard Body-->
                        </div>
                        <!--end: Wizard-->
                    </div>
                </div>
            </div>
        </div>
    </div>



@endsection

{{-- Scripts Section --}}
@section('scripts')
    <script src="{{ asset('js/pages/widgets.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/pages/custom/wizard/wizard-2.js?v=7.0.5')}} "></script>
    <script src="{{ asset('js/pages/custom/contacts/edit-contact.js') }}"></script>

    <script src="{{ asset('plugins/custom/ckeditor/ckeditor-classic.bundle.js?v=7.0.5') }}"></script>
    <script src="{{ asset('js/pages/crud/forms/editors/ckeditor-classic.js?v=7.0.5') }}"></script>


    <script>
        function getRandom(length) {
            return Math.floor(Math.pow(10, length-1) + Math.random() * 9 * Math.pow(10, length-1));
        }

        function createISBN(){
            $newISBN = $("#isbn_field").val(getRandom(13));
            console.log($newISBN);
        }

        $('.date-own').datepicker({
            minViewMode: 2,
            format: 'yyyy'
        });

    </script>

@endsection
