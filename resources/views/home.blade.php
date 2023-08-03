<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>Host Oplus - Hébergement web Maroc 100% Sécurisé</title>
  <!-- Website Favicon -->
  <link rel="shortcut icon" href="{{ asset('IMG/favicon.png') }}" type="image/x-icon">

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



  </style>



</head>
<body>





@include('layouts.header')

@include('layouts.home.blue-div')

@include('layouts.home.domaine')

@include('layouts.home.offre')

@include('layouts.home.def')

@include('layouts.home.experience')

@include('layouts.home.cards')

@include('layouts.home.objectif')

@include('layouts.home.service')

<<<<<<< HEAD
@include('layouts.contenu')

@include('layouts.prix')
=======

@include('layouts.home.contenu')


@include('layouts.home.prix')
>>>>>>> 949c80d62912c404e9f88d66aa114e36930ed71b

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

</body>
</html>
