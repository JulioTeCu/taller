function validar(){
    var noserie, propietario, marca, modelo, id_modificacion, id_refaccion ;
    noserie = document.getElementById("noserie").value;
    propietario = document.getElementById("propietario").value;
    marca = document.getElementById("marca").value;
    modelo = document.getElementById("modelo").value;
    id_modificacion = document.getElementById("modificacion").value;
    id_refaccion = document.getElementById("refaccion").value; 
    if(noserie==="" || propietario==="" || marca==="" || modelo==="" || id_modificacion==="" 
    || id_refaccion==="" ) {
        alert("Todos los campos son obligatorios");
        return false;
    }
    else if(noserie.length>5){
        alert("El número de serie es muy largo");
        return false;
    }
    else if(propietario.length>50){
        alert("El nombre del propietario es muy largo");
        return false;
    }
    else if(marca.length>20){
        alert("El nombre de la marca es muy largo");
        return false;
    }
    else if(modelo.length>20){
        alert("El modelo es muy largo");
        return false;
    }
    else if(id_modificacion.length>5){
        alert("Exceso de caracteres");
        return false;
    }
    else if(id_refaccion.length>5){
        alert("Exceso de caracteres");
        return false;
    }
}