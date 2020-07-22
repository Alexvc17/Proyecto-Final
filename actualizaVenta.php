
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


    
    $sql = "UPDATE ventas SET idfactura='$idfac', idproducto ='$idprod', cedcli='$Ced', fechaCompra='$Fec', cantidad='$Can', precio='$Pre', iva='$Iva', descuento='$Desc'
    WHERE idfactura ='$idfac'";

    if($conexion->query($sql) === TRUE) {
        echo 1;
    }
    else{
        echo 0; 
    }
    mysqli_close($conexion);  
?>
    
