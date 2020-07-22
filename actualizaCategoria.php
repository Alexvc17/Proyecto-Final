<?php
    
    include 'conect.php';

    $Idprod = $_POST["idproducto"];
    $Tipo = $_POST["Tipo"];
    $Marca = $_POST["Marca"];
    $Color = $_POST["Color"];
    $Talla = $_POST["Talla"];


    
    $sql = "UPDATE categoria SET Tipo ='$Tipo', Marca='$Marca', Color='$Color',Talla='$Talla'
    WHERE idproducto ='$Idprod'";

    if($conexion->query($sql) === TRUE) {
        echo 1;
    }
    else{
        echo 0; 
    }
    mysqli_close($conexion);  
?>
    
