<?php
    include 'inicioestilo.php';
    include 'encabezado.php';
    include 'conect.php';
    include 'estiloinicio.php';

    $Idfac= $_GET["idfac"]; 
    $sql = "SELECT * FROM ventas where idfactura = '$Idfac'"; 
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



<form id="editarRegistroVenta" method="POST">

    <div class=" card-header green lighten-3-color white-text" align="center">
     <a href="verVentas.php" class="fas fa-undo fa-sm"></a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbspACTUALIZAR DATOS DE LA VENTA
    </div>

      <div class="modal-body mx-3">

        

        <div class="md-form">
            <input type="hidden" id="idfactura" name="idfactura" value="<?php echo $row['idfactura'] ?>" class="form-control"> 
        </div>

        <div class="md-form">
             <label for="idfactura">ID Factura: <?php echo $row['idfactura'] ?></label>
        </div>
    <br>
      <div class="md-form">
            <input type="hidden" id="idproducto" name="idproducto" value="<?php echo $row['idproducto'] ?>" class="form-control"> 
        </div>

        <div class="md-form">
             <label for="idproducto">ID Producto : <?php echo $row['idproducto'] ?></label>
        </div>
<br>
<div class="md-form">
            <input type="hidden" id="cedcli" name="cedcli" value="<?php echo $row['cedcli'] ?>" class="form-control"> 
        </div>

        <div class="md-form">
             <label for="cedcli">Cedula Cliente : <?php echo $row['cedcli'] ?></label>
        </div>
    
<br>
<br><br>
        <div class="md-form mb-4">

          <a href="#" class="grey-text ml-1"> Fecha de compra:</a><br>

        
          
          <input type="date" id="fechaCompra" name="fechaCompra" class="form-control" value="<?php echo $row['fechaCompra'] ?>">
          

        </div>

        <div class="md-form mb-5">
          <i class="fas fa-dolly prefix grey-text"></i>
          <input type="text" id="cantidad" name="cantidad" class="form-control validate" value="<?php echo $row['cantidad'] ?>">
          <label data-error="wrong" data-success="right" for="defaultForm-email">Cantidad</label>
        </div>

        <div class="md-form mb-5">
          <i class="fas fa-money-check-alt prefix grey-text"></i>
          <input type="text" id="precio" name="precio" class="form-control validate" value="<?php echo $row['precio'] ?>">
          <label data-error="wrong" data-success="right" for="defaultForm-email">Precio Venta</label>
        </div>

         <div class="md-form mb-5">
          <i class="fas fa-percentage prefix grey-text"></i>
          <input type="text" id="iva" name="iva" class="form-control validate" value="<?php echo $row['iva'] ?>">
          <label data-error="wrong" data-success="right" for="defaultForm-email">IVA</label>
        </div>

        <div class="md-form mb-5">
          <i class="fas fa-file-invoice-dollar prefix grey-text"></i>
          <input type="text" id="descuento" name="descuento" class="form-control validate" value="<?php echo $row['descuento'] ?>">
          <label data-error="wrong" data-success="right" for="defaultForm-email">Descuento</label>
        </div>

         <div class="card-footer text-muted green lighten-3-color white-text" align="center">
            
            <input type="submit" class="btn btn-mdb-color"  value="Registrar"> 
            <a href="verVentas.php" class="btn btn-danger">Cancelar </a>
            
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