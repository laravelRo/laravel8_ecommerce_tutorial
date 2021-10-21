@extends('front.template')

@section('meta_title', $section->meta_title ? $section->meta_title : 'Sectiunile R-Shop')
@section('meta_description', $section->meta_description ? $section->meta_description : 'Categoy list for section')
@section('meta_keywords',
    $section->meta_keywords
    ? $section->meta_keywords
    : 'Produsele R-Shop, filtrare pret produse,
    filtrare culori, filtrare marimi, xl',)

@section('content')


    <!-- Page Header Start -->
    <div class="container-fluid bg-secondary mb-5">
        <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 300px">
            <h1 class="font-weight-semi-bold text-uppercase mb-3 mt-2">{{ $section->name }}</h1>
            <div class="my-2">
                <img src="{{ $section->photoUrl() }}" alt="" style="max-width: 100%;">
            </div>
            <div class="text-center my-2 w-75" style="font-size: 1.2em; font-weight:bold; letter-spacing:1px;">
                {{ $section->description }}
            </div>
            <div class="d-inline-flex mb-2">
                <p class="m-0"><a href="{{ route('home') }}">Home</a></p>
                <p class="m-0 px-2">-</p>
                <p class="m-0">{{ $section->name }}</p>
            </div>
        </div>
    </div>
    <!-- Page Header End -->

    <div class="container-fluid pt-5">
        <div class="row px-xl-5">
            <div class="col-lg-3 col-md-12">
                @include('front.filters.price')

                @include('front.filters.colors')

                @include('front.filters.size')

            </div>

            <div class="col-lg-9 col-md-12">
                <div class="row pb-3">
                    <div class="col-12 pb-1">
                        @include('front.filters.search-product')
                    </div>

                    @include('front.partials.products-list')
                    <div class="col-12 pb-1">
                        <nav aria-label="Page navigation">
                            <ul class="pagination justify-content-center mb-3">
                                <li class="page-item disabled">
                                    <a class="page-link" href="#" aria-label="Previous">
                                        <span aria-hidden="true">&laquo;</span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                </li>
                                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item">
                                    <a class="page-link" href="#" aria-label="Next">
                                        <span aria-hidden="true">&raquo;</span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>

        </div>
    </div>

@endsection
