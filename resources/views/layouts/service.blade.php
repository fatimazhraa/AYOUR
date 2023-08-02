<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        
.services {
  width: 100%;
  display: flex;
  justify-content: center;
  align-items: center;
  flex-direction: column;
  background: #ffffff;
  margin-bottom:5%;
  margin-right:10%;
  margin-left:10%;
}

.s-heading {
  text-align: center;
}

.s-heading h1 {
  color: #576975;
  font-size: 2rem;
  font-weight: 400;
  letter-spacing: 1px;
  margin: 0px;
}


.s-heading p {
  color: rgba(87, 105, 117, 0.6);
  font-size: 1rem;
  margin: 10px;
  text-align: center;
}

.s-box span {
  display: flex;
  background-size: cover;
  align-items: center;
  width: 170px;
  height: 150px;
}

.s-box-container {
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  align-items: center;
}

.s-box {
  flex-basis: 25%;
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  width: 500px;
  height: 350px;
  padding: 20px 25px;
  box-sizing: border-box;
  margin: 15px;
  position: relative;
  background-color: #f7f9fc;
  color: white;
}

.s-box h2 {
  color: #519b8f;
  letter-spacing: 1px;
  font-size: 1rem;
  margin-bottom: 8px;
}



.bar {
  width: 100px;
  height: 6px;
  position: absolute;
  left: 50%;
  top: 0px;
  transform: translateX(-50%);
  background-color: #0b8c8c;
  display: none;
  animation: bar 0.5s;
}

.s-box:hover .bar {
  display: block;
}

.s-box p {
  color: #5e6366;
  line-height: 1.4;
}
.s-box img {
  background: transparent;
  width: 250px;
  height: 150px;
  display: flex;
  justify-content: center;
  align-items: center;
  margin-left:10%;
}
.s-box a {
            text-decoration: none; 
        }




/* Styles pour les appareils mobiles */
@media (max-width: 767px) {
  .s-heading h1 {
    font-size: 1.5rem; /* Ajustez la taille de la police selon vos préférences */
  }

  .s-heading p {
    font-size: 0.8rem; /* Ajustez la taille de la police selon vos préférences */
  }

  .s-box {
    flex-basis: 90%; /* Ajustez la largeur selon vos préférences */
    height: auto;
    margin: 10px 0;
    width: 90%; /* Ajustez la largeur selon vos préférences */
  }

  .s-box img {
    width: 100%; /* Ajustez la largeur selon vos préférences */
    height: auto;
  }
}

    </style>
</head>
<body>
<section class="services" id="services">
    <div class="s-heading">
        <h1>Création site Internet au Maroc</h1>
        <p>Des sites beaux et fonctionnels, pour mieux présenter votre activité et vous aider à vendre</p>
    </div>
    <div class="s-box-container">
        @foreach ($cartes as $carte)
        <div class="s-box">
        <a href="{{ route('card.details', ['id' => $carte->id]) }}">
            <div class="bar"></div>
            <span class="img">
                <img src="{{ asset('IMG/' . $carte->imgcarte) }}" alt="">
            </span>
            <h2>{{ $carte->titrecarte }}</h2>
            <p>{{ $carte->desccarte }}</p>
           </a>
        </div>
        @endforeach
    </div>
</section>
</body>
</html>