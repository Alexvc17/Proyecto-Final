<?php
    include 'datosusuario.php';
    include 'inicioestilo.php';
    include 'encabezado.php';
    include 'conect.php';
    include 'estiloinicio5.php';

    

    echo('

      


        <div align="center" class="container"> 
        <br>
           
        <span class="badge badge-pill badge-dark"> <h3> Valor Productos </h3></span>
        <br>
         <div align="left" class="container">
            <a class="btn btn-default btn-rounded mb-4" href="formProducto.php"><i class="fas fa-plus-circle"></i>  Agregar</a>
        </div>
    ');

    $sql = "SELECT * FROM producto JOIN categoria on idprod = idproducto   
                                   JOIN proveedor on idprov = idproveedor";

    
    $i = 0;

    if ($resultado = $conexion->query($sql)) {
        echo('
            <table class="table">
                <thead class="red white-text">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Id Producto</th>
                        <th scope="col">Id Proveedor</th>
                        <th scope="col">Precio</th>
                        <th scope="col">Stock</th>
                        
                        <th scope="col">Opciones</th>
                    </tr>
                </thead>
        ');

        while($row = $resultado->fetch_array()){ //cedula->'123', nombre->'maria',telefono ->'39293']
            $i = $i + 1;
            $idprod = $row['idprod'];
            $idprov = $row['idprov'];
            $Precio = $row['precio'];  
            $Stock = $row['stock'];  
            

            echo('
                <tbody class="white-text">
                    <tr>
                        <th scope="row">'.$i.'</th>
                        <td>'.$idprod.'</td>
                        <td>'.$idprov.'</td>
                        <td>'.$Precio.'</td>
                        <td>'.$Stock.'</td>
                        
                        <td> 

                        <a href= "formActualizaProducto.php?idprod='. $idprod.' " class="btn btn btn-elegant"><i class="far fa-edit fa-lg"></i></a> 
                        <a href= "eliminarProducto.php?idprod='. $idprod.' " class="btn btn btn-danger"><i class="fas fa-minus-circle fa-lg"></i></a> 

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