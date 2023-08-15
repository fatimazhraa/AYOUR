<!DOCTYPE html>
<html>
<head>
    <title>Formulaire de Contact</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            background-color: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            width: 400px;
        }

        .form-group {
            margin-bottom: 10px;
        }

        label {
            display: block;
            font-weight: bold;
        }

        input[type="text"],
        input[type="email"],
        input[type="tel"],
        textarea,
        select {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        select {
            cursor: pointer;
        }

        button {
            background-color: #007bff;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
       
        <form action="{{ route('submit.form') }}" method="post" enctype="multipart/form-data">
        @csrf


            <div class="form-group">
                <label for="nom">Nom :</label>
                <input type="text" id="nom" name="nom" required>
            </div>
            <div class="form-group">
                <label for="prenom">Prénom :</label>
                <input type="text" id="prenom" name="prenom" required>
            </div>
            <div class="form-group">
                <label for="entreprise">Entreprise :</label>
                <input type="text" id="entreprise" name="entreprise" required>
            </div>
            <div class="form-group">
                <label for="email">Email :</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="telephone">Téléphone :</label>
                <input type="tel" id="telephone" name="telephone" required>
            </div>
            <div class="form-group">
                <label for="message">Message :</label>
                <textarea id="message" name="message" rows="4" required></textarea>
            </div>
            <div class="form-group">
                <label for="qui">Dites-nous qui vous êtes :</label>
                <select id="qui" name="qui" required>
                    <option value="Entrepreneur">Entrepreneur</option>
                    <option value="Ecommerçant">Ecommerçant</option>
                    <option value="Agence Web">Agence Web</option>
                    <option value="Développeur">Développeur</option>
                    <option value="Site Media">Site Media</option>
                </select>
            </div>
            <div class="form-group">
                <label for="fichier">Choisir un fichier :</label>
                <input type="file" id="fichier" name="fichier">
            </div>
            <button type="submit">Envoyer</button>
        </form>
    </div>
</body>
</html>
