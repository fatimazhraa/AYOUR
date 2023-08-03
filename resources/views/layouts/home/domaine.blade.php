<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>

.recherche {
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  padding: 30px 0;
  margin-bottom:10%;
  margin-right:10%;
  margin-left:10%;
}

.recherche h2 {
  font-size: 25px;
  text-align: center;
  margin-bottom: 20px;
  color: #333;
}

.recherche p {
  font-size: 18px;
  text-align: center;
  margin-bottom: 20px;
  color: #555;
}

.search-box {
  display: flex;
  align-items: center;
  justify-content: center;
  margin-bottom: 30px;
}

.search-input {
  padding: 10px;
  border: 1px solid #ccc;
  border-radius: 5px 0 0 5px;
  font-size: 14px;
  flex: 1;
  margin-right: 10px;
}

.search-btn {
  padding: 10px 20px;
  background-color: #0b8c8c;
  color: #fff;
  border: none;
  border-radius: 0 5px 5px 0;
  font-size: 14px;
  cursor: pointer;
}

.card-container {
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  max-width: 1200px;
  margin: 0 auto;
}

.card1 {
  width: calc(33.33% - 20px); /* Adjusted width to fit three cards in one row */
  background-color: #fff;
  border-radius: 5px;
  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
  padding: 10px;
  margin: 10px;
  text-align: center;
  transition: transform 0.3s ease;
}

.card1 img {
  width: 80px;
  height:80px;
  object-fit: cover;
  border-radius: 5px;
}

.card1 p {
  font-size: 18px;
  margin-top: 10px;
  color: #333;
}

.card1:hover {
  transform: scale(1.05);
}

@media (max-width: 768px) {
  .card-container {
    max-width: 90%; /* Adjust the container's width for smaller screens */
  }

  .card1 {
    width: calc(50% - 20px); /* Make the cards occupy 50% of the container width with a small margin */
  }
}

    </style>
</head>
<body>
<div class="recherche">
  <h2>UN DOMAINE GRATUIT AVEC VOTRE PACK D'HÉBERGEMENT</h2>
  <p>Vérifiez la disponibilité de votre nom de domaine</p>

  <div class="search-box">
    <form id="domain-search-form" action="{{ route('recherche') }}" method="POST">
      @csrf
      <input type="text" name="domain" class="search-input small-input" placeholder="Ex: exemple.com">
      <button type="submit" class="search-btn">Rechercher</button>
    </form>
    <div id="availability-message"></div>
  </div>

  <p>Nous disposons de plus de 200 extensions de noms de domaine.</p>
  <div class="card-container">
    <div class="card1">
      <img src="IMG/Capture d'écran 2023-07-29 122418.png" alt="Image 1">
      <p>120.00 Dhs /an</p>
    </div>

    <div class="card1">
      <img src="IMG/Capture d'écran 2023-07-13 211842.png" alt="Image 2" style= "width: 200px; height:80px;">
      <p>120.00 Dhs /an</p>
    </div>

    <div class="card1">
      <img src="IMG/Capture d'écran 2023-07-13 211848.png" alt="Image 2"  style= "width: 200px; height:80px;">
      <p>160.00 Dhs /an</p>
    </div>
    <div class="card1">
      <img src="IMG/Capture d'écran 2023-07-13 211856.png" alt="Image 2"  style= "width: 80px; height:80px;">
      <p>320.00 Dhs /an</p>
    </div>
    <div class="card1">
      <img src="IMG/Capture d'écran 2023-07-13 211903.png" alt="Image 2"  style= "width: 200px; height:80px;">
      <p>500.00 Dhs /an</p>
    </div> 
    <div class="card1">
      <img src="IMG/Capture d'écran 2023-07-13 211910.png" alt="Image 2"   style= "width: 200px; height:80px;">
      <p>450.00 Dhs /an</p>
    </div>
  </div>
</div>
</body>
</html>
