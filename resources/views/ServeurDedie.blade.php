<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
    padding-top:10%;
    background-color:#f7f9fc;

}


tr:first-of-type th {
  background-color: #f7f9fc;
}


.crd{
    background-color: #f7f9fc;
    transition: transform 0.3s ease;
}

.crd:hover{
    transform: translateY(-5px);
}


.prix{
   color:#0b8c8c;
   font-weight: 700;
}


.qst{
    color:white;
}

tr{
    text-align:center;
}

.colooor{
  background-color:#0b8c8c;
}
</style>
</head>
<body>
@include('layouts.header')
<div class="header">
<div class="container py-5 text-center">
<div >
    <h2>Serveurs Dédiés</h2>
    <p>Votre propre machine physique</p>
    <p>Accès root</p>
    <p>Avec ou sans infogérance</p>
</div>
</div>
</div>


<div class="container">
    <div class="row col-6 text-center mx-auto">
     <p class="text-center py-4 pt-5 pb-5">Un serveur dédié est la solution ultime pour des performances sans égal.
     Vous disposez de votre propre machine physique, pré-installée par nos experts.</p>
   </div>

   <div class="table-responsive">
    <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col"  class="py-4">Processeur</th>
      <th scope="col" class="py-4">RAM</th>
      <th scope="col" class="py-4">Disque</th>
      <th scope="col" class="py-4">Trafic</th>
      <th scope="col" class="py-4">Datacenter</th>
      <th scope="col" class="py-4">Bande passante</th>
      <th scope="col" class="py-4"></th>
    </tr>
  </thead>
  <tbody class="table-group-divider">
    <tr>
      <td class="py-4 align-middle">Intel Xeon E5-1620V3/V4	</td>
      <td class="py-4 align-middle">32GB</td>
      <td class="py-4 align-middle">2 × 2TB HDD</td>
      <td class="py-4 align-middle">30TB</td>
      <td class="py-4 align-middle"><img src="IMG/uk.png" alt="ukrain"></td>
      <td class="py-4 align-middle">100Mbps</td>
      <td class="py-4 align-middle"><button class="btn btn-primary">NOUS CONTACTER</button></td>
    </tr>
    <tr>

    <td class="align-middle">Intel Xeon E3-1270V6	</td>
      <td class="py-4 align-middle">32GB</td>
      <td class="py-4 align-middle">2 × 2TB HDD</td>
      <td class="py-4 align-middle">30TB</td>
      <td class="py-4 align-middle"><img src="IMG/uk.png" alt="ukrain"></td>
      <td class="py-4 align-middle">100Mbps</td>
      <td class="py-4 align-middle"><button class="btn btn-primary">NOUS CONTACTER</button></td>
    </tr>
    <tr>
    <td class="py-4 align-middle">Intel Xeon E5-1650V3/V4		</td>
      <td class="py-4 align-middle">64GB</td>
      <td class="py-4 align-middle">2 × 480GB SSD HDD</td>
      <td class="py-4 align-middle">30TB</td>
      <td class="py-4 align-middle"><img src="IMG/uk.png" alt="ukrain"></td>
      <td class="py-4 align-middle">100Mbps</td>
      <td class="py-4 align-middle"><button class="btn btn-primary">NOUS CONTACTER</button></td>
    </tr>
    <tr>
    <td class="py-4 align-middle">Intel Xeon E5-2620V3/V4		</td>
      <td class="py-4 align-middle">64GB</td>
      <td class="py-4 align-middle">2 × 2TB HDD</td>
      <td class="py-4 align-middle">30TB</td>
      <td class="py-4 align-middle"><img src="IMG/usa.png" alt="usa"></td>
      <td class="py-4 align-middle">100Mbps</td>
      <td class="py-4 align-middle"><button class="btn btn-primary">NOUS CONTACTER</button></td>
    </tr>
    <tr>
    <td class="py-4 align-middle py-auto">Intel Xeon E5-2630V3/V4			</td>
      <td class="py-4 align-middle">64GB</td>
      <td class="py-4 align-middle">4 × 4TB HDD</td>
      <td class="py-4 align-middle">30TB</td>
      <td class="py-4 align-middle"><img src="IMG/usa.png" alt="usa"></td>
      <td class="py-4 align-middle">100Mbps</td>
      <td class="py-4"><button class="btn btn-primary">NOUS CONTACTER</button></td>
    </tr>
  </tbody>
</table>
</div>



</div>




<div class="container">
  <div class="row my-5 justify-content-around">
    <div class="card col-md-5 mb-4 text-center crd border-0">
      <div class="card-body">
        <div class="card-title"><h6>Besoin de serveur avec moins de ressources?</h6></div>
        <div class="card-text">
          Avec nos serveurs VPS Cloud, allégez votre budget, configurez votre serveur et choisissez votre système d'exploitation, panneau de contrôle et les options d'infogérance.
        </div>
        <button type="button" class="btn btn-primary mt-3">NOS OFFRES VPS CLOUD</button>
        <div class="mt-3">
          <span class="prix my-3">À partir de 159 Dhs /mois</span>
        </div>
      </div>
    </div>

    <div class="card col-md-5 text-center crd border-0">
      <div class="card-body">
        <div class="card-title"><h6>Besoin d'une solution sur mesure?</h6></div>
        <div class="card-text">
          Vous avez un site à haut trafic, une configuration complexe? un Cloud à mettre en place? Prenez contact avec nos experts, nous avons toutes les réponses à vos questions.
        </div>
        <button type="button" class="btn btn-primary mt-3">Plus de Détails...</button>
      </div>
    </div>
  </div>
</div>




<div class=" py-5  colooor">
    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col-md-6 col-sm-12">
                <h5 class="qst">Besoin d'assistance ou d'information? Appelez-nous maintenant!</h5>
            </div>
            <div class="col-md-3 col-sm-12 mt-3 mt-md-0">
                <button type="button" class="btn  btn-block" style="background-color:#1a1919; color:#fff;">+212 672-849466</button>
            </div>
        </div>
    </div>
</div>




@include('layouts.footer')





</body>
</html>
