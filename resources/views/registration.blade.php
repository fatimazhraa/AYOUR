<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@1,100&display=swap" rel="stylesheet">
</head>


<style>

body{
    background-color:#;
}



.custom-border {
  border: 1px solid #ccc; /* Définit une bordure de 1 pixel solide de couleur grise */
  border-radius: 0.25rem; /* Arrondi les coins de la bordure */
  overflow: hidden; /* Cache le débordement du contenu s'il y en a */
}
.header{
    background-color: rgba(0,0,0,.03);
}


.accordion-button:not(.collapsed) {
    background-color: #f8f9fa; /* Set the background color for the expanded state */
    color: #000; /* Set the text color for the expanded state */
    border-color: #ccc; /* Set the border color for the expanded state */
  }


i{
    color:black;
}

a{
    text-decoration: none;
    color:black;
}



.accordion-body header{
    padding-left:0;
    padding-right:0;
}


.no-padding{
    padding:-60%;;
}


.accordion-header{
    height:2%;
}


.tele{
    margin-left:10%;
}
.nom{
    margin-left:10%;
}
.conf{
    margin-left:10%;
}
</style>







<body>
    

<div class="container d-flex justify-content-between">
 <div class="col-2 border-1">



  <div class="accordion custom-border accordion-flush  " id="accordionFlushExample">
  <div class="accordion-item">
    <h2 class="accordion-header  header">
      <button class="accordion-button collapsed " type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" >
      <p><i class="fas fa-user"></i> Déjà inscrit ?</p>
      </button>
    </h2>
    <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body">
        <p>Déjà enregistré chez nous? Si oui, cliquez sur le bouton ci-dessous pour vous connecter à votre espace client.</p>
        <hr class="no-padding">
        <p style="padding: 0;" ><a href="{{route('login')}}"><i class="fas fa-user"></i> Connexion</a><p>
        <hr class="no-padding">
      </div>
    </div>
  </div>
  </div>


 </div>

   <form action="{{route('register.store')}}" method="post">
    @csrf
  <div class="forms col-8">
      <div class="form1">
         <h3 >Registration Form</h3>
         <div class="d-flex  py-3">
            <input name="prenom" placeholder="prénom" class="py-2 px-5 ">
            <input name="nom" placeholder="nom" class="py-2 px-5 nom">
         </div>
         <div class="d-flex">
            <input name="AdressEmail" placeholder="Adress Email" class="py-2 px-5 addr">
            <input name="telephone" placeholder="téléphone" class="py-2 px-5 tele">
         </div>
      </div>
      <div class="form2 py-5">
        <h3 class=" py-2">Adresse de facturation</h3>
        <div>
        <input name="NomEntrprise" placeholder="Nom de l'entreprise (optionel)" class="row w-50 d-flex py-2 my-2">
        </div>
        <input name="Adresse" placeholder="Adresse" class="row w-50 py-2 my-2">
        <input name="Adresse2" placeholder="Adresse 2" class="row w-50 py-2 my-2">
        
        <div class="d-flex justify-content-around py-2">
            <input name="Ville" placeholder="Ville"  class="py-2 my-2">
            <input name="Province" placeholder="Province" class="py-2 my-2">
            <input name="Codepostal" placeholder="Code postal" class="py-2 my-2">
        </div>
        <input name="Pays" placeholder="Pays" class="row w-50 py-2 my-2">        
      </div >


      <div class="form3 py-5">
         <h3>Information additionnelle</h3>
         <p>(les champs requis sont indiqués par un *)</p>
         <select id="currencySelect" class="w-50" name="currency">
        <option value="MAD">MAD</option>
        <option value="USD">USD</option>
    </select>
      </div>

      <div lass="form4 py-5">
        <h3>Sécurité du compte</h3>
        <div class="d-flex">
        <input type="password" name="password" placeholder="Mot de passe">
        <input type="password" name="confirmPassword" placeholder="confirmer le Mot de passe" class="conf">
        </div>
      </div>

      <div class="form5">
         <h3>Joignez-vous à notre liste d'envoi</h3>
         <p>We would like to send you occasional news, information and special offers by email. Choose below whether you want to join our mailing list. You can unsubscribe at any time.</p>
         <div class="btn-group">
  <button type="button" class="btn btn-primary" id="choiceButton" data-bs-toggle="buttons">
    <label class="btn btn-primary active">
      <input type="radio" name="options" id="option1" autocomplete="off" checked> Yes
    </label>
    <label class="btn btn-primary">
      <input type="radio" name="options" id="option2" autocomplete="off"> No
    </label>
  </button>
</div>
        </div>

    <button type="submit" class="btn btn-primary">save</button>

</form>
  </div>










<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>







<script>
  // JavaScript pour gérer l'interaction et afficher la liste de pays
  const countryInput = document.getElementById('countryInput');
  const countryList = document.getElementById('countryList');
  
  // Liste de pays (peut être une liste plus complète)
  const countries = [
    'France', 'Allemagne', 'Espagne', 'Italie', 'Royaume-Uni', 'États-Unis', 'Canada'
  ];

  countryInput.addEventListener('click', () => {
    countryList.innerHTML = ''; // Efface la liste existante

    // Remplit la liste avec les pays
    countries.forEach(country => {
      const countryItem = document.createElement('li');
      countryItem.textContent = country;
      countryItem.addEventListener('click', () => {
        countryInput.value = country; // Met à jour le champ de saisie avec le pays sélectionné
        countryList.innerHTML = ''; 
    });
      countryList.appendChild(countryItem);
    });
  });

  // Ferme la liste si l'utilisateur clique en dehors du champ de saisie
  document.addEventListener('click', event => {
    if (!countryInput.contains(event.target) && !countryList.contains(event.target)) {
      countryList.innerHTML = '';
    }
  });
</script>







</body>
</html>