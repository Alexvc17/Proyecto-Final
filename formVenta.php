<?php
    include 'inicioestilo.php';
    include 'encabezado.php';
    include 'estiloinicio.php';
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



<form id="formRegistroVenta" method="POST">

    <div class=" card-header green lighten-3-color white-text" align="center">
     <a href="verProveedor.php" class="fas fa-undo fa-sm"></a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbspREGISTRO DE VENTAS
    </div>

      <div class="modal-body mx-3">

        <div class="md-form mb-5">
          <i class="far fa-newspaper prefix grey-text"></i>
          <input type="text" id="idfactura" name="idfactura" class="form-control validate">
          <label data-error="wrong" data-success="right" for="defaultForm-email">ID Factura</label>
        </div>

        <div class="md-form mb-5">
          <i class="fab fa-readme prefix grey-text"></i>
          <input type="text" id="idproducto" name="idproducto" class="form-control validate">
          <label data-error="wrong" data-success="right" for="defaultForm-email">ID Producto</label>
        </div>

        <div class="md-form mb-5">
          <i class="fas fa-address-card prefix grey-text"></i>
          <input type="text" id="cedcli" name="cedcli" class="form-control validate">
          <label data-error="wrong" data-success="right" for="defaultForm-email">Cedula Cliente</label>
        </div>

        <div class="md-form mb-4">
          <i class="far fa-calendar-alt prefix grey-text"></i>
          <input type="date" id="fechaCompra" name="fechaCompra" class="form-control">
          <label  for="fechaPrestamo">Fecha de Compra</label>
        </div>

        <div class="md-form mb-5">
          <i class="fas fa-dolly prefix grey-text"></i>
          <input type="text" id="cantidad" name="cantidad" class="form-control validate">
          <label data-error="wrong" data-success="right" for="defaultForm-email">Cantidad</label>
        </div>

        <div class="md-form mb-5">
          <i class="fas fa-money-check-alt prefix grey-text"></i>
          <input type="text" id="precio" name="precio" class="form-control validate">
          <label data-error="wrong" data-success="right" for="defaultForm-email">Precio Venta</label>
        </div>

         <div class="md-form mb-5">
          <i class="fas fa-percentage prefix grey-text"></i>
          <input type="text" id="iva" name="iva" class="form-control validate">
          <label data-error="wrong" data-success="right" for="defaultForm-email">IVA</label>
        </div>

        <div class="md-form mb-5">
          <i class="fas fa-file-invoice-dollar prefix grey-text"></i>
          <input type="text" id="descuento" name="descuento" class="form-control validate">
          <label data-error="wrong" data-success="right" for="defaultForm-email">Descuento</label>
        </div>

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

<?php include 'pie.php';?>



