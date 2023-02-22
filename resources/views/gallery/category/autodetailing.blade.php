@extends('gallery.gallery')

@section('content')

<section>
  <div class="gallery-image mx-auto">
    <div class="gallery-canvas">
    
      @foreach ($galleries as $gallery)
      <div class="gallery-item">
        <img src="{{ asset('storage/' . $gallery->image) }}" class="rounded mx-auto d-block gal-img" alt="...">
        <div class="gal-cat-title">
          <span>AUTO DETAILING</span>
        </div>
      </div>
      @endforeach
      {{-- <div class="gallery-item">
        <img src="img/12.jpg" class="rounded mx-auto d-block gal-img" alt="...">
        <div class="gal-cat-title">
          <span>AUTO DETAILING</span>
        </div>
      </div>
      
      <div class="gallery-item">
        <img src="img/13.jpg" class="rounded mx-auto d-block gal-img" alt="...">
        <div class="gal-cat-title">
          <span>AUTO DETAILING</span>
        </div>
      </div>
    
      <div class="gallery-item">
        <img src="img/14.jpg" class="rounded mx-auto d-block gal-img" alt="...">
        <div class="gal-cat-title">
          <span>AUTO DETAILING</span>
        </div>
      </div>
    
      <div class="gallery-item">
        <img src="img/12.jpg" class="rounded mx-auto d-block gal-img" alt="...">
        <div class="gal-cat-title">
          <span>AUTO DETAILING</span>
        </div>
      </div>
    
      <div class="gallery-item">
        <img src="img/12.jpg" class="rounded mx-auto d-block gal-img" alt="...">
        <div class="gal-cat-title">
          <span>AUTO DETAILING</span>
        </div>
      </div>

      <div class="gallery-item">
        <img src="img/12.jpg" class="rounded mx-auto d-block gal-img" alt="...">
        <div class="gal-cat-title">
          <span>AUTO DETAILING</span>
        </div>
      </div>

      <div class="gallery-item">
        <img src="img/12.jpg" class="rounded mx-auto d-block gal-img" alt="...">
        <div class="gal-cat-title">
          <span>AUTO DETAILING</span>
        </div>
      </div> --}}
    
    </div>
  </div>

</section>

@endsection
