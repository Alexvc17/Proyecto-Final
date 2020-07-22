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



<form id="formRegistroProducto" method="POST">

    <div class=" card-header green lighten-3-color white-text" align="center">
     <a href="verProducto.php" class="fas fa-undo fa-sm"></a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbspREGISTRO DE PRODUCTO
    </div>

      <div class="modal-body mx-3">

        <div class="md-form mb-5">
          <i class="fas fa-address-card prefix grey-text"></i>
          <input type="text" id="idprod" name="idprod" class="form-control validate">
          <label data-error="wrong" data-success="right" for="defaultForm-email">ID Producto</label>
        </div>

        <div class="md-form mb-4">
          <i class="far fa-user-circle prefix grey-text"></i>
          <input type="text" id="idprov" name="idprov" class="form-control validate">
          <label data-error="wrong" data-success="right" for="defaultForm-pass">ID Proveedor</label>
        </div>

        <div class="md-form mb-5">
          <i class="fas fa-dollar-sign prefix grey-text"></i>
          <input type="text" id="precio" name="precio" class="form-control validate">
          <label data-error="wrong" data-success="right" for="defaultForm-email">Precio</label>
        </div>

        <div class="md-form mb-5">
          <i class="fas fa-warehouse prefix grey-text"></i>
          <input type="text" id="stock" name="stock" class="form-control validate">
          <label data-error="wrong" data-success="right" for="defaultForm-email">Stock</label>
        </div>

      </div>

      <div class="modal-footer d-flex justify-content-center">
        
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

<?php include 'pie.php';?>






