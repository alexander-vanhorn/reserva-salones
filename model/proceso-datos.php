
<?php
    require '..\model\database.php';

    $message='';

    if (!empty($_POST['nombre']) && !empty($_POST['apellido']) && !empty($_POST['email']) && !empty($_POST['pass'])){
        $sql = "INSERT INTO usuario (nombre, apellido, email, pass) VALUES (:nombre, :apellido, :email, :pass)";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':nombre',$_POST['nombre']);
        $stmt->bindParam(':apellido',$_POST['apellido']);
        $stmt->bindParam(':email',$_POST['email']);
        $password = password_hash($_POST['pass'], PASSWORD_BCRYPT);
        $stmt->bindParam(':pass',$password);

        if($stmt->execute()) {
            echo "<script>alert('Registrado. Nuevo usuario creado exitosamente.');</script>";
            echo ('<meta http-equiv="refresh" content="1; URL=..\login.php" />');
            
        }else{
            echo 'TODO MAL. INTENTE DE NUEVO';
        }

    }

?>
