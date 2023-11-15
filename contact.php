<?php
require_once "pdo.php"; 

 if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupération des données du formulaire
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["formessage"];

    // Prévention de l'injection SQL
    $name = mysqli_real_escape_string($conn, $name);
    $email = mysqli_real_escape_string($conn, $email);
    $message = mysqli_real_escape_string($conn, $message);

    // Préparation de la requête d'insertion
    $query = "INSERT INTO mailing (name, email, formessage) VALUES ('$name', '$email', '$message')";

    // Exécution de la requête
    if (mysqli_query($conn, $query)) {
        // Envoi d'un e-mail (optionnel)
        $to = "fatimazahraeelkhamlychy@gmail.com";
        $subject = "Nouveau message de formulaire de contact";
        $headers = "From: $email";
      mail($to, $subject, $message, $headers) ;

        echo "Votre message a été envoyé avec succès et enregistré dans la base de données.";
    } else {
        echo "Erreur d'insertion : " . mysqli_error($conn);
    }

   // Redirection si quelqu'un essaie d'accéder à ce script directement
    header("Location: index.php");
    die();

 }
// Fermeture de la connexion MySQLi à la fin du script si nécessaire
mysqli_close($conn);
?>

