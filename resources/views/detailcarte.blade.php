<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Host Oplus - {{ $card1 -> grandtitre }}</title>

<style>
  /* Utilisation de variables pour les couleurs */
  :root {
    --color-primary: #88a7bb;
    --color-secondary: #3787bd;
    --color-text: #555;
    --color-hover: #0ef;
    --color-active: #f00;
  }

  .container {
    margin-top: 2%;
    margin-left: 10%;
    padding: 2rem;
    margin-bottom: 10%;
  }

  .container h1 {
    background: linear-gradient(to left, var(--color-primary), var(--color-secondary));
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    font-size: 3rem;
    margin-bottom: 1rem;
  }

  .links ul li a {
    color: var(--color-text);
    text-decoration: none;
    transition: color 0.3s ease-in-out;
    margin-left: 10%;
  }

  .links ul li a:hover {
    color: var(--color-hover);
  }

  .links ul li a:active {
    color: var(--color-active);
  }

  .service {
    display: flex;
  }

  .links {
    flex-basis: 30%;
    padding-right: 2rem;
    background-color: #fff;
    border-radius: 6px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
    padding: 1.5rem;
    margin-bottom: 2rem;
    height: 250px;
    margin-right: 8rem;
    margin-left: 10%;
  }

  .links ul {
    list-style-type: none; /* Supprime les puces des éléments li */
  }

  .links h2 {
    font-size: 1.5rem;
    font-weight: 600;
    color: var(--color-text);
    margin-bottom: 1rem;
  }

  .links hr {
    border: none;
    border-top: 1px solid #ccc;
    margin-bottom: 1rem;
  }

  .contentCenter {
    flex-basis: 50%;
  }

  .nums {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    background-color: #fff;
    border-radius: 6px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
    padding: 2rem;
    margin-bottom: 2rem;
  }

  .contentCenter .image {
    max-width: 100%;
  }

  .contentCenter .titre {
    font-size: 1.5rem;
  }

  .contentCenter .description {
    margin-top: 1rem;
  }

  /* Méthode pour les styles spécifiques aux appareils mobiles */
  @media (max-width: 767px) {
    .container {
      margin-left: 5%;
      margin-right: 5%;
    }

    .links {
      flex-basis: 100%;
      margin-right: 0;
      margin-left: 0;
    }

    .nums {
      margin-left: 5%;
      margin-right: 5%;
    }
  }

  /* Méthode pour les styles spécifiques aux tablettes */
  @media (min-width: 768px) and (max-width: 1023px) {
    /* Ajoutez vos styles spécifiques aux tablettes ici */
  }

  /* Méthode pour les styles spécifiques aux écrans plus larges */
  @media (min-width: 1024px) {
    /* Ajoutez vos styles spécifiques aux écrans plus larges ici */
  }

  .service-area.service-page {
      background-color: #fff !important;
      padding-top: 70px;
  }

  .category-widget {
      box-shadow: rgba(36, 37, 38, 0.08) 4px 4px 15px 0px;
      border-radius: 10px;
      overflow: hidden;
  }

  .category-list {
      padding: 20px 0px 20px;
      margin: 0px;
  }

  .service-area.service-page .category-widget h4 {
    font-size: 24px;
    line-height: 34px;
    font-weight: 600;
    padding: 10px 10px;
    display: block;
    text-align: center;
    margin-bottom: 0px;
    border-bottom: 1px solid rgba(0, 0, 0, 0.1);
  }

  .service-area.service-page .category-widget .category-list li a {
    position: relative;
    display: block;
    padding-left: 15px;
    transition: all 0.3s ease-in;
    font-size: 16px;
    line-height: 30px;
    margin-bottom: 0px;
    font-weight: 500;
    z-index: 7;
  }

  .service-area.service-page .main-image img {
    width: 100%;
    border-radius: 10px;
  }

  .service-area.service-page .service-content-wrapper {
      padding: 30px;
      box-shadow: rgba(36, 37, 38, 0.08) 4px 4px 15px 0px;
      border-radius: 10px;
  }

  .service-area.service-page .main-image {
      margin-bottom: 30px;
      overflow: hidden;
  }

  .service-area.service-page .content .title {
      font-size: 24px;
      line-height: 24px;
      font-weight: 600;
      margin-bottom: 15px;
  }

  .service-area.service-page .get-support i {
    font-size: 70px;
    line-height: 80px;
    color: #fff;
  }

  .service-area.service-page .get-support {
    margin-top: 30px;
    box-shadow: rgba(36, 37, 38, 0.08) 4px 4px 15px 0px;
    border-radius: 10px;
    overflow: hidden;
    background: #0B8C8C;
    padding: 27px 20px 27px;
    text-align: center;
  }

  .service-area.service-page .get-support p {
    font-size: 18px;
    font-weight: 600;
    line-height: 28px;
    color: #fff;
    margin-bottom: 0px;
  }

  .service-area.service-page .get-support h4 {
    font-size: 24px;
    line-height: 34px;
    font-weight: 600;
    color: #fff;
    margin-top: 15px;
  }

  .banner {
    /* Add any other styles you want for the container */
    position: relative;
    width: 100%;
    height: 500px; /* Set the height for the container */

    /* Set the background image for the container */
    background-image: url("../IMG/srv-banner1.png");
    background-size: cover; 
    background-position: center center;
    height: 100vh;
  }

  .photo img {
    display: none;
  }

  .titre {
      position: absolute;
      top: 35%;
      left: 40%;
      transform: translate(-50%, -50%);
      text-align: center;
  }

  .titre h1 {
    font-size: 80px;
    /* background: #D73BC4; */
    background: linear-gradient(to right, #D73BC4 0%, #C0A552 60%, #dc3545 100%);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    letter-spacing: -4.14px;
  }
</style>

</head>

<body>
   @include('layouts.header')
   <div class="banner">
      <div class="titre">
         <h1>{{ $card1->grandtitre }}</h1>
      </div>
      <div class="photo">
         <img src="../IMG/srv-banner1.png">
      </div>
   </div>


   
   <section class="service-area service-page" id="service-content">
      <div class="container">
         <div class="row">
            <div class="col-lg-4">
              <div class="category-widget">
              <h4>Services</h4>
                <ul class="category-list">
                  @foreach ($card2 as $carte)
                  <li>
                      <a href="{{ route('card.details', ['id' => $carte->id]) }}" class="">
                      <i class="fas fa-angle-double-right"></i> {{ $carte->grandtitre }} 
                      </a>
                  </li>
                  @endforeach 
                </ul>
              </div>
              <div class="get-support">
                <i class="fas fa-headset"></i>
                <h4>Support en live</h4>
                <p class="number">+212 5282-11829</p>
                <p class="number">+212 6686-46054</p>
                <p class="number">+212 672-849466</p>
              </div>
            </div>
            <div class="col-lg-8">
               <div class="service-content-wrapper">
                  <div class="main-image">
                     <img src="{{{ asset('IMG/' . $card1->imgdetaille) }}}" alt="">
                  </div>
                  <div class="content">
                     <h3 class="title">{{ $card1->titredetaille }}</h3>
                     <div class="description"> {{ $card1->descdetaille }}</div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>



   @include('layouts.footer')
   <script>
      window.onload = function() {
          function scrollToSection() {
              var section = document.getElementById('service-content');
              section.scrollIntoView();
          }

          scrollToSection();
      }
   </script>
</body>
</html>