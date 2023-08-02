<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

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
        .heberg {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
            margin-bottom:10%;
        }

        .row h1{
  color: #0b8c8c;
  
}
.row p{
  font-size:15px;
  margin-left:20px;
  margin-bottom:10%
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
  width: 40%; /* Adjust the width as needed */
  margin-left: 50%; /* Add some margin to separate the image from the content */
}
/* Add animation styles to the image */
.image-container {
  overflow: hidden; /* Hide any overflowing content */
}

.animated-image {
  animation: moveUpAndDown 2s ease-in-out infinite;
}

/* Define the keyframe animation */
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



        .service {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            grid-gap: 30px;
        }

        .ser {
            background-color: #fff;
            border: 1px solid #ccc;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .ser h3 {
            font-size: 24px;
            color: #0b8c8c;
            margin-bottom: 10px;
        }

        .ser p {
            font-size: 16px;
        }
        .icon-container {
        display: flex;
        align-items: center;
        justify-content: center;
        width: 80px; /* Adjust the width as needed */
        height: 80px; /* Adjust the height as needed */
        background-color: #fff;
        border-radius: 50%;
        margin: 0 auto;

    }

    .icon-container i {
        color: #0b8c8c; /* Set the icon color */
        font-size: 24px; /* Adjust the font-size as needed */
        line-height: 1; /* Adjust the line-height as needed */
    }



.cards{
    width: 100%;
            margin: 0 auto;
            background-color: #1E2A3A;
            padding: 20px;
            color: white;
            margin-bottom:10%;
       
}

    .card-container {
        display: flex;
        justify-content: space-around;
        flex-wrap: wrap; /* Ajout de la propriété flex-wrap */
        margin-top: 20px;
      margin-left: 10%;
      margin-right: 10%;
    }
    
.card {
  width: 20%;
  background-color: #ffffff;
  padding: 20px;
  color: rgb(0, 0, 0);
  margin: 10px;
  display: flex;
  flex-direction: column;
  align-items: center;
  border-radius: 10px;
  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}

.card h3 {
  font-size: 24px;
  margin-bottom: 10px;
  color: #0b8c8c;
}

.card h4 {
  font-size: 20px;
  margin-bottom: 5px;
}

.card p {
  font-size: 14px;
  margin-bottom: 5px;
}

.card button {
  background-color: #0b8c8c;
  color: white;
  border: none;
  padding: 10px 20px;
  border-radius: 5px;
  cursor: pointer;
  width: 80%;
  font-size: 15px;
  margin-top: auto;
}

.card s {
  font-size: 15px;
  text-decoration: line-through;
  color: #999;
}





.content4 {
  display: flex;
  flex-wrap: wrap;
  justify-content: center; 
}

.container {
  display: flex;
  width: 100%; 
  max-width: 600px; 
  margin: 20px; 
}

.left-content {
  flex: 0 0 100px; 
  display: flex;
  justify-content: center; 
  align-items: center; 
}

.right-content {
  flex: 1; 
  padding-left: 20px; /* Add spacing between the icon and text */
}



.container p {
  font-size: 1rem;
  margin: 0;
}
 





