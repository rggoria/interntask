@extends('layouts.main')

@section('title')
Blog - Avvanz Global
@endsection

@section('css')

<style>
    .bg-image-2 {
        background: url({{ asset('images/resourcesSubBg1.webp') }})  no-repeat center;
        background-size: cover;
        position: relative;
        min-height: 100px;
    }

    .bg-image-2::before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(18, 71, 95, 0.8);
        z-index: 1;
    }

    .bg-image-2 .container {
        position: relative;
        z-index: 2;
    }
</style>

@endsection

@section('content')

<!-- Hero Section -->
<section class="bg-image-2">
    <div class="container padding-vertical">
        <div class="row text-white">
            <div class="col-md-7 offset-auto">
                <h1 class="fw-bolder display-5">
                    Blog
                </h1>
                <h1 class="divider-start-25"></h1>
                <p>
                    Subscribe now
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Blog Section -->
<section class="container margin-vertical">
    <div class="row g-3">
        @foreach($blogItems as $item)
        <div class="col-sm-12 col-md-6 col-lg-4 mb-4">
            <a href="{{ route('blogItem', ['keyword' => $item['keyword']]) }}" class="text-decoration-none">
                <div class="card border-radius-dmb h-100">
                    @if(!empty($item['image']))
                        <img
                            src="{{ url('/get/images/avvanz/resources/blog/blogThumbnail/' . $item['image']) }}"
                            class="card-img-top"
                            alt="{{ $item['title'] }}"
                            style="height: 200px; width: auto;"
                            loading="lazy">
                    @endif
                    <div class="card-body d-flex flex-column">
                        <p class="card-title fw-bolder fs-5 text-dmb">
                            {{ $item['title'] === 'Back Digital Transformation Brings New Opportunities For Healthcare' ? 'Digital Transformation Brings New Opportunities For Healthcare' : $item['title'] }}
                        </p>
                        <p class="card-text fw-bolder text-marigold">
                            Read More »
                        </p>
                    </div>
                    <div class="card-footer bg-transparent text-muted">
                        {{ $item['created_at'] }}
                    </div>
                </div>
            </a>
        </div>
        @endforeach
    </div>
    {{ $blogItems->links('partials.paginate') }}
</section>

@endsection