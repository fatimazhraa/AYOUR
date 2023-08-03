<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Font Awesome Library -->
  <link rel="stylesheet" href="{{ asset('css/lib/all.min.css') }}">
  <!-- Bootstrap 5 -->
  <link rel="stylesheet" href="{{ asset('css/lib/bootstrap.min.css') }}">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
  <!-- Main CSS File -->
  <link rel="stylesheet" href="{{asset('css/header.css')}}">
  <!-- Google Fonts - Inter -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;700;900&display=swap" rel="stylesheet">
</head>
<body>
  <div class="headers">
    <div class="logo-container">
      <a href="{{ route('home') }}">
        <img src={{asset('IMG/img-removebg-preview.png')}} alt="" >
      </a>
    </div>
    <div class="header-content">
      <div class="top-section">
        <ul class="pages">
          <li><a href="{{ route('blog') }}">Blog</a></li>
          <li><a href="{{ route('condition') }}">Conditions</a></li>
          <li><a href="{{ route('Hplus') }}">H plus</a></li>
          <li><a href="{{ route('Apropos') }}">À propos</a></li>
          <li><a href="{{ route('FAQ') }}">FAQ</a></li>
        </ul>
        <div class="info">
          <span class="phone">
            <i class="fas fa-phone"></i>
            0528 21 18 29
          </span>
          <ul class="socials">
            <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
            <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
            <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
            <li><a href="#"><i class="fa-brands fa-youtube"></i></a></li>
          </ul>
        </div>
      </div>
      <div class="bottom-section">
        <ul class="pages">
          <li><a href="{{ route('home') }}">Acceuil</a></li>
          <li><a href="{{ route('service') }}">Services</a></li>
          <li class="new"><a href="#">Hébergement Web</a></li>
          <li><a href="#">Nindobuilder</a></li>
          <li><a href="#">Messagerie</a></li>
          <li><a href="#">Serveurs</a></li>
          <li><a href="#">Infogérance</a></li>
          <li><a href="#">SSL</a></li>
        </ul>
        <ul class="profile">
          <li><a href="#"><img src="{{asset('imgs/icon_client_area.svg')}}" alt=""></a></li>
          <li><a href="#"><img src="{{asset('imgs/icon_cart.svg')}}" alt=""></a></li>
        </ul>
      </div>
    </div>
    {{-- <nav>
      <a href="{{ route('home') }}">Acceuil</a>
      <a href="{{ route('service') }}">Services</a>
      <a href="{{ route('hebergement') }}">Hébergement</a>
      <a href="{{ route('VPSCloud') }}">VPS Cloud</a>
      <a href="{{ route('ServeurDedie') }}">Serveurs Dédiés</a>
      <a href="{{ route('domaine') }}">Domaine</a>
      <div class="pages-dropdown">
          <a href="#">Pages</a>
          <div class="pages-dropdown-content">
              <a href="{{ route('Apropos') }}">À propos de</a>
              <a href="{{ route('FAQ') }}">FAQ</a>
              <a href="{{ route('Hplus') }}">H plus</a>
              <a href="{{ route('blog') }}">Blog</a>
              <a href="{{ route('condition') }}">Conditions</a>
          </div>
      </div>
      <a href="{{ route('contact') }}">Contact</a>
      <a href="#" class="login-button">Login</a>
    </nav> --}}
  </div>

<script>
   // JavaScript to handle the dropdown menu on hover
   const pagesDropdown = document.querySelector('.pages-dropdown');
        const pagesDropdownContent = document.querySelector('.pages-dropdown-content');

        pagesDropdown.addEventListener('mouseover', () => {
            pagesDropdownContent.style.display = 'block';
        });

        pagesDropdown.addEventListener('mouseout', () => {
            pagesDropdownContent.style.display = 'none';
        });
</script>
</body>
</html>
