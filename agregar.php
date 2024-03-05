<?php
require 'conexion.php';
require 'cosultas.php';
//var_dump($_POST);
$tabla = "carreras";
$parametros = $_POST['nombre'];
$conn =conexion::dbconexion();
crear($tabla,$parametros,$conn);
header('Location: index.php');