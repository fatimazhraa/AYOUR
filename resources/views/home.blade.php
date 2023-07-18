<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
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




/* div bleu */
.blue-div {
  margin-top: 5%;
  background-color: rgb(163, 204, 243);
  padding: 20px;
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  margin-bottom:10%;
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
/* div bleu */














/*div recherche*/
.recherche {
  display: flex;
  justify-content: center;
  align-items: center;
  flex-direction: column;
  margin-bottom:10%;
}
.recherche h2{
  display: flex;
  justify-content: center;
  align-items: center;
}
.recherche span {
  margin-left: 15%;
}

.recherche p {
  display: flex;
  justify-content: center;
  align-items: center;
}
.small-input {
  width: 100px; /* Ajustez la largeur selon vos préférences */
}


.search-box {
  display: flex;
  align-items: center;
}

.search-input {
  padding: 10px;
  border: 1px solid #ccc;
  border-radius: 5px 0 0 5px;
  font-size: 14px;
  flex: 1;
  margin-right: 10px; /* Ajoutez une marge à droite */
}

.search-btn {
  padding: 10px 20px;
  background-color: #337ab7;
  color: #fff;
  border: none;
  border-radius: 0 5px 5px 0;
  font-size: 14px;
  cursor: pointer;
}


.search-btn:hover {
  background-color: #23527c;
}

.card-container {
    display: flex;
  flex-wrap: nowrap;
  justify-content: center;
}

.card1 {
  width: 200px;
  background-color: #f9f9f9;
  border-radius: 5px;
  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
  padding: 10px;
  margin: 10px;
  text-align: center;
}

.card1 img {
  width: 100%;
  max-height: 150px;
  object-fit: cover;
  border-radius: 5px;
}

.card1 p {
  font-size: 14px;
  margin-top: 10px;
}

@media (max-width: 768px) {
  .card-container {
    max-width: 400px; /* Réduisez la largeur maximale pour les petits écrans */
  }
  
  .card {
    width: 100%; /* Faites en sorte que les cartes occupent 100% de la largeur */
  }
}
/*div recherche*/





/* div offre */
.offre {
  text-align: center;
  padding: 20px;
  background-color: #fff;
  margin-bottom:10%;
}
.offre h1 {
  font-size: 28px;
  color: #333;
  margin: 0;
}
.offre p {
  font-size: 14px;
  color: #777;
  margin: 10px 0;
}
.carte-container {
  display: flex;
  justify-content: center;
  flex-wrap: wrap;
  gap: 20px;
  margin-top: 20px;
}
.carte1 {
  width: 500px;
  height: 280px;
  padding: 20px;
  border-radius: 5px;
  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
  background-color: #f9f9f9;
}
.carte1 h2 {
  font-size: 20px;
  color: #5da5bb;
  margin: 0;
}
.carte1 ul {
  list-style-type: none;
  padding: 0;
  margin-top: 10px;
}
.carte1 ul li {
  font-size: 14px;
  color: #555;
  margin-bottom: 5px;
}
.carte1 p {
  font-size: 18px;
  color: #7cc4c7;
  margin: 10px 0;
}
.carte1 span {
  font-weight: bold;
  color: #1c879c;
}
.carte1 button {
  background-color: #337ab7;
  color: #fff;
  border: none;
  border-radius: 3px;
  cursor: pointer;
  font-size: 14px;
  padding: 10px 20px;
  margin-top: 10px;
}
.carte1 button:hover {
  background-color: #23527c;
}
 @media (max-width: 768px) {
  .carte1 {
     width: 100%;
  }
}
/* Ajoutez vos styles par défaut ici */

/* Styles pour les écrans de taille normale */

/* Styles pour les appareils mobiles */
@media (max-width: 767px) {
  .carte-container {
    margin-top: 10px; /* Ajustez la marge supérieure selon vos préférences */
  }

  .carte1 {
    width: 100%; /* Faites en sorte que la carte occupe 100% de la largeur */
    height: auto; /* Ajustez la hauteur automatiquement en fonction du contenu */
  }

  .carte1 h2 {
    font-size: 18px; /* Ajustez la taille de police selon vos préférences */
  }

  .carte1 ul li {
    font-size: 12px; /* Ajustez la taille de police selon vos préférences */
  }

  .carte1 p {
    font-size: 16px; /* Ajustez la taille de police selon vos préférences */
  }

  .carte1 button {
    font-size: 12px; /* Ajustez la taille de police selon vos préférences */
    padding: 8px 16px; /* Ajustez le padding selon vos préférences */
    margin-top: 8px; /* Ajustez la marge supérieure selon vos préférences */
  }
}

/* Styles pour les tablettes */
@media (min-width: 768px) and (max-width: 1023px) {
  /* Ajoutez vos styles spécifiques aux tablettes ici */
}

/* Styles pour les écrans plus larges */
@media (min-width: 1024px) {
  /* Ajoutez vos styles spécifiques aux écrans plus larges ici */
}

/* div offre */






/* description */

.description {
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  text-align: center;
  height: 100vh;
  margin-left: 100px;
  margin-right: 100px;
  margin-bottom:10%;
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
  width: 300px;
  height: 300px;
  border-radius: 50%;
}
/* Ajoutez vos styles par défaut ici */

/* Styles pour les écrans de taille normale */

/* Styles pour les appareils mobiles */
@media (max-width: 767px) {
  .description {
    margin-left: 20px; /* Ajustez la marge gauche selon vos préférences */
    margin-right: 20px; /* Ajustez la marge droite selon vos préférences */
    padding: 10px; /* Ajustez le padding selon vos préférences */
  }

  .description h1 {
    font-size: 20px; /* Ajustez la taille de police selon vos préférences */
    margin-bottom: 8px; /* Ajustez la marge inférieure selon vos préférences */
  }

  .description p {
    font-size: 14px; /* Ajustez la taille de police selon vos préférences */
    margin-bottom: 16px; /* Ajustez la marge inférieure selon vos préférences */
  }

  .description img {
    width: 200px; /* Ajustez la largeur de l'image selon vos préférences */
    height: 200px; /* Ajustez la hauteur de l'image selon vos préférences */
    border-radius: 50%;
  }
}

/* Styles pour les tablettes */
@media (min-width: 768px) and (max-width: 1023px) {
  /* Ajoutez vos styles spécifiques aux tablettes ici */
}

/* Styles pour les écrans plus larges */
@media (min-width: 1024px) {
  /* Ajoutez vos styles spécifiques aux écrans plus larges ici */
}


/* ----------- SLIDER ------------ */
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap');

.swiper{
  font-family: var(--font);
  display: flex;
  justify-content: center;
  align-items: center;
  height: 100vh;
  background-color: var(--bg-color);
  margin-bottom:10%;
}


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
  width: 26em;
  height: 100%;
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
/* Ajoutez vos styles par défaut ici */

/* Styles pour les écrans de taille normale */

/* Styles pour les appareils mobiles */
@media (max-width: 767px) {
  .container {
    margin-left: 10px; /* Ajustez la marge gauche selon vos préférences */
    margin-right: 10px; /* Ajustez la marge droite selon vos préférences */
  }

  .swiper-wrapper {
    height: auto;
  }

  .card {
    width: 100%;
    margin: 0 10px; /* Ajustez la marge horizontale selon vos préférences */
  }

  .card__title {
    font-size: 1.2rem; /* Ajustez la taille de police selon vos préférences */
  }

  .card__text {
    font-size: 0.9rem; /* Ajustez la taille de police selon vos préférences */
  }

  .card__btn {
    font-size: 0.9rem; /* Ajustez la taille de police selon vos préférences */
    padding: 0.3em 0.7em; /* Ajustez les valeurs de padding selon vos préférences */
  }
}

/* Styles pour les tablettes */
@media (min-width: 768px) and (max-width: 1023px) {
  /* Ajoutez vos styles spécifiques aux tablettes ici */
}

/* Styles pour les écrans plus larges */
@media (min-width: 1024px) {
  /* Ajoutez vos styles spécifiques aux écrans plus larges ici */
}




/* div objectif */
.objectif {
  display: flex;
  justify-content: center;
  align-items: center;
  flex-wrap: wrap;
  margin-bottom: 10%;
}

.obj {
  text-align: center;
  margin: 0 auto;
  width: 70%;
}

.desc {
  display: flex;
  align-items: center;
  width: 70%;
  margin-top: 20px;
}

.content {
  flex: 1;
}

.animated-list {
  list-style: none;
  padding: 0;
}

.animated-list li {
  position: relative;
  padding: 10px;
  border: 1px solid rgb(0, 0, 0);
  margin-bottom: 10px;
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

.image {
  flex: 1;
  text-align: right;
}

.image img {
  max-width: 100%;
  height: auto;
}

/* Ajouter styles pour les appareils portables */

@media (max-width: 768px) {
  .objectif {
    margin-bottom: 5%;
  }

  .obj,
  .desc,
  .content,
  .image {
    width: 90%;
  }

  .animated-list li {
    padding: 8px;
    margin-bottom: 8px;
  }
}
/* div objectif */








/* div service */
.services {
  width: 100%;
  height: 100vh;
  display: flex;
  justify-content: center;
  align-items: center;
  flex-direction: column;
  background: #ffffff;
}

.s-heading {
  text-align: center;
}

.s-heading h1 {
  color: #576975;
  font-size: 2rem;
  font-weight: 400;
  letter-spacing: 1px;
  margin: 0px;
}

.s-heading p {
  color: rgba(87, 105, 117, 0.6);
  font-size: 1rem;
  margin: 10px;
  text-align: center;
}

.s-box span {
  display: flex;
  background-size: cover;
  align-items: center;
  width: 170px;
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
  width: 500px;
  height: 350px;
  padding: 20px 25px;
  box-sizing: border-box;
  margin: 15px;
  box-shadow: 2px 2px 30px rgba(0, 0, 0, 0.2);
  position: relative;
}

.s-box h2 {
  color: #576975;
  letter-spacing: 1px;
  font-size: 1rem;
  margin-bottom: 8px;
}

.s-box:hover {
  box-shadow: 2px 2px 30px rgba(0, 0, 0, 0.08);
  transition: all ease 0.3s;
}

.bar {
  width: 100px;
  height: 6px;
  position: absolute;
  left: 50%;
  top: 0px;
  transform: translateX(-50%);
  background-color: #4a90e2;
  border-radius: 0px 0px 10px 10px;
  display: none;
  animation: bar 0.5s;
}

.s-box:hover .bar {
  display: block;
}

.s-box p {
  color: #5e6366;
  line-height: 1.4;
}

.s-box img {
  background: transparent;
  width: 400px;
  height: 150px;
  display: flex;
  justify-content: center;
  align-items: center;
}

/* Ajoutez vos styles par défaut ici */

/* Styles pour les écrans de taille normale */

/* Styles pour les appareils mobiles */
@media (max-width: 767px) {
  .s-heading h1 {
    font-size: 1.5rem; /* Ajustez la taille de la police selon vos préférences */
  }

  .s-heading p {
    font-size: 0.8rem; /* Ajustez la taille de la police selon vos préférences */
  }

  .s-box {
    flex-basis: 90%; /* Ajustez la largeur selon vos préférences */
    height: auto;
    margin: 10px 0;
    width: 90%; /* Ajustez la largeur selon vos préférences */
  }

  .s-box img {
    width: 100%; /* Ajustez la largeur selon vos préférences */
    height: auto;
  }
}

/* div service */





/* div contenu */
.contenu {
  text-align: center;
  margin-bottom: 10%;
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
  flex-wrap: wrap; /* Permet aux éléments de passer à la ligne sur les petits écrans */
}

.contenu .content .half {
  flex: 1;
  text-align: left;
  padding: 20px;
  box-sizing: border-box; /* Inclure les paddings dans la largeur totale de l'élément */
}

.contenu .content .half1 {
  margin-left: 15%;
}

.contenu .half h3 {
  margin-top: 0;
}

.contenu .content .half img {
  width: 100%;
  height: auto;
}

/* Ajouter des règles de média queries pour les appareils mobiles */
@media (max-width: 768px) {
  .contenu .content .half {
    flex-basis: 100%; /* L'élément occupe toute la largeur disponible */
    margin-bottom: 20px;
  }
  
  .contenu .content .half1 {
    margin-left: 0;
  }
  
  .contenu hr {
    margin-left: 0;
  }
}

/* div contenu */




/* div  prix */
.prix {
  padding: 20px;
  display: flex;
  justify-content: space-between;
  margin-bottom: 10%;
}
.p1 {
  width: 33.33%;
}
.p2 {
  width: 33.33%;
}
.p3 {
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

.prix img{
   margin-left: 30%;
}
/* Ajoutez vos styles par défaut ici */

/* Styles pour les écrans de taille normale */

/* Styles pour les appareils mobiles */
@media (max-width: 767px) {
  .prix {
    flex-wrap: wrap; /* Faites en sorte que les éléments s'enveloppent pour les appareils mobiles */
    justify-content: center; /* Centrer les éléments horizontalement */
    padding: 10px; /* Ajustez le padding selon vos préférences */
    margin-bottom: 5%;
  }

  .p1, .p2, .p3 {
    width: 100%; /* Faites en sorte que les colonnes occupent 100% de la largeur */
    margin-bottom: 20px; /* Ajoutez un espace entre les éléments */
  }

  .prix h3, .prix p {
    margin-left: 0; /* Supprimez les marges latérales pour les éléments de prix */
    margin-right: 0;
    text-align: center; /* Centrez le texte horizontalement */
    font-size: 14px; /* Ajustez la taille de police selon vos préférences */
  }

  .prix img {
    margin: 0 auto; /* Centrez l'image horizontalement */
    display: block; /* Assurez-vous que l'image s'affiche en tant que bloc pour respecter les marges */
    width: 60%; /* Ajustez la largeur de l'image selon vos préférences */
    max-width: 200px; /* Limitez la largeur maximale de l'image si nécessaire */
  }
  
  /* Ajoutez d'autres styles spécifiques aux appareils mobiles ici */
}

/* Styles pour les tablettes */
@media (min-width: 768px) and (max-width: 1023px) {
  /* Ajoutez vos styles spécifiques aux tablettes ici */
}

/* Styles pour les écrans plus larges */
@media (min-width: 1024px) {
  /* Ajoutez vos styles spécifiques aux écrans plus larges ici */
}

/* div  prix */

  </style>
</head>
<body>





@include('nav')





















<div class="blue-div">
    <div class="left-div">
        <div class="circle-container">
                <div class="half-circle">
                  <img src="IMG/kisspng-semicircle-geometric-shape-geometry-free-range-eggs-5ae911ac678113.977680541525223852424.png" alt="Votre image">
                </div>
        </div>
            <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
            <lottie-player src="https://assets2.lottiefiles.com/packages/lf20_tco2osel.json" background="transparent" speed="1" style="width: 500px; height: 500px;"></lottie-player>
    </div>
    <div class="right-div">
        <img src="IMG/cube-png-18939.png" alt="Votre image">
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
    <form id="domain-search-form" action="{{ route('recherche') }}" method="POST">
    @csrf
    <input type="text" name="domain" class="search-input small-input" placeholder="Ex: exemple.com">
    <button type="submit" class="search-btn">Rechercher</button>
</form>

    <div id="availability-message"></div>
</div>



    
  </div>




  <p style="margin-top: 4%; margin-bottom: 4%;">Nous disposons de plus de 200 extensions de noms de domaine .</p>
  <div class="card-container">
    <div class="card1">
      <img src="image1.jpg" alt="Image 1">
      <p>120.00 Dhs /an</p>
    </div>

    <div class="card1">
      <img src="IMG/Capture d'écran 2023-07-13 211842.png" alt="Image 2">
      <p>120.00 Dhs /an</p>
    </div>

    <div class="card1">
      <img src="IMG/Capture d'écran 2023-07-13 211848.jpg" alt="Image 2">
      <p>160.00 Dhs /an</p>
    </div>

    <div class="card1">
      <img src="IMG/Capture d'écran 2023-07-13 211856.jpg" alt="Image 2">
      <p>320.00 Dhs /an</p>
    </div>

    <div class="card1">
      <img src="IMG/Capture d'écran 2023-07-13 211903.jpg" alt="Image 2">
      <p>500.00 Dhs /an</p>
    </div> 

    <div class="card1">
      <img src="IMG/Capture d'écran 2023-07-13 211910.jpg" alt="Image 2">
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
            <ul>
              <li>- GRATUIT > 1 Domaine + 1 Certificat SSL + Migration</li>
              <li>- Node.js, Python, Ruby, PHP et Perl</li>
              <li>- Haute disponibilité, Sécurisé par CloudLinux et Imunify360</li>
              <li>- Datacenter avec redondance N+1 à tous les niveaux</li>
            </ul>
            <p>À partir de <span>28.30 Dhs /mois</span></p>
            <button>CONSULTEZ NOS OFFRES</button>
          </div>
          <div class="carte1">
            <h2>Serveurs VPS Cloud</h2>
            <ul>
              <li>- Le choix entre des serveurs Managed ou Unmanaged</li>
              <li>- Disque durs 100% SSD</li>
              <li>- Plusieurs choix de licences et systèmes d'exploitation</li>
              <li>- Notre propre plateforme gérée 100% par ADK Media</li>
            </ul>
            <p>À partir de  <span>159 Dhs /mois</span></p>
            <button>NOS SERVEUR VPS CLOUD</button>
          </div>
        </div>
</div>













<div class="description">
    <h1>Hébergement Web de haute qualité pour les entreprises - Host Oplus.</h1>
    <p>Host Oplus est une entreprise spécialisée dans l'hébergement et la gestion de sites web pour les entreprises. Nous fournissons des solutions d'hébergement web haut de gamme, adaptées aux besoins de nos clients. Notre mission est d'offrir un service fiable, sécurisé et évolutif pour répondre aux exigences de leurs activités en ligne.</p>
    <p>Nous sommes convaincus que la réussite de nos clients est notre réussite, c'est pourquoi nous offrons un support technique de qualité, une surveillance en temps réel de nos serveurs, des mises à jour régulières des logiciels et des outils de sécurité avancés pour protéger les sites web de nos clients contre les menaces en ligne. Nous proposons également des solutions personnalisées pour répondre aux besoins spécifiques de chaque entreprise.</p>
    <p>Nos clients font confiance à Host Oplus pour notre expertise en matière d'hébergement web, notre engagement envers la qualité et la sécurité de nos services, ainsi que notre engagement à fournir un service client exceptionnel. Nous avons aidé de nombreuses entreprises à réussir en ligne, et nous sommes prêts à travailler avec vous pour vous aider à atteindre vos objectifs en ligne.</p>
    <img src="IMG/Capture d'écran 2023-07-14 193255.png" alt="Image"> 
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
          <h4 style="font-size: large; margin-top: 10%;">299 DHs <span style="font-size: smaller; margin-left: 10px;"><s>499 DHs</s></span> </h4>
          <p>An</p>
          <button class="card__btn">Commencer</button>
      </div>

      <div class="card swiper-slide">
          <h3 style="background-color: #000000; color: #ffffff; margin-bottom: 10%; padding: 1em; border-radius: 0.5em; text-align: center; text-transform: uppercase; letter-spacing: 2px;">PERSONNEL</h3>
          <h4 style="font-size:large;">100<span style="font-size:smaller;">GB</span></h4>
          <p style="border-bottom: 1px solid #727272; width: 80%; ">Bande Passante illimité</p>
          <p style="border-bottom: 1px solid #727272; width: 80%;">Base de données 20</p>
          <p style="border-bottom: 1px solid #727272; width: 80%;">Sous Domaiines 5</p>
          <p style="border-bottom: 1px solid #727272; width: 80%;">cPanel Control Panel</p>
          <p style="border-bottom: 1px solid #727272; width: 80%;">200+ One-Click Installs</p>
          <p style="border-bottom: 1px solid #727272; width: 80%;">2Tbps DDoS Protection</p>
          <p style="border-bottom: 1px solid #727272; width: 80%;">Certificats SSL</p>
          <p>Builder Web</p>
          <h4 style="font-size: large; margin-top: 10%;"> 499 DHs <span style="font-size: smaller; margin-left: 10px;"><s>599 DHs</s></span></h4>
          <p>An</p>
          <button class="card__btn">Commencer</button>
      </div>

      <div class="card swiper-slide">
          <h3 style="background-color: #000000; color: #ffffff; margin-bottom: 10%; padding: 1em; border-radius: 0.5em; text-align: center; text-transform: uppercase; letter-spacing: 2px;">PERSONNEL</h3>
          <h4 style="font-size:large;">250<span style="font-size:smaller;">GB</span></h4>
          <p style="border-bottom: 1px solid #727272; width: 80%; ">Bande Passante illimité</p>
          <p style="border-bottom: 1px solid #727272; width: 80%;">Base de données 50</p>
          <p style="border-bottom: 1px solid #727272; width: 80%;">Sous Domaiines 10</p>
          <p style="border-bottom: 1px solid #727272; width: 80%;">cPanel Control Panel</p>
          <p style="border-bottom: 1px solid #727272; width: 80%;">200+ One-Click Installs</p>
          <p style="border-bottom: 1px solid #727272; width: 80%;">2Tbps DDoS Protection</p>
          <p style="border-bottom: 1px solid #727272; width: 80%;">Certificats SSL</p>
          <p>Builder Web</p>
          <h4 style="font-size: large; margin-top: 10%;"> 999 DHs <span style="font-size: smaller; margin-left: 10px;"><s>1300 DHs</s></span> </h4>
          <p>An</p>
          <button class="card__btn">Commencer</button>
      </div>

      <div class="card swiper-slide">
          <h3 style="background-color: #000000; color: #ffffff; margin-bottom: 10%; padding: 1em; border-radius: 0.5em; text-align: center; text-transform: uppercase; letter-spacing: 2px;">PERSONNEL</h3>
          <h4 style="font-size:large;">500<span style="font-size:smaller;">GB</span></h4>
          <p style="border-bottom: 1px solid #727272; width: 80%; ">Bande Passante illimité</p>
          <p style="border-bottom: 1px solid #727272; width: 80%;">Base de données 100</p>
          <p style="border-bottom: 1px solid #727272; width: 80%;">Sous Domaiines 50</p>
          <p style="border-bottom: 1px solid #727272; width: 80%;">cPanel Control Panel</p>
          <p style="border-bottom: 1px solid #727272; width: 80%;">200+ One-Click Installs</p>
          <p style="border-bottom: 1px solid #727272; width: 80%;">2Tbps DDoS Protection</p>
          <p style="border-bottom: 1px solid #727272; width: 80%;">Certificats SSL</p>
          <p>Builder Web</p>
          <h4 style="font-size: large; margin-top: 10%;"> 1500 DHs <span style="font-size: smaller; margin-left: 10px;"><s>2300 DHs</s></span> </h4>
          <p>An</p>
          <button class="card__btn">Commencer</button>
      </div>

      <div class="card swiper-slide">
        <h3 style="background-color: #000000; color: #ffffff; margin-bottom: 10%; padding: 1em; border-radius: 0.5em; text-align: center; text-transform: uppercase; letter-spacing: 2px;">PERSONNEL</h3>
          <h4 style="font-size:large;">oo<span style="font-size:smaller;">GB</span></h4>
          <p style="border-bottom: 1px solid #727272; width: 80%; ">Bande Passante illimité</p>
          <p style="border-bottom: 1px solid #727272; width: 80%;">Base de données illimité</p>
          <p style="border-bottom: 1px solid #727272; width: 80%;">Sous Domaiines illimité</p>
          <p style="border-bottom: 1px solid #727272; width: 80%;">cPanel Control Panel</p>
          <p style="border-bottom: 1px solid #727272; width: 80%;">200+ One-Click Installs</p>
          <p style="border-bottom: 1px solid #727272; width: 80%;">2Tbps DDoS Protection</p>
          <p style="border-bottom: 1px solid #727272; width: 80%;">Certificats SSL</p>
          <p>Builder Web</p>
          <h4 style="font-size: large; margin-top: 10%;"> 1699 DHs <span style="font-size: smaller; margin-left: 10px;"><s>2499 DHs</s></span></h4>
          <p>An</p>
          <button class="card__btn">Commencer</button>
      </div>

  </div>
</section>











<div class="objectif">
  <div class="obj">
  <h2>Nous vous créons un site internet clés en main</h2>
  <p>De nombreuses fonctionnalités disponibles. Réalisez vos objectifs en demandant l'ajout de fonctionnalités utiles pour votre site internet. Vous pourrez en ajouter plus tard si vous n'avez pas besoin maintenant.</p>
  </div>
  <div class="desc">
      <div class="content">
      <ul class="animated-list">
         <li>Design responsive adapté à tous les supports : PC, smartphone, tablette ...</li>
         <li>Contrôle total de votre site via un accès administrateur .</li>
         <li>Installation d’un chat pour engager la conversation avec vos visiteurs .</li>
         <li>Installation et configuration d’un blog dans votre site pour partager votre expertise.</li>
         <li>Installation d'applications indispensables d'optimisation, gestion des cookies …</li>
         <li>Couverture d’accueil, images catégories, bannières,  etc...</li>
      </ul>
      </div>
      <div class="image">
          <img src="IMG/Capture d'écran 2023-07-12 201603.jpg">
      </div>
  </div>
</div>











<section class="services" id="services">
    <div class="s-heading">
        <h1>Création site Internet au Maroc</h1>
        <p>Des sites beaux et fonctionnels, pour mieux présenter votre activité et vous aider à vendre</p>
    </div>
    <div class="s-box-container">
        @foreach ($cartes as $carte)
        <div class="s-box">
            <div class="bar"></div>
            <span class="img">
                <img src="{{ asset('IMG/' . $carte->imgcarte) }}" alt="">
            </span>
            <h2>{{ $carte->titrecarte }}</h2>
            <p>{{ $carte->desccarte }}</p>
            <a href="{{ route('card.details', ['id' => $carte->id]) }}">More</a>
        </div>
        @endforeach
    </div>
</section>










<div class="contenu">
  <h3>EN QUOI CONSISTE CE PROGRAMME?</h3>
  <hr>
  <div class="content">
    <div class="half half1">
      <h5>NOS PRODUITS, VOTRE MARQUE</h5>
      <img src="chemin_vers_l'image.png" alt="Image">
      <p>Nous mettons à votre disposition un espace client 100% marque blanche, que vous pouvez fournir à vos clients avec votre propre logo, pour gérer leurs commandes, factures, produits et noms de domaine</p>
    </div>
    <div class="half">
      <h5>VOUS ÊTES LIBRE DE FIXER VOS PROFITS</h5>
      <img src="chemin_vers_l'image.png" alt="Image">
      <p>Nous fournissons des produits très compétitifs dont vous pouvez modifier le nom et les prix, sans aucune mention de Host Oplus, vous pouvez fixer les marges que vous souhaitez</p>
    </div>
  </div>
</div>








<h2 style="display: flex;  justify-content: center;  align-items: center; margin-left: 10%; margin-right: 10%; color: #3db5fa;" >VOS PRIX JUSQU'À -50% COMPARÉS AUX PRIX DE NOS PRODUITS</h2>
<div class="prix">
  
  <div class="p1">
     <img src="IMG/Capture d'écran 2023-07-13 154446.png" alt="">
     <h3>LES MEILLEURS PRIX DE L'HÉBERGEMENT WEB</h3>
     <p>Des produits d'hébergement Web très bien étudiés, avec des prix et caractéristiques défiant toute concurrence</p>
  </div>
  <div class="p2">
    <img src="IMG/Capture d'écran 2023-07-13 154452.png" alt="">
    <h3>DES CENTAINES D'EXTENSIONS DE NOMS DE DOMAINE</h3>
    <p>Offrez des centaines d'extensions de noms de domaine à vos clients, aux meilleurs prix du marché, avec gestion en marque blanche</p>
  </div>
  <div class="p3">
    <img src="IMG/Capture d'écran 2023-07-13 154459.png" alt="">
    <h3>TOUTE NOTRE EXPERTISE A VOTRE DISPOSITION</h3>
    <p>Présents sur le marché de l'hébergement Web depuis 2010, nous mettons toute notre expérience et savoir-faire au profit de votre business</p>
  </div>
</div>







@include('footer')



<!-- recherche -->
<script>
    document.getElementById("domain-search-form").addEventListener("submit", function(event) {
        event.preventDefault();

        var domain = document.querySelector(".search-input").value;

        var xhr = new XMLHttpRequest();
        xhr.open("POST", "{{ route('recherche') }}", true);
        xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        xhr.onreadystatechange = function() {
            if (xhr.readyState === XMLHttpRequest.DONE && xhr.status === 200) {
                var response = JSON.parse(xhr.responseText);
                var isAvailable = response.isAvailable;

                var messageElement = document.getElementById("availability-message");

                if (isAvailable) {
                    messageElement.textContent = "Le nom de domaine est disponible !";
                } else {
                    messageElement.textContent = "Le nom de domaine n'est pas disponible.";
                }
            }
        };
        xhr.send("domain=" + encodeURIComponent(domain));
    });
</script>





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