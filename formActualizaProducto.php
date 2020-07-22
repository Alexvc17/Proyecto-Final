<?php
    include 'inicioestilo.php';
    include 'encabezado.php';
    include 'conect.php';
    include 'estiloinicio.php';

    $Idprod= $_GET["idprod"];  
    $sql = "SELECT * FROM producto where idprod = '$Idprod'"; 
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



<form id="editarRegistroProducto" method="POST">

    <div class=" card-header green lighten-3-color white-text" align="center">
     <a href="verProducto.php" class="fas fa-undo fa-sm"></a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbspACTUALIZAR DATOS DEL PRODUCTO
    </div>

      <div class="modal-body mx-3">

        

        <div class="md-form">
            <input type="hidden" id="idprod" name="idprod" value="<?php echo $row['idprod'] ?>" class="form-control"> 
        </div>

        <div class="md-form">
             <label for="pl">ID Producto : <?php echo $row['idprod'] ?></label>
        </div>
    <br>
      <div class="md-form">
            <input type="hidden" id="idprov" name="idprov" value="<?php echo $row['idprov'] ?>" class="form-control"> 
        </div>

        <div class="md-form">
             <label for="pl">ID Proveedor : <?php echo $row['idprov'] ?></label>
        </div>
<br>
    
<br>
<br><br>
        <a href="#" class="teal-text ml-1"> Precio:</a>
        <div class="md-form mb-4">
          <i class="fas fa-dollar-sign prefix grey-text"></i>
          <input type="text" id="precio" name="precio" value="<?php echo $row['precio'] ?>" class="form-control validate" required>
          
        </div>
        <a href="#" class="teal-text ml-1"> Stock:</a>
        <div class="md-form mb-5">
          <i class="fas fa-warehouse prefix grey-text"></i>
          <input type="text" id="stock" name="stock" value="<?php echo $row['stock'] ?>" class="form-control validate" required>
          </div>
   
     

    <div class="card-footer text-muted green lighten-3-color white-text" align="center">
            
            <input type="submit" class="btn btn-mdb-color"  value="Registrar"> 
            <a href="verProducto.php" class="btn btn-danger">Cancelar </a>
            
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