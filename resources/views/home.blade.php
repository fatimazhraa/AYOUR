<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
 <link   rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
 <link
rel="stylesheet"
href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"
/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/3.0.0/css/font-awesome-ie7.min.css" integrity="sha512-YSrvaOXIhYlAE8Qj488Nit2KMcOZzqVwe6C6z8D+N0Wq/YHvzAaQNAaBhBZxpqC0cXtM15HlrjIiMXnNda1xVA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
   <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap');
 
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  scroll-behavior: smooth;
  font-family: 'Poppins', sans-serif;
}

header {
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  padding: 20px;
  display: flex;
  justify-content: space-between;
  align-items: center;
  z-index: 100;
}

.logo {
  font-size: 25px;
  color: #080808;
  text-decoration: none;
  font-weight: 600;
}

nav a {
  font-size: 15px;
  color: #080808;
  text-decoration: none;
  font-weight: 500;
  margin-left: 20px;
  transition: .3s;
}
nav a:hover,
nav a.active {
  color: #0ef;
}
@media (max-width: 768px) {
  header {
    padding: 20px 10px;
  }
  
  nav a {
    font-size: 14px;
    margin-left: 10px;
  }
}


.blue-div {
  margin-top: 5%;
  background-color: rgb(163, 204, 243);
  padding: 20px;
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
}

@media (max-width: 768px) {
  .blue-div {
    margin-left: 10px;
    margin-right: 10px;
  }
}

@media (min-width: 769px) and (max-width: 1200px) {
  .blue-div {
    margin-left: 50px;
    margin-right: 50px;
  }
}

@media (min-width: 1201px) {
  .blue-div {
    margin-left: 100px;
    margin-right: 100px;
  }
}


.left-div,
.right-div {
  flex: 1;
}

.right-div {
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  text-align: center;
}

.right-div h1 {
  font-weight: bold;
  font-size: 30px;
  margin-bottom: 10px;
}

.right-div p {
  font-size: 20px;
  display: block;
}

.button {
  padding: 10px 20px;
  font-size: 16px;
  background-color: #04664d;
  color: #000000;
  border: none;
  cursor: pointer;
  margin-top: 10px;
  border-radius: 5px;
}

.blue-div  img {
  width: 60px;
  height: 60px;
  transition: transform 0.3s ease;
  animation: moveLeftRight 2s linear infinite;
}

@keyframes moveLeftRight {
  0% {
    transform: translateX(0);
  }
  50% {
    transform: translateX(20px);
  }
  100% {
    transform: translateX(0);
  }
}

img:hover {
  transform: translateX(-10px);
}

.circle-container {
  position: relative;
  width: 200px;
  height: 200px;
  overflow: hidden;
}

.half-circle {
  position: absolute;
  width: 100%;
  height: 50%;
  overflow: hidden;
  transform-origin: bottom;
  animation: moveUpAndDown 2s ease-in-out infinite;
}

.half-circle img {
  display: block;
  width: 100%;
  height: auto;
}

@keyframes moveUpAndDown {
  0% {
    transform: translateY(0);
  }
  50% {
    transform: translateY(-10px);
  }
  100% {
    transform: translateY(0);
  }
}

.card-item {
  margin-top: 10%;
  padding: 10px;
  border: none;
  box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.1);
  transition: all 0.3s ease-in-out;
  width: 100%;
  max-width: 400px;
}

.card-item:hover {
  box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2);
  transform: translateY(-2px);
}

.card-item-description {
  font-size: 15px;
  margin-bottom: 10px;
  color: rgb(53, 48, 48);
}

.card-item-description p {
  font-size: 25px;
  color: #383333;
}

.h-text {
  padding-top: 150px;
  margin-left: 60px;
}

.h-animate h1 {
  color: #000000;
  font-size: 30px;
}

.h-animate .text {
  position: relative;
  color: #00C9F3;
  font-size: 20px;
  font-weight: 600;
}

.h-animate .text.first-text {
  color: #0e0d0d;
}

.text.sec-text:before {
  content: "";
  position: absolute;
  top: 0;
  left: 0;
  height: 100%;
  width: 100%;
  background-color: white;
  border-left: 2px solid #0a768b;
  animation: animate 4s steps(12) infinite;
}

@keyframes animate {
  40%,
  60% {
    left: calc(100% + 4px);
  }
  100% {
    left: 0%;
  }
}

.recherche {
  display: flex;
  justify-content: center;
  align-items: center;
  flex-direction: column;
}

.recherche span {
  margin-left: 15%;
}

.recherche p {
  display: flex;
  justify-content: center;
  align-items: center;
}

