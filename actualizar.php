<?php
include ('conexion.php');

$ID = $_POST['ID']; 
$noserie = $_POST['noserie'];
$propietario = $_POST['propietario'];
$marca = $_POST["marca"];  
$modelo = $_POST["modelo"];  
$id_modificacion = $_POST["modificacion"];
$id_refaccion = $_POST['refaccion'];  

mysqli_query($conexion, "UPDATE autos SET noserie='$noserie' WHERE ID=$ID") 
or die ("Error al actualizar los datos NUMERO DE SERIE ");
mysqli_query($conexion, "UPDATE autos SET propietario='$propietario' WHERE ID=$ID") 
or die ("Error al actualizar los datos PROPIETARIO");
mysqli_query($conexion, "UPDATE autos SET marca='$marca' WHERE ID=$ID") 
or die ("Error al actualizar los datos MARCA");
mysqli_query($conexion, "UPDATE autos SET modelo='$modelo' WHERE ID=$ID") 
or die ("Error al actualizar los datos MODELO");
mysqli_query($conexion, "UPDATE autos SET id_modificacion='$id_modificacion' WHERE ID=$ID") 
or die ("Error al actualizar los datos MODIFICACION");
mysqli_query($conexion, "UPDATE autos SET id_refaccion='$id_refaccion' WHERE ID=$ID") 
or die ("Error al actualizar los datos REFACCION");


mysqli_close($conexion);
echo '<script>
alert("Actualizado correctamente");
window.history.go(-1);
</script>';
?>