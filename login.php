<?php
// Vérifier si le formulaire a été soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer les données du formulaire
    $username = $_POST["username"];
    $password = $_POST["password"];

    // TODO: Valider les données (ajouter des vérifications côté serveur)

    // Connexion à la base de données (remplacez ces valeurs par les vôtres)
    $servername = "localhost";
    $db_username = "votre_nom_utilisateur";
    $db_password = "votre_mot_de_passe";
    $dbname = "votre_base_de_donnees";

    $conn = new mysqli($servername, $db_username, $db_password, $dbname);

    // Vérifier la connexion
    if ($conn->connect_error) {
        die("Échec de la connexion à la base de données: " . $conn->connect_error);
    }

    // TODO: Exécuter la requête d'insertion dans la base de données
    $query = "INSERT INTO users (username, password) VALUES ('$username', '$password')";
    if ($conn->query($query) === TRUE) {
        echo "Enregistrement réussi.";
    } else {
        echo "Erreur lors de l'enregistrement: " . $conn->error;
    }

    // Fermer la connexion à la base de données
    $conn->close();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<form action="login.php" method="post">
    <label for="username">Nom d'utilisateur:</label>
    <input type="text" id="username" name="username" required>

    <label for="password">Mot de passe:</label>
    <input type="password" id="password" name="password" required>

    <button id="button-container" type="submit">Se connecter</button>
</form>
</head>
<body>
    
</body>
</html>