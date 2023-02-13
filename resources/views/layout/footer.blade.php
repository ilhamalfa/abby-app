<footer>
    <div class="canvas-footer">

    
    <div class="address">
      <div class="footer-title" id="address-t">
      <span class="title">
        ADDRESS
      </span>
    </div>
      <p class="address-content">
        Jl. Green Ville Blok AX No.40,<br>
        RT.10/RW.14, Duri Kepa, Kec. Kb. Jeruk,<br>
        Kota Jakarta Barat <br>
        Daerah Khusus Ibukota Jakarta</p>
        {{-- {{ $address->text }} --}}
    </div>

    <div class="social-media">
      <span class="title" id="socmed-t">
        SOCIAL MEDIA
      </span>
      <div class="socmed-icon">
        {{-- <a href="" class="icon-socmed">
          <img src="img/ig-icon.png" class="img-socmed" id="ig" alt="#Instagram">
        </a>
        <a href="" class="icon-socmed">
          <img src="img/fb-icon.png" class="img-socmed" id="fb" alt="#Facebook">
        </a>
        <a href="" class="icon-socmed">
          <img src="img/yt-icon.png" class="img-socmed" id="yt" alt="#YouTube">
        </a> --}}
        @foreach ($socmeds as $socmed)
          <a href="{{ $socmed->link }}" class="icon-socmed">
            <img src="img/{{ $socmed->category }}.png"  class="img-socmed" id="fb" alt="#Facebook">
          </a>
        @endforeach
      </div>
    </div>

    <div class="contact">
      <div class="footer-title" id="contact-t">
      <span class="title">CAR AUDIO</span>
    </div>
      <span class="contact-text">Tel: +{{ $contactcar->phone }} ({{ $contactcar->text }})</span>
      <div class="footer-title" id="contact-t">
      <span class="title">AUTO DETAILING</span>
    </div>
      <span class="contact-text">Tel: +{{ $contactdetailing->phone }} ({{ $contactdetailing->text }})</span>
    </div>

  </div>

  <div class="title-frame">
    <span class="title" id="copyright">@Copyright PREMIO Indonesia 2023</span>
  </div>
  </footer>