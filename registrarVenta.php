<?php
    
    include 'conect.php';

             $idfac = $_POST['idfactura'];
            $idprod = $_POST['idproducto'];
            $Ced = $_POST['cedcli'];  
            $Fec = $_POST['fechaCompra'];  
            $Can = $_POST['cantidad']; 
            $Pre = $_POST['precio']; 
            $Iva = $_POST['iva']; 
            $Desc = $_POST['descuento'];

    
    $sql="INSERT INTO ventas (idfactura, idproducto, cedcli, fechaCompra, cantidad, precio, iva, descuento)
          values('$idfac','$idprod','$Ced', '$Fec', '$Can', '$Pre','$Iva', '$Desc')";

    if($conexion->query($sql) === TRUE) {
        echo 1;
    }
    else{
        echo 0; 
    }
    mysqli_close($conexion);  // Cierra la conexion
?>
    
