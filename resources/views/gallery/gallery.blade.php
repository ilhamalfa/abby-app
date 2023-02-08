<!doctype html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PREMIO</title>
    <link rel="stylesheet" href="css/css.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>

  <body>

    

    {{-- NAVBAR --}}

    @include('layout.navbar')
    
    {{-- END NAVBAR --}}

    <section>
      <div class="navbar-separator">
      </div>
    </section>

    <div id="gallerybanner" class="carousel slide">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="img/14.jpg" class="d-block w-100" alt="#bannergallery">
        </div>
      </div>
  
      <div class="separator"></div>
  
      <div class="gallery-category">
        <div class="gallery-canvas">
          <ul class="gallery-ul">
            <li class="gallery-li"><a href="/gallery-caraudio">CAR AUDIO</a></li>
            <li class="gallery-li"><a href="/gallery-showroom">SHOWROOM & WORKSHOP</a></li>
            <li class="gallery-li"><a href="/gallery-autodetailing">AUTO DETAILING</a></li>
          </ul>
        </div>
      </div>
  
      <div class="separator"></div>

    @yield('content')

    

      {{-- FOOTER --}}

      @include('layout.footer')

      {{-- END FOOTER --}}

      <script type="text/javascript">
        window.addEventListener("scroll", function() {
            var nav = document.querySelector("nav");
            nav.classList.toggle("sticky", window.scrollY > 0);
        })
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>
