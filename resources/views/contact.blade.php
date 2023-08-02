<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel=”stylesheet” href=”https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css”rel=”nofollow” integrity=”sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I” crossorigin=”anonymous”>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
 <link   rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
 <link
rel="stylesheet"
href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"
/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/3.0.0/css/font-awesome-ie7.min.css" integrity="sha512-YSrvaOXIhYlAE8Qj488Nit2KMcOZzqVwe6C6z8D+N0Wq/YHvzAaQNAaBhBZxpqC0cXtM15HlrjIiMXnNda1xVA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Document</title>
</head>
<body>

<style>


@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap');

*{
   margin: 0;
   padding: 0;
   box-sizing: border-box;
   scroll-behavior: smooth;
   font-family: 'Poppins', sans-serif;
}


label{
    font-size:20px;
    color:#0b8c8c;
}



.content1 h1 {
   color:black;
  
  height:50vh;
  padding-top:90px;
}
h5{
    color:#0b8c8c;
    text-align:center;
    font-size:30px;
    
    padding-top:10px;
}

.content1{
    background-color:#f7f9fc;
    
    
}
.email-icon{
    color:#0b8c8c;
    font-size:300%;
    text-align:center;
}
.card1{
    background-color:#F0F8FF;
    margin-top:5%;
    padding-top:2%;
    padding-bottom:2%;
    
    
}
.card2{
    background-color:#F0F8FF;
    margin-top:5%;
    padding-top:2%;
    padding-bottom:2%;
    
}
.card3{
    background-color:#F0F8FF;
    margin-top:5%;
    padding-top:2%;
    padding-bottom:2%;
    
}
.tel-icon{
    color:#0b8c8c;
    font-size:300%;
    text-align:center;
}

.emp-icon{
    color:#0b8c8c;
    font-size:300%;
    text-align:center;
}

.inpt{
    margin-left:20%;
    margin-top:3%;
    margin-bottom:3%;
}
.bttn{
    margin-left:20%;
    margin-top:3%;
    margin-bottom:3%;
}
.card1 {
            transition: transform 0.3s ease;
}

.card1:hover {
            transform: translateY(-10px);
}
.card2 {
            transition: transform 0.3s ease;
}

.card2:hover {
            transform: translateY(-10px);
}
.card3 {
            transition: transform 0.3s ease;
}

.card3:hover {
            transform: translateY(-10px);
}
</style>
<div class="content1 d-flex justify-content-center align-items-center ">
    <div>
    <h1 >Une agence dédiée à votre communication digitale</h1>
    </div>
</div>
    <div class="contant2 ">
    <h5 class="text-center py-4">Nous faire part de votre projet digital</h5>
    <div class=" justify-content-center border container">
    <form >
    <div class=" col-6 p-1 inpt" >
    <label for="nom" class="form-label">Nom</label>
    <input type="input" class="form-control" id="nom" placeholder="Nom*">
    </div>
    <div class=" col-6 p-1 inpt">
    <label for="email" class="form-label">Email address</label>
    <input type="email" class="form-control" id="email" placeholder="Adresse e-mail*">
    </div>
    <div class=" col-6 p-1 inpt" >
    <label for="numéro" class="form-label">Numéro de téléphone</label>
    <input type="input" class="form-control" id="numéro" placeholder="Numéro de téléphone*">
    </div>
    <div class=" col-6  inpt">
    <label for="message" class="form-label">Message</label>
    <textarea class="form-control" id="message" rows="9" placeholder="Votre message*"></textarea>
    </div>
    <div class="container  bttn">
        <button type="button" class="btn btn-primary col-6" >Click Me</button>
    </div>
    <form>
    </div>
    <div class="container">
    <div class="row justify-content-around ">
    <div class="card col-lg-3 card1  col-md-5  ">
        <i class="fas fa-envelope email-icon"></i>
        <div class="card-body">
            <div class="card-title text-center">
             E-mail
            </div>
            <div class="card-content text-center">
             contact@hostoplus.com
            </div>
        </div>
    </div>
    
    <div class="card col-lg-3 card2  col-md-5 ">
        <i class="fas fa-phone-alt tel-icon"></i>
        <div class="card-body">
            <div class="card-title text-center">
             Téléphone
            </div>
            <div class="card-content text-center">
              +212 5282-11829<br>
              +212 6686-46054<br>
              +212 672-849466
            </div>
        </div>
    </div>
    <div class="card col-lg-3 card3 col-md-5 ">
        <i class="fas fa-map-marker-alt emp-icon"></i>
        <div class="card-body">
            <div class="card-content text-center">
              Ayour Concept 58 AVENUE FARHAT HACHAD CITE DAKHLA 80000 AGADIR
            </div>
        </div>
    </div>
    </div>

</div>
</div>
</div>
<br><br>
</div>


@include('layouts.footer')

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>
