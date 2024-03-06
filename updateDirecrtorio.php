<?php
require 'conexion.php';
require 'cosultas.php';



$tabla = "directorio";
$id = $_POST['id'];
$parametros = [
    'nombre'=>$_POST['nombre'],
    'apellido'=>$_POST['apellido'],    
];

$conn =conexion::dbconexion();
actualizar($tabla,$parametros,$conn,$id);
//header('Location: directorio.php');
