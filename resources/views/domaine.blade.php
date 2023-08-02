<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <title>Document</title>
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

.content1{
    margin-top:10%;
}
.sousContent1 {
  display: grid;
  grid-template-columns: repeat(2, 1fr); /* Three equal columns */
  grid-gap: 20px; /* Add gap between the columns */
  margin-left:10%;
margin-right:10%;
margin-top:20px;
}
.sousContent1 h3{
    color:#777777;
}
ul{
    list-style:none;
}
hr{
    margin:0 auto;
    width:40px;
}
.sousContent1 li {
    margin-bottom: 10px; /* Adjust the desired space between list items */
  }
  .sousContent1 li i {
    margin-right: 10px; /* Adjust the desired space between icon and text */
  }
  .sousContent1 i{
    color:#8ebcf0;
  }



    .card-cont {
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  max-width: 1200px;
  margin: 0 auto;
}

.card1 {
  width: calc(30% - 20px); /* Adjusted width to fit three cards in one row */
  background-color: #fff;
  border-radius: 5px;
  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
  padding: 10px;
  margin: 10px;
  text-align: center;
  transition: transform 0.3s ease;
}

.card1 img {
  width: 80px;
  height:80px;
  object-fit: cover;
  border-radius: 5px;
}

.card1 p {
  font-size: 18px;
  margin-top: 10px;
  color: #333;
}

.card1:hover {
  transform: scale(1.05);
}
    .search-box {
  display: flex;
  align-items: center;
  justify-content: center;
  margin-bottom: 30px;
}

.search-input {
  padding: 10px;
  border: 1px solid #ccc;
  border-radius: 5px 0 0 5px;
  font-size: 14px;
  flex: 1;
  margin-right: 10px;
 
}

.search-btn {
  padding: 10px 20px;
  background-color: #0b8c8c;
  color: #fff;
  border: none;
  border-radius: 0 5px 5px 0;
  font-size: 14px;
  cursor: pointer;
}

    .sous-content3 {
  display: flex;
  flex-wrap: wrap;
  justify-content: center; 
}

