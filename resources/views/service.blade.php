<DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
    <link href='http://fonts.googleapis.com/css?family=Roto:bo400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900italic,900' rel='stylesheet' type='text/css'>
    <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@1,100&display=swap" rel="stylesheet">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
   <link rel="stylesheet" href="{{ asset('css/index.css') }}">

    <title>Host Oplus - Hébergement web</title>
    <style>
*{
    margin:0;
    padding:0;
    font-family:'Roboto',sans-serif;
}

.container{
width:100%;
height:100vh;
background-image:url("{{asset('img/ServiceBackground.png')}}");
background-position:center;
background-size:cover;
padding-left:8%;
padding-right:8%;
box-sizing:border-box;

}

.navbar{
    height:12%;
    display:flex;
    align-items:center;
}
.logo{
    width:180px;
    cursor:pointer;
}
nav{
    flex:1;
    text-align:right
}
nav ul li{
    list-style:none;
    
    display:inline-block;
    margin-left:20px;
}
nav ul li a{
   text-decoration:none;
   color:white;

   
}
nav ul li a:hover{
    color : #EE82EE;
}
.row{
    display:flex;
    height:88%;
    align-items:center;

}
.hamburger {
  display: none;
  font-size: 1.5rem;
  cursor: pointer;
}


@media (max-width: 1079px) {
  nav {
    display: none;
  }

  navbar.responsive nav {
    display: flex;
    flex-direction: column;
    align-items: flex-start;
  }

  navbar.responsive nav li {
    margin-right: 0;
    margin-bottom: 10px;
  }
  .hamburger {
    display: block;
  }

  .hamburger:hover {
    color: #aaa;
  }

}


