<?php
    
    include 'conect.php';

    $Idprov = $_POST["idproveedor"];
    $Nom = $_POST["nombre"];
    $Tel = $_POST["telefono"];
    $Dir = $_POST["direccion"];
    $Web = $_POST["web"];

    
    $sql="INSERT INTO proveedor (idproveedor, nombre, telefono, direccion, web)
          values('$Idprov','$Nom','$Tel', '$Dir', '$Web')";

    if($conexion->query($sql) === TRUE) {
        echo 1;
    }
    else{
        echo 0; 
    }
    mysqli_close($conexion);  // Cierra la conexion
?>
    