.cont {
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



.cont p {
  font-size: 1rem;
  margin: 0;
}
.content2{
  margin-left:10%;
  margin-right:10%;
  margin-bottom:10%;
} 
.content2 .button{
  padding: 10px 20px;
  border: 2px solid #0b8c8c; /* Bordure bleue */
  background-color: white; /* Fond blanc */
  color: #0b8c8c; /* Couleur de l'écriture bleue */
  font-size: 16px;
  cursor: pointer;
  position: absolute;
  margin-left:30%;
}
.content2 p{
  display: flex;
  justify-content: center;
  align-items: center;
  margin-bottom:10px;
}
.links {
  display: flex;
  align-items: center;

}

.custom-button {
  padding: 10px 20px;/* Bordure bleue */
  background-color:#0b8c8c ; /* Fond blanc */
  color: #fff; /* Couleur de l'écriture bleue */
  font-size: 16px;
  border-radius: 5px;
  cursor: pointer;
  border: 2px solid #0b8c8c;
}

.link {
  margin-left: 10px; /* Marge à gauche pour séparer le bouton du lien */
  padding: 10px 20px;
  color: #0b8c8c; /* Couleur de l'écriture du lien */
  font-size: 16px;
  border-radius: 5px;
  text-decoration: none;
}
.btn3{
    padding: 10px 20px;
  border: 2px solid #0b8c8c; /* Bordure bleue */
  background-color: white; /* Fond blanc */
  color: #0b8c8c; /* Couleur de l'écriture bleue */
  font-size: 16px;
  cursor: pointer;
  position: absolute;
  margin-left:40%;
}
.content3{
    margin-bottom:10%;
}
.cartes-container {
    display: flex;
    justify-content: space-around;
    padding: 20px;
}

.carte {
    text-align: center;
    width: 300px;
    padding: 20px;
    border: 1px solid #ccc;
    margin-right:30px;
}

.cercle {
    width: 50px;
    height: 50px;
    border-radius: 50%;
    background-color: #0b8c8c;
    margin: 0 auto 10px;
    line-height: 50px;
    font-size: 20px;
}

.cartes-container h2 {
    margin: 0;
    padding: 0;
    font-size: 18px;
}

.cartes-container p {
    margin: 0;
    padding: 0;
    font-size: 14px;
}
.sousContent4 {
  display: grid;
margin-top:20px;
margin-left:30%;
}
.sousContent4 h3{
    color:#777777;
}
ul{
    list-style:none;
}
hr{
    margin:0 auto;
    width:40px;
}
.sousContent4 li {
    margin-bottom: 10px; /* Adjust the desired space between list items */

  }
  .sousContent4 li i {
    margin-right: 5px; /* Adjust the desired space between icon and text */
  }
  .sousContent4 i{
    color:#d09dee;
  }

.souscontent42 {
  display: flex;
  align-items: center;
  justify-content: space-between;
  padding: 20px;
}


.left-content {
  flex: 1; 
  padding-right: 20px;
}


.left-content img {
  width: 150px;
  display: block;
  margin: 0 auto;
}


.right-content {
  flex: 6; 
}


.right-content h3 {
  margin: 0;
  font-size: 20px;
}


.right-content p {
  margin: 0;
  font-size: 16px;
}
.sousContent42 {
  display: grid;
  grid-template-columns: repeat(2, 1fr); /* Three equal columns */
  grid-gap: 20px; /* Add gap between the columns */
  margin-left:10%;
margin-right:10%;
margin-top:20px;
}
.right-content h3{
    color:#777777;
}
.right-content  li {
    margin-bottom: 10px; /* Adjust the desired space between list items */
  }
  .right-content  li i {
    margin-right: 10px; /* Adjust the desired space between icon and text */
  }
  .right-content i{
    color:#8ebcf0;
  }
  .sous-content43 {
    margin-left:10%;
    margin-right:10%;
  display: flex;
  justify-content: space-between;
}

.p1 {
  flex-basis: 15%;
  padding: 10px;
  margin-right:15px;
}
.p1 img{
  width:150px;
}
.p2{
  flex-basis: 60%;
  margin-right:15px;
 padding: 10px;
} 
.p2 h3{
  color:#646464;
  margin-bottom:15px;

}
.p2 p{
  line-height: 1.5; 
  font-size:15px;
}
.p3{
  flex-basis: 40%;
  margin-right:15px;
 padding: 10px;
} 
.p3 h3{
  color:#646464;
  margin-bottom:15px;
}
.p3 p{
  line-height: 1.5; 
  font-size:15px;
}
.content4 .btnpartie3{
  padding: 10px 20px;
  border: 2px solid #0b8c8c; /* Bordure bleue */
  background-color: white; /* Fond blanc */
  color: #0b8c8c; /* Couleur de l'écriture bleue */
  font-size: 16px;
  cursor: pointer;
  position: absolute;
  margin-left:40%;
}
.content4{
    margin-bottom:10%;
}
  </style>
</head>
<body>

@include('layouts.header')
  <div class="container">
    <div class="content1">
      <h1 style=" color: #0b8c8c; margin-left:10%;">Enregistrer un nom de domaine</h1>
        <div class="sousContent1">
            <div class="list1">
              <ul>
                <li><i class="fas fa-check text-success"></i>Nous enregistrons vos domaines depuis 2001</li>
                <li><i class="fas fa-check text-success"></i>Nous enregistrons vos domaines depuis 2001</li>
                <li><i class="fas fa-check text-success"></i>Gestion simplifiée depuis votre espace client</li>
                <li><i class="fas fa-check text-success"></i>Prestataire agréé par l'ANRT</li>
              </ul>
            </div>
          </div>
    </div>

    <div class="content2">
       <div class="card-cont">
    <div class="card1">
      <img src="IMG/Capture d'écran 2023-07-29 122418.png" alt="Image 1">
      <p>120.00 Dhs /an</p>
    </div>

    <div class="card1">
      <img src="IMG/Capture d'écran 2023-07-13 211842.png" alt="Image 2" style= "width: 200px; height:80px;">
      <p>120.00 Dhs /an</p>
    </div>

    <div class="card1">
      <img src="IMG/Capture d'écran 2023-07-13 211848.png" alt="Image 2"  style= "width: 200px; height:80px;">
      <p>160.00 Dhs /an</p>
    </div>
    <div class="card1">
      <img src="IMG/Capture d'écran 2023-07-13 211856.png" alt="Image 2"  style= "width: 80px; height:80px;">
      <p>320.00 Dhs /an</p>
    </div>
    <div class="card1">
      <img src="IMG/Capture d'écran 2023-07-13 211903.png" alt="Image 2"  style= "width: 200px; height:80px;">
      <p>500.00 Dhs /an</p>
    </div> 
    <div class="card1">
      <img src="IMG/Capture d'écran 2023-07-13 211910.png" alt="Image 2"   style= "width: 200px; height:80px;">
      <p>450.00 Dhs /an</p>
    </div>
  </div>

    <p>Vérifiez la disponibilité de votre nom de domaine!</p>
    <div class="links">
      <button class="custom-button">Enregistrement</button>
      <a href="#" class="link">Transfert</a>
      
    </div>
  <div class="search-box">
    <form id="domain-search-form" action="{{ route('recherche') }}" method="POST">
      @csrf
      <input type="text" name="domain" class="search-input small-input" placeholder="Ex: exemple.com">
      <button type="submit" class="search-btn">Rechercher</button>
    </form>
    <div id="availability-message"></div>
  </div>

  <button class="button">EXTENSIONS ET PRIX</button>
</div>
  

  <div class="content3">
    <div class="sous-content3">
    <div class="cont">
  <div class="left-content">
    <img src="IMG/Capture d'écran 2023-07-31 154541.png" alt="">
  </div>
  <div class="right-content">
    <h3>UNE OFFRE TRÈS COMPLÈTE</h3>
    <p>Des certificats SSL ou de signature de code ou de documents, en passant par les outils de détection de vulnérabilités et anti-malwares, nous vous offrons une panoplie complète d'outils de sécurité en ligne</p>
  </div>
</div>
<div class="cont">
  <div class="left-content">
    <img src="IMG/Capture d'écran 2023-07-31 154555.png" alt="">
  </div>
  <div class="right-content">
    <h3>GESTION SIMPLIFIÉE SUR L'ESPACE CLIENT</h3>
    <p>Nous vous offrons tous les outils nécessaires sur votre espace client, pour la validation, génération, re-génération et téléchargement de votre certificat</p>
  </div>
</div>
<div class="cont">
  <div class="left-content">
    <img src="IMG/Capture d'écran 2023-07-31 154601.png" alt="">
  </div>
  <div class="right-content">
   <h3>LES MEILLEURS PRIX DE CERTIFICATS SSL</h3>
    <p>Parce que nous servons des milliers de clients, nous arrivons à vous offrir les meilleurs prix grâce à nos partenariats avec les meilleurs fournisseurs</p>
  </div>
</div>
<div class="cont">
  <div class="left-content">
    <img src="IMG/Capture d'écran 2023-07-31 154608.png" alt="">
  </div>
  <div class="right-content">
    <h3>SUPPORT D'EXPERTS EN OUTILS DE SÉCURITÉ & SSL</h3>
    <p>Nous commercialisons les certificats SSL depuis plusieurs années, leur processus d'activation et de re-génération n'ont plus aucun secret pour nos équipes</p>
  </div>
</div>
</div>
<button class="btn3">EXTENSIONS ET PRIX...</button>
  </div>

</div>


<div class="content4">
    <h2>COMMENT TRANSFÉRER VOTRE DOMAINE CHEZ HOST OPLUS</h2>
    <hr>
    <div class="cartes-container">
        <div class="carte">
            <div class="cercle">1</div>
            <h2>VÉRIFIEZ LES PRÉ-REQUIS</h2>
            <p>Pour être transféré, votre nom de domaine doit respecter les pré-requis indiqués ci-dessous, vous pouvez aussi nous contacter pour plus d'information</p>
        </div>
        <div class="carte">
            <div class="cercle">2</div>
            <h2>PRÉPAREZ VOTRE NOM DE DOMAINE</h2>
            <p>Obtenez votre code de transfert (ou code EPP), puis déverrouillez votre domaine ou demandez à votre ancien prestataire de faire ces opérations pour vous</p>
        </div>
        <div class="carte">
            <div class="cercle">3</div>
            <h2>PASSEZ COMMANDE</h2>
            <p>Il ne vous reste plus que de passer la commande de votre nom de domaine directement depuis notre site marchand et suivre les étapes de transfert avec nos équipes</p>
        </div>
    </div>
    <div class="sousContent4">
            <div class="list4">
              <ul>
                <h3>Les pré-requis pour transférer votre nom de domaine</h3>
                <li><i class="fas fa-check text-success"></i>Nous enregistrons vos domaines depuis 2001</li>
                <li><i class="fas fa-check text-success"></i>Nous enregistrons vos domaines depuis 2001</li>
                <li><i class="fas fa-check text-success"></i>Gestion simplifiée depuis votre espace client</li>
                <li><i class="fas fa-check text-success"></i>Prestataire agréé par l'ANRT</li>
              </ul>
            </div>
          </div>
    </div>
    <div class="souscontent42">
              <div class="left-content">
                   <img src="IMG/Capture_d_écran_2023-08-01_173012-removebg-preview.png" alt="Image">
              </div>
               <div class="right-content">
                    <div class="sousContent43">
                             <div class="list1">
                             <h3>Services inclus avec les noms de domaines</h3>
                             <ul>
                                     <li><i class="fas fa-check text-success"></i>Protection des données personnelles (en option)</li>
                                     <li><i class="fas fa-check text-success"></i>Gestion des informations WHOIS</li>
                                      <li><i class="fas fa-check text-success"></i>Gestion DNS simplifiée</li>
                                     <li><i class="fas fa-check text-success"></i>Verrouillage contre le transfert</li>
                                     <li><i class="fas fa-check text-success"></i>Redirection de domaine</li>
                                     <li><i class="fas fa-check text-success"></i>Redirection d'emails</li>
                             </ul>
                             </div>
                     </div>
                </div>
    </div>

    <div class="sous-content43">
    <div class="p1">
         <img src="IMG/Capture d'écran 2023-08-02 152359.png" alt="">
    </div>
  <div class="p2">
    <h3>C'est quoi le cyber-squattage</h3>
    <p>Le cyber-squattage est le pire ennemi de toute marque sur le web, il consiste à acheter le nom de domaine d'une marque dans le but de nuire à cette dernière, ou bien de le mettre en vente à un prix exhorbitant. Pire encore, il se peut qu'un nom de domaine contenant votre marque, redirigerait vers la concurrence, ou bien contienne un contenu qui nuit à votre image et à votre activité commerciale.</p>
  </div>
  <div class="p3">
    <h3>La solution !</h3>
    <p>Il vous faudra acheter plusieurs extensions de votre nom de domaine, si vous gardez par exemple "ma-marque.com" comme domaine principal, réservez également "ma-marque.ma", "ma-marque.net", ... ainsi de suite, prenez en considération le maximum d'extensions relatives aux combinaisons phonétiques et sémantiques de votre nom afin de sécuriser votre nom de marque.</p>
    <button class="btnpartie3">NOUS CONTACTER</button>
  </div>
    </div>
</div>













</div>




@include('layouts.footer')
</body>
</html>