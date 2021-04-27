<div class="quick-search-result">

    <h5 class="pb-3"> {{ $search }} ile ilgili</h5>

    @if($search_result_book)
        {{-- Section --}}
        <div class="font-size-sm text-primary font-weight-bolder text-uppercase mb-2">
            Kitaplar ( {{ $search_result_book->count() }} kitap bulundu )
        </div>
        <div class="mb-10">

            @foreach($search_result_book as $result)
                <a href="{{  url('books/'.$result->slug) }}">
                    <div class="d-flex align-items-center flex-grow-1 mb-2 bg-hover-gray-300 rounded pl-4 pr-4">

                        <div class="symbol symbol-30 bg-transparent flex-shrink-0">
                            <img src="{{ asset(''.$result->book_image.'') }}" alt=""/>
                        </div>
                        <div class="d-flex flex-column ml-3 mt-2 mb-2">
                            <span class="font-weight-bold text-dark text-hover-primary">
                                {{ $result->book_name }}
                            </span>
                            <span class="font-size-sm font-weight-bold text-dark-50">{{ $result->author_name }}</span>
                        </div>

                    </div>
                </a>
            @endforeach
        </div>
    @endif

        @if($search_result_author)
            {{-- Section --}}
            <div class="font-size-sm text-info font-weight-bolder text-uppercase mb-2">
                Yazarlar ( {{ $search_result_author->count() }} yazar bulundu )
            </div>
            <div class="mb-10">

                @foreach($search_result_author as $result)
                    <a href="{{  url('author/'.$result->author_name_slug) }}">
                        <div class="d-flex align-items-center flex-grow-1 mb-2 bg-hover-gray-300 rounded pl-4 pr-4">

                            <div class="symbol symbol-30 bg-transparent flex-shrink-0">
                                <img src="{{ asset('media/logos/default-user.jpg') }}" alt="image-{{ $result->author_name }}"/>
                            </div>
                            <div class="d-flex flex-column ml-3 mt-2 mb-2">
                                <span class="font-weight-bold text-dark text-hover-primary">
                                    {{ $result->author_name }}
                                </span>
                                <span class="font-size-sm font-weight-bold text-dark-50">{{ $result->author_name }}</span>
                            </div>

                        </div>
                    </a>
                @endforeach
            </div>
        @endif

</div>
