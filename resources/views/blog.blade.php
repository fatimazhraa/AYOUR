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


.container-fluid{
    background-color:#f7f9fc;
    height:80vh;
}

.container-fluid h1{
    color:#0b8c8c;
    font-size:50px;
}

.container-fluid p{
    font-size:20px;
}


.search-container {
            position: relative;
            display: inline-block;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); /* Add shadow effect */
        }

 .search-icon {
            position: absolute;
            top: 50%;
            right: 10px;
            transform: translateY(-50%);
            color: #0b8c8c;
}

.search-input {
            padding: 10px 30px; /* Adjust padding to accommodate icon */
            border: 1px solid #ccc;
            border-radius: 20px;
            outline: none;
            width: 200px;
            font-size: 16px;
}

.content h5{
    color:#ababab;
}

ul li{
    list-style:none;
}


.content p:hover{
    color:#0b8c8c;
}

</style>


</head>
<body>

<div class="container-fluid d-flex justify-content-around align-items-center mb-5">

        <div class="col-5">
            <h1>Blog</h1>
            <p>Ressources, Actualités et Outils de l'équipe d'experts Host Oplus</p>
        </div>
        <img src="IMG/blog.svg" alt="blog" class="img-responsive img-fluid col-4 my-auto">

</div>

<div class="content d-flex justify-content-around">
   <div class="side1 col-3  ">
     <div class="search-container">
        <input type="text" class="search-input" placeholder="Search...">
        <i class="fas fa-search search-icon"></i>
     </div>
     <h5 class="mt-5">Categories</h5>
     <hr  class="w-50 ">

        <p>Cybersécurité</p>
        <p>Marketing numérique</p>
        <p>Développement mobile</p>
        <p>Gestion de contenu</p>
        <p>Hébergement Web</p>
        <p>SEO</p>
        <p>Commerce électronique</p>
        <p>Développement Web</p>

     <h5 class="mt-5">Latest Post</h5>
     <hr class="w-50 ">

   </div>
@foreach($posts as $post)
   <div class="side2 col-6">
        <div class="row">
            <div class="col-lg-5 col-md-12">
                <a href="#">
                <div class="card">
                    <img src="{{$post->}}" alt="hebergement" class="img-fluid ">
                    <div class="card-body">
                        <div class="card-title">{{date('d M,Y')}}</div>
                        <div class="card-text">{{$post->description}}</div>
                    </div>
                </div>
                </a>
            </div>
        </div>
    </div>
</div>
@endforeach






@include('layouts.footer')







</body>
</html>
