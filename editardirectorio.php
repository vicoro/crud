<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Editar directorio</h1>
    <?php
   
    $id=$_GET['id'];
    require 'conexion.php';
    require 'cosultas.php';
    $tabla="directorio";
    $conn =conexion::dbconexion();
    $alumnos = getRegistro($conn,$tabla,$id);    
        foreach($alumnos as $alumno): 
    ?>
    
    <form action="updateDirecrtorio.php" method="post">
        <input type="hidden" name="id" value="<?php echo $alumno['id']; ?>" >
        <input type="text" name="nombre" value="<?php echo $alumno['nombre']; ?>">
        <input type="text" name="apellido" value="<?php echo $alumno['apellido']; ?>">
        <button type="submit">Editar</button>
    </form>
    <?php endforeach ?>
    
    <a href="directorio.php">Regresar</a>
    
</body>
</html>