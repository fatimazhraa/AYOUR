<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap');

*{
   margin: 0;
   padding: 0;
   box-sizing: border-box;
   scroll-behavior: smooth;
   font-family: 'Poppins', sans-serif;
}

.header{
    height: 50vh;
    background-color: #f7f9fc;
}


.accordion{
    width:80%;
}





</style>
</head>
<body>
<div class="header d-flex">
    <div class="container my-auto">
        <div class=" my-auto"><h2>Base de connaissances</h2></div>
    </div>
</div>

<div class="container ">
    <div class="row justify-content-center my-5">
    <img src="IMG/qst.svg" alt="FAQ Img" class="col-8">
    </div>

    <div class="row justify-content-center">
    <div class="accordion"  id="accordionExample">
  <div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
      Est-ce que j'ai besoin de connaissances techniques pour héberger un site Web?
      </button>
    </h2>
    <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <strong>Nous vous offrons un panneau de contrôle très intuitif et un centre d'aide en ligne pour vous aider à effectuer les opérations techniques telles que la gestion des comptes Email ou la consultation des statistiques, et grâce à Softaculous, vous pouvez installer le CMS de votre choix en un seul clic (AC Plus CMS, WordPress, Joomla, Drupal...) et commencer à créer votre site Web sans connaissances en languages de développement.</strong>
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
      C'est quoi SSL?
      </button>
    </h2>
    <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <strong>Un certificat SSL (Secure Socket Layer) ou TLS (Transport Layer Security) est un fichier spécial qui est installé sur un serveur Web. Ce certificat permet de crypter les données émises par le serveur Web afin d'en protéger la confidentialité. Un certificat SSL est créé et attribué à une entité bien identifiée (en général la personne morale ou physique propriétaire du site) et après vérification du droit de celle-ci à utiliser ce certificat. Le certificat SSL est le moyen le plus utilisé pour crypter des données entre un serveur Web et un navigateur Web. Le cryptage SSL à 256 bits garantit que les données qui transitent sur le réseau Internet entre l'ordinateur client (le visiteur du site) et le serveur Web ne seront pas dévoilées en cas d'interception.</strong>
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
      Que veut dire une plateforme Cloud haute disponibilité?
      </button>
    </h2>
    <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <strong>La haute disponibilité garantit le bon fonctionnement des sites Web hébergés 7j/7 et 24h/24, grâce à une architecture Cloud basée sur des machines virtuelles puissantes et des outils de répartition des charges et réplication de données très évolués.
        Cette architecture permet d'éviter les coupures en cas de panne matérielle, car les données sont répliquées dans le Cloud et ne sont pas liées à un emplacement physique, à l'encontre des architectures classiques basées sur des serveurs physiques, où la panne matérielle inclut l'arrêt des sites Web hébergés.</strong>
      </div>
    </div>
   </div>

   <div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse4" aria-expanded="false" aria-controls="collapseTwo">
      Est-ce que je vais avoir un nom de domaine gratuit?
      </button>
    </h2>
    <div id="collapse4" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <strong>Oui, nous offrons gratuitement l'enregistrement ou le transfert d'un nom de domaine pour la première année avec nos packs d'hébergement mutualisé, le renouvellement du nom de domaine est effectué suivant le tarif en vigueur pour l'extension choisie.</strong>
      </div>
    </div>
  </div>



  <div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse5" aria-expanded="false" aria-controls="collapseTwo">
      C'est quoi un pack d'hébergement Web?
      </button>
    </h2>
    <div id="collapse5" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <strong>Un pack d'hébergement Web est un espace Web dédié à héberger un ou plusieurs sites Web, contenant des fichiers, bases de données et comptes emails, cet espace réservé sur un serveur qui est logé dans un centre de données (ou datacenter), ce dernier dispose de plusieurs caractéristiques dont une alimentation puissante et redondante, un raccordement en ultra-haut débit au réseau Internet, et une température modérée et constante.</strong>
      </div>
    </div>
  </div>



  <div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse6" aria-expanded="false" aria-controls="collapseTwo">
      C'est quoi la différence entre un hébergement mutualisé et un serveur VPS Cloud?
      </button>
    </h2>
    <div id="collapse6" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <strong>L'hébergement mutualisé implique que votre pack partage les ressources système (CPU, RAM, ...) du serveur d'hébergement avec les autres packs sur le même serveur qui l'héberge, alors que sur le VPS Cloud, vos ressources sont dédiées et garanties. Nous nous occupons de tous les aspects relatifs à la configuration de la sécurité et de l'environnement sur la plateforme d'hébergement mutualisé, tandis que les détenteurs de serveurs VPS Cloud doivent s'occuper de ces aspects ou les confier à nos spécialistes.</strong>
      </div>
    </div>
  </div>




  <div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse7" aria-expanded="false" aria-controls="collapseTwo">
      Est-ce que Host Oplus va m'aider à créer mon site Web?
      </button>
    </h2>
    <div id="collapse7" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <strong>Sur les offres d'hébergement Web, nous fournissons des outils gratuits de gestion de contenu pour sites Web (appelés aussi CMS), que vous pouvez installer en un clic via le panneau de contrôle cPanel, nous fournissons aussi des services professionnels de développement et création de sites Web qui ne font pas partie de l'offre d'hébergement Web.
Si vous avez un projet de création de site Web, vous pouvez contacter notre équipe commerciale pour discuter votre besoin et vous fournir une proposition technique et commerciale adaptée.</strong>
      </div>
    </div>
  </div>




  <div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse8" aria-expanded="false" aria-controls="collapseTwo">
      À quel délai mon service sera-t-il activé?
      </button>
    </h2>
    <div id="collapse8" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <strong>Le délai nécessaire à l'activation de votre service dépend du produit et du moyen de paiement que vous avez utilisé pour payer votre facture.
Pour en savoir plus sur les délais d'activation de nos services, veuillez visiter notre page de modalités de paiement.</strong>
      </div>
    </div>
  </div>



  <div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse9" aria-expanded="false" aria-controls="collapseTwo">
      Besoin d'informations complémentaires?
      </button>
    </h2>
    <div id="collapse9" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <strong>Visitez notre centre d'aide technique à la rubrique :<span></span href="#" class="bg-primary">Hébergement Mutualisé</span></strong>
      </div>
    </div>
  </div>




</div>


</div>
</div>






@include('layouts.footer')



</body>
</html>
