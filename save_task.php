<?php

include("db.php");
/*
Si existe a traves del metodo post un valor llamado save task
entonces significa que estas tratando de guardar un dato
*/
if(isset($_POST['save_task'])){
    /*LO que recibes a traves del metodo post en ese nombre descripcion,
    es la descripcion de tarea*/
    $title = $_POST['title'];
    $description = $_POST['description'];

    $query = "INSERT INTO `task` (`title`, `description`) VALUES ('$title','$description')";
    $resultado = mysqli_query($con,$query);
    
    if(!$resultado){
        die("Query Fallado");
    }

    $_SESSION['message'] = 'Task Saved Succesfully';
    $_SESSION['message_type'] = 'success';

    header("Location:index.php");


    
}

?>