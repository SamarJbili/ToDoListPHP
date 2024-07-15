<?php
require_once('config.php');


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    $connexion = new Connexion();
    $dbc = $connexion->CNXbase();

    $checkUserQuery = "SELECT COUNT(*) FROM users WHERE username = :username";
    $stmtCheckUser = $dbc->prepare($checkUserQuery);
    $stmtCheckUser->bindParam(':username', $username);
    $stmtCheckUser->execute();

    if ($stmtCheckUser->fetchColumn() > 0) {
        echo "Le nom d'utilisateur existe déjà. Veuillez choisir un autre nom d'utilisateur.";
    } else {
        $sql = "INSERT INTO users (username, password) VALUES (:username, :password)";
        $stmt = $dbc->prepare($sql);
        $stmt->bindParam(':username', $username);
        $stmt->bindParam(':password', $password);

        if ($stmt->execute()) {
            echo "Compte créé avec succès pour l'utilisateur : $username";
        } else {
            echo "Erreur lors de la création du compte : " . $stmt->errorInfo()[2];
        }
    }

    $dbc = null;
}
echo "<a href='index.php'>Retourer a la page d'acceuil</a>";
?>

