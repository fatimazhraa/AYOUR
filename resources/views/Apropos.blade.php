<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<style>
/*start header*/

@import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@1,100&display=swap');

*{
    font-family: 'Poppins', sans-serif;
}


.blue-div {
  margin-top: 10%;
  background-color: rgb(163, 204, 243);
  padding: 20px;
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  margin-bottom:5%;
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
  /*transition: transform 0.3s ease;
  animation: moveLeftRight 2s linear infinite;*/
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

.blue-div img:hover {
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
/*end header*/

.who{
    padding-top:5%;

}

.colps{
    margin-top:-8%;
    margin-left:8%;
}

.colps a{
    background-color: #0b8c8c;
}

.heberg{
    margin-top:5%;
}

.first{
    margin-top:5%;
}

.bg1{
    background-color: #0b8c8c;
    color:white;
    font-family: 'Poppins', sans-serif;
    margin-left:25%;
    margin-bottom:1%;
    font-size:17px;
}

.bg1:hover{
    background-color:#0b8c8c;
    color:white;

}

.square{
  transition: transform 0.2s ease;
}
.square:hover{
  transform: translateY(-5px);
}

.crd{
  transition: transform 0.2s ease;
}

.crd:hover{
  transform: translateY(-5px);
}

</style>

@include('layouts.header')
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

<div><hr style="text-align:center;margin-left:20%;margin-right:20%;margin-bottom:10%;"></div>



<div class="row justify-content-center first">
    <div class="col-5 who" >
        <h1>Qui sommes-nous ?</h1>
        <p>Host Oplus est un service proposé par la société Ayour Concept créée par des passionnés du Web, dans le but de fournir des solutions de qualité en Hébergement Web, enregistrement de Noms de Domaine et Certificats SSL.
        Ayant commencé en 2006, nous avons servi des milliers de clients au Monde</p>

    </div>
    <img class="col-5" src="IMG/about1.PNG">
</div>



<div class="row colps">
        <p>
          <a class="btn btn-primary"  data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
          Nous la communauté Web
          </a>

        </p>
        <div class="collapse col-5 " id="collapseExample" >
           <div class="card card-body ">
           Nous faisons partie d'une communauté Web nationale et mondiale très active, l'une de nos valeurs est le partage de connaissances, de ce fait, nous organisons régulièrement des événements autour du Web et ses technologies, et nous soutenons des initiatives visant la promotion de la technologie et du Web en général, que ça soit de façon individuelle par les membres de nos équipes ou de manière institutionnelle.           </div>
        </div>
</div>

<div><hr style="text-align:center;margin-top:10%;margin-left:20%;margin-right:20%;"></div>

<div class="row justify-content-center"  style="text-align:center;"> <h1 class="col-6">Hébergement Web de haute qualité pour les entreprises - Host Oplus.</h1></div>
<div class="row justify-content-center heberg">
     <div class="col-5 align-self-center">

        <p style="font-size:120%;">Host Oplus est une entreprise spécialisée dans l'hébergement et la gestion de sites web pour les entreprises. Nous fournissons des solutions d'hébergement web haut de gamme, adaptées aux besoins de nos clients. Notre mission est d'offrir un service fiable, sécurisé et évolutif pour répondre aux exigences de leurs activités en ligne.
             </p>
     </div>
     <img class="col-5 " style="margin-bottom:5%;" src="IMG/about4.png">
</div>


<div class="badge  col-6  p-3  bg1">UN DATACENTER DERNIÈRE GÉNÉRATION</div>
<div class="badge col-6 p-3 bg1">SERVEURS SÉCURISÉS ET PERFORMANTS</div>
<div class="badge  col-6 p-3  bg1">SUPPORT D'EXPERTS DE L'HÉBERGEMENT WEB</div>
<div class="badge  col-6 p-3 bg1">GARANTIE HAUTE DISPONIBLITÉ</div>
<br><br><br><br><br>
<div class=" row justify-content-center squares">
<div class="col-3 p-2 m-4 square" style="border-radius:6px 6px;border:solid 1px #0b8c8c">
  <h2 style="padding-left:40%;padding-top:10%;padding-bottom:10%;">16+</h2>
  <p style="padding-left:10%;font-size:25px;">Années d'expérience</p>
</div>

<div class="col-3 p-2 m-4 square" style="border-radius:6px 6px;border:solid 1px #0b8c8c">
<h2 style="padding-left:40%;padding-top:10%;padding-bottom:10%;">23+</h2>
  <p style="padding-left:10%;font-size:25px;">Membre de l'équipe</p>
</div>
</div>

<div class=" row justify-content-center squares">
<div class="col-3 p-2 m-4 square" style="border-radius:6px 6px;border:solid 1px #0b8c8c">
  <h2 style="padding-left:40%;padding-top:10%;padding-bottom:10%;">38+</h2>
  <p style="padding-left:35%;font-size:25px;">Branch</p>
</div>

<div class="col-3 p-2 m-4 square" style="border-radius:6px 6px;border:solid 1px #0b8c8c">
<h2 style="padding-left:40%;padding-top:10%;padding-bottom:10%;">2934+</h2>
  <p style="padding-left:40%;font-size:25px;">User</p>
</div>


<div style="text-align:center;margin-top:5%;"><h2>Nous vous créons un site internet clés en main<h2></div>
<div style="padding-left:20%;padding-right:20%;text-align:center;margin-top:2%;">De nombreuses fonctionnalités disponibles. Réalisez vos objectifs en demandant l'ajout de fonctionnalités utiles pour votre site internet. Vous pourrez en ajouter plus tard si vous n'avez pas besoin maintenant.</div>


<!-- *first 3cards* -->
<div class="row justify-content-center " style="margin:5% 10%;">
<div class="card col-2 align-items-center crd" style="padding-top:4%;border:0 solid #d2d6dc;background:#f7f9fc;margin-right:5%;text-align:center;">
  <img src="IMG/devices.png" style="width:40%;" >
<div class="card-body">
<div class="card-title">
 <h5 style="text-align:center;">Fluidité Multi-Écran</h5>
</div>
<div class="card-description" style="text-align:center;">
Design responsive adapté à tous les supports : PC, smartphone, tablette ...
</div>
</div>
</div>


<div class="card col-2 align-items-center crd" style="padding-top:4%;border:0 solid #d2d6dc;background:#f7f9fc;margin-right:5%;text-align:center;">
  <img src="IMG/admin.png" style="width:40%;" >
<div class="card-body">
<div class="card-title">
 <h5 style="text-align:center;">Accès Administrateur:</h5>
</div>
<div class="card-description" style="text-align:center;">
Contrôle total de votre site via un accès administrateur .
</div>
</div>
</div>




<div class="card col-2 align-items-center crd" style="padding-top:4%;border:0 solid #d2d6dc;background:#f7f9fc;margin-right:5%;text-align:center;">
  <img src="IMG/chat.png" style="width:40%;" >
<div class="card-body">
<div class="card-title">
 <h5 style="text-align:center;"> Chat en Direct</h5>
</div>
<div class="card-description" style="text-align:center;">
Installation d’un chat pour engager la conversation avec vos visiteurs .
</div>
</div>
</div>


<div class="card col-2 align-items-center crd" style="padding-top:4%;border:0 solid #d2d6dc;background:#f7f9fc;margin-right:5%;text-align:center;">
  <img src="IMG/experience.png" style="width:40%;" >
<div class="card-body">
<div class="card-title">
 <h5 style="text-align:center;">Partagez Votre Expertise:</h5>
</div>
<div class="card-description" style="text-align:center;">
Installation et configuration d’un blog dans votre site pour partager votre expertise.
</div>
</div>
</div>
</div>
<!--  end first 3cards* -->



<!-- *second 3cards* -->
<div class="row justify-content-center" style="margin-left:30%;margin-right:30%;">
<div class="card col-2 align-items-center crd" style="padding-top:4%;border:0 solid #d2d6dc;background:#f7f9fc;margin-right:5%;text-align:center;">
  <img src="IMG/optimisation.png" style="width:40%;" >
<div class="card-body">
<div class="card-title">
 <h5 style="text-align:center;">Optimisation</h5>
</div>
<div class="card-description" style="text-align:center;">
Installation d'applications indispensables d'optimisation, gestion des cookies …
</div>
</div>
</div>


<div class="card col-2 align-items-center crd" style="padding-top:4%;border:0 solid #d2d6dc;background:#f7f9fc;margin-right:5%;text-align:center;">
  <img src="IMG/banner.png" style="width:40%;" >
<div class="card-body">
<div class="card-title">
 <h5 style="text-align:center;">Couverture d’accueil</h5>
</div>
<div class="card-description" style="text-align:center;">
Couverture d’accueil, images catégories, bannières,  etc...
</div>
</div>
</div>
</div>
<!-- *second 3cards* -->




<h3 style="text-align:center;margin-top:5%;">NOS ENGAGEMENTS</h3>
<hr style="width:10%;margin: 0 auto;">
<div class="row justify-content-around " style="margin-top:5%;">
<div class="col-4">
<h3>TECHNOLOGIE À LA POINTE</h3>
<p>Host Oplus est en veille technologique quotidienne. Notre département R&D ne cesse de rechercher et tester les nouvelles tendances et technologies de l'hébergement et services Web pour en faire profiter nos clients, dans l'optique d'une satisfaction permanente.</p>
</div>
<div class="col-4">
<h3>SUPPORT RÉACTIF ET EFFICACE</h3>
<p>Des techniciens et ingénieurs dynamiques et chevronnés sont à votre écoute 7j/7 pour vous assister et répondre à toutes vos interrogations dans un délai minimum, par ticket et par téléphone.</p>
</div>

</div>
<div class="row justify-content-around " style="margin-top:5%;">
<div class="col-4">
<h3>TECHNOLOGIE À LA POINTE</h3>
<p>Host Oplus est en veille technologique quotidienne. Notre département R&D ne cesse de rechercher et tester les nouvelles tendances et technologies de l'hébergement et services Web pour en faire profiter nos clients, dans l'optique d'une satisfaction permanente.</p>
</div>
<div class="col-4">
<h3>SUPPORT RÉACTIF ET EFFICACE</h3>
<p>Des techniciens et ingénieurs dynamiques et chevronnés sont à votre écoute 7j/7 pour vous assister et répondre à toutes vos interrogations dans un délai minimum, par ticket et par téléphone.</p>
</div>

</div>
<div class="row justify-content-around " style="margin-top:5%;">
<div class="col-4">
<h3>TECHNOLOGIE À LA POINTE</h3>
<p>Host Oplus est en veille technologique quotidienne. Notre département R&D ne cesse de rechercher et tester les nouvelles tendances et technologies de l'hébergement et services Web pour en faire profiter nos clients, dans l'optique d'une satisfaction permanente.</p>
</div>
<div class="col-4">
<h3>SUPPORT RÉACTIF ET EFFICACE</h3>
<p>Des techniciens et ingénieurs dynamiques et chevronnés sont à votre écoute 7j/7 pour vous assister et répondre à toutes vos interrogations dans un délai minimum, par ticket et par téléphone.</p>
</div>

</div>


@include('layouts.footer')




</body>
</html>

