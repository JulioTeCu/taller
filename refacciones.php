<?php
include 'conexion.php';
$refacciones = "SELECT * FROM refacciones";
?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>MOSTRAR</title>
<meta name="viewport" content="width=device-width, user-scalable=no, 
initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

<link rel="stylesheet" href="refacciones.css">
</head>
<body>
<h1>Tabla de datos</h1>

<form method="post" class="form-btn">
<div class="container-table">
    <div class="table__title">DATOS</div>
    <div class="table__header">ID</div>
    <div class="table__header">REFACCIÓN</div>
    <div class="table__header">PROVEEDOR</div>
    <div class="table__header">COSTO</div>
    <?php $resultado = mysqli_query($conexion, $refacciones);
    while($row = mysqli_fetch_assoc($resultado)) { ?>
  
    <div class="table__item"><?php echo $row["ID"]; ?></div>
    <div class="table__item"><?php echo $row["refaccion"]; ?></div>
    <div class="table__item"><?php echo $row["proveedor"]; ?></div>
    <div class="table__item"><?php echo $row["costo"]; ?></div>
    <?php } mysqli_free_result($resultado);?>
</div>
</form>
</body>
</html>