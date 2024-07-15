<?php
class Task
{
public $task_name;
public $date;
public $status;

public function construct($task_name,$date,$status)
{
   $this->task_name=$task_name;
   $this->date=$date ;
   $this->status=$status;
   
}
/*
public function getTasks()
{
        // Récupérer toutes les tâches de la base de données
}*/
public function recherche_task($att, $val)
{
    require_once('config.php');
    $cnx = new connexion();
    $pdo = $cnx->CNXbase();
    $req = "SELECT * FROM todolist WHERE $att='$val' ";
    $res = $pdo->query($req) or print_r($pdo->errorInfo());
    return $res;
}

public function InsertTask($user_id)
{
    require_once('config.php');
    $cnx = new connexion();
    $pdo = $cnx->CNXbase();

    $req = "INSERT INTO todolist (task_name, date, status, user_id) VALUES (:task_name, :date, :status, :user_id)";
    $stmt = $pdo->prepare($req);
    $stmt->bindParam(':task_name', $this->task_name);
    $stmt->bindParam(':date', $this->date);
    $stmt->bindParam(':status', $this->status);
    $stmt->bindParam(':user_id', $user_id);

    $stmt->execute() or print_r($pdo->errorInfo());
}

public function listtask_id($id)
{
    require_once('config.php');
    $cnx = new connexion();
    $pdo = $cnx->CNXbase();
    $req = "SELECT * FROM todolist where id='$id'";
    $res = $pdo->query($req);
    $row = $res->fetch() or print_r($pdo->errorInfo());
    return $row;
}

public function listtasks($user_id)
{
    require_once('config.php');
    $cnx = new connexion();
    $pdo = $cnx->CNXbase();

    $req = "SELECT * FROM todolist WHERE user_id = :user_id";
    $stmt = $pdo->prepare($req);
    $stmt->bindParam(':user_id', $user_id);
    $stmt->execute() or print_r($pdo->errorInfo());
    return $stmt->fetchAll();
}

public function updateTask($id)
{
    require_once('config.php');
    $cnx = new connexion();
    $pdo = $cnx->CNXbase();
    $req = "UPDATE todolist SET task_name ='$this->task_name',date='$this->date',status='$this->status' WHERE id= '$id' ";
    $pdo->exec($req) or print_r($pdo->errorInfo());
}

public function deleteTask($id)
{
    require_once('config.php');
    $cnx = new connexion();
    $pdo = $cnx->CNXbase();
    $req = "DELETE FROM todolist WHERE id='$id'";
    $pdo->exec($req) or print_r($pdo->errorInfo());
}
}
?>