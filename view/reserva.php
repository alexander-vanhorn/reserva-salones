<?php
 require("header.php");
?>
<?php 
    include("conexion.php");
    $con=conectar();

    $sql="SELECT *  FROM reserva";
    $query=mysqli_query($con,$sql);

    $row=mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title> Reserva</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>
    <body>



            <div class="container mt-5">
                    <div class="row"> 
					
                        <div class="col-md-3">
                            <h1>Ingrese datos</h1>
                                <form  method="POST">

                                    <input id= "cod_salon" type="text" class="form-control mb-3" name="cod_salon" placeholder="Salon">
                                    <input id="hora" type="text" class="form-control mb-3" name="hora" placeholder="Hora">
                                   
                                    <button  type="submit"  ><a href= "?op=ingresa">Reservar</a></button>

                                </form>
                        </div>

                        <div class="col-md-8">
                            <table class="table" >
                                <thead class="table-success table-striped" >
                                    <tr>
                                        <th>Salon</th>
                                        <th>Hora</th>
                                        
                                       
                                    </tr>
                                </thead>

                                <tbody>
                                        <?php
                                            while($row=mysqli_fetch_array($query)){
                                        ?>
                                            <tr>
                                                <th><?php  echo $row['salon']?></th>
                                                <th><?php  echo $row['horario']?></th>
                                                  
                                       
                                            </tr>
                                        <?php 
                                            }
                                        ?>
                                </tbody>
                            </table>
                        </div>
                    </div>  
            </div>

			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
    </body>
</html>
<?php
 require("footer.php");
?>