<?php
require_once('config.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    $connexion = new Connexion();
    $dbc = $connexion->CNXbase();

    $checkUserQuery = "SELECT user_id, password FROM users WHERE username = :username";
    $stmtCheckUser = $dbc->prepare($checkUserQuery);
    $stmtCheckUser->bindParam(':username', $username);
    $stmtCheckUser->execute();

    $result = $stmtCheckUser->fetch(PDO::FETCH_ASSOC);

    if ($result && $password === $result['password']) {
        session_start();
        $_SESSION['user_id'] = $result['user_id'];
        header("Location: ListTask.php");
        exit();
    } else {
        echo "Nom d'utilisateur ou mot de passe incorrect.";
    }

    $dbc = null;
}
?>
