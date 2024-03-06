<?php
require 'conexion.php';
require 'cosultas.php';
//var_dump($_POST);
$tabla = "carreras";
$id = $_POST['id'];
$parametros = [
    'nombre'=>$_POST['nombre'],    
];
$conn =conexion::dbconexion();
actualizar($tabla,$parametros,$conn,$id);
header('Location: index.php');
