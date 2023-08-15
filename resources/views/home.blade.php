<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>Host Oplus - Hébergement web Maroc 100% Sécurisé</title>
  <!-- Website Favicon -->
  <link rel="shortcut icon" href="{{ asset('IMG/favicon.png') }}" type="image/x-icon">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  @livewireStyles
  <style>

.recherche {
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  padding: 30px 0;
  margin-bottom:10%;
  margin-right:10%;
  margin-left:10%;
}

.recherche h2 {
  font-size: 25px;
  text-align: center;
  margin-bottom: 20px;
  color: #333;
}

.recherche p {
  font-size: 18px;
  text-align: center;
  margin-bottom: 20px;
  color: #555;
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
  color: black;
  border: none;
  border-radius: 0 5px 5px 0;
  font-size: 14px;
  cursor: pointer;
}

.card-container {
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  max-width: 1200px;
  margin: 0 auto;
}

.card1 {
  width: calc(33.33% - 20px); /* Adjusted width to fit three cards in one row */
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

@media (max-width: 768px) {
  .card-container {
    max-width: 90%; /* Adjust the container's width for smaller screens */
  }

  .card1 {
    width: calc(50% - 20px); /* Make the cards occupy 50% of the container width with a small margin */
  }
}

    </style>
</head>
<body>

@include('layouts.header')

@include('layouts.home.blue-div')

<div class="recherche ">
   <div class="d-flex">
    @livewire('domain-search')
    </div>

  <p>Nous disposons de plus de 200 extensions de noms de domaine.</p>
  <div class="card-container">
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
</div>

@include('layouts.home.offre')

@include('layouts.home.def')

@include('layouts.home.experience')

@include('layouts.home.cards')

@include('layouts.home.objectif')

@include('layouts.home.service')

@include('layouts.home.contenu')

@include('layouts.home.prix')

@include('layouts.footer')



<script src="{{ asset('js/lib/all.min.js') }}"></script>
<!-- recherche -->
<script>
    document.getElementById("domain-search-form").addEventListener("submit", function(event) {
        event.preventDefault();

        var domain = document.querySelector(".search-input").value;

        var csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

        var xhr = new XMLHttpRequest();
        xhr.open("POST", "{{ route('recherche') }}", true);
        xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        xhr.setRequestHeader("X-CSRF-TOKEN", csrfToken);
        xhr.onreadystatechange = function() {
            if (xhr.readyState === XMLHttpRequest.DONE && xhr.status === 200) {
                var response = JSON.parse(xhr.responseText);
                var isAvailable = response.isAvailable;

                var messageElement = document.getElementById("availability-message");

                if (isAvailable) {
                    messageElement.textContent = "Le nom de domaine est disponible !";
                } else {
                    messageElement.textContent = "Le nom de domaine n'est pas disponible.";
                }
            }
        };
        xhr.send("domain=" + encodeURIComponent(domain));
    });
</script>










<script>

      const txt = document.querySelector(".sec-text");
      const txtLoad = () => {
        setTimeout(() => {
          text.textContent = "PRIX DE RENOUVELLEMENT LE PLUS BAS";
        }, 0);
        setTimeout(() => {
          text.textContent = "SUPPORT D EXPERTS DES NOMS DE DOMAINE";
        }, 4000);
        setTimeout(() => {
          text.textContent = "ACCRÉDITÉ PAR L ANRT";
        }, 8000);

      }

      textLoad();
      setInterval(textLoad, 12000);



</script>





<script>

      const text = document.querySelector(".sec-text");
      const textLoad = () => {
        setTimeout(() => {
          text.textContent = "hebergement Web Maroc";
        }, 0);
        setTimeout(() => {
          text.textContent = "Création & refonte de sites";
        }, 4000);
        setTimeout(() => {
          text.textContent = "applications web & mobiles";
        }, 8000);
        setTimeout(() => {
          text.textContent = "référencement web & webmarketing";
        }, 12000);
      }
      
      textLoad();
      setInterval(textLoad, 24000);
 </script>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
<script src="{{ asset('js/lib/domain_check.js') }}"></script>
@livewireScripts

</body>
</html>
