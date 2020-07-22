<?php
    include 'datosusuario.php';
    include 'inicioestilo.php';
    include 'encabezado.php';
    include 'conect.php';
   

   include 'estiloinicio4.php';

    echo('

      


        <div align="center" class="container"> 
        <br>
           
        <span class="badge badge-pill badge-dark"> <h3>Lista de Proveedores</h3></span>
        <br>
         <div align="left" class="container">
            <a class="btn btn-default btn-rounded mb-4" href="formProveedor.php"> <i class="fas fa-plus-circle"></i>  Agregar</a>
        </div>
    ');

    $sql = "SELECT * FROM proveedor";
    $i = 0;

    if ($resultado = $conexion->query($sql)) {
        echo('
            <table class="table">
                <thead class="red white-text">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">ID Proveedor</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Telefono</th>
                        <th scope="col">Direccion</th>
                        <th scope="col">Web</th>
                        <th scope="col">Opciones</th>
                    </tr>
                </thead>
        ');

        while($row = $resultado->fetch_array()){ 
            $i = $i + 1;
            $Idprov = $row['idproveedor'];
            $nombre = $row['nombre'];
            $telefono = $row['telefono'];  
            $direccion = $row['direccion'];  
            $web = $row['web'];  
            
            echo('
                <tbody class="white-text">
                    <tr>
                        <th scope="row">'.$i.'</th>
                        <td>'.$Idprov.'</td>
                        <td>'.$nombre.'</td>
                        <td>'.$telefono.'</td>
                        <td>'.$direccion.'</td>
                        <td>'.$web.'</td>
                        <td> 
                        <a href= "formActualizaProveedor.php?idprov='. $Idprov.' " class="btn btn btn-elegant"><i class="far fa-edit fa-lg"></i></a> 
                        <a href= "eliminarProveedor.php?idprov='. $Idprov.' " class="btn btn btn-danger"><i class="fas fa-minus-circle fa-lg"></i></a> 

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
    echo ('<br><br>');
    include 'pie.php'
?>

