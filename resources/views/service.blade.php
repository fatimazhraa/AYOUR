<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
    <link href='http://fonts.googleapis.com/css?family=Roto:bo400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900italic,900' rel='stylesheet' type='text/css'>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@1,100&display=swap" rel="stylesheet">

    <title>Host Oplus - Hébergement web</title>
    <style>
          @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap');

 * {
   margin: 0;
   padding: 0;
   box-sizing: border-box;
   scroll-behavior: smooth;
   font-family: 'Poppins', sans-serif;
 }


 body {
  font-family: 'Poppins', sans-serif;
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;

}

.services {
  display: flex;
  justify-content: center;
  align-items: center;
  flex-direction: column;
  background: #ffffff;
  margin:10%;
}

.s-heading {
  text-align: center;
}

.s-heading h1 {
  color: #1a1a1a;
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
  width: 300px; /* Set the desired width */
  height: 350px; /* Set the desired height */
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  padding: 20px 25px;
  box-sizing: border-box;
  margin: 15px;
  position: relative;
  background-color: #ffffff;
  color: white;
  border: 1px solid #dddddd;
  border-radius: 10px;
}

.s-box h2 {
  color: #2a776a;
  letter-spacing: 1px;
  font-size: 20px;
  margin-bottom: 8px;
}



.bar {
  width: 100px;
  height: 6px;
  position: absolute;
  left: 50%;
  top: 0px;
  transform: translateX(-50%);
  background-color: #0b8c8c;
  display: none;
  animation: bar 0.5s;
}

.s-box:hover .bar {
  display: block;
}

.s-box p {
  color: #5e6366;
  line-height: 1.4;
  font-size:15px;
}
.s-box img {
  background: transparent;
  width: 400px;
  height: 150px;
  display: flex;
  justify-content: center;
  align-items: center;
  margin-left:10%;
}
.s-box a {
            text-decoration: none;
        }




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
.content2{

background-color:#f1f1f1;
width:100%;
}
.sousContent2 {
  display: grid;
  grid-template-columns: repeat(3, 1fr); /* Three equal columns */
  grid-gap: 20px; /* Add gap between the columns */
  margin-left:10%;
margin-right:10%;
margin-top:20px;
}
.sousContent2 h3{
    color:#777777;
}
ul{
    list-style:none;
}
.hr{
    margin:0 auto;
    width:40px;
}
.sousContent2 li {
    margin-bottom: 10px; /* Adjust the desired space between list items */

  }
  .sousContent2 li i {
    margin-right: 5px; /* Adjust the desired space between icon and text */
  }
  .sousContent2 i{
    color:#d09dee;
  }
  .content3 {
  display: flex;
  flex-wrap: wrap;
  margin-left:10%;
  margin-right:10%;
}

.container {
  flex-basis: 50%;
  display: flex;
  align-items: center;
  margin-bottom: 20px;
}

.left-content {
  flex: 0 0 auto;
  margin-right: 20px;
}

.right-content {
  flex: 1;
}
.right-content p{
    font-size:20px;
}
.right-content h4{
    color:rgb(134, 134, 134);
}
.content4 {
  display: flex;
  flex-wrap: wrap;
  margin-left:10%;
  margin-right:10%;

}

.container {
  flex-basis: 50%;
  display: flex;
  align-items: center;
}

.left-content {
  flex: 0 0 auto;
  margin-right: 20px;
}

.right-content {
  flex: 1;
}
.contt{
  background-color:#f1f1f1;
}

.row h1{
  color: #0b8c8c;
  font-size:50px;
}
.row p{
  font-size:25px;
}
.row {
  display: flex;
  align-items: center;
  justify-content: space-between;
  padding-top:10%;
  margin-left:10%;
}

.row img {
  flex-shrink: 0; /* Prevent the image from shrinking */
  width: 25%; /* Adjust the width as needed */
  margin-left: 20px; /* Add some margin to separate the image from the content */
}

#lock {
 width: 65%;
 height: 65%;  
}
.content{
text-align left;
}


</style>
</head>
<body>
@include('layouts.header')



<div class="row">
  <div class="content">
    <h1>Développez Votre Visibilité</h1>
    <p>
      L'agence web Host Oplus accompagne les entreprises dans leurs projets digitaux.
    </p>
  </div>
  <img id="lock" src="IMG/about5.png">
