
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



<form id="formRegistroClientes" method="POST">

    <div class=" card-header green lighten-3-color white-text" align="center">
     <a href="verClientes.php" class="fas fa-undo fa-sm"></a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbspREGISTRO DE CLIENTE
    </div>

      <div class="modal-body mx-3">

        <div class="md-form mb-5">
          <i class="fas fa-address-card prefix grey-text"></i>
          <input type="text" id="cedula" name="cedula" class="form-control validate">
          <label data-error="wrong" data-success="right" for="defaultForm-email">Cedula</label>
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

      </div>

      <div class="modal-footer d-flex justify-content-center">
        
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

<?php include 'pie.php';?>












      <!--/////////////////////////////////////////////////////


      <form id="formRegistroClientes"  method="POST">
         <div class="md-form">
            <input type="text" id="cedula" name="cedula" class="form-control" required>
            <label for="placa">cedula</label>
        </div>

        <div class="md-form">
            <input type="text" id="nombre" name="nombre" class="form-control" required>
            <label for="placa">nombre</label>
        </div>

        <div class="md-form">
            <input type="text" id="telefono" name="telefono" class="form-control" required>
            <label for="placa">telefono</label>
        </div>

        <div class="md-form">
            <input type="text" id="direccion" name="direccion" class="form-control" required>
            <label for="placa">direccion</label>
        </div>
        <input type="submit" class="btn btn-info"  value="Registrar"> 
        <a href="visualizaAutos.php" class="btn btn-danger">Cancelar </a>

      </form>

    </div>
    <div class="col">
    
    </div>
  </div>
</div>

      
      <div class="modal-body mx-3">

        <div class="md-form mb-5">
          <i class="fas fa-address-card prefix grey-text"></i>
          <input type="text" id="cedula" name="cedula" class="form-control validate">
          <label data-error="wrong" data-success="right" for="defaultForm-email">Cedula</label>
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

      </div>
      <div class="modal-footer d-flex justify-content-center">
        <input type="submit" class="btn btn-info"  value="Registrar"> 
        <a href="verClientes.php.php" class="btn btn-danger">Cancelar </a>
      </div>

    
    -->

