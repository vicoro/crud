<?php
require 'conexion.php';
require 'cosultas.php';
//var_dump($_POST);
$tabla = "carreras";
$parametros = [
    'nombre'=>$_POST['nombre'],    
];
$conn =conexion::dbconexion();
crear($tabla,$parametros,$conn);
header('Location: index.php');