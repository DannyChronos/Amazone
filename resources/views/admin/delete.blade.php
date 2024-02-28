<?php
require('../traitement/db.php');
require('../traitement/functions.php');

if (isset($_GET['id'])) {
    $identifiant = $_GET['id'];

    // Appeler la fonction de suppression
    DeletePersonnel($identifiant);

    // Rediriger l'utilisateur vers une page de confirmation ou ailleurs
    header("Location: superAdmin.php");
    exit; // Arrêter le script
} else {
    echo "L'identifiant n'a pas été spécifié.";
}
?>
