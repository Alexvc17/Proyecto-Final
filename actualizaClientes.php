<?php
    
    include 'conect.php';

    $Ced = $_POST["cedula"];
    $Nom = $_POST["nombre"];
    $Tel = $_POST["telefono"];
    $Dir = $_POST["direccion"];


    
    $sql = "UPDATE cliente SET nombre='$Nom', telefono='$Tel', direccion='$Dir'
    WHERE cedula ='$Ced'";

    if($conexion->query($sql) === TRUE) {
        echo 1;
    }
    else{
        echo 0; 
    }
    mysqli_close($conexion);  
?>
    

