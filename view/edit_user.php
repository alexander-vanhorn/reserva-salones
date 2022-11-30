<?php 
session_start();
?>
<html lang="en">
<head>
    <link rel="stylesheet" href="./css/estilos.css">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <script src="./js/jquery-3.6.0.min.js" type="text/javascript"></script> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <title>Editar Usuario</title>
</head>
<body>
<?php
    require_once("./model/usuario.php");
    require_once("./php/utilities.php");

    $obj_usuario = new usuario();

    if (array_key_exists('ingresaUsuario', $_POST)){

        $target_dir = "./images/";
        $target_file = $target_dir . basename($_FILES["picture"]["name"]);
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
        if(isset($_POST["ingresaUsuario"])) {
        $check = getimagesize($_FILES["picture"]["tmp_name"]);
            if($check !== false) {
                echo "File is an image - " . $check["mime"] . ".";
                move_uploaded_file($_FILES["picture"]["tmp_name"], $target_file);
                $realizado = $obj_usuario->editar_usuario($_REQUEST["name"], $_REQUEST["last_name"],$_SESSION["EMAIL"],basename($_FILES["picture"]["name"]));
                if ($realizado){
                    
                    header("Location: index.php?op=login");
                }
                else{
                    echo "Registro no exitoso, favor reintentar";
                }
            } else {
                $uploadOk = 0;
            }
        }
    }

    
?>
    <div id="loginIn">
        <div class="container">
            <div class="row pt-5">
                <div class="col-sm-6 mx-auto">
                    <div class="card border-bottom" id="panel">
                        <div class="card-body">
                            <h1 class="card-title" id="tittle">Editar Usuario</h1>
                            <form method="post" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label for="name">Nombre</label>
                                    <?php 
                                        echo '<input type="text" class="form-control" placeholder="Introduzca su nombre" id="name" name="name" value="'.$_SESSION["NOMBRE"].'">';
                                    ?>
                                    </div>
                                <div class="form-group">
                                    <label for="name">Apellido</label>
                                    <?php 
                                        echo '<input type="text" class="form-control" placeholder="Introduzca su apellido" id="last_name" name="last_name"value="'.$_SESSION["APELLIDO"].'">';
                                    ?>                                   
                                </div>
                                <br>
                                <div class="form-group">
                                    <?php echo '<td><img src="./images/'.$_SESSION['FOTO'].'" alt="profile" width=150px style="margin-left:40%"</td>'; ?>
                                    <hr>
                                    <input type="file" name="picture" id="picture" accept="image/png, image/gif, image/jpeg">
                                </div>
                                <br>
                                <button class="btn btn-primary center" id="ingresaUsuario" type="submit" name="ingresaUsuario">Guardar Cambios</button>
                            </form>                            
                        </div>
                    </div>                
                </div>
            </div>
        </div>
    </div>
</body>
</html>