.recherche .search-box {
  position: relative;
  margin-top: 3%;
  left: 50%;
  transform: translateX(-50%);
  background: #666666;
  height: 40px;
  border-radius: 40px;
  padding: 10px;
}

.recherche .search-box:hover > .search-txt {
  width: 240px;
  padding: 0 6px;
}

.recherche .search-box:hover > .search-btn {
  background: white;
  color: black;
}

.recherche .search-btn {
  color: #eeeeee;
  float: right;
  width: 40px;
  height: 40px;
  border-radius: 50%;
  background: #2f3640;
  display: flex;
  justify-content: center;
  align-items: center;
  transition: 0.4s;
  color: white;
  cursor: pointer;
  text-decoration: none;
}

.recherche .search-btn > i {
  font-size: 20px;
}

.recherche .search-txt {
  border: none;
  background: none;
  outline: none;
  float: left;
  padding: 0;
  color: white;
  font-size: 16px;
  transition: 0.4s;
  line-height: 40px;
  width: 0px;
  font-weight: bold;
}



.centered-container {
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  height: 100vh;
}

.card-container {
  display: flex;
  flex-wrap: nowrap;
  justify-content: center;
  align-items: center;
  max-width: 800px; /* Définissez une largeur maximale pour la flexbox */
  margin: 0 auto; /* Centrez la flexbox horizontalement */
}

.card {
  width: 150px;
  border: 1px solid #ccc;
  border-radius: 5px;
  padding: 10px;
  margin: 10px;
}

.card img {
  width: 100%;
  height: auto;
  border-radius: 5px;
  margin-bottom: 10px;
}

.card p {
  font-size: 14px;
  color: #333;
}

/* Ajoutez des règles de media queries pour rendre les cartes responsive */
@media (max-width: 768px) {
  .card-container {
    max-width: 400px; /* Réduisez la largeur maximale pour les petits écrans */
  }
  
  .card {
    width: 100%; /* Faites en sorte que les cartes occupent 100% de la largeur */
  }
}


.offre {
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  height: 100vh;
}

.carte-container {
  display: flex;
  justify-content: center;
  align-items: center;
  gap: 20px; /* Ajustez l'espacement entre les cartes selon vos préférences */
}

.carte1 {
  width: 400px;
  background-color: #f1f1f1;
  padding: 20px;
  border-radius: 5px;
  text-align: center;
  animation: fade-in 1s ease-in-out;
}

@keyframes fade-in {
  0% {
    opacity: 0;
    transform: translateY(20px);
  }
  100% {
    opacity: 1;
    transform: translateY(0);
  }
}

.carte1 h2 {
  font-size: 20px;
  margin-bottom: 10px;
}

.carte1 p {
  font-size: 16px;
  margin-bottom: 20px;
}

.carte1 button {
  padding: 10px 20px;
  font-size: 16px;
  background-color: #04664d;
  color: #ffffff;
  border: none;
  border-radius: 5px;
  cursor: pointer;
}

@media (max-width: 768px) {
  .carte-container {
    flex-wrap: wrap;
  }
  
  .carte1 {
    width: 100%;
  }
}
.description {
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  text-align: center;
  height: 100vh;
  margin-left: 100px;
  margin-right: 100px;
}

.description h1 {
  font-size: 24px;
  margin-bottom: 10px;
}

.description p {
  font-size: 16px;
  margin-bottom: 20px;
  font-size: 13px;
}

.description img {
  width: 200px;
  height: 200px;
  border-radius: 50%;
}

@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap');

.swiper{
  font-family: var(--font);
  display: flex;
  justify-content: center;
  align-items: center;
  height: 100vh;
  background-color: var(--bg-color);
}

/* ----------- SLIDER ------------ */
.swiper{
  width: 100%;
}

.swiper-wrapper{
  width: 100%;
  height: 35em;
  display: flex;
  align-items: center;
}

.card{
  width: 20em;
  height: 90%;
  background-color: #fff;
  border-radius: 2em;
  box-shadow: 0 0 2em rgba(0, 0, 0, .2);
  padding: 2em 1em;

  display: flex;
  align-items: center;
  flex-direction: column;

  margin: 0 2em;
}

.swiper-slide:not(.swiper-slide-active){
  filter: blur(1px);
}

.card__image{
  width: 10em;
  height: 10em;
  border-radius: 50%;
  border: 5px solid #727272;
  padding: 3px;
  margin-bottom: 2em;
}

.card__image img{
  width: 100%;
  height: 100%;
  border-radius: 50%;
  object-fit: cover;
}

.card__content{
  display: flex;
  align-items: center;
  flex-direction: column;
}

