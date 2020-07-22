<?php
    include 'inicioestilo.php';
    include 'encabezado.php';
    include 'conect.php';

    $Ced = $_GET["ced"];  
    $sql = "DELETE FROM cliente WHERE cedula ='$Ced'";

    if($conexion->query($sql) === TRUE) {
        
        echo (' 
                    

      <br><br>

<div class="container">
  <div class="row">
    <div class="col"></div>
    <div class="col-6">


<div class="jumbotron text-center hoverable p-4">


    <div class="offset-md-1 mx-3 my-6">

    
      <div class="view overlay">
        <img src="images/borrado.jpg">
        <a>
          <div class="mask rgba-white-slight"></div>
        </a>
        <br>
        <h4 class="h4 mb-4">Cliente eliminado correctamente </h4>

      <a href="verClientes.php" class="btn blue-gradient btn-block btn-rounded z-depth-1a">Volver</a>
      </div>

    </div>
    <!-- Grid column -->

    <!-- Grid column -->
 

</div>


    </div>
    <div class="col"></div>
  </div>
  </div>



            
            <script>

               
                alertify.success("Dato eiminado correctamente");



            </script>
    ');

        
    }    
    else {
        echo "No Eliminado ";
    }
    mysqli_close($conexion);  
    include 'pie.php'

?>