.content2{

width:100%;
}
.sousContent2 {
  display: grid;
  grid-template-columns: repeat(2, 1fr); /* Three equal columns */
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
hr{
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
    </style>
</head>
<body>

@include('layouts.header')

   <div class="heberg">
<div class="row">
  <div class="content">
  <h1>Infrastructure / Datacenter</h1>
            <p>Datacenter avec redondance N+1 à tous les niveaux</p>
  </div>
  <div class="image-container">
    <img src="IMG/favpng_data-center-information-technology-it-infrastructure.png" alt="" class="animated-image">
  </div>
</div>
        
         <div class="service">
            <div class="ser">
            <div class="icon-container">
                    <i class="fas fa-globe fa-3x"></i>
                </div>
           
            <h3>DATACENTER PREMIUM</h3>
            <p>Un datacenter de 4000 m2 avec garantie de haute disponibilité à un accès réseau Ultra rapide et de raccordement en électricité</p>
            </div> 
            <div class="ser">
            <div class="icon-container">
            <i class="fas fa-cloud-upload-alt fa-3x"></i>
                </div>
            
            <h3>DATACENTER PREMIUM</h3>
            <p>Un datacenter de 4000 m2 avec garantie de haute disponibilité à un accès réseau Ultra rapide et de raccordement en électricité</p>
            </div> 
            <div class="ser">
            <div class="icon-container">
            <i class="fas fa-random fa-3x"></i>
                </div>
            
            <h3>DATACENTER PREMIUM</h3>
            <p>Un datacenter de 4000 m2 avec garantie de haute disponibilité à un accès réseau Ultra rapide et de raccordement en électricité</p>
            </div> 
            <div class="ser">
            <div class="icon-container">
            <i class="fas fa-user-friends fa-3x"></i>
                </div>
            
            <h3>DATACENTER PREMIUM</h3>
            <p>Un datacenter de 4000 m2 avec garantie de haute disponibilité à un accès réseau Ultra rapide et de raccordement en électricité</p>
            </div> 
            <div class="ser">
            <div class="icon-container">
            <i class="fas fa-th fa-3x"></i>
                </div>
            
            <h3>DATACENTER PREMIUM</h3>
            <p>Un datacenter de 4000 m2 avec garantie de haute disponibilité à un accès réseau Ultra rapide et de raccordement en électricité</p>
            </div> 
            <div class="ser">
            <div class="icon-container">
            <i class="fas fa-shield-alt fa-3x"></i> 
                </div>
            
            <h3>DATACENTER PREMIUM</h3>
            <p>Un datacenter de 4000 m2 avec garantie de haute disponibilité à un accès réseau Ultra rapide et de raccordement en électricité</p>
            </div> 
        </div>
   </div> 
<div class="cards">
   <div class="card-container">
            <div class="card">
                <h3>PERSONNEL</h3>
                <h4>50 GB</h4>
                <p>Bande Passante</p>
                <p>Base de données 3</p>
                <p>Sous Domaines 2</p>
                <p>cPanel Control Panel</p>
                <p>200+ One-Click Installs</p>
                <p>2Tbps DDoS Protection</p>
                <p>Certificats SSL</p>
                <p>Builder Web</p>
                <h4>299 DHs  <s>499 DHs</s></h4>
                <p>An</p>
                <button>Commencer</button>
            </div>
            <div class="card">
               <h3>PERSONNEL</h3>
               <h4>100 GB</h4>
               <p>Bande Passante illimité</p>
               <p>Base de données 20</p>
               <p>Sous Domaiines 5</p>
               <p>cPanel Control Panel</p>
               <p>200+ One-Click Installs</p>
               <p>2Tbps DDoS Protection</p>
               <p>Certificats SSL</p>
               <p>Builder Web</p>
               <h4> 499 DHs <s>599 DHs</s></h4>
               <p>An</p>
              <button>Commencer</button>
            </div>

            <div class="card">
          <h3>PERSONNEL</h3>
          <h4>250 GB</span></h4>
          <p>Bande Passante illimité</p>
          <p>Base de données 50</p>
          <p>Sous Domaiines 10</p>
          <p>cPanel Control Panel</p>
          <p>200+ One-Click Installs</p>
          <p>2Tbps DDoS Protection</p>
          <p>Certificats SSL</p>
          <p>Builder Web</p>
          <h4> 999 DHs<s>1300 DHs</s></span> </h4>
          <p>An</p>
          <button>Commencer</button>
            </div>

            <div class="card">
          <h3>PERSONNEL</h3>
          <h4>500 GB</h4>
          <p>Bande Passante illimité</p>
          <p>Base de données 100</p>
          <p>Sous Domaiines 50</p>
          <p>cPanel Control Panel</p>
          <p>200+ One-Click Installs</p>
          <p>2Tbps DDoS Protection</p>
          <p>Certificats SSL</p>
          <p>Builder Web</p>
          <h4> 1500 DHs<s>2300 DHs</s></h4>
          <p>An</p>
          <button>Commencer</button>
            </div>

            <div class="card">
               <h3>PERSONNEL</h3>
                <h4>oo GB</span></h4>
                <p>Bande Passante illimité</p>
                <p>Base de données illimité</p>
                 <p>Sous Domaiines illimité</p>
                  <p>cPanel Control Panel</p>
                  <p>200+ One-Click Installs</p>
                   <p>2Tbps DDoS Protection</p>
                 <p>Certificats SSL</p>
                 <p>Builder Web</p>
                  <h4> 1699 DHs<s>2499 DHs</s></span></h4>
                <p>An</p>
                <button>Commencer</button>
            </div>

         
        </div>



        <div class="content2">
 
          <div class="sousContent2">
            <div class="list1">
              <ul>
                <h3>Nous mettons la sécurité en haut de nos priorités</h3>
                <li><i class="fas fa-check text-success"></i>Accès avec sécurité biométrique</li>
                <li><i class="fas fa-check text-success"></i> Redondance N+1 à tous les niveaux</li>
                <li><i class="fas fa-check text-success"></i>Maintenance 4 fois par an</li>
                <li><i class="fas fa-check text-success"></i>Backups journaliers</li>
                <li><i class="fas fa-check text-success"></i>Firewall et Anti-malware sur tous les serveurs</li>
                <li><i class="fas fa-check text-success"></i>24/7/365 monitoring</li>
              </ul>
            </div>
            <div class="list2">
              <ul>
                <h3>Des serveurs de très grande qualité</h3>
                <li><i class="fas fa-check text-success"></i>Processeurs Intel Haut de gamme (Scalable family)</li>
                <li><i class="fas fa-check text-success"></i> Disques durs SSD & HDD de qualité datacenter</li>
                <li><i class="fas fa-check text-success"></i> Haute disponibilité</li>
                <li><i class="fas fa-check text-success"></i> Dernière version stable de cPanel</li>
                <li><i class="fas fa-check text-success"></i> Utilisation de CloudLinux, meilleur OS pour le hosting</li>
                <li><i class="fas fa-check text-success"></i> PHP de 4.4 jusqu'à la toute dernière version</li>
                <li><i class="fas fa-check text-success"></i> HardenedPHP, Python, Ruby, Node.js</li>
                <li><i class="fas fa-check text-success"></i> Imunify360 (Anti-Malware, défense proactive)</li>
              </ul>
            </div>
          </div>
        </div>
        

</div>








        <h3 style="text-align: center;padding-top:40px;">POURQUOI ACHETER UN CERTIFICAT SSL CHEZ HOST OPLUS?</h3>
        <hr   style="width:80px;">
<div class="content4">

<div class="container">
  <div class="left-content">
    <img src="IMG/Capture d'écran 2023-07-31 154541.png" alt="">
  </div>
  <div class="right-content">
    <h3>UNE OFFRE TRÈS COMPLÈTE</h3>
    <p>Des certificats SSL ou de signature de code ou de documents, en passant par les outils de détection de vulnérabilités et anti-malwares, nous vous offrons une panoplie complète d'outils de sécurité en ligne</p>
  </div>
</div>
<div class="container">
  <div class="left-content">
    <img src="IMG/Capture d'écran 2023-07-31 154555.png" alt="">
  </div>
  <div class="right-content">
    <h3>GESTION SIMPLIFIÉE SUR L'ESPACE CLIENT</h3>
    <p>Nous vous offrons tous les outils nécessaires sur votre espace client, pour la validation, génération, re-génération et téléchargement de votre certificat</p>
  </div>
</div>
<div class="container">
  <div class="left-content">
    <img src="IMG/Capture d'écran 2023-07-31 154601.png" alt="">
  </div>
  <div class="right-content">
   <h3>LES MEILLEURS PRIX DE CERTIFICATS SSL</h3>
    <p>Parce que nous servons des milliers de clients, nous arrivons à vous offrir les meilleurs prix grâce à nos partenariats avec les meilleurs fournisseurs</p>
  </div>
</div>
<div class="container">
  <div class="left-content">
    <img src="IMG/Capture d'écran 2023-07-31 154608.png" alt="">
  </div>
  <div class="right-content">
    <h3>SUPPORT D'EXPERTS EN OUTILS DE SÉCURITÉ & SSL</h3>
    <p>Nous commercialisons les certificats SSL depuis plusieurs années, leur processus d'activation et de re-génération n'ont plus aucun secret pour nos équipes</p>
  </div>
</div>
</div>


   @include('layouts.footer')









</body>
</html>