.card__title{
  font-size: 1.5rem;
  font-weight: 500;
  position: relative;
  top: .2em;
  background-color: #727272;
  color: #FFFFFF;
  padding: 10px;
  border-radius: 5px;
  margin-bottom: 10px;
}

.card__name{
  color: #727272;
}

.card__text {
  text-align: center;
  font-size: 1.1rem;
  margin: 1em 0;
  position: relative;
  margin-bottom: 10px; /* Espacement entre le texte et ::after */
}

.card__text::after {
  content: "";
  position: absolute;
  bottom: -5px;
  left: 0;
  width: 100%;
  height: 1px;
  background-color: #727272;
}


.card__btn{
  background-color: #000000;
  color: #FFFFFF;
  font-size: 1rem;
  text-transform: uppercase;
  font-weight: 600;
  border: none;
  padding: .5em;
  border-radius: .5em;
  margin-top: .5em;
  cursor: pointer;
}

.card__btn:hover {
  background-color: #3b3b3b;
}
.container {
    text-align: center;
    margin-left: 20%;
    margin-right: 20%;
  }

.obj{
  display:flex;
  justify-content: center;
  text-align: center;
 margin-left: 20%;
 margin-right: 20%;
margin-bottom: 5%;
}

.animated-list {
  list-style: none;
  padding: 0;
  width: 500px;
  margin-left: 10%;
}


.animated-list li {
  position: relative;
  padding: 10px;
  border: 1px solid rgb(0, 0, 0);
margin-bottom: 5%;
background-color: #edf1f7;
  transition: background-color 0.3s ease;
}

.animated-list li:hover {
  background-color: rgb(99, 99, 158);
 
}

.animated-list li::before {
  content: '';
  position: absolute;
  left: 0;
  top: 0;
  width: 3px;
  height: 100%;
  background-color: rgb(99, 99, 158);
  transition: height 0.3s ease;
}

.animated-list li:hover::before {
  height: 100%;
}
.desc {
  display: grid;
  grid-template-columns: 1fr 2fr; /* Divise la section en deux colonnes, 1/3 pour l'image et 2/3 pour le contenu */
  gap: 20px; /* Ajoute un espacement entre les deux colonnes */
}

.image img{
  margin-top: 25%;
  margin-left: 20%;
  display: flex;
  justify-content: center; /* Centre l'image horizontalement */
  align-items: center; /* Centre l'image verticalement */
  height: auto; 
}

.content{
  display: flex;
  align-items: center; /* Centre le contenu verticalement */
}

.services{
width: 100%;
height: 200vh;
display: flex;
justify-content: center;
align-items: center;
flex-direction: column;
background: #ffffff;
}
.s-heading{

text-align: center;
}
.s-heading h1{
color: #576975;
font-size: 2rem;
font-weight:400 ;
letter-spacing: 1px;
margin: 0px;
}
.s-heading p{
color: rgba(87,105,117,0.6);
font-size: 1rem;
margin: 10px;
text-align: center;
}

.s-box span{

display: flex;
background-size: cover;
align-items: center;
width: 170PX;
height: 150px;
}


.s-box-container {
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  align-items: center;
}

.s-box {
  flex-basis: 25%;
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  border-radius: 10px;
  width: 250px;
  height: 310px;
  padding: 20px 25px;
  box-sizing: border-box;
  margin: 15px;
  box-shadow: 2px 2px 30px rgba(0, 0, 0, 0.2);
  position: relative;
}


.s-box h2{
color: #576975;
letter-spacing: 1px;
font-size: 1rem;
margin-bottom: 8px;
}

.s-box:hover{
box-shadow: 2px 2 px 30px rgba(0,0,0,0.08);
transition: all ease 0.3s;
}

.bar{
width: 100px;
height: 6px;
position: absolute ;
left: 50%;
top: 0px;
transform: translateX(-50%);
background-color: #4a90e2;
border-radius: 0px 0px 10px 10px;
display: none;
animation: bar 0.5s ;
}
.s-box:hover .bar{
display: block;
}
@keyframes bar {
0%{
width: 0px ;
}
100%{
width:  100px ;
}

}

.s-box p{
  color: #5e6366;
  line-height: 1.4;
}
.s-box img{
  background:  transparent; 
  width: 250px; 
  height: 150px; 
  display: flex;
   justify-content: center;
    align-items: center;
}

.contenu {
  text-align: center;
}

.contenu h3 {
  margin-top: 0;
  color: #313131;
}

.contenu hr {
  border: none;
  border-top: 1px solid #000;
  width: 5%;
 margin-left: 600px;
}

.contenu .content {
  display: flex;
}

