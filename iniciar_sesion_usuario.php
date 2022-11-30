<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css\inicio_sesion.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>

     <!--Imagen de la barra de título-->
     <link rel="shortcut icon" href="images\logo_utp_1_300.png" type="image/x-icon">

     <!--CSS Externo para modificaciones-->
     <link rel="stylesheet" href="css\aux-inicio-sesion.css">


    
</head>
<body>
    

   <br>

   <img src="images\logo_utp_1_300.png" alt="campus" class="logo-utp"> 
   <p><h3> &nbsp;Universidad Tecnológica de Panamá &nbsp;<br> &nbsp;Sistema automatizado de reserva de salones &nbsp;</h3></p>
    <form action='view\inicio.php' method="post" name="sesion" class="sesion">
        <?php 
            //<!--include 'controller\controlador-login.php';--> 
            
        ?>
        <h3>Iniciar Sesión</h3>
        <br>
        <div class="mb-3">
            <label for="cedula" class="form-label">Cédula:</label>
            <input type="id" class="form-control" id="cedula" name="cedula"  placeholder="1-234-567">
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Contraseña:</label>
            <input type="password" class="form-control" id="pass" name="pass" placeholder="**********">
        </div>
        
        <div class="width">
            <div class="align-center">
                <br>
                <button type="submit" class="btn btn-primary" name="btn-login" value="btn-login">Login</button>
            </div>
        </div>

        <br>
        
    </form>    
</body>

</html>