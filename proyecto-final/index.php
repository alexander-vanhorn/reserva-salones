
<?php

//Incluyo los archivos necesarios
require("./controller/Controller.php");

//Instancio el controlador
$controller = new Controller;

//Decido la ruta en función de los elementos del array
if (isset($_GET['op'])){

    $opcion=$_GET['op'];

    if ($opcion=="crear")
    {
    //Llamo al método ver pasándole la clave que me están pidiendo
        $controller->crearUsuario();
    }

    if ($opcion=="login")
    {
    //Llamo al método ver pasándole la clave que me están pidiendo
        $controller->loginUsuario();
    }

    if ($opcion=="edit")
    {
    //Llamo al método ver pasándole la clave que me están pidiendo
        $controller->editUsuario();
    }


    if ($opcion=="reserva")
    {
    //Llamo al método ver pasándole la clave que me están pidiendo
        $controller->reserva();
    }

    if ($opcion=="ingresa")
    {
    //Llamo al método ver pasándole la clave que me están pidiendo
        $controller->ingresa();
    }




}
else{

    //Llamo al método por defecto del controlador
    $controller->index();
}