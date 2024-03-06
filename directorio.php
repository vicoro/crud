<?php
require 'conexion.php';
require 'cosultas.php';
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Directorio</title>
</head>
<body>
    <h1>Directorio de personal</h1>
    <?php
    $tabla="directorio";
    $conn =conexion::dbconexion();
    $personas = getAll($conn,$tabla);
    foreach($personas as $persona){
        echo $persona['nombre']." "; 
        echo $persona['apellido']; 
        echo " <a href=editardirectorio.php?id={$persona['id']}>🖋️ </a>";
        echo " ❌ ";
        echo "<br>";  
    }
    ?>
    <form action="agregarPersona.php" method="post">
        <input type="text" name="nombre">
        <input type="text" name="apellido">
        <button type="submit">Agregar</button>
    </form>
    
</body>
</html>