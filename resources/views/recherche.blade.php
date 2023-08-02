<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Récupérer la valeur du nom de domaine saisi
    $domain = $_POST["domain"];

    // Effectuer la vérification de disponibilité
    // Votre logique de vérification ici (requête à la base de données ou appel à une API)

    // Exemple de réponse
    $isAvailable = true; // Résultat de la vérification de disponibilité

    // Envoyer la réponse au format JSON
    header("Content-Type: application/json");
    echo json_encode(["isAvailable" => $isAvailable]);
}
?>