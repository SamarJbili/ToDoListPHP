<?php
require_once('Task.php');
$us=new Task();
$us->task_name=$_POST['task_name'];
$us->date=$_POST['date'];
$us->status=$_POST['status'];
$us->  updateTask($_POST['id']);
echo "Modification effectuée"; 
header("Location:ListTask.php");
exit();

?>