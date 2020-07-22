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



<form id="formRegistroProveedor" method="POST">

    <div class=" card-header green lighten-3-color white-text" align="center">
     <a href="verProveedor.php" class="fas fa-undo fa-sm"></a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbspREGISTRO DE PROVEEDOR
    </div>

      <div class="modal-body mx-3">

        <div class="md-form mb-5">
          <i class="fas fa-address-card prefix grey-text"></i>
          <input type="text" id="idproveedor" name="idproveedor" class="form-control validate">
          <label data-error="wrong" data-success="right" for="defaultForm-email">ID Proveedor</label>
        </div>

        <div class="md-form mb-4">
          <i class="far fa-user-circle prefix grey-text"></i>
          <input type="text" id="nombre" name="nombre" class="form-control validate">
          <label data-error="wrong" data-success="right" for="defaultForm-pass">Nombre</label>
        </div>

        <div class="md-form mb-5">
          <i class="fas fa-phone-square-alt prefix grey-text"></i>
          <input type="text" id="telefono" name="telefono" class="form-control validate">
          <label data-error="wrong" data-success="right" for="defaultForm-email">Telefono</label>
        </div>

        <div class="md-form mb-5">
          <i class="far fa-address-book prefix grey-text"></i>
          <input type="text" id="direccion" name="direccion" class="form-control validate">
          <label data-error="wrong" data-success="right" for="defaultForm-email">Direccion</label>
        </div>

         <div class="md-form mb-5">
          <i class="fab fa-internet-explorer prefix grey-text"></i>
          <input type="text" id="web" name="web" class="form-control validate">
          <label data-error="wrong" data-success="right" for="defaultForm-email">Web</label>
        </div>

      </div>

      <div class="modal-footer d-flex justify-content-center">
        
      </div>


    <div class="card-footer text-muted green lighten-3-color white-text" align="center">
            
            <input type="submit" class="btn btn-mdb-color"  value="Registrar"> 
            <a href="verProveedor.php" class="btn btn-danger">Cancelar </a>
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