</div>





    <section class="services" id="services">
    <div class="s-heading">
        <h1>Création site Internet au Maroc</h1>
        <p>Des sites beaux et fonctionnels, pour mieux présenter votre activité et vous aider à vendre</p>
    </div>
    <div class="s-box-container">
        @foreach ($cartes as $carte)
        <div class="s-box">
        <a href="{{ route('card.details', ['id' => $carte->id]) }}">
            <div class="bar"></div>
            <span class="img">
                <img src="{{ asset('IMG/' . $carte->imgcarte) }}" alt="">
            </span>
            <h2>{{ $carte->titrecarte }}</h2>
            <p>{{ $carte->desccarte }}</p>
           </a>
        </div>
        @endforeach
    </div>
</section>





















    <div class="content2">
  <h2 style="text-align: center;padding-top:40px;">CE QUI DÉMARQUE NOS SITES WEB</h2>
  <hr class="hr">
  <div class="sousContent2">
    <div class="list1">
      <ul>
        <h3>Optimisés pour le SEO</h3>
        <li><i class="fas fa-check text-success"></i> Respect de vos mots clé</li>
        <li><i class="fas fa-check text-success"></i> Respect des normes SEO</li>
        <li><i class="fas fa-check text-success"></i> Fichier Sitemap XML</li>
        <li><i class="fas fa-check text-success"></i> Design clean et épuré</li>
        <li><i class="fas fa-check text-success"></i> Mobile friendly</li>
        <li><i class="fas fa-check text-success"></i> Intégration Google analytics</li>
        <li><i class="fas fa-check text-success"></i> Intégration Google Search Console</li>
      </ul>
    </div>
    <div class="list2">
      <ul>
        <h3>Sécurisés et performants</h3>
        <li><i class="fas fa-check text-success"></i> Toutes les pages en HTTPS</li>
        <li><i class="fas fa-check text-success"></i> Envoi des formulaires en SMTP</li>
        <li><i class="fas fa-check text-success"></i> Formulaires sécurisés avec Captcha</li>
        <li><i class="fas fa-check text-success"></i> Validation des performances</li>
        <li><i class="fas fa-check text-success"></i> Meilleur temps de réponse</li>
        <li><i class="fas fa-check text-success"></i> Validation Google mobile</li>
        <li><i class="fas fa-check text-success"></i> Pages valides W3C</li>
      </ul>
    </div>
    <div class="list3">
      <ul>
        <h3>Un contenu soigné</h3>
        <li><i class="fas fa-check text-success"></i> Slider en page d’accueil</li>
        <li><i class="fas fa-check text-success"></i> Pages de mentions légales</li>
        <li><i class="fas fa-check text-success"></i> Page de contact avec Google Map</li>
        <li><i class="fas fa-check text-success"></i> Page 404 personnalisée</li>
        <li><i class="fas fa-check text-success"></i> Favicon personnalisée</li>
        <li><i class="fas fa-check text-success"></i> Intégration des réseaux sociaux</li>
        <li><i class="fas fa-check text-success"></i> Polices modernes Google fonts</li>
      </ul>
    </div>
  </div>
</div>




<h1 style="text-align: center; font-size:50px; ">PLUS DE 20 ANS DE MÉTIER</h1>
    <p style="text-align: center;">Dans le développement de sites et applications Web</p>
    <hr class="hr">
