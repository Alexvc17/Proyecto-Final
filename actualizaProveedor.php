<?php
    
    include 'conect.php';

    $Idprov = $_POST["idproveedor"];
    $Nom = $_POST["nombre"];
    $Tel = $_POST["telefono"];
    $Dir = $_POST["direccion"];
    $Web = $_POST["web"];


    
    $sql = "UPDATE proveedor SET nombre='$Nom', telefono='$Tel', direccion='$Dir', web='$Web'
    WHERE idproveedor ='$Idprov'";

    if($conexion->query($sql) === TRUE) {
        echo 1;
    }
    else{
        echo 0; 
    }
    mysqli_close($conexion);  
?>
    

