<html lang="en">
<head>
    <link rel="stylesheet" href="./css/estilos.css">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <script src="./js/jquery-3.6.0.min.js" type="text/javascript"></script> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <title>Crear Usuario</title>
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
                $realizado = $obj_usuario->crear_usuario($_REQUEST["name"], $_REQUEST["last_name"], $_REQUEST["email"], 
                            ecrypt_pwd($_REQUEST["password"]),basename($_FILES["picture"]["name"]), $_REQUEST["level"], $_REQUEST["district"]);
                if ($realizado){
                    
                    header("Location: index.php");
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
                            <h1 class="card-title" id="tittle">Crear Usuario</h1>
                            <form method="post" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label for="name">Nombre</label>
                                    <input type="text" class="form-control" placeholder="Introduzca su nombre" id="name" name="name">
                                </div>
                                <div class="form-group">
                                    <label for="name">Apellido</label>
                                    <input type="text" class="form-control" placeholder="Introduzca su apellido" id="last_name" name="last_name">
                                </div>
                                <div class="form-group">
                                    <label for="name">Correo</label>
                                    <input type="email" class="form-control" placeholder="Introduzca su correo" id="email" name="email">
                                </div>
                                <div class="form-group">
                                    <label for="name">Contraseña</label>
                                    <input type="password" class="form-control" placeholder="Contraseña" id="password" name="password">
                                </div>
                                <br>
                                <div class="form-group">
                                    <label for="name">Foto</label>
                                    <input type="file" name="picture" id="picture" accept="image/png, image/gif, image/jpeg">
                                </div>
                                <br>
                                <div class="form-group">
                                    <label for="name">Nivel</label>
                                    <select class="form-control" name="level" id="level">
                                        <option value="1">Administrador</option>
                                        <option value="2">General</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="name">Provincia</label>
                                    <select class="form-control" id="province" name="province">
                                    <?php
                                        require_once("./model/provincia.php");
                                        $obj_prv = new provincia();
                                        $realizado = $obj_prv->cons_provincia();
                                        if ($realizado){
                                            echo '<option value="0">seleccione...</option>';
                                            foreach($realizado as $prov){
                                                echo '<option value="'.$prov['id_provincia'].'">'.$prov['nom_provincia'].'</option>';
                                            }
                                        }
                                    ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="name">Distrito</label>
                                    </select-->
                                    <div class="form-group">
                                        <select class="custom-select form-control" id="district" name="district">
                                            <!-- cargar con js dependiendo de la provincia -->
                                        </select>
                                    </div>
                                </div>
                                <br>
                                <button class="btn btn-primary center" id="ingresaUsuario" type="submit" name="ingresaUsuario">Crear Cuenta</button>
                            </form>
                            <div class="d-flex justify-content-center links">
                                ¿Ya tiene cuenta? - <a href="./" class="ml-2">Acceder al Sistema</a>
                            </div>
                            
                        </div>
                    </div>                
                </div>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function () {
            /* --variables para llamar a los select por el id */
            let $provincia = document.getElementById('province')
            let $distrito = document.getElementById('district')

            function cargarDistritos(sendDatos) {
                $.ajax({
                    url: 'model/distrito.php',
                    type: 'POST',
                    data: sendDatos,
                    success: function(response) {
                        const respuestas = JSON.parse(response);
                        let template = '<option class="form-control" selected disabled>-- Seleccione --</option>'
                        respuestas.forEach(respuesta => {
                            template += `<option class="form-control" value="${respuesta.id_distrito}">${respuesta.nom_distrito}</option>`;
                        })

                        $distrito.innerHTML = template;
                    }
                })
            }
            $provincia.addEventListener('change', () => {
                const codProv = $provincia.value

                const sendDatos = {
                    'codigoProv': codProv
                }
                cargarDistritos(sendDatos)

                $distrito.innerHTML = ''
            })
        })
    </script>
</body>
</html>