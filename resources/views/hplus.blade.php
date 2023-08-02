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

    .header{
        background-color: #f7f9fc;
        height:50vh;
    }


    h5{
        color:#ababab;
        font-size:40px;
    }
    h6{
        color:#ababab;
        font-size:30px;
    }


    .titre{
        color:#ababab;
        font-size:18px;
    }


   </style>

</head>
<body>
    
<div class="header d-flex justify-content-center">
<div class="container my-auto">

    <h1 >H+FTP Client Version 2.2</h1>

</div>
</div>




    <div class="container my-5">
        <div class="row justify-content-between my-5">

            <div class="col-lg-6 col-md-6 col-sm-12 py-5">
                <h5 class="text-center">H+FTP Client</h5>
                <p>H+FTP est un client FTP, FTPS et SFTP pour Windows qui permet aux utilisateurs de télécharger et de téléviser des fichiers sur un serveur distant.
                    En utilisant un protocole de transfert de fichiers sécurisé tel que FTPS ou SFTP, les utilisateurs peuvent s'assurer que leurs fichiers sont transmis de manière sécurisée pendant le transfert. De plus, la prise en charge d'HTTP permet aux utilisateurs de télécharger des fichiers depuis des sites web.</p>
            </div>
            <div class="card col-lg-5 col-md-6 col-sm-12 text-center">
                <div class="card-body">
                    <div class="card-title"><p class="titre">Caractéristiques</p></div>
                    <div class="card-text">
                        <div class="row">
                            <p class="col-6">Version</p>
                            <p class="col-6">2.2 Stable</p>
                        </div>

                        <div class="row">
                            <p class="col-6">Dernière mise à jour</p>
                            <p class="col-6">02/03/2023</p>
                        </div>

                        <div class="row">
                            <p class="col-6">Licence</p>
                            <p class="col-6">HostOplus</p>
                        </div>

                        <div class="row">
                            <p class="col-6">Taille</p>
                            <p class="col-6">21.1 Mo</p>
                        </div>

                        <div class="row">
                            <p class="col-6">Systèmes d'exploitation</p>
                            <p class="col-6">Windows 9x/2000/XP/Vista/7/10/11</p>
                        </div>

                        <div class="row">
                            <p class="col-6">Langue</p>
                            <p class="col-6">Français</p>
                        </div>

                        <button type="button" class="btn btn-primary">Télécharger pour Windows</button>

                        <hr>
                        <p>Nombre de téléchargements : 47</p>
                    </div>
                </div>
            </div>
        </div>
    </div>






<div class="container">
  <div class="row mt-5">
    <div class="desc col-md-6 col-sm-12 mt-5">
      <h6>Pourquoi utiliser H+FTP Client ?</h6>
      <p>Le téléchargement et l'installation de H+FTP Client sont faciles. Lancez l'application, le gestionnaire de sites FTP vous donne alors la possibilité de vous connecter à un site spécifique, ou vous pouvez simplement parcourir la liste d'une dizaine de sites FTP anonymes.

        Un assistant très utile simplifie encore plus le processus de connexion. Vous sélectionnez votre fournisseur d'accès Internet dans une liste, saisissez votre nom d'utilisateur et votre mot de passe, et vous vous connectez à votre compte FTP sans avoir à entrer l'adresse du serveur FTP.

      </p>
    </div>
    <div class="col-md-6 col-sm-12 mt-5 text-center">
      <img class="img-fluid" src="IMG/download.svg" alt="H+FTP Client">
    </div>
  </div>
</div>






@include('layouts.footer')



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

</body>
</html>