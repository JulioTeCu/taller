<?php
include 'conexion.php';
$modificaciones = "SELECT * FROM modificaciones";
?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>MOSTRAR</title>
<meta name="viewport" content="width=device-width, user-scalable=no, 
initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

<link rel="stylesheet" href="modificaciones.css">
</head>
<body>
<h1>Tabla de datos</h1>

<form method="post" class="form-btn">
<div class="container-table">
    <div class="table__title">DATOS</div>
    <div class="table__header">ID</div>
    <div class="table__header">ESTILOS</div>
    <div class="table__header">COLOR</div>
    <div class="table__header">ALERÓN</div>
    <div class="table__header">CARROCERÍA</div>
    <div class="table__header">COSTO</div>
    <?php $resultado = mysqli_query($conexion, $modificaciones);
    while($row = mysqli_fetch_assoc($resultado)) { ?>
  
    <div class="table__item"><?php echo $row["ID"]; ?></div>
    <div class="table__item"><?php echo $row["estilos"]; ?></div>
    <div class="table__item"><?php echo $row["color"]; ?></div>
    <div class="table__item"><?php echo $row["aleron"]; ?></div>
    <div class="table__item"><?php echo $row["carroceria"]; ?></div>
    <div class="table__item"><?php echo $row["costo"]; ?></div>
    <?php } mysqli_free_result($resultado);?>
</div>
</form>
</body>
</html>