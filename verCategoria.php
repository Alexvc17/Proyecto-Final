<?php
        
     

    include 'datosusuario.php';  
    include 'inicioestilo.php';

    include 'encabezado.php';
    include 'conect.php';
    include 'estiloinicio3.php';

    
    

    echo('

      


        <div align="center" class="container"> 
        <br>
           
        <span class="badge badge-pill badge-dark"> <h3> Categoria de productos </h3></span>
        <br>
         <div align="left" class="container">
            <a class="btn btn-default btn-rounded mb-4" href="formCategoria.php"><i class="fas fa-plus-circle"></i>  Agregar</a>
        </div>
    ');

    $sql = "SELECT * FROM categoria JOIN tipo on Tipo = idTipo  
                                    JOIN marca on Marca = idMarca
                                    JOIN color on Color = idColor
                                    JOIN talla on Talla = idTalla";

    
    $i = 0;

    if ($resultado = $conexion->query($sql)) {
        echo('
            <table class="table">
                <thead class="red white-text">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Id Producto</th>
                        <th scope="col">Tipo</th>
                        <th scope="col">Marca</th>
                        <th scope="col">Color</th>
                        <th scope="col">Talla</th>
                        <th scope="col">Opciones</th>
                    </tr>
                </thead>
        ');

        while($row = $resultado->fetch_array()){ //cedula->'123', nombre->'maria',telefono ->'39293']
            $i = $i + 1;
            $idprod = $row['idproducto'];
            $tipo = $row['nombreTipo'];
            $marca = $row['nombreMarca'];  
            $color = $row['nombreColor'];  
            $talla = $row['nombreTalla']; 

            echo('
                <tbody class="white-text">
                    <tr>
                        <th scope="row">'.$i.'</th>
                        <td>'.$idprod.'</td>
                        <td>'.$tipo.'</td>
                        <td>'.$marca.'</td>
                        <td>'.$color.'</td>
                        <td>'.$talla.'</td>
                        <td> 

                        <a href= "formActualizaCategoria.php?idprod='. $idprod.' " class="btn btn btn-elegant"><i class="far fa-edit fa-lg"></i></a> 
                        <a href= "eliminarCategoria.php?idprod='. $idprod.' " class="btn btn btn-danger"><i class="fas fa-minus-circle fa-lg"></i></a> 

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