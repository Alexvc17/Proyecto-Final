<?php
    
    include 'conect.php';

    $idprod = $_POST["idprod"];
    $idprov = $_POST["idprov"];
    $precio = $_POST["precio"];
    $stock = $_POST["stock"];
    
    
    
    $sql="INSERT INTO producto (idprod, idprov, precio, stock)
          values('$idprod','$idprov','$precio', '$stock')";

    if($conexion->query($sql) === TRUE) {
        echo 1;
    }
    else{
        echo 0; 
    }
    mysqli_close($conexion);  // Cierra la conexion
?>
    
