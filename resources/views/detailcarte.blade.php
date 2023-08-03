<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
 <link   rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/3.0.0/css/font-awesome-ie7.min.css" integrity="sha512-YSrvaOXIhYlAE8Qj488Nit2KMcOZzqVwe6C6z8D+N0Wq/YHvzAaQNAaBhBZxpqC0cXtM15HlrjIiMXnNda1xVA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<style>
/* Utilisation de variables pour les couleurs */
:root {
  --color-primary: #88a7bb;
  --color-secondary: #3787bd;
  --color-text: #555;
  --color-hover: #0ef;
  --color-active: #f00;
}

.container {
  margin-top: 10%;
  margin-left: 10%;
  padding: 2rem;
  margin-bottom: 10%;
}

.container h1 {
  background: linear-gradient(to left, var(--color-primary), var(--color-secondary));
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  font-size: 3rem;
  margin-bottom: 1rem;
}

.links ul li a {
  color: var(--color-text);
  text-decoration: none;
  transition: color 0.3s ease-in-out;
  margin-left: 10%;
}

.links ul li a:hover {
  color: var(--color-hover);
}

.links ul li a:active {
  color: var(--color-active);
}

.service {
  display: flex;
}

.links {
  flex-basis: 30%;
  padding-right: 2rem;
  background-color: #fff;
  border-radius: 6px;
  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
  padding: 1.5rem;
  margin-bottom: 2rem;
  height: 250px;
  margin-right: 8rem;
  margin-left: 10%;
}

.links ul {
  list-style-type: none; /* Supprime les puces des éléments li */
}

.links h2 {
  font-size: 1.5rem;
  font-weight: 600;
  color: var(--color-text);
  margin-bottom: 1rem;
}

.links hr {
  border: none;
  border-top: 1px solid #ccc;
  margin-bottom: 1rem;
}

.contentCenter {
  flex-basis: 50%;
}

.nums {
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  background-color: #fff;
  border-radius: 6px;
  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
  padding: 2rem;
  margin-bottom: 2rem;
}

.contentCenter .image {
  max-width: 100%;
}

.contentCenter .titre {
  font-size: 1.5rem;
}

.contentCenter .description {
  margin-top: 1rem;
}

/* Méthode pour les styles spécifiques aux appareils mobiles */
@media (max-width: 767px) {
  .container {
    margin-left: 5%;
    margin-right: 5%;
  }

  .links {
    flex-basis: 100%;
    margin-right: 0;
    margin-left: 0;
  }

  .nums {
    margin-left: 5%;
    margin-right: 5%;
  }
}

/* Méthode pour les styles spécifiques aux tablettes */
@media (min-width: 768px) and (max-width: 1023px) {
  /* Ajoutez vos styles spécifiques aux tablettes ici */
}

/* Méthode pour les styles spécifiques aux écrans plus larges */
@media (min-width: 1024px) {
  /* Ajoutez vos styles spécifiques aux écrans plus larges ici */
}

</style>

</head>

<body>








<div class="container">

        <div class="titre">
                   <h1>{{ $card1->grandtitre }}</h1>
        </div>
        <div class="photo">
            <img src="IMG/Capture d'écran 2023-07-16 182316.png" alt="Votre image">
        </div>
    
</div>



<div class="content">




    <div class="service">
        <div class="links">
           <h2>Our Services</h2>
           <hr>
            <ul>
            @foreach ($card2 as $carte)
               <li><a href="{{ route('card.details', ['id' => $carte->id]) }}">{{ $carte->grandtitre }}</a></li>
               @endforeach 
           <ul>
        </div>
   
       <div class="contentCenter">
            <div class="image"> <img src="{{{ asset('IMG/' . $card1->imgdetaille) }}}" alt=""></div>
            <div class="titre"> {{ $card1->titredetaille }}</div>
            <div class="description"> {{ $card1->descdetaille }}</div>
       </div>

    </div>


    <div class="nums"> 
          <h2>Support en live</h2>
          <p>+212 5282-11829</p>

          <p> +212 6686-46054</p>

          <p>+212 672-849466 </p>
    
    </div>




</div>



@include('layouts.footer')





   <script>
    window.addEventListener('scroll', function() {
  var navbar = document.querySelector('.navbar');
  var scrollPosition = window.scrollY;

  if (scrollPosition > 0) {
    navbar.classList.add('scrolled');
  } else {
    navbar.classList.remove('scrolled');
  }
});
    </script>


</body>
</html>
