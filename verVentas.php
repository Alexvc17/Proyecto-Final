

<?php

    

     require 'conexion.php';

  if (isset($_SESSION['user_id'])) {
    $records = $conn->prepare('SELECT id, nick, email, telefono, password FROM users WHERE id = :id');
    $records->bindParam(':id', $_SESSION['user_id']);
    $records->execute();
    $results = $records->fetch(PDO::FETCH_ASSOC);

    $user = null;

    if (count($results) > 0) {
      $user = $results;
    }
  }

    include 'inicioestilo.php';

    include 'encabezado.php';
    include 'conect.php';
    include 'estiloinicio6.php';

    

    echo('

      


        <div align="center" class="container"> 
        <br>
           
        <span class="badge badge-pill badge-dark"> <h3> Lista de Ventas </h3></span>
        <br>
         <div align="left" class="container">
            <a class="btn btn-default btn-rounded mb-4" href="formVenta.php"><i class="fas fa-plus-circle"></i>  Agregar</a>
        </div>
    ');

   $sql = "SELECT * FROM ventas";


    
    $i = 0;

    if ($resultado = $conexion->query($sql)) {
        echo('
            <table class="table">
                <thead class="red white-text">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">ID Factura</th>
                        <th scope="col">ID Producto</th>
                        <th scope="col">Cedula cliente</th>
                        <th scope="col">Fecha compra</th>
                        <th scope="col">Cantidad</th>
                        <th scope="col">Precio</th>
                        <th scope="col">IVA</th>
                        <th scope="col">Descuento</th>
                        <th scope="col">Opciones</th>
                    </tr>
                </thead>
        ');

        while($row = $resultado->fetch_array()){ //cedula->'123', nombre->'maria',telefono ->'39293']
        $i = $i + 1;
            $idfac = $row['idfactura'];
            $idprod = $row['idproducto'];
            $Ced = $row['cedcli'];  
            $Fec = $row['fechaCompra'];  
            $Can = $row['cantidad']; 
            $Pre = $row['precio']; 
            $Iva = $row['iva']; 
            $Desc = $row['descuento'];   
            

            echo('
                <tbody class="white-text">
                    <tr>
                        <th scope="row">'.$i.'</th>
                        <td>'.$idfac.'</td>
                        <td>'.$idprod.'</td>
                        <td>'.$Ced.'</td>
                        <td>'.$Fec.'</td>
                        <td>'.$Can.'</td>
                        <td>'.$Pre.'</td>
                        <td>'.$Iva.'</td>
                        <td>'.$Desc.'</td>
                        
                        <td> 

                         <a href= "formActualizaVenta.php?idfac='. $idfac.' " class="btn btn btn-elegant"><i class="far fa-edit fa-lg"></i></a> 
                        <a href= "eliminarVenta.php?idfac='. $idfac.' " class="btn btn btn-danger"><i class="fas fa-minus-circle fa-lg"></i></a> 

                        </td>
                    </tr>
            ');                        
        }

        echo('
                </tbody>
            </table>
        </div>
        ');   
    }
    
    include 'pie.php'
?>