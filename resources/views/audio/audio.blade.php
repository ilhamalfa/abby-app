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

    {{-- SERVICE CANVAS --}}
    <section>
    <div class="service" id="car-audio">
        {{-- SERVICE FIRST ROW --}}
        <div class="canvas-service" id="caraudio">
            <span class="service-text">
                {{ $service1->title }} <br>
                {{ $service1->text }}
            </span>
            <img src="" alt="">
            {{-- <img src="{{ asset('storage/' . $service1->image) }}" alt=""> --}}
        </div>
        {{-- END FIRST ROW SERVICE --}}
        <div class="separator"></div>

        {{-- SERVICE SECOND ROW --}}
        <div class="canvas-service" id="soundproofing">
            <span class="service-text">
                {{ $service2->title }} <br>
                {{ $service2->text }}
            </span>
            <img src="" alt="">
        </div>
        {{-- END SECOND ROW SERVICE --}}
    </div>
</section>
    {{-- END SERVICE CANVAS --}}
    
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
            <span class="title" id="brands-t-caraudio">BRANDS PARTNER :</span>
        </div>
        <div class="canvas-brands" id="caraudio-brands">
            @foreach ($brands as $brand)
                <img src="{{ asset('storage/' . $brand->image) }}" alt="" class=" d-block brands-img">
            @endforeach
        </div>
    </div>
    {{-- END OF BRANDS PARTNER --}}

@endsection