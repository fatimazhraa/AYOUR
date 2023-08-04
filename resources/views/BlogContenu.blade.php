<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/3.0.0/css/font-awesome-ie7.min.css" integrity="sha512-YSrvaOXIhYlAE8Qj488Nit2KMcOZzqVwe6C6z8D+N0Wq/YHvzAaQNAaBhBZxpqC0cXtM15HlrjIiMXnNda1xVA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link   rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
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
        padding: 40px 0;
    }

    .container-fluid h1{
        color:#0b8c8c;
        font-size:50px;
        margin-bottom: 20px;
    }

    .container-fluid p{
        font-size:20px;
        margin-bottom: 40px;
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
        width: 100%;
        max-width: 300px;
        font-size: 16px;
    }

    .content h5{
        color:#ababab;
    }

    ul li{
        list-style:none;
    }

    .content .catg:hover{
        color:#0b8c8c;
    }

    a{
        text-decoration:none;
    }

    .slid2 {
        vertical-align: middle;
        width: 100%;
        border-radius: 10px;
        margin-top: -200px;
    }

    img, svg{
        margin-top: -150px;
        margin-left: -100px;
    }

    @media (max-width: 768px) {
        .container-fluid h1 {
            font-size: 32px;
        }

        .container-fluid p {
            font-size: 18px;
        }

        .side1, .side2 {
            flex: 1;
            width: 100%;
        }

        .side2 img {
            margin-top: -100px;
        }

        img, svg {
            margin-top: -100px;
            margin-left: 0;
        }
    }
</style>

</head>
<body>
    
<div class="container-fluid d-flex justify-content-center align-items-center flex-wrap mb-5">

        <div class="col-lg-5 col-md-6 col-12 text-center mb-4">
            <h1>Blog</h1>
            <p>Ressources, Actualités et Outils de l'équipe d'experts Host Oplus</p>
        </div>
        <img src="../IMG/blog.svg" alt="blog" class="img-responsive img-fluid col-lg-4 col-md-6 col-10 my-auto">
   
</div>

<div class="content d-flex flex-wrap justify-content-center">
   <div class="side1 col-lg-4 col-md-6 col-12 mb-4">
     <div class="search-container">
        <input type="text" class="search-input" placeholder="Search...">
        <i class="fas fa-search search-icon"></i> 
     </div>
     <h5 class="mt-5">Categories</h5>
     <hr class="w-50 ">
     
     @foreach($categories as $category)
           <p><a href="{{ route('Blog.index', ['category' => $category->id]) }}">{{$category->name}}</a></p>
     @endforeach
     
     <h5 class="mt-5">Latest Post</h5>
     <hr class="w-50 ">

   </div>

   <div class="side2 col-lg-6 col-md-6 col-12 mb-4">
        
   @if($post)
    <img src="../{{ $post->image_path }}" alt="hebergement" class="img-responsive img-fluid slid2">
    <h5>{{$post->titre}}</h5><br>
       <p>{{$post->description}}</p>
@else
    <p>No post data available.</p>
@endif



       
        
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

</body>
</html>
