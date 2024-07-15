<?php 
require_once('Task.php');
$us = new Task();
$row = $us->ListTask_id($_GET['id']); 
?>
<form name='f1' method='post' action='modification.php'> 
    <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>" />
    <p>nom de tache
        <input type="text" name="task_name" value="<?php echo $row[1]; ?>" /> 
    </p>

    <p>date
        <input type="date" name="date" value="<?php echo $row[2]; ?>" /> 
    </p>

    <p>Satuts
        <select name="status" required>
        <option>Terminé</option>
            <option>Non terminé</option>
        </select>
   
    </p>

    <p><input type="submit" value="modifier" name="submit" /> </p>
</form>
<style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            background: url('image/arr.jpeg') no-repeat center center fixed;
            background-size: cover;
        }

        form {
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            border-radius: 8px;
            max-width: 400px;
            width: 100%;
            text-align: center;
        }

        label {
            display: block;
            margin: 10px 0;
        }

        input {
            width: 100%;
            padding: 10px;
            margin: 5px 0;
            box-sizing: border-box;
        }

        input[type="submit"] {
            background-color: #3498db;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
    </style>