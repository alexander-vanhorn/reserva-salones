<?php
include("reserva.php");
$con=conectar();

$cod_salon=$_POST['cod_salon'];
$hora=$_POST['hora'];



//$sql="INSERT INTO reserva (salon, horario)VALUES('$cod_salon','$hora')";
print $hora;
$sql= "CALL reserva_salones('".$cod_salon."','".$hora."')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: view\prueba.php");

    
}else {
}
?>