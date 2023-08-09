<!DOCTYPE html>
<html lang="fr">
<head>
    <style>

.blue-div {
  margin-top: 5%;
  background-color: rgb(163, 204, 243);
  padding: 20px;
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  margin-bottom:10%;
  margin-top:10%;
}

@media (max-width: 768px) {
  .blue-div {
    margin-left: 10px;
    margin-right: 10px;
  }
}

@media (min-width: 769px) and (max-width: 1200px) {
  .blue-div {
    margin-left: 50px;
    margin-right: 50px;
  }
}

@media (min-width: 1201px) {
  .blue-div {
    margin-left: 100px;
    margin-right: 100px;
  }
}


.left-div,
.right-div {
  flex: 1;
}

.right-div {
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  text-align: center;
}

.right-div h1 {
  font-weight: bold;
  font-size: 30px;
  margin-bottom: 10px;
}

.right-div p {
  font-size: 20px;
  display: block;
}

.button {
  padding: 10px 20px;
  font-size: 16px;
  background-color: #0b8c8c;
  color: #000000;
  border: none;
  cursor: pointer;
  margin-top: 10px;
  border-radius: 5px;
}

.blue-div  img {
  width: 60px;
  height: 60px;
  transition: transform 0.3s ease;
  animation: moveLeftRight 2s linear infinite;
}

@keyframes moveLeftRight {
  0% {
    transform: translateX(0);
  }
  50% {
    transform: translateX(20px);
  }
  100% {
    transform: translateX(0);
  }
}

.blue-div  img:hover {
  transform: translateX(-10px);
}

.circle-container {
  position: relative;
  width: 200px;
  height: 200px;
  overflow: hidden;
}

.half-circle {
  position: absolute;
  width: 100%;
  height: 50%;
  overflow: hidden;
  transform-origin: bottom;
  animation: moveUpAndDown 2s ease-in-out infinite;
}

.half-circle img {
  display: block;
  width: 100%;
  height: auto;
}

@keyframes moveUpAndDown {
  0% {
    transform: translateY(0);
  }
  50% {
    transform: translateY(-10px);
  }
  100% {
    transform: translateY(0);
  }
}

    </style>
</head>
<body>
<div class="blue-div">
    <div class="left-div">
        <div class="circle-container">
                <div class="half-circle">
                  <img src="IMG/kisspng-semicircle-geometric-shape-geometry-free-range-eggs-5ae911ac678113.977680541525223852424.png" alt="Votre image">
                </div>
        </div>
            <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
            <lottie-player src="https://assets2.lottiefiles.com/packages/lf20_tco2osel.json" background="transparent" speed="1" style="width: 500px; height: 500px;"></lottie-player>
    </div>
    <div class="right-div">
        <img src="IMG/cube-png-18939.png" alt="Votre image">
        <h1>HEBERGEMENT ILLIMITE</h1>
        <h1>Notre hébergement Cloud fournit une large gamme de fonctionnalités</h1>
        <p>Espace Web illimitées et bande passante 100% SSD Héberger des sites Web avec Autoscoding Platform Ressources SSL Gratuit LetsEncrypt, Google-Based DNS Servers et content Delivery Network</p>
        <button class="button">commencer maintenant</button>
    </div>
</div>
</body>
</html>
