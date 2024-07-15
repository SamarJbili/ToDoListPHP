<?php
    require_once('Task.php');
    $us=new Task();
    $us-> deleteTask($_GET['id']);
    echo "Suppression effectuée"; 
    header("Location:ListTask.php");
    exit();
?> 