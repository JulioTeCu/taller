<?php
include 'conexion.php';
$noserie = $_POST["noserie"];  
$propietario = $_POST["propietario"];  
$marca = $_POST["marca"];  
$modelo = $_POST["modelo"];  
$id_modificacion = $_POST["modificacion"];  
$id_refaccion = $_POST["refaccion"];  

$insertar = "INSERT INTO autos(noserie, propietario, marca, modelo, id_modificacion, id_refaccion) 
VALUES ( '$noserie' , '$propietario', '$marca', '$modelo', $id_modificacion , $id_refaccion)";
$resultado = mysqli_query($conexion, $insertar);

$verificar_modi = $id_modificacion;
$verificar_refa = $id_refaccion;
$suma = $verificar_modi + $verificar_refa;

if($suma < 1){
    echo 
        '<script>
        alert ("Es necesario hacer una compra para completar el registro");
        window.history.go(-1)
        </script>';
        exit;
}


if(!$resultado) {
    echo 'Error al registrarse';
} else {
    echo '<script>
    alert("Auto registrado con exito");
    window.history.go(-1);
    </script>';
}
mysqli_close($conexion);