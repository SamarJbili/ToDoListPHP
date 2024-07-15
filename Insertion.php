<?php
require_once('Task.php');


session_start();


$user_id = $_SESSION['user_id'];


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $task_name = $_POST["task_name"];
    $date = $_POST["date"];
    $status = $_POST["status"];

    
    $us = new Task();
    $us->construct($task_name, $date, $status);

    
    $us->InsertTask($user_id);

header("Location:ListTask.php");
exit();}
?>
