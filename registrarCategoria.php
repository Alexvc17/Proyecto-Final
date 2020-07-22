<?php
    
    include 'conect.php';

    $idprod = $_POST["idproducto"];
    $Tipo = $_POST["Tipo"];
    $Marca = $_POST["Marca"];
    $Color = $_POST["Color"];
    $Talla = $_POST["Talla"];
    
    
    $sql="INSERT INTO categoria (idproducto, Tipo, Marca, Color, Talla)
          values('$idprod','$Tipo','$Marca', '$Color', '$Talla')";

    if($conexion->query($sql) === TRUE) {
        echo 1;
    }
    else{
        echo 0; 
    }
    mysqli_close($conexion);  // Cierra la conexion
?>
    