.contenu .content .half {
  flex: 1;
  text-align: left;
  padding: 20px;
}
.contenu .content .half1{
  margin-left: 15%;
}
 .contenu .half h3 {
  margin-top: 0;
}

.containu .content .half img {
  width: 100%;
  height: auto;
}







.footer {
  background-color: #3d8388;
  color: #fff;
  padding: 20px;
  display: flex;
  justify-content: space-between;
}

.partie1 {
  width: 33.33%;
}

.partie2 {
  width: 33.33%;
}

.partie3 {
  width: 33.33%;
}

.partie1 p {
  margin-top: 10px;
}

.partie1 h3 {
  margin-left: 5%;
}

.partie2 ul {
  list-style-type: none;
  padding-left: 0;
  margin-top: 10px;
}

.partie2 li {
  margin-bottom: 5px;
}

.partie3 h4 {
  margin-bottom: 10px;
}

.reseaux-sociaux a {
  color: #fff;
  margin-right: 10px;
  margin-top: 10px;
}

.reseaux-sociaux a:hover {
  color: #ccc;
}

.partie3 form {
  display: flex;
  margin-top: 10px;
}

.partie3 input[type="email"] {
  width: 200px;
  padding: 5px;
  border-radius: 3px 0 0 3px;
  border: none;
}

.partie3 button[type="submit"] {
  padding: 5px 10px;
  border-radius: 0 3px 3px 0;
  border: none;
  background-color: #86a1d4;
  color: #ffffff;
  cursor: pointer;
}


.prix {
  padding: 20px;
  display: flex;
  justify-content: space-between;
}

        .partie1 {
  width: 33.33%;

}

.partie2 {
  width: 33.33%;
}

.partie3 {
  width: 33.33%;
}
.prix h3{
    font-size:100%;
    color: #c5c5c5;
    display: flex;
    justify-content: center;
    align-items: center;
    margin-left: 20%;
    margin-right: 20%;
}
.prix p{
    display: flex;
    justify-content: center;
    align-items: center;
    margin-left: 10%;
    margin-right: 10%; 
}
h2{
    display: flex;
    justify-content: center;
    align-items: center;
    margin-left: 10%;
    margin-right: 10%;
    color: #3db5fa;
}
.prix img{
   margin-left: 30%;
}
    </style>
</head>
<body>
    <header>
        <a href="#" class="logo">Host Oplus</a>
        <nav>
            <a href="#" class="active">Home</a>
            <a href="#">About Us</a>
            <a href="#">Features</a>
            <a href="#">Pricing</a>
            <a href="#">Blogs</a>
            <a href="#">Contact Us</a>
            <a href="#">Marketplace</a>
            <a href="#">Login</a>
        </nav>
    </header>

    <div class="h-text">
      <div class="h-animate">
        <h1>Host Oplus</h1>
        <span class="text first-text">&nbsp;</span>
        <span class="text sec-text">hebergement Web Maroc</span>
      </div>
  </div>



    <div class="blue-div">
        <div class="left-div">
            <div class="circle-container">
                <div class="half-circle">
                  <img src="kisspng-semicircle-geometric-shape-geometry-free-range-eggs-5ae911ac678113.977680541525223852424.png" alt="Votre image">
                </div>
              </div>
            <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
            <lottie-player src="https://assets2.lottiefiles.com/packages/lf20_tco2osel.json" background="transparent" speed="1" style="width: 500px; height: 500px;"></lottie-player>
        </div>
        <div class="right-div">
            <img src="cube-png-18939.png" alt="Votre image">
            <h1>HEBERGEMENT ILLIMITE</h1>
            <h1>Notre hébergement Cloud fournit une large gamme de fonctionnalités</h1>
            <p>Espace Web illimitées et bande passante 100% SSD Héberger des sites Web avec Autoscoding Platform Ressources SSL Gratuit LetsEncrypt, Google-Based DNS Servers et content Delivery Network</p>
            <button class="button">commencer maintenant</button>
        </div>
    </div>