<div class="content3">
  <div class="container">
    <div class="left-content">
      <img src="IMG/Capture d'écran 2023-07-27 171543.png" alt="Image">
    </div>
    <div class="right-content" style= "margin-top:20px;">
      <h4>VOUS BÉNÉFICIEZ DE NOTRE LONGUE EXPÉRIENCE</h4>
      <p>Dans le métier depuis 2001, nous savons exactement la solution à mettre en place et le type de site Web à vous offrir, votre site n'est pas juste une vitrine, c'est un outil de promotion et de vente que nous vous aidons à mettre en place.</p>
    </div>
  </div>
  <div class="container">
    <div class="left-content">
      <img src="IMG/Capture d'écran 2023-07-27 171557.png" alt="Image">
    </div>
    <div class="right-content">
      <h4>VOUS ÊTES SÛRS D'AVOIR UN SITE DE QUALITÉ</h4>
      <p>Nous sommes des adeptes du détail, chaque page est scrutée et validée, chaque positionnement d'élément graphique est étudié, chaque site est livré prêt pour le référencement naturel avec un code optimisé et propre.</p>
    </div>
  </div>
  <div class="container">
    <div class="left-content">
      <img src="IMG/Capture d'écran 2023-07-27 171615.png" alt="Image">
    </div>
    <div class="right-content">
      <h4>NOUS LIVRONS UN SITE PERFORMANT ET RAPIDE</h4>
      <p>Nous concevons pour vous des sites Internet testés avec les derniers outils de mesure performances mondialement connus, nous hébergeons votre site sur des serveurs ultra-rapides en haute performance, pour vous permettre d'avoir un bon ranking dans les moteurs de recherche.</p>
    </div>
  </div>
  <div class="container">
    <div class="left-content">
      <img src="IMG/Capture d'écran 2023-07-27 171631.png" alt="Image">
    </div>
    <div class="right-content">
      <h4>NOUS OPTIMISONS LE CONTENU DE VOTRE SITE</h4>
      <p>Au début de chaque projet, nous définissons avec vous les bons mots clé sur lesquels se basera votre contenu, nos experts évaluent alors vos textes et les optimisent pour un meilleur rendu en page mais surtout pour vous assurer le meilleur positionnement face à vos concurrents sur les moteurs de recherche.</p>
    </div>
  </div>
</div>








<div class="contt">
   <h4 style="text-align: center; font-size:25px; padding-top:40px;">NOTRE PROCESSUS DE CRÉATION</h4>
   <hr class="hr">


<div class="content4">

  <div class="container">
    <div class="left-content">
      <img src="IMG/Capture d'écran 2023-07-30 165656.png" alt="Image">
    </div>
    <div class="right-content">
      <h4>ETAPE 1</h4>
      <p>Vous choisissez la formule qui vous convient, puis nous contactez ou commandez et payez le service de création de votre site directement depuis notre espace de commande.</p>
    </div>
  </div>
  <div class="container">
    <div class="left-content">
      <img src="IMG/Capture d'écran 2023-07-30 165711.png" alt="Image">
    </div>
    <div class="right-content">
      <h4>ETAPE 2</h4>
      <p>Nous définissons ensemble, la structure et les modèles des pages en se basant sur l'un de nos modèles pré-conçus ou un modèle personnalisé, suivant l'offre que vous avez choisi.</p>
    </div>
  </div>
  <div class="container">
    <div class="left-content">
      <img src="IMG/Capture d'écran 2023-07-30 165730.png" alt="Image">
    </div>
    <div class="right-content">
      <h4>ETAPE 3</h4>
      <p>Vous nous envoyez votre contenu (textes, images, vidéos), ou bien nous préparons votre contenu si vous avez souscrit à notre service de rédaction ou de production photo ou vidéo.</p>
    </div>
  </div>
  <div class="container">
    <div class="left-content">
      <img src="IMG/Capture d'écran 2023-07-30 165746.png" alt="Image">
    </div>
    <div class="right-content">
      <h4>ETAPE 4</h4>
      <p>Nous vous livrons la première version de votre site web, telle que discutée et définie dans les étapes précédentes.</p>
    </div>
  </div>
  <div class="container">
    <div class="left-content">
      <img src="IMG/Capture d'écran 2023-07-30 165754.png" alt="Image">
    </div>
    <div class="right-content">
      <h4>ETAPE 5</h4>
      <p>Boucle de modification: Look / Edit / Update, vous nous faites part de vos éventuelles modifications des pages que nous vous avons livrées.</p>
    </div>
  </div>
  <div class="container">
    <div class="left-content">
      <img src="IMG/Capture d'écran 2023-07-30 165759.png" alt="Image">
    </div>
    <div class="right-content">
      <h4>ETAPE 6</h4>
      <p>Nous procédons à la mise en ligne de votre site web, vous disposez d'une période de 15 à 30 jours de garantie pour effectuer les ultimes modifications mineures.</p>
    </div>
  </div>
</div>
</div>


    @include('layouts.footer')
</body>
</html>
