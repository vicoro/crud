<?php
require 'conexion.php';
require 'cosultas.php';
//var_dump($_POST);
$tabla = "directorio";
$parametros = [
    'nombre'=>$_POST['nombre'],
    'apellido'=>$_POST['apellido'],
];

$conn =conexion::dbconexion();
crear($tabla,$parametros,$conn);
//header('Location: directorio.php');