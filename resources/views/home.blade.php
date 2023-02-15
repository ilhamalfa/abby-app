@extends('layout.index')

@section('content')

{{-- CAROUSEL BANNER --}}
<section id="carousel">
<div id="carousel-banner" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active" data-bs-interval="4000">
      <img src="{{ asset('storage/' . $carousels[0]->image) }}" class="d-block w-100 carousel" alt="{{ $carousels[0]->name }}">
    </div>
    @foreach ($carousels->skip(1) as $carousel)
    <div class="carousel-item" data-bs-interval="4000">
      <img src="{{ asset('storage/' . $carousel->image) }}" class="d-block w-100 carousel" alt="{{ $carousel->name }}">
    </div>
    @endforeach
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carousel-banner" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carousel-banner" data-bs-slide="next">
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
    @foreach ($services as $service)
      <img src="{{ asset('storage/' . $service->image) }}" class="rounded mx-auto d-block img-provide" alt="...">
    @endforeach
  </div>
</div>
</section>
{{-- END OF PROVIDE --}}

<div class="separator"></div>


{{-- VALUE --}}
<section>
  <div class="value-home">
    
    <div class="title-frame mb-3">
      <span class="title" id="value">PREMIUM CAR AUDIO & AUTO DETAILING WORKSHOP</span>
    </div>

    <div class="home-value mx-auto">

      {{-- FIRST CANVAS - VALUE --}}
      <div class="canvas-value" id="first" >

        <div class="card mb-3" id="img-val" style="max-width: 540px; background: #222222; color: white; border: none;">
          <div class="row g-0">
            <div class="col-md-4">
              <img src="{{ asset('storage/' . $values[0]->image) }}" class="img-fluid rounded-start" alt="...">
            </div>
            <div class="col-md-8">
              <div class="card-body">
                <h6 class="value-title">{{ $values[0]->title }}</h6>
                <p class="value-text">{{ $values[0]->text }}</p>
              </div>
            </div>
          </div>
        </div>

        <div class="card mb-3" id="img-val" style="max-width: 540px; background: #222222; color: white; border: none;">
          <div class="row g-0">
            <div class="col-md-4">
              <img src="{{ asset('storage/' . $values[1]->image) }}" class="img-fluid rounded-start" alt="...">
            </div>
            <div class="col-md-8">
              <div class="card-body">
                <h6 class="value-title">{{ $values[1]->title }}</h6>
                <p class="value-text">{{ $values[1]->text }}</p>
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
              <img src="{{ asset('storage/' . $values[2]->image) }}" class="img-fluid rounded-start" alt="...">
            </div>
            <div class="col-md-8">
              <div class="card-body">
                <h6 class="value-title">{{ $values[2]->title }}</h6>
                <p class="value-text">{{ $values[2]->text }}</p>
              </div>
            </div>
          </div>
        </div>

        <div class="card mb-3" id="img-val" style="max-width: 540px; background: #222222; color: white; border: none;">
          <div class="row g-0">
            <div class="col-md-4">
              <img src="{{ asset('storage/' . $values[3]->image) }}" class="img-fluid rounded-start" alt="...">
            </div>
            <div class="col-md-8">
              <div class="card-body">
                <h6 class="value-title">{{ $values[3]->title }}</h6>
                <p class="value-text">{{ $values[3]->text }}</p>
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
              <img src="{{ asset('storage/' . $values[4]->image) }}" class="img-fluid rounded-start" alt="...">
            </div>
            <div class="col-md-8">
              <div class="card-body">
                <h6 class="value-title">{{ $values[4]->title }}</h6>
                <p class="value-text">{{ $values[4]->text }}</p>
              </div>
            </div>
          </div>
        </div>

        <div class="card mb-3" id="img-val" style="max-width: 540px; background: #222222; color: white; border: none;">
          <div class="row g-0">
            <div class="col-md-4">
              <img src="{{ asset('storage/' . $values[5]->image) }}" class="img-fluid rounded-start" alt="...">
            </div>
            <div class="col-md-8">
              <div class="card-body">
                <h6 class="value-title">{{ $values[5]->title }}</h6>
                <p class="value-text">{{ $values[5]->text }}</p>
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
  @foreach ($highlights as $highlight)
  <div class="canvas-image" id="highlight-home">
    <img src="{{ asset('storage/' . $highlight->image) }}" class="img-fluid" alt="#workshop">
  </div>
  @endforeach
  {{-- <div class="canvas-image" id="highlight-home">
    <img src="img/12.jpg" class="img-fluid" alt="#workshop">
  </div>
  <div class="canvas-image" id="highlight-home">
  <img src="img/13.jpg" class="img-fluid" alt="#lounge">
  </div>
  <div class="canvas-image" id="highlight-home">
    <img src="img/14.jpg" class="img-fluid" alt="#showroom">
  </div> --}}
</div>
</section>

{{-- END HIGHLIGHT --}}

<div class="separator"></div>
@endsection