<div class="recherche">
  <div class="h-text">
    <h2>UN DOMAINE GRATUIT AVEC VOTRE PACK D'HÉBERGEMENT</h2>
    <div class="h-animate">
      <span class="text first-text">&nbsp;</span>
      <span class="text sec-text" style="font-size: 15px;">PRIX DE RENOUVELLEMENT LE PLUS BAS</span>
      <p>Vérifiez la disponibilité de votre nom de domaine</p>
    </div>
    <div class="search-box">
      <input type="text" name="" class="search-txt" placeholder="Tapez pour rechercher" />
      <a class="search-btn" href="#">
        <i class="fa fa-search" aria-hidden="true"></i>
      </a>
    </div>
    <p style="margin-top: 4%; margin-bottom: 4%;">Nous disposons de plus de 200 extensions de noms de domaine .</p>
  <div class="card-container">
    <div class="card">
      <img src="image1.jpg" alt="Image 1">
      <p>120.00 Dhs /an</p>
    </div>
    <div class="card">
      <img src="image2.jpg" alt="Image 2">
      <p>120.00 Dhs /an</p>
    </div>
    <div class="card">
      <img src="image2.jpg" alt="Image 2">
      <p>160.00 Dhs /an</p>
    </div>
     <div class="card">
      <img src="image2.jpg" alt="Image 2">
      <p>320.00 Dhs /an</p>
    </div>
     <div class="card">
      <img src="image2.jpg" alt="Image 2">
      <p>500.00 Dhs /an</p>
    </div> 
    <div class="card">
      <img src="image2.jpg" alt="Image 2">
      <p>450.00 Dhs /an</p>
    </div>
</div>

</div>
<div class="offre">
  <h1>VOTRE SITE MÉRITE LE MEILLEUR</h1>
  <p>Fièrement hébergeur Web depuis 2001</p>
  <div class="carte-container">
    <div class="carte1">
      <h2>Hébergement Mutualisé</h2>
      <p></p>
      <button>CONSULTEZ NOS OFFRES</button>
    </div>
    <div class="carte1">
      <h2>Serveurs VPS Cloud</h2>
      <p></p>
      <button>NOS SERVEUR VPS CLOUD</button>
    </div>
  </div>
</div>
</div>

<div class="description">
    <h1>Hébergement Web de haute qualité pour les entreprises - Host Oplus.</h1>
    <p>Host Oplus est une entreprise spécialisée dans l'hébergement et la gestion de sites web pour les entreprises. Nous fournissons des solutions d'hébergement web haut de gamme, adaptées aux besoins de nos clients. Notre mission est d'offrir un service fiable, sécurisé et évolutif pour répondre aux exigences de leurs activités en ligne.</p>
    <p>Nous sommes convaincus que la réussite de nos clients est notre réussite, c'est pourquoi nous offrons un support technique de qualité, une surveillance en temps réel de nos serveurs, des mises à jour régulières des logiciels et des outils de sécurité avancés pour protéger les sites web de nos clients contre les menaces en ligne. Nous proposons également des solutions personnalisées pour répondre aux besoins spécifiques de chaque entreprise.</p>
    <p>Nos clients font confiance à Host Oplus pour notre expertise en matière d'hébergement web, notre engagement envers la qualité et la sécurité de nos services, ainsi que notre engagement à fournir un service client exceptionnel. Nous avons aidé de nombreuses entreprises à réussir en ligne, et nous sommes prêts à travailler avec vous pour vous aider à atteindre vos objectifs en ligne.</p>
    <img src="image.jpg" alt="Image"> 
</div>
  
<div class="container">
  <h1>L'HÉBERGEMENT LINUX EN ILLIMITÉ AVEC CPANEL ET 100% SSD</h1>
  <p>Découvrez nos offres d'Hébergement de Site WEB en illimité avec cpanel et 100% ssd, aujourd'hui nous offrons un nouveau service rassemblant la rapidité et la fiabilité pour tous.</p>
