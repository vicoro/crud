<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Editar Carrera</h1>
    <?php
   
    $id=$_GET['id'];
    require 'conexion.php';
    require 'cosultas.php';
    $tabla="carreras";
    $conn =conexion::dbconexion();
    $alumnos = getRegistro($conn,$tabla,$id);    
        foreach($alumnos as $alumno): 
    ?>
    
    <form action="updateCarrera.php" method="post">
        <input type="hidden" name="id" value="<?php echo $alumno['id']; ?>" >
        <input type="text" name="nombre" value="<?php echo $alumno['nombre']; ?>">
        <button type="submit">Editar</button>
    </form>
    <?php endforeach ?>
    
    <a href="index.php">Regresar</a>
    
</body>
</html>