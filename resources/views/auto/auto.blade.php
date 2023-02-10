@extends('layout.index')

@section('content')

{{-- BANNER --}}
<div id="carouselExample" class="carousel slide">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="img/13.jpg" class="d-block w-100" alt="#bannerautodetailing">
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
                AUTO DETAILING <br>
                - Coating <br>
                - Non-Coating <br>
                - A la Carte
            </span>
            <img src="" alt="">
        </div>
        {{-- END FIRST CANVAS SERVICE --}}
        <div class="separator"></div>

        {{-- SECOND CANVAS SERVICE --}}
        <div class="canvas-service" id="carwash">
            <span class="service-text">
                PREMIUM CAR WASH <br>
                Wash & Wax
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
            <span class="title" id="brands-t-autodetailing">BRANDS PARTNER :</span>
          </div>
        <div class="canvas-brands" id="autodetailing-brands">
            <img src="img/logo-flux-auto.png" alt="" class=" d-block brands-img">
            <img src="img/logo-flux-auto.png" alt="" class=" d-block brands-img">
            <img src="img/logo-flux-auto.png" alt="" class=" d-block brands-img">
            <img src="img/logo-flux-auto.png" alt="" class=" d-block brands-img">
            <img src="img/logo-flux-auto.png" alt="" class=" d-block brands-img">
            <img src="img/logo-flux-auto.png" alt="" class=" d-block brands-img">
            <img src="img/logo-flux-auto.png" alt="" class=" d-block brands-img">
            <img src="img/logo-flux-auto.png" alt="" class=" d-block brands-img">
        </div>
    </div>
    {{-- END OF BRANDS PARTNER --}}

@endsection