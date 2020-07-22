<?php
    
    include 'conect.php';

    $Ced = $_POST["cedula"];
    $Nom = $_POST["nombre"];
    $Tel = $_POST["telefono"];
    $Dir = $_POST["direccion"];

    
    $sql="INSERT INTO cliente (cedula, nombre, telefono, direccion)
          values('$Ced','$Nom','$Tel', '$Dir')";

    if($conexion->query($sql) === TRUE) {
        echo 1;
    }
    else{
        echo 0; 
    }
    mysqli_close($conexion);  // Cierra la conexion
?>
    

