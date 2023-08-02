<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
    <style>
      
        .main-container {
            text-align: center;
            padding: 20px;
            margin-bottom: 10%;
            margin-right:10%;
  margin-left:10%;
            max-width: 1200px; /* Limit the width of the container */
        }
        .first-div {
    display: ;
    flex-wrap: wrap;
    justify-content: space-between; /* To push the elements apart */
    align-items: center; /* To vertically align the items */
    margin-bottom: 20px;
}

/*.first-div .text-content {
    flex-basis: 60%;
    padding: 20px;
    text-align: left;
}

.first-div .logo {
    flex-basis: 30%;
    height: auto;
}*/

    .first-div h1 {
        font-size: 50px;
        color: rgb(85, 169, 172);
        flex-basis: 100%; /* Ajout de la propriété flex-basis pour occuper toute la largeur */
    }

    .first-div h2 {
        font-size: 25px;
        color: rgb(53, 66, 66);
    }


    .first-div .text-content p {
        font-size: 20px;
        line-height: 1.6;
        margin: 10px 0;
        text-align: left; 
    }


        .cards-container {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            margin-top: 20px;
        }

        .card2 {
            flex-basis: calc(25% - 20px);
            background-color: #ffffff;
            border: 1px solid #dcdcdc;
            padding: 20px;
            margin: 10px;
            text-align: center;
            transition: transform 0.3s ease-in-out;
            border-radius: 10px;
        }

        .card2:hover {
            transform: scale(1.05);
        }

        .card2.blue-card {
            background-color:#0b8c8c;
            color: #ffffff;
        }

        .card2 h4 {
            font-size: 24px;
            font-weight: bold;
            margin-top: 5px;
            color: #354242;
        }

        .card2 p {
            font-size: 16px;
            color: #354242;
        }

        .second-div {
            background-color: #ffffff;
            padding: 20px;
            margin-left: 25px;
            max-width: 1000px;
            margin: 0 auto;
        }

        .second-div h2 {
            font-size: 36px;
            font-weight: bold;
            color: #55A9AC;
            margin-bottom: 10px;
        }

        .second-div h3 {
            font-size: 24px;
            font-weight: bold;
            color: #354242;
            margin-bottom: 10px;
        }

        .second-div p {
            font-size: 18px;
            line-height: 1.6;
        }
    </style>
</head>
<body>
<div class="main-container">
    <div class="first-div d-flex">
        <div class="text-content col-5">
          <h1>52,147</h1> 
          <h2>Les entreprises grandissent et réussissent en utilisant nos services.</h2>
            <p>Rassemblez rapidement les utilisateurs B2B et les potentialités mondiales.
            Plagiez progressivement le commerce électronique de niveau de ressource grâce aux compétences de base de nivellement des ressources.
            Mettez en œuvre de manière spectaculaire des alignements à faible risque et à haut rendement avant les détaillants en ligne transparents.</p>
        </div>
        <img class="logo col-4" src="IMG/Capture d'écran 2023-07-19 161217.png" alt="Logo">
    </div>

    <div class="second-div">

      <div class="experience">
        <h2>17</h2>
        <h3>Years Experience</h3>
        <p>Compellingly embrace empowered e-business after user friendly intellectual capital. Interactively actualize front-end processes with effective convergence.</p>  
      </div>

      <div class="cards-container">
          <div class="card2 blue-card">
            <h4>52,00+</h4>
            <p>Companies Engaged</p>
          </div>
          <div class="card2">
            <h4>99%</h4>
            <p>Project Success</p>
          </div>
          <div class="card2">
            <h4>95%</h4>
            <p>Happy Customers</p>
          </div>
          <div class="card2">
            <h4>6100+</h4>
            <p>Projects Complete</p>
          </div>
      </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
