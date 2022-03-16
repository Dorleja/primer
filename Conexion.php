<?php

$link = 'mysql:host=localhost;dbname=referencia';
$usuario = 'root';
$pass = '';

try{

    $pdo=new PDO ($link,$usuario, $pass);
} catch (PDOExeption $e){
    print "Error en base de datos" . $e->getMessage(). "<br>";
}