</div>
<section class="swiper mySwiper">

  <div class="swiper-wrapper">
      <div class="card swiper-slide">
        <h3 style="background-color: #000000; color: #ffffff; margin-bottom: 10%; padding: 1em; border-radius: 0.5em; text-align: center; text-transform: uppercase; letter-spacing: 2px;">PERSONNEL</h3>

          <h4 style="font-size:large;">50<span style="font-size:smaller;">GB</span></h4>
          <p style="border-bottom: 1px solid #727272; width: 80%; ">Bande Passante</p>
          <p style="border-bottom: 1px solid #727272; width: 80%;">Base de données 3</p>
          <p style="border-bottom: 1px solid #727272; width: 80%;">Sous Domaiines 2</p>
          <p style="border-bottom: 1px solid #727272; width: 80%;">cPanel Control Panel</p>
          <p style="border-bottom: 1px solid #727272; width: 80%;">200+ One-Click Installs</p>
          <p style="border-bottom: 1px solid #727272; width: 80%;">2Tbps DDoS Protection</p>
          <p style="border-bottom: 1px solid #727272; width: 80%;">Certificats SSL</p>
          <p>Builder Web</p>
          <h4 style="font-size: large; margin-top: 10%;">
            299 DHs <span style="font-size: smaller; margin-left: 10px;"><s>499 DHs</s></span>
          </h4>
          
          
          <p>An</p>
          <button class="card__btn">Commencer</button>
      </div>
      <div class="card swiper-slide">
        <h3 style="background-color: #000000; color: #ffffff; margin-bottom: 10%; padding: 1em; border-radius: 0.5em; text-align: center; text-transform: uppercase; letter-spacing: 2px;">PERSONNEL</h3>

          <h4 style="font-size:large;">50<span style="font-size:smaller;">GB</span></h4>
          <p style="border-bottom: 1px solid #727272; width: 80%; ">Bande Passante</p>
          <p style="border-bottom: 1px solid #727272; width: 80%;">Base de données 3</p>
          <p style="border-bottom: 1px solid #727272; width: 80%;">Sous Domaiines 2</p>
          <p style="border-bottom: 1px solid #727272; width: 80%;">cPanel Control Panel</p>
          <p style="border-bottom: 1px solid #727272; width: 80%;">200+ One-Click Installs</p>
          <p style="border-bottom: 1px solid #727272; width: 80%;">2Tbps DDoS Protection</p>
          <p style="border-bottom: 1px solid #727272; width: 80%;">Certificats SSL</p>
          <p>Builder Web</p>
          <h4 style="font-size: large; margin-top: 10%;">
            299 DHs <span style="font-size: smaller; margin-left: 10px;"><s>499 DHs</s></span>
          </h4>
          
          
          <p>An</p>
          <button class="card__btn">Commencer</button>
      </div>
      <div class="card swiper-slide">
        <h3 style="background-color: #000000; color: #ffffff; margin-bottom: 10%; padding: 1em; border-radius: 0.5em; text-align: center; text-transform: uppercase; letter-spacing: 2px;">PERSONNEL</h3>

          <h4 style="font-size:large;">50<span style="font-size:smaller;">GB</span></h4>
          <p style="border-bottom: 1px solid #727272; width: 80%; ">Bande Passante</p>
          <p style="border-bottom: 1px solid #727272; width: 80%;">Base de données 3</p>
          <p style="border-bottom: 1px solid #727272; width: 80%;">Sous Domaiines 2</p>
          <p style="border-bottom: 1px solid #727272; width: 80%;">cPanel Control Panel</p>
          <p style="border-bottom: 1px solid #727272; width: 80%;">200+ One-Click Installs</p>
          <p style="border-bottom: 1px solid #727272; width: 80%;">2Tbps DDoS Protection</p>
          <p style="border-bottom: 1px solid #727272; width: 80%;">Certificats SSL</p>
          <p>Builder Web</p>
          <h4 style="font-size: large; margin-top: 10%;">
            299 DHs <span style="font-size: smaller; margin-left: 10px;"><s>499 DHs</s></span>
          </h4>
          
          
          <p>An</p>
          <button class="card__btn">Commencer</button>
      </div>
      <div class="card swiper-slide">
        <h3 style="background-color: #000000; color: #ffffff; margin-bottom: 10%; padding: 1em; border-radius: 0.5em; text-align: center; text-transform: uppercase; letter-spacing: 2px;">PERSONNEL</h3>

          <h4 style="font-size:large;">50<span style="font-size:smaller;">GB</span></h4>
          <p style="border-bottom: 1px solid #727272; width: 80%; ">Bande Passante</p>
          <p style="border-bottom: 1px solid #727272; width: 80%;">Base de données 3</p>
          <p style="border-bottom: 1px solid #727272; width: 80%;">Sous Domaiines 2</p>
          <p style="border-bottom: 1px solid #727272; width: 80%;">cPanel Control Panel</p>
          <p style="border-bottom: 1px solid #727272; width: 80%;">200+ One-Click Installs</p>
          <p style="border-bottom: 1px solid #727272; width: 80%;">2Tbps DDoS Protection</p>
          <p style="border-bottom: 1px solid #727272; width: 80%;">Certificats SSL</p>
          <p>Builder Web</p>
          <h4 style="font-size: large; margin-top: 10%;">
            299 DHs <span style="font-size: smaller; margin-left: 10px;"><s>499 DHs</s></span>
          </h4>
          
          
          <p>An</p>
          <button class="card__btn">Commencer</button>
      </div>
      <div class="card swiper-slide">
        <h3 style="background-color: #000000; color: #ffffff; margin-bottom: 10%; padding: 1em; border-radius: 0.5em; text-align: center; text-transform: uppercase; letter-spacing: 2px;">PERSONNEL</h3>

          <h4 style="font-size:large;">50<span style="font-size:smaller;">GB</span></h4>
          <p style="border-bottom: 1px solid #727272; width: 80%; ">Bande Passante</p>
          <p style="border-bottom: 1px solid #727272; width: 80%;">Base de données 3</p>
          <p style="border-bottom: 1px solid #727272; width: 80%;">Sous Domaiines 2</p>
          <p style="border-bottom: 1px solid #727272; width: 80%;">cPanel Control Panel</p>
          <p style="border-bottom: 1px solid #727272; width: 80%;">200+ One-Click Installs</p>
          <p style="border-bottom: 1px solid #727272; width: 80%;">2Tbps DDoS Protection</p>
          <p style="border-bottom: 1px solid #727272; width: 80%;">Certificats SSL</p>
          <p>Builder Web</p>
          <h4 style="font-size: large; margin-top: 10%;">
            299 DHs <span style="font-size: smaller; margin-left: 10px;"><s>499 DHs</s></span>
          </h4>
          
          
          <p>An</p>
          <button class="card__btn">Commencer</button>
      </div>
  </div>
