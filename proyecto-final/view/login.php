<?php 
session_start();
require_once("./model/usuario.php");
require_once("./php/utilities.php");
?>
 
<html lang="en">
<head>
    <link rel="stylesheet" href="./css/estilos.css">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <script src="./js/jquery-3.6.0.min.js" type="text/javascript"></script> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <title>Login</title>
</head>
<body>
<?php
    if (isset($_GET['op'])){
        if ($_GET['op'] = 'logout'){
            session_destroy();
        }
    }

    $INFO_MESSAGE = '';

    $obj_usuario = new usuario();

    if (array_key_exists('validalogin', $_POST)){
        $realizado = $obj_usuario->login_usuario($_REQUEST["email"], ecrypt_pwd($_REQUEST["password"]));
        if ($realizado){
            foreach($realizado as $login){
                {
                    $_SESSION["ID"]         = $login["id_usuario"];
                    $_SESSION["NOMBRE"]     = $login["nombre"];
                    $_SESSION["APELLIDO"]    = $login["apellido"];
                    $_SESSION["EMAIL"]      = $login["email"];
                    $_SESSION["NIVEL"]      = $login["id_nivel"];
                    $_SESSION["FOTO"]       = $login["foto"];

                    header("Location: index.php?op=login");
                }
            }
        } else {
            $INFO_MESSAGE = 'Correo o contraseña incorrecto';
        }

    }

    
?>
    <div id="loginIn">
        <div class="container">
            <div class="row pt-5">
                <div class="col-sm-6 mx-auto">
                    <div class="card border-bottom" id="panel">
                        <div class="card-body">
                            <h1 class="card-title" id="tittle">Bienvenido</h1>
                            <form method="post">
                            <div class="form-group">
                                <label for="name">Correo</label>
                                <input type="email" class="form-control" placeholder="Introduzca su correo" id="email" name="email">
                            </div>
                            <div class="form-group">
                                <label for="password">Contraseña</label>
                                <input type="password" class="form-control" placeholder="Introduzca su contraseña" id="password" name="password">
                            </div>
                            <br>
                            <button class="btn btn-primary center" id="btn-login" type="submit" name="validalogin">Iniciar Sesion</button>
                            <div class="form-group d-flex justify-content-center">
                            <?php 
                                echo '<p>' . $INFO_MESSAGE . '</p>';
                            ?>
                            </div>
                            </form>
                            <div class="d-flex justify-content-center links">
                                ¿Aún no tiene cuenta? - <a href="?op=crear" class="ml-2"> Regístrese aquí </a><br>
                            </div>
                        </div>
                    </div>                
                </div>
            </div>
        </div>
    </div>     
</body>
</html>