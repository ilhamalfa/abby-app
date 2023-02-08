@extends('layout.index')

@section('content')

    {{-- BANNER --}}
<div id="carouselExample" class="carousel slide">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="img/12.jpg" class="d-block w-100" alt="#bannercaraudio">
      </div>
    </div>
    {{-- END BANNER --}}

    {{-- SERVICE CANVAS --}}
    <section>
    <div class="service" id="car-audio">
        {{-- SERVICE FIRST ROW --}}
        <div class="canvas-service" id="caraudio">
            <span class="service-text">
                CAR AUDIO <br>
                Sound Quality (SQ)
            </span>
            <img src="" alt="">
        </div>
        {{-- END FIRST ROW SERVICE --}}
        <div class="separator"></div>

        {{-- SERVICE SECOND ROW --}}
        <div class="canvas-service" id="soundproofing">
            <span class="service-text">
                SOUNDPROOFING <br>
                Installation
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
        <div class="canvas-service-highlight">
            <img src="img/12.jpg" alt="" class="img-fluid">
        </div>
        <div class="canvas-service-highlight">
            <img src="img/12.jpg" alt="" class="img-fluid">
        </div>
        <div class="canvas-service-highlight">
            <img src="img/12.jpg" alt="" class="img-fluid">
        </div>
    </div>
    {{-- END HIGHLIGHT --}}

    <div class="separator"></div>

    {{-- BRANDS PARTNER --}}
    <div class="brands-partner">
        <div class="title-frame">
            <span class="title" id="brands-t-caraudio">BRANDS PARTNER :</span>
          </div>
        <div class="canvas-brands" id="caraudio-brands">
            <img src="" alt="" class="">
            <img src="" alt="" class="">
            <img src="" alt="" class="">
            <img src="" alt="" class="">
            <img src="" alt="" class="">
            <img src="" alt="" class="">
            <img src="" alt="" class="">
            <img src="" alt="" class="">
        </div>
    </div>
    {{-- END OF BRANDS PARTNER --}}

@endsection
