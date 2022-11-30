<?php

if(!empty($_POST['btn-login'])){
    if (!empty($_POST['cedula']) && !empty($_POST['pass'])){
        $cedula = $_POST['cedula'];
        $pass = $_POST['pass'];
        $sql = "select * from usuario where id_usuario='$cedula' and pass = '$pass' ";
        if($datos=$sql->fetch_object()){
            header('location:view\inicio.php');
        }else{
            echo "<div class='alert alert-danger'>Acceso denegado</div>";
        }
    }else{
        echo 'Los campos están vacíos';
    }
}
   
?>