</section>


<div class="objectif">
  <h2 class="obj">Nous vous créons un site internet clés en main</h2>
  <p class="obj">De nombreuses fonctionnalités disponibles. Réalisez vos objectifs en demandant l'ajout de fonctionnalités utiles pour votre site internet. Vous pourrez en ajouter plus tard si vous n'avez pas besoin maintenant.</p>
<div class="desc">
  
  <div class="content">
    <ul class="animated-list">
      <li>
        Design responsive adapté à tous les supports : PC, smartphone, tablette ...</li>
      <li>Contrôle total de votre site via un accès administrateur .</li>
      <li>Installation d’un chat pour engager la conversation avec vos visiteurs .</li>
      <li>Installation et configuration d’un blog dans votre site pour partager votre expertise.</li>
      <li>Installation d'applications indispensables d'optimisation, gestion des cookies …</li>
      <li>Couverture d’accueil, images catégories, bannières,  etc...</li>
    </ul>
  </div>
  <div class="image">
    <img src="Capture d'écran 2023-07-12 201545.png">
  </div>
</div>
</div>



<section class="services" id="services">
  <div class="s-heading">
    <h1 style="color: #000;">Création site Internet au Maroc</h1>
    <p>Des sites beaux et fonctionnels, pour mieux présenter votre activité et vous aider à vendre</p>
  </div>
  <div class="s-box-container">
    <div class="s-box">
      <div class="bar"></div>
      <span class="img">
        <img src="Capture d'écran 2023-07-13 120053.png" alt="" >
      </span>
      <h2>Création de Site Vitrine</h2>
      <p>Vous souhaitez faire connaitre votre société sur internet ? Vous souhaitez crer votre vitrine pour présenter vos ..</p>
    </div>
    <div class="s-box">
      <div class="bar"></div>
      <span class="img">
        <img src="Capture d'écran 2023-07-13 120053.png" alt="" >
      </span>
      <h2>Création de Site Vitrine</h2>
      <p>Vous souhaitez faire connaitre votre société sur internet ? Vous souhaitez crer votre vitrine pour présenter vos ..</p>
    </div>
    <div class="s-box">
      <div class="bar"></div>
      <span class="img">
        <img src="Capture d'écran 2023-07-13 120053.png" alt="" >
      </span>
      <h2>Création de Site Vitrine</h2>
      <p>Vous souhaitez faire connaitre votre société sur internet ? Vous souhaitez crer votre vitrine pour présenter vos ..</p>
    </div>
    <div class="s-box">
      <div class="bar"></div>
      <span class="img">
        <img src="Capture d'écran 2023-07-13 120053.png" alt="" >
      </span>
      <h2>Création de Site Vitrine</h2>
      <p>Vous souhaitez faire connaitre votre société sur internet ? Vous souhaitez crer votre vitrine pour présenter vos ..</p>
    </div>
    <div class="s-box">
      <div class="bar"></div>
      <span class="img">
        <img src="Capture d'écran 2023-07-13 120053.png" alt="" >
      </span>
      <h2>Création de Site Vitrine</h2>
      <p>Vous souhaitez faire connaitre votre société sur internet ? Vous souhaitez crer votre vitrine pour présenter vos ..</p>
    </div>
    <div class="s-box">
      <div class="bar"></div>
      <span class="img">
        <img src="Capture d'écran 2023-07-13 120053.png" alt="" >
      </span>
      <h2>Création de Site Vitrine</h2>
      <p>Vous souhaitez faire connaitre votre société sur internet ? Vous souhaitez crer votre vitrine pour présenter vos ..</p>
    </div>
  </div>
</section>


