<?php
 $x = 5;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
    <title>Disponibilidad</title>

    <link rel="shortcut icon" href="images\logo_utp_1_300.png" type="image/x-icon">
    <link rel="stylesheet" href="css\horario-disponibilidad.css">

    
</head>
<body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>    
<br>
<div class="encabezado">
    <img src="images\logo_utp_1_300.png" class="logo-utp">
    
    <h2>&nbsp; Universidad Tecnológica de Panamá</h2>
    <h3>&nbsp; Sistema automatizado de reserva de salones</h3><br>
</div>


    <br><br>

<div class="disponibilidad">
    <h4>Salones disponibles</h4>

    <table class="table">
    <thead>
        <tr>
        <th scope="col1">Salón</th>
        <th scope="col2">Horario</th>

        </tr>
    </thead>
    <tbody>
        <tr>
        <td>3-319</td>
        <td>3:15pm - 4:05pm</td>

        </tr>
        <tr>
        <td>3-320</td>
        <td>4:10pm - 4:55pm</td>

        </tr>
        <tr>
        <td>3-303</td>
        <td>5:00pm - 5:45pm</td>

        </tr>
    </tbody>
    </table>

    <br>
<a href="view\inicio.php">
<button type="button" class="btn btn-primary">Atrás</button>
</a>

<a href="view\confirmacion.php">
<button type="button" class="btn btn-primary">Siguiente</button>
</a>
    
</div>




<br><br><br><br><br><br><br>

<footer> @Code4 | Desarrollo de Software VII | 1LS132 | 2022</footer>
<br>



</body>
</html>