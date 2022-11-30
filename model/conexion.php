<?php

	$server = 'localhost';
    $database = 'reserva_salones';
    $username = 'root';
    $password = '';

	try {
        $conn = new PDO("mysql:host=$server;dbname=$database;", $username, $password);
        echo "todo exitoso";
    } catch (PDOException $e) {
        echo $e->getMessage();
        exit();
    }

?>