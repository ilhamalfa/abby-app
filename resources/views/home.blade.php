@extends('layout.index')

@section('content')

{{-- CAROUSEL BANNER --}}
<section id="carousel">
<div id="carousel-banner" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active" data-bs-interval="4000">
      <img src="img/12.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item" data-bs-interval="4000">
      <img src="img/13.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item" data-bs-interval="4000">
      <img src="img/14.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
</section>
{{-- END CAROUSEL BANNER --}}

<div class="separator"></div>
 
{{-- CANVAS PROVIDE --}}
<section>
<div class="home-provide">
  <div class="title-frame">
    <span class="title" id="provide">WE PROVIDES :</span>
  </div>
  <div class="canvas-image" id="provide">
    <img src="img/12.jpg" class="rounded mx-auto d-block img-provide" alt="CAR AUDIO">
    <img src="img/13.jpg" class="rounded mx-auto d-block img-provide" alt="SOUNDPROOFING">
    <img src="img/14.jpg" class="rounded mx-auto d-block img-provide" alt="AUTO DETAILING">
    <img src="img/12.jpg" class="rounded mx-auto d-block img-provide" alt="PREMIUM CARWASH">
  </div>
</div>
</section>
{{-- END OF PROVIDE --}}

<div class="separator"></div>


{{-- VALUE --}}
<section>
<div class="value-home">
  
  <div class="title-frame">
    <span class="title" id="value">PREMIUM CAR AUDIO & AUTO DETAILING WORKSHOP</span>
  </div>

  <div class="home-value mx-auto">

    {{-- FIRST CANVAS - VALUE --}}
    <div class="canvas-value" id="first" >

      <div class="card mb-3" id="img-val" style="max-width: 540px; background: #222222; color: white; border: none;">
        <div class="row g-0">
          <div class="col-md-4">
            <img src="img/professional-value.png" class="img-fluid rounded-start" alt="#professionalspecialist">
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h6 class="value-title">PROFESSIONAL CAR AUDIO AND DETAILING SPECIALIST</h6>
              <p class="value-text">Kami memiliki pekerja yang sudah professional di bidang
                car audio dan auto detailing.</p>
            </div>
          </div>
        </div>
      </div>

      <div class="card mb-3" id="img-val" style="max-width: 540px; background: #222222; color: white; border: none;">
        <div class="row g-0">
          <div class="col-md-4">
            <img src="img/cafeteria-value.png" class="img-fluid rounded-start" alt="#professionalspecialist">
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h6 class="value-title">LOUNGE & CAFETERIA</h6>
              <p class="value-text">Tersedia lounge & cafeteria di Premio Workshop untuk tempat
                menunggu dan bersantai.</p>
            </div>
          </div>
        </div>
      </div>

      
    </div>

    {{-- SECOND CANVAS - VALUE --}}
    <div class="canvas-value" id="second">
      <div class="card mb-3" id="img-val" style="max-width: 540px; background: #222222; color: white; border: none;">
        <div class="row g-0">
          <div class="col-md-4">
            <img src="img/detail-value.png" class="img-fluid rounded-start" alt="#professionalspecialist">
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h6 class="value-title">ATTENTION TO DETAIL</h6>
              <p class="value-text">Kami memastikan tidak ada detail yang terlewat untuk
                mendapatkan hasil yang maksimal.</p>
            </div>
          </div>
        </div>
      </div>

      <div class="card mb-3" id="img-val" style="max-width: 540px; background: #222222; color: white; border: none">
        <div class="row g-0">
          <div class="col-md-4">
            <img src="img/showroom-value.png" class="img-fluid rounded-start" alt="#professionalspecialist">
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h6 class="value-title">PRODUCTS DEMO & SHOWROOM</h6>
              <p class="value-text">Di workshop kami terdapat demo dan showroom untuk
                produk-produk yang kami gunakan.</p>
            </div>
          </div>
        </div>
      </div>


    </div>

    {{-- THIRD CANVAS - VALUE --}}

    <div class="canvas-value" id="third">

      <div class="card mb-3" id="img-val" style="max-width: 540px; background: #222222; color: white; border: none;">
        <div class="row g-0">
          <div class="col-md-4">
            <img src="img/tools-value.png" class="img-fluid rounded-start" alt="#professionalspecialist">
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h6 class="value-title">MODERN TOOLS & HI-END EQUIPMENT</h6>
              <p class="value-text">Kami menggunakan peralatan yang lengkap dan
                tentunya dengan teknologi yang terbaru.</p>
            </div>
          </div>
        </div>
      </div>

      <div class="card mb-3" id="img-val" style="max-width: 540px; background: #222222; color: white; border: none;">
        <div class="row g-0">
          <div class="col-md-4">
            <img src="img/premium-value.png" class="img-fluid rounded-start" alt="#professionalspecialist">
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h6 class="value-title">PREMIUM CAR AUDIO & CAR CARE PRODUCTS</h6>
              <p class="value-text">Kami menggunakan produk dari beberapa brand ternama
                dan yang sudah menjadi rekomendasi baik di car audio maupun
                di auto detailing.</p>
            </div>
          </div>
        </div>
      </div>


    </div>

  </div>
</div>
</section>
{{-- END OF VALUE --}}
<div class="separator"></div> 

{{-- HIGHLIGHT --}}
<section>
<div class="home-highlight">
  <div class="title-frame">
    <span class="title" id="highlight-t">HIGHLIGHT</span>
  </div>
  <div class="canvas-image" id="highlight-home">
    <img src="img/12.jpg" class="img-fluid" alt="#workshop">
  </div>
  <div class="canvas-image" id="highlight-home">
  <img src="img/13.jpg" class="img-fluid" alt="#lounge">
  </div>
  <div class="canvas-image" id="highlight-home">
    <img src="img/14.jpg" class="img-fluid" alt="#showroom">
  </div>
</div>
</section>

{{-- END HIGHLIGHT --}}

<div class="separator"></div>
@endsection
