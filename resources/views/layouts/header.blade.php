<!DOCTYPE html>
<html lang="fr">
<head>
  <!-- Font Awesome Library -->
  <link rel="stylesheet" href="{{ asset('css/lib/all.min.css') }}">
  <!-- Main CSS File -->
  <link rel="stylesheet" href="{{asset('css/header.css')}}">
  <!-- Google Fonts - Inter -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;700;900&display=swap" rel="stylesheet">
</head>
<body>
  <div class="header">
    <div class="logo-container">
      <a href="{{ route('home') }}">
        <img src='{{asset('IMG/img-removebg-preview.png')}}' alt="">
      </a>
    </div>
    <div class="header-content">
      <div class="top-section">
        <ul class="top-section-pages">
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
        <ul class="bottom-section-pages">
          <li>
            <a href="#">Vous êtes</a>
            <div class="submenu-dropdown">
              <ul class="submenu">
                <li class="menu-item">
                  <a href="#">Entrepreneur</a>
                  <div class="item-description">
                    Pour ceux qui démarrent leur business ou pensent à le développer, ici les services
                    d&apos;hébergement web
                    réunis
                  </div>
                </li>
                <li class="menu-item">
                  <a href="#">Agence Web</a>
                  <div class="item-description">
                    Pour les agences web / de communication et entreprises indépendantes, retrouvez tout ce qu&apos;il
                    vous
                    faut ici
                  </div>
                </li>
                <li class="menu-item">
                  <a href="#">Developpeur</a>
                  <div class="item-description">
                    Tous les services d&apos;hébergement web requis concoctés spécialement pour vous; développeurs
                  </div>
                </li>
                <li class="menu-item">
                  <a href="#">Ecommerçant</a>
                  <div class="item-description">
                    Ici tous les services dont vous avez besoin pour booster votre boutique en ligne
                  </div>
                </li>
                <li class="menu-item">
                  <a href="#">Site media</a>
                  <div class="item-description">
                    Les meilleurs services d&apos;hébergement web réunis pour votre site de presse
                  </div>
                </li>
                <li class="menu-item">
                  <a href="#">Toutes nos solution</a>
                  <div class="item-description">
                    Des solutions complètes regroupant tous les services dont vous avez besoin !
                  </div>
                </li>
              </ul>
            </div>
          </li>
          <li>
            <a href="#">Nom de domaine</a>
          </li>
          <li class="new">
            <a href="#">Hébergement</a>
            <div class="submenu-dropdown">
              <ul class="submenu">
                <li class="menu-item">
                  <a href="#">Hébergement Personnel</a>
                  <div class="item-description">
                    Parfait pour les indépendants, les débutants ou encore les bloggers
                  </div>
                  <div class="price-tag">
                    <span class="price-prefix">à partir de</span>
                    <span class="price-value">299</span>
                    <span class="price-suffix">DH HT/an</span>
                  </div>
                </li>
                <li class="menu-item">
                  <a href="#">Hébergement professionnel</a>
                  <div class="item-description">
                    Idéal pour les strat-upeurs, les entrepreneurs, les développeurs web et les spécialistes du
                    e-commerce
                  </div>
                  <div class="price-tag">
                    <span class="price-prefix">à partir de</span>
                    <span class="price-value">499</span>
                    <span class="price-suffix">DH HT/an</span>
                  </div>
                </li>
                <li class="menu-item">
                  <a href="#">Hébergement cloud</a>
                  <div class="item-description">
                    Optez pour la puissance d&apos;un serveur sans les tracas techniques
                  </div>
                  <div class="price-tag">
                    <span class="price-prefix">à partir de</span>
                    <span class="price-value">399</span>
                    <span class="price-suffix">DH HT/an</span>
                  </div>
                </li>
                <li class="menu-item">
                  <a href="#">Hébergement multi-sites</a>
                  <div class="item-description">
                    Si vous gérez plusieurs sites à votre compte ou pour celui de vos clients
                  </div>
                  <div class="price-tag">
                    <span class="price-prefix">à partir de</span>
                    <span class="price-value">149</span>
                    <span class="price-suffix">DH HT/an</span>
                  </div>
                </li>
                <li class="menu-item">
                  <a href="#">Hébergement Windows</a>
                  <div class="item-description">
                    Pour les développeurs Windows, c&apos;est le meilleur niveau de performance aux sites applications
                    ASP.NET
                  </div>
                  <div class="price-tag">
                    <span class="price-prefix">à partir de</span>
                    <span class="price-value">499</span>
                    <span class="price-suffix">DH HT/an</span>
                  </div>
                </li>
                <li class="menu-item">
                  <a href="#">Tous nos hébergement web</a>
                  <div class="item-description">
                    Retrouvez ici la solution d&apos;hébergement web qui vous convient le mieux
                  </div>
                </li>
              </ul>
            </div>
          </li>
          <li>
            <a href="#">Création</a>
          </li>
          <li>
            <a href="#">Messagerie</a>
            <div class="submenu-dropdown">
              <ul class="submenu">
                <li class="menu-item">
                  <a href="#">Google Workspace</a>
                  <div class="item-description">
                    Simplifiez-vous la vie et obtenez tout ce que fournit Google, et bien plus encore </div>
                  <div class="price-tag">
                    <span class="price-prefix"></span>
                    <span class="price-value">799</span>
                    <span class="price-suffix">DH HT/an</span>
                  </div>
                </li>
                <li class="menu-item">
                  <a href="#">Microsoft 365</a>
                  <div class="item-description">
                    Votre bureau qui vous accompagne où que vous soyez
                  </div>
                  <div class="price-tag">
                    <span class="price-prefix"></span>
                    <span class="price-value">799</span>
                    <span class="price-suffix">DH HT/an</span>
                  </div>
                </li>
                <li class="menu-item">
                  <a href="#">Toutes nos solutions de messagerie</a>
                  <div class="item-description">
                    Faîtes prospérer votre business avec nos services de messagerie professionnelle class affaire </div>
                </li>
              </ul>
            </div>
          </li>
          <li>
            <a href="#">Serveurs</a>
            <div class="submenu-dropdown">
              <ul class="submenu">
                <li class="menu-item">
                  <a href="#">VPS</a>
                  <div class="item-description">
                    Contrôle et d&apos;évolutivité, tout le pouvoir est entre vos mains
                  </div>
                  <div class="price-tag">
                    <span class="price-prefix"></span>
                    <span class="price-value">149</span>
                    <span class="price-suffix">DH HT/an</span>
                  </div>
                </li>
                <li class="menu-item">
                  <a href="#">Serveur dédié</a>
                  <div class="item-description">
                    Un serveur physique qui vous appartient à 100%
                  </div>
                  <div class="price-tag">
                    <span class="price-prefix"></span>
                    <span class="price-value">699</span>
                    <span class="price-suffix">DH HT/an</span>
                  </div>
                </li>
                <li class="menu-item">
                  <a href="#">Tous nos serveurs</a>
                  <div class="item-description">
                    Choisissez ce qu&apos;il vous faut parmi notre large gamme de serveurs
                  </div>
                </li>
              </ul>
            </div>
          </li>
          <li>
            <a href="{{ route('service') }}">Services</a>
            <div class="submenu-dropdown">
              <ul class="submenu">
                <li class="menu-item">
                  <a href="#">Administration système</a>
                  <div class="item-description">
                    Pour une prise en charge efficace de l&apos;administration de vos serveurs
                  </div>
                </li>
                <li class="menu-item">
                  <a href="#">Sauvegarde</a>
                  <div class="item-description">
                    Sauvegarde automatique de votre site web, vos bases de données et vos e-mails
                  </div>
                  <div class="price-tag">
                    <span class="price-prefix"></span>
                    <span class="price-value">149</span>
                    <span class="price-suffix">DH HT/an</span>
                  </div>
                </li>
                <li class="menu-item">
                  <a href="#">Migration</a>
                  <div class="item-description">
                    Un transfert de votre site web, vos données et applications en toute sécurité et sans interruption
                  </div>
                </li>
              </ul>
            </div>
          </li>
          <li>
            <a href="#">SSL</a>
          </li>
        </ul>
        <ul class="profile">
          <li>
            <a href="#">
              <img src="{{asset('IMG/icon_client_area.png')}}" alt="">
            </a>
          </li>
          <li>
            <a href="#">
              <img src="{{asset('IMG/icon_cart.png')}}" alt="">
            </a>
          </li>
        </ul>
      </div>
    </div>
  </div>
  <script src="{{ asset('js/lib/all.min.css') }}"></script>
</body>
</html>