.col{
    flex-basis:50%;
    
}
.container h1 {
    color: #BA55D3;
    background: linear-gradient(to right, White,#BA55D3, violet);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  font-size: 60px;
  line-height: 60px;
}

    
.col {
  display: inline-block;
  position: relative;
}

 .container p{
    font-size:30px;
    padding-top:20px;
    color:white;
}

.ContentBase {
    display: flex;
    
    justify-content: space-evenly;
    align-content: center;
    padding:100px;
    border-radius:
 
}


.ContentBase p {
    color: black;
    font-size:15px;
}

.ContenImage img{
    height: 180px;
   
}

.content_discription{
    width:300px;
}

.contentCard{
    align-content: space-between;
    box-shadow: 2px 2px 4px 2px rgba(0, 0, 0, 0.2);
    padding:30px 0px 30px 0px;
    justify-content: center;
    border-radius:5px 5px;
    height:380px;


    
    transition: transform .3s ease-out;
    display: inline-block;
}

.contentCard:hover{
    transform: translate(0, -5px);
}

.contentCard h3,  p {
    text-align: center;
    padding: 40px, 0, 15px, 0;
}

.contentCard p{
    font-weight: bold;

}

.content2{
    background-color: #A9A9A9;
    height:500px;
    width:100%;
}

.sousContent2{
    display:flex;
    justify-content: space-between;
    padding-top:80px;
    padding-left:100px;
    padding-right:100px;
}

.sousContent2 h3{
     padding-bottom:10px;
     background-color:#BA55D3;
     display: inline-block;
}


.sousContent2 ul li {
    padding-top:10px;
    list-style-type: none;
    font-weight:bold;
}

.shap1{
    display:flex;
    justify-content:space-between;
    padding: 0px 60px;
}
.shap1 .shap11 ,.shap12{
    width:500px;
}


.shap2{
    display:flex;
    justify-content:space-between;
    padding: 20px 60px 0 60px;
}
.shap2 .shap21 ,.shap22{
    width:500px;
}

.shap11 ,.shap12, .shap21, .shap22{
    display:flex;
}

.content3{
    padding-top:40px;
    padding-bottom:40px;
}

.shap1 p{
    font-weight:bold;
    
}

.shap2 p{
    font-weight:bold;
    
}

.content4{
    background-color: #A9A9A9;
    padding-bottom:40px;
    padding-top:40px;
}

.content4 .shap1{
    display: flex;
    padding-top:40px;
}

.content4 h1{
    text-align: center;
    padding-top:20px;
    
}

.footer{
    display: flex;
    justify-content: space-evenly;
    background-color: black;
    padding:40px 100px;

}
.footer .foot1 img{
    padding-bottom:20px;
}

.footer .foot2 h2{
    padding-bottom:20px;
}

.footer .foot3 h2{
    padding-bottom:20px;
}

.footer .foot3 input{
    padding: 10px 20px;
  
  border-radius: 5px;
  font-size: 16px;
  width: 100%;
  border: 1px solid white;
  outline: none;
  background-color: black;
}

.footer .foot1 .desc{
    width:50%;
    font-size:20px;
}

.footer .foot3 {
    margin-left: 180px;
}
.footer .mail,.num,.add{
    font-size:20px;
}

.footer img , .desc,h2,.mail,.num,.add{
    color:white;
}

.footer img{
   width:200px;
}

.UnderFouter{
    background-color:black;
    width:100%;
    height:60px;
}


</style>
</head>
<body>
 
    <div class="container">
    <div class="navbar">
        <img src="{{asset('img/LogoSite.png')}}" alt="logo" class="logo">
       
        <nav>
            <ul>
                <li><a href="">Accueil</a></li>
                <li><a href="/service">Services</a></li>
                <li><a href="">Hébergement</a></li>
                <li><a href="">VPS Cloud</a></li>
                <li><a href="">Serveurs Dédié</a></li>
                <li><a href="">Domaine</a></li>
                <li><a href="">Pages</a></li>
                <li><a href="">Contact</a></li>

            </ul>
        </nav>
        <div class="hamburger">&#9776;</div>
    </div>
    <div class="row">
        <div class="col">
        <h1>Développez Votre Visibilité</h1>
        <p>
        L'agence web Host Oplus accompagne les entreprises dans leurs projets digitaux.
        </p>
        </div>
    </div>
    </div>
    <div class='ContentBase'>
        <div class="contentCard">
            <div class="ContenImage">
                <img src="img/image1.png" alt="Image">
            </div>
            <div class="contentTitle">
                <h3>Création de site Vitrine</h3>
            </div>
            <div class="content_discription"> 
                <p>Vous Souhaitez faire connaitre votre société sur internet ? vous souhaitez créer votre vitrine pour présenter vos ...</p>
            </div>
        </div>
        <div class="contentCard">
            <div class="ContenImage">
                <img src="img/image2.png" alt="Image">
            </div>
            <div class="contentTitle">
                <h3>Création de site Vitrine</h3>
            </div>
            <div class="content_discription"> 
                <p>Vous Souhaitez faire connaitre votre société sur internet ? vous souhaitez créer votre vitrine pour présenter vos ...</p>
            </div>
        </div>
        <div class="contentCard">
            <div class="ContenImage">
                <img src="img/image3.png" alt="Image">
            </div>
            <div class="contentTitle">
                <h3>Création de site Vitrine</h3>
            </div>
            <div class="content_discription"> 
                <p>Vous Souhaitez faire connaitre votre société sur internet ? vous souhaitez créer votre vitrine pour présenter vos ...</p>
            </div>
        </div>
    </div>
    <div class='ContentBase' style="margin-top:-150px;">
        <div class="contentCard">
            <div class="ContenImage">
                <img src="img/image4.png" alt="Image">
            </div>
            <div class="contentTitle">
                <h3>Création de site Vitrine</h3>
            </div>
            <div class="content_discription"> 
                <p>Vous Souhaitez faire connaitre votre société sur internet ? vous souhaitez créer votre vitrine pour présenter vos ...</p>
            </div>
        </div>
        <div class="contentCard">
            <div class="ContenImage">
                <img src="img/image5.jpeg" alt="Image">
            </div>
            <div class="contentTitle">
                <h3>Création de site Vitrine</h3>
            </div>
            <div class="content_discription"> 
                <p>Vous Souhaitez faire connaitre votre société sur internet ? vous souhaitez créer votre vitrine pour présenter vos ...</p>
            </div>
        </div>
        <div class="contentCard" >
            <div class="ContenImage">
                <img src="img/image6.png" alt="Image">
            </div>
            <div class="contentTitle">
                <h3>Création de site Vitrine</h3>
            </div>
            <div class="content_discription"> 
                <p>Vous Souhaitez faire connaitre votre société sur internet ? vous souhaitez créer votre vitrine pour présenter vos ...</p>
            </div>
        </div>
    </div>
    <div class="content2">
         <h2 style="text-align: center;padding-top:40px;">CE QUI DÉMARQUE NOS SITES WEB</h2>
         <div class="sousContent2">
         <div class="list1">
            <ul>
            <h3>Optimisés pour le SEO</h3>
                <li>Respect de vos mots clé</li>
                <li>Respect des normes SEO</li>
                <li>Fichier Sitemap XML</li>
                <li>Design clean et épuré</li>
                <li>Mobile friendly</li>
                <li>Intégration Google analytics</li>
                <li>Intégration Google Search Console</li>
            </ul>
         </div>
         <div class="list2">
            <ul>
            <h3>Sécurisés et performants</h3>
                <li>Toutes les pages en HTTPS</li>
                <li>Envoi des formulaires en SMTP</li>
                <li>Formulaires sécurisés avec Captcha</li>
                <li>Validation des performances</li>
                <li>Meilleur temps de réponse</li>
                <li>Validation Google mobile</li>
                <li>Pages valides W3C</li>
            </ul>
         </div>
         <div class="list3">
            <ul>
            <h3>Un contenu soigné</h3>
                <li>Slider en page d’accueil</li>
                <li>Pages de mentions légales</li>
                <li>Page de contact avec Google Map</li>
                <li>Page 404 personnalisée</li>
                <li>Favicon personnalisée</li>
                <li>Intégration des réseaux sociaux</li>
                <li>Polices modernes Google fonts</li>
            </ul>
         </div>
         </div>

    </div>
    <h1 style="text-align: center; padding-top:40px;">PLUS DE 20 ANS DE MÉTIER</h1>
    <p style="padding-top:20px;">Dans le développement de sites et applications Web</p>
    <div class="content3">
        <div class="shap1">
            <div class="shap11">
            <div>
            <img src="img/image7.png" alt="Image">
            </div>
            <div>
                <h4>VOUS BÉNÉFICIEZ DE NOTRE LONGUE EXPÉRIENCE</h4>
                <p>Dans le métier depuis 2001, nous savons exactement la solution à mettre en place et le type de site Web à vous offrir, votre site n'est pas juste une vitrine, c'est un outil de promotion et de vente que nous vous aidons à mettre en place.</p>
            </div>
            </div>
            <div class="shap12">
            <div>
            <img src="img/image8.png" alt="Image">
            </div>
            <div>
            <h4>VOUS ÊTES SÛRS D'AVOIR UN SITE DE QUALITÉ</h4>
            <p>Nous sommes des adeptes du détail, chaque page est scrutée et validée, chaque positionnement d'élément graphique est étudié, chaque site est livré prêt pour le référencement naturel avec un code optimisé et propre.</p>
            </div>
        </div>
        </div>
        <div class="shap2">
        <div class="shap21">
        <div >
        <img src="img/image9.png" alt="Image">
        </div>
        <div>
        <h4>NOUS LIVRONS UN SITE PERFORMANT ET RAPIDE</h4>
        <p>Nous concevons pour vous des sites Internet testés avec les derniers outils de mesure performances mondialement connus, nous hébergeons votre site sur des serveurs ultra-rapides en haute performance, pour vous permettre d'avoir un bon ranking dans les moteurs de recherche.</p>
        </div>
        </div>
        <div class="shap22">
        <div class="img">
        <img src="img/image10.png" alt="Image">
        </div>
        <div class="desc">
        <h4>NOUS OPTIMISONS LE CONTENU DE VOTRE SITE</h4>
        <p>Au début de chaque projet, nous définissons avec vous les bons mots clé sur lesquels se basera votre contenu, nos experts évaluent alors vos textes et les optimisent pour un meilleur rendu en page mais surtout pour vous assurer le meilleur positionnement face à vos concurrents sur les moteurs de recherche.</p>
        </div>
        </div>
        </div>
    </div>
    <div class="content4">
        <h1 text-align="center">NOTRE PROCESSUS DE CRÉATION</h1>
        <div class="shap1">
            <div class="shap11">
            <div>
            <img src="img/image11.png" alt="Image">
            </div>
            <div>
                <h4>ETAPE 1</h4>
                <p>Vous choisissez la formule qui vous convient, puis nous contactez ou commandez et payez le service de création de votre site directement depuis notre espace de commande.</p>
            </div>
            </div>
            <div class="shap12">
            <div>
            <img src="img/image12.png" alt="Image">
            </div>
            <div>
            <h4>ETAPE 2</h4>
            <p>Nous définissons ensemble, la structure et les modèles des pages en se basant sur l'un de nos modèles pré-conçus ou un modèle personnalisé, suivant l'offre que vous avez choisi.</p>
            </div>
            </div>
        </div>

        <div class="shap1">
            <div class="shap11">
            <div>
            <img src="img/image13.png" alt="Image">
            </div>
            <div>
                <h4>ETAPE 3</h4>
                <p>Vous nous envoyez votre contenu (textes, images, vidéos), ou bien nous préparons votre contenu si vous avez souscris à notre service de rédaction ou de production photo ou vidéo.</p>
            </div>
            </div>
            <div class="shap12">
            <div>
            <img src="img/image14.png" alt="Image">
            </div>
            <div>
            <h4>ETAPE 4</h4>
            <p>Nous vous livrons la première version de votre site web, telle que discutée et définie dans les étapes précédentes.</p>
            </div>
            </div>
        </div>

        <div class="shap1">
            <div class="shap11">
            <div>
            <img src="img/image15.png" alt="Image">
            </div>
            <div>
                <h4>ETAPE 5</h4>
                <p>Boucle de modification: Look / Edit / Update, vous nous faites part de vos éventuelles modifications des pages que nous vous avons livré.</p>
            </div>
            </div>
            <div class="shap12">
            <div>
            <img src="img/image16.png" alt="Image">
            </div>
            <div>
            <h4>ETAPE 6</h4>
            <p>Nous procédons à la mise en ligne de votre site web, vous disposez d'une période de 15 à 30 jours de garantie pour effectuer les ultimes modifications mineures.</p>
            </div>
            </div>
        </div>
        
    </div>
    <div class="footer">
        <div class="foot1">
        <img src="img/LogoSite.png" alt="Image">
        <p class="desc">Host Oplus Services d'Hébergement Web et Création & refonte de sites, applications web & mobiles, référencement web & webmarketing.</p>
        </div>
        <div class="foot2">
            <h2>ADDRESSE</h2>
            <div class="add"><i class="fa-light fa-globe"></i>Ayour Concept 58 AVENUE FARHAT HACHAD CITE DAKHLA 80000 AGADIR</div>
            <div class="num"><i class="fa-light fa-phone"></i>+212 5282-11829, +212 6686-46054, +212 672-849466,</div>
            <div class="mail"><i class="fa-regular fa-envelope"></i>contact@hostoplus.com,</div>
        </div>
        <div class="foot3">
            <h2>NEWSLETTER</h2>
            <input type="email" placeholder="Adresse e-mail">
        </div>
    </div>
    <div class="UnderFouter" >

    <div class="ligne" style="background-color:white;height: 0.1px;"></div>
    <p style="color:white;padding-top:10px;">Copyright © 2023.  Tous droits réservés </p>

    </div>
    
</body>
</html>