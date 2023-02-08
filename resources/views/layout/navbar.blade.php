<link rel="stylesheet" href="css/navbar.css">

<script type="text/javascript">
    window.addEventListener("scroll", function() {
        var nav = document.querySelector("nav");
        nav.classList.toggle("sticky", window.scrollY > 0);
    })
</script>

<nav>
    
        <input type="checkbox" id="check">
            <label for="check" class="checkbtn menu-toggle">
                <span></span>
                <span></span>
                <span></span>
            </label>


    <div class="logo">
        <a href="/"><img src="img/logopremio.png" alt="#LOGO" class="logo-img"></a>
    </div>

    <ul class="menu-nav">
        <li class="li-nav"><a class="menu" href="/caraudio">CAR AUDIO</a></li>
        <li class="li-nav"><a class="menu" href="/autodetailing">AUTO DETAILING</a></li>
        <li class="li-nav"><a class="menu {{-- linkActive --}}" href="/gallery">GALLERY</a></li>
        <li class="li-nav"><a class="menu {{-- linkActive --}}" href="/profile">PROFILE</a></li>
    </ul>

    
    </nav>