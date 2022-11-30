<?php

class Controller
{

    public function index(){

        //Le paso los datos a la vista
        require("view/login.php");

    }

    public function crearUsuario(){

        require("view/create_user.php");

    }

    public function loginUsuario(){

        require("view/inicio.php");

    }

    public function editUsuario(){

        require("view/edit_user.php");

    }


    public function reserva(){

        require("view/reserva.php");

    }

    public function ingresa(){

        require("view/insertar.php");

    }



}
