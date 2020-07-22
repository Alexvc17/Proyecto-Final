<?php
    
    include 'conect.php';

    $idprod = $_POST["idprod"];
    $idprov = $_POST["idprov"];
    $precio = $_POST["precio"];
    $stock = $_POST["stock"];


    
    $sql = "UPDATE producto SET idprod='$idprod', idprov='$idprov', precio='$precio', stock='$stock'
    WHERE idprod ='$idprod'";

    if($conexion->query($sql) === TRUE) {
        echo 1;
    }
    else{
        echo 0; 
    }
    mysqli_close($conexion);  
?>
    