<div class="contenu">
  <h3>EN QUOI CONSISTE CE PROGRAMME?</h3>
  <hr>
  <div class="content">
    <div class="half half1">
      <h5>NOS PRODUITS, VOTRE MARQUE</h5>
      <img src="chemin_vers_l'image.png" alt="Image">
      <p>Paragraphe de la moitié gauche</p>
    </div>
    <div class="half">
      <h5>NOS PRODUITS, VOTRE MARQUE</h5>
      <img src="chemin_vers_l'image.png" alt="Image">
      <p>Paragraphe de la moitié droite</p>
    </div>
  </div>
</div>



<h2>VOS PRIX JUSQU'À -50% COMPARÉS AUX PRIX DE NOS PRODUITS</h2>
    <div class="prix">
     
        <div class="p1">
<img src="Capture d'écran 2023-07-13 154446.png" alt="">
<h3>LES MEILLEURS PRIX DE
    L'HÉBERGEMENT WEB</h3>
    <p>Des produits d'hébergement Web très bien étudiés, avec des prix et caractéristiques défiant toute concurrence</p>
        </div>
        <div class="p2">
<img src="Capture d'écran 2023-07-13 154452.png" alt="">
<h3>DES CENTAINES D'EXTENSIONS
    DE NOMS DE DOMAINE</h3>
    <p>Offrez des centaines d'extensions de noms de domaine à vos clients, aux meilleurs prix du marché, avec gestion en marque blanche</p>
        </div>
        <div class="p3">
<img src="Capture d'écran 2023-07-13 154459.png" alt="">
<h3>TOUTE NOTRE EXPERTISE
    A VOTRE DISPOSITION</h3>
    <p>Présents sur le marché de l'hébergement Web depuis 2010, nous mettons toute notre expérience et savoir-faire au profit de votre business</p>
        </div>
    </div>


<footer class="footer">
  <div class="partie1">
    <h1>Host Oplus</h1>
    <p>Hebergement Web</p>
    <h3>Host Oplus Services d'Hébergement Web et Création & refonte de sites, applications web & mobiles, référencement web & webmarketing.</h3>
  </div>
  <div class="partie2">
    <h4>ADRESSE</h4>
    <ul>
      <li><i class="fas fa-map-marker-alt"></i> 58 AVENUE FARHAT HACHAD CITE DAKHLA 80000 AGADIR</li>
      <li><i class="fas fa-phone"></i> +212 5282-11829, +212 6686-46054, +212 672-849466</li>
      <li><i class="far fa-envelope"></i> contact@hostoplus.com</li>
    </ul>
  </div>
  <div class="partie3">
    <h4>NEWSLETTER</h4>
    <p>Rejoignez-nous sur les réseaux sociaux :</p>
    <div class="reseaux-sociaux">
      <a href="#"><i class="fab fa-facebook" style="font-size: 24px; margin-top: 10px;"></i></a>
      <a href="#"><i class="fab fa-twitter" style="font-size: 24px; margin-top: 10px;"></i></a>
    </div>
    <form>
      <input type="email" placeholder="Votre adresse e-mail">
      <button type="submit">Envoyer</button>
    </form>
  </div>
</footer>


<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>

<!-- Initialize Swiper -->
<script>
  var swiper = new Swiper(".mySwiper", {
      effect: "coverflow",
      grabCursor: true,
      centeredSlides: true,
      slidesPerView: "auto",
      coverflowEffect: {
          rotate: 0,
          stretch: 0,
          depth: 300,
          modifier: 1,
          slideShadows: false,
      },
      pagination: {
          el: ".swiper-pagination",
      },
  });
</script>

    <script>
  
      const txt = document.querySelector(".sec-text");
      const txtLoad = () => {
        setTimeout(() => {
          text.textContent = "PRIX DE RENOUVELLEMENT LE PLUS BAS";
        }, 0);
        setTimeout(() => {
          text.textContent = "SUPPORT D EXPERTS DES NOMS DE DOMAINE";
        }, 4000);
        setTimeout(() => {
          text.textContent = "ACCRÉDITÉ PAR L ANRT";
        }, 8000);
        
      }
      
      textLoad();
      setInterval(textLoad, 12000);
      
      
      
      </script>

    <script>
  
      const text = document.querySelector(".sec-text");
      const textLoad = () => {
        setTimeout(() => {
          text.textContent = "hebergement Web Maroc";
        }, 0);
        setTimeout(() => {
          text.textContent = "Création & refonte de sites";
        }, 4000);
        setTimeout(() => {
          text.textContent = "applications web & mobiles";
        }, 8000);
        setTimeout(() => {
          text.textContent = "référencement web & webmarketing";
        }, 12000);
      }
      
      textLoad();
      setInterval(textLoad, 24000);
      </script>


</body>
</html>
