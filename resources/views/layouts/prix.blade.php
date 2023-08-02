<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
 
 .prix {
  /* Remove the margin-left and margin-right to center the elements */
  margin: 0 auto;
  padding: 20px;
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  align-items: center;
  max-width: 1200px; /* Add a max-width to limit the content width */
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
    font-size:20px;
    color: #c5c5c5;
    display: flex;
    justify-content: center;
    align-items: center;
    margin-left: 10%;
    margin-right: 10%;
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


    </style>
</head>
<body>
<h2 style="display: flex;  justify-content: center;  align-items: center; margin-left: 10%; margin-right: 10%; color: #0b8c8c;" >VOS PRIX JUSQU'À -50% COMPARÉS AUX PRIX DE NOS PRODUITS</h2>
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
</body>
</html>