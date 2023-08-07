
<!DOCTYPE html>
<html lang="fr">
<body>
    <style>
      .foot{
        background-color: #182f2f;
  color: #fff;
  padding: 20px;
  display: flex;
  justify-content: space-between;
      }

.partie1 {
  margin-left:10%;
  width: 33.33%;
}

.partie2 {
  width: 33.33%;
}

.partie3 {
  width: 33.33%;
  margin-right:10%;
}

.partie1 p {
  margin-top: 10px;
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
  color: #0b8c8c;
  margin-right: 10px;
  margin-top: 10px;
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
  background-color:  #0b8c8c;
  color: #ffffff;
  cursor: pointer;
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

/* Styles par défaut */

/* Ajoutez vos styles pour les écrans de taille normale ici */

/* Styles pour les appareils mobiles */
@media (max-width: 767px) {
  .foot {
    flex-direction: column;
    align-items: center;
  }

  .partie1,
  .partie2,
  .partie3 {
    width: 100%;
    text-align: center;
    margin-bottom: 20px;
  }

  .reseaux-sociaux {
    display: flex;
    justify-content: center;
    margin-top: 10px;
  }

  .partie3 form {
    flex-direction: column;
    align-items: center;
  }

  .partie3 input[type="email"] {
    width: 80%;
    margin-bottom: 10px;
  }

  .partie3 button[type="submit"] {
    width: 80%;
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
.hrfooter{
  width:60px;
   height:3px;
   color:#0b8c8c;
  }
 .logofooter{
    width:200px;
  height:50px;
  }
    </style>
    <footer>
<div class="foot">

  <div class="partie1">
  <img src="IMG/img-removebg-preview.png" alt="" class="logofooter">
    <p style="margin-right:10%;">Host Oplus Services d'Hébergement Web et Création & refonte de sites, applications web & mobiles, référencement web & webmarketing.</p>
  </div>
  <div class="partie2">
    <h4>ADRESSE</h4>
    <hr class="hrfooter">
    <ul>
      <li><i class="fas fa-map-marker-alt"></i> 58 AVENUE FARHAT HACHAD CITE DAKHLA 80000 AGADIR</li>
      <li><i class="fas fa-phone"></i> +212 5282-11829, +212 6686-46054, +212 672-849466</li>
      <li><i class="far fa-envelope"></i> contact@hostoplus.com</li>
    </ul>
  </div>
  <div class="partie3">
    <h4>NEWSLETTER</h4>
    <hr  class="hrfooter" >
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

</div>
</footer>


</body>
</html>
