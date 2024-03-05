<?php
require 'conexion.php';
require 'cosultas.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Mi primer CRUD</h1>
    <?php
    $tabla="carreras";
    $conn =conexion::dbconexion();
    $alumnos = getAll($conn,$tabla);
    foreach($alumnos as $alumno){
        echo $alumno['nombre']."<br>";    
    }
    ?>
    <form action="agregar.php" method="post">
        <input type="text" name="nombre">
        <button type="submit">Agregar</button>
    </form>
</body>
</html> 