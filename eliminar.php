<?php
include ('conexion.php');

$ID = $_POST['ID'];

mysqli_query($conexion,"DELETE  FROM autos WHERE ID = $ID") or die ("Error al eliminar los datos");

mysqli_close($conexion);

echo '<script>
alert("Eliminado correctamente");
window.history.go(-1);
</script>';

?>