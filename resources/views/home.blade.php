<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
 <link   rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
 <link
rel="stylesheet"
href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"
/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/3.0.0/css/font-awesome-ie7.min.css" integrity="sha512-YSrvaOXIhYlAE8Qj488Nit2KMcOZzqVwe6C6z8D+N0Wq/YHvzAaQNAaBhBZxpqC0cXtM15HlrjIiMXnNda1xVA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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

@include('layouts.blue-div')

@include('layouts.domaine')

@include('layouts.offre')

@include('layouts.def')

@include('layouts.experience')

@include('layouts.cards')

@include('layouts.objectif')

@include('layouts.service')


@include('layouts.contenu')


@include('layouts.prix')


@include('layouts.footer')



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