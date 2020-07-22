<?php
    include 'inicioestilo.php';
    include 'encabezado.php';
    include 'conect.php';
    include 'estiloinicio.php';

    $Idprov = $_GET["idprov"]; 
    $sql = "SELECT * FROM proveedor where idproveedor = '$Idprov'"; 
    $resultado = $conexion->query($sql);
    $row = $resultado->fetch_array();  
?>









   

<br>
<br>
<div class="container">
  <div class="row">
    <!--////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
    <div class="col-2">
      
    </div>
    <!--////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
    <div class="card col-8">
      <!--////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->



<form id="editarRegistroProveedor" method="POST">

    <div class=" card-header green lighten-3-color white-text" align="center">
     <a href="verProveedor.php" class="fas fa-undo fa-sm"></a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbspACTUALIZAR DATOS DEL PROVEEDOR
    </div>

      <div class="modal-body mx-3">

        

        <div class="md-form">
            <input type="hidden" id="idproveedor" name="idproveedor" value="<?php echo $row['idproveedor'] ?>" class="form-control"> 
        </div>

        <div class="md-form">
             <label for="pl">ID Proveedor: <?php echo $row['idproveedor'] ?></label>
        </div>


    
<br>
<br><br>
        <a href="#" class="teal-text ml-1"> Nombre:</a>
        <div class="md-form mb-4">
          <i class="far fa-user-circle prefix grey-text"></i>
          <input type="text" id="nombre" name="nombre" value="<?php echo $row['nombre'] ?>" class="form-control validate" required>
          
        </div>
        <a href="#" class="teal-text ml-1"> Telefono:</a>
        <div class="md-form mb-5">
          <i class="fas fa-phone-square-alt prefix grey-text"></i>
          <input type="text" id="telefono" name="telefono" value="<?php echo $row['telefono'] ?>" class="form-control validate" required>
          
        </div>
        
        <a href="#" class="teal-text ml-1"> Direccion:</a>
        <div class="md-form mb-5">
          <i class="far fa-address-book prefix grey-text"></i>
          <input type="text" id="direccion" name="direccion" value="<?php echo $row['direccion'] ?>" class="form-control validate" required>
          
        </div>

        <a href="#" class="teal-text ml-1"> Web:</a>
        <div class="md-form mb-5">
          <i class="fab fa-internet-explorer prefix grey-text"></i>

          <input type="text" id="web" name="web" value="<?php echo $row['web'] ?>" class="form-control validate" required>
          
        </div>

      </div>

     

    <div class="card-footer text-muted green lighten-3-color white-text" align="center">
            
            <input type="submit" class="btn btn-mdb-color"  value="Registrar"> 
            <a href="verClientes.php" class="btn btn-danger">Cancelar </a>
            
    </div>


</form>




    </div>
    <!--////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
    <div class="col-2">
     
    </div>
    <!--////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
  </div>
</div>
<br>
<br>










<?php
    include 'pie.php'
?>