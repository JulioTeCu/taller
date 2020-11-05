<?php
include 'conexion.php';
$autos = "SELECT * FROM autos";
?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>MOSTRAR</title>
<meta name="viewport" content="width=device-width, user-scalable=no, 
initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

<link rel="stylesheet" href="mostrar.css">
</head>
<body>
<h1>Tabla de datos</h1>

<form method="post" class="form-btn">
<div class="container-table">
    <div class="table__title">DATOS</div>
    <div class="table__header">ID</div>
    <div class="table__header">No_SERIE</div>
    <div class="table__header">PROPIETARIO</div>
    <div class="table__header">MARCA</div>
    <div class="table__header">MODELO</div>
    <div class="table__header">ID_MODIFIACIÓN</div>
    <div class="table__header">ID_REFACCIÓN</div>
    <?php $resultado = mysqli_query($conexion, $autos);
    while($row = mysqli_fetch_assoc($resultado)) { ?>
  
    <div class="table__item"><?php echo $row["ID"]; ?></div>
    <div class="table__item"><?php echo $row["noserie"]; ?></div>
    <div class="table__item"><?php echo $row["propietario"]; ?></div>
    <div class="table__item"><?php echo $row["marca"]; ?></div>
    <div class="table__item"><?php echo $row["modelo"]; ?></div>
    <div class="table__item"><?php echo $row["id_modificacion"]; ?></div>
    <div class="table__item"><?php echo $row["id_refaccion"]; ?></div>
    <?php } mysqli_free_result($resultado);?>
</div>
</form>
</body>
</html>