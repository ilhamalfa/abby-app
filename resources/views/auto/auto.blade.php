@extends('layout.index')

@section('content')

{{-- BANNER --}}
<div id="carouselExample" class="carousel slide">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="{{ asset('storage/' . $banner->image) }}" class="d-block w-100" alt="#{{ $banner->name }}">
        </div>
    </div>
    {{-- END BANNER --}}

    <div class="separator"></div>

    {{-- CANVAS SERVICE --}}
    <section>
    <div class="service" id="auto-detailing">
        {{-- FIRST CANVAS SERVICE --}}
        <div class="canvas-service" id="autodetailing">
            <span class="service-text">
                {{ $service1->title }} <br>
                {{ $service1->text }}
            </span>
            <img src="" alt="">
        </div>
        {{-- END FIRST CANVAS SERVICE --}}
        <div class="separator"></div>

        {{-- SECOND CANVAS SERVICE --}}
        <div class="canvas-service" id="carwash">
            <span class="service-text">
                {{ $service2->title }} <br>
                {{ $service2->text }}
            </span>
            <img src="" alt="">
        </div>
        {{-- END SECOND CANVAS SERVICE --}}
    </div>
</section>
    {{-- END CANVAS SERVICE --}}

    <div class="separator"></div>

    {{-- HIHGLIGHT --}}
    <div class="service-highlight">
        <div class="title-frame">
            <span class="title" id="highlight-t-caraudio">HIGHLIGHT :</span>
        </div>
        @foreach ($highlights as $highlight)
            <div class="canvas-service-highlight">
                <img src="{{ asset('storage/' . $highlight->image) }}" alt="" class="img-fluid">
            </div>
        @endforeach
    </div>
    {{-- END HIGHLIGHT --}}

    <div class="separator"></div>

    {{-- BRANDS PARTNER --}}
    <div class="brands-partner">
        <div class="title-frame">
            <span class="title" id="brands-t-autodetailing">BRANDS PARTNER :</span>
        </div>
        <div class="canvas-brands" id="autodetailing-brands">
            @foreach ($brands as $brand)
                <img src="{{ asset('storage/' . $brand->image) }}" alt="" class=" d-block brands-img">
            @endforeach
        </div>
    </div>
    {{-- END OF BRANDS PARTNER --}}

@endsection