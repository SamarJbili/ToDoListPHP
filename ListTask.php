<?php
session_start();
require_once('Task.php');

if (isset($_SESSION['user_id'])) {
    $user_id = $_SESSION['user_id'];
    
    $us = new Task();
    $res = $us->listtasks($user_id);
?>
    <table border='1'>
        <tr>
            <td>task_name</td>
            <td>date</td>
            <td>Status</td>
        </tr>
        <style>
    body {
        font-family: 'Arial', sans-serif;
        background-color: #f4f4f4;
        margin: 0;
        padding: 20px;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
  
    }

    table {
        border-collapse: collapse;
        width: 80%;
        margin-top: 20px;
    }

    th, td {
        border: 1px solid #ddd;
        padding: 10px;
        text-align: left;
    }

    th {
        background-color: #3498db;
        color: #fff;
    }

    tr:nth-child(even) {
        background-color: #f9f9f9;
    }

    a {
        display: inline-block;
        margin-top: 10px;
        padding: 8px 16px;
        background-color: #3498db;
        color: #fff;
        text-decoration: none;
        border-radius: 4px;
    }

    a:hover {
        background-color: #2575a8;
    }
</style>
<?php
    foreach ($res as $row) {
        echo "<tr><td>$row[task_name]</td>
        <td>$row[2]</td>
        <td>$row[3]</td>
        <td>
            <a href ='modifie.php?id=$row[0]'>Modifier</a>
        </td>
        <td>
            <a href='Supprimer.php?id=$row[0]'>Supprimer</a>
        </td> 
        </tr>";
    }
    echo "</table>";
    echo "<a href='inscri.html'>Ajouter un Task</a>";
    echo "<a href='index.php'>Retourer a la page d'acceuil</a>";

} else {
    echo "Accès non autorisé. Veuillez vous connecter.";
}
?>

