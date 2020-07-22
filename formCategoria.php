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



<form id="formRegistroCategoria" method="POST">

    <div class=" card-header green lighten-3-color white-text" align="center">
     <a href="verCategoria.php" class="fas fa-undo fa-sm"></a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbspREGISTRO DE CATEGORIA
    </div>

      <div class="modal-body mx-3">

        <div class="md-form mb-5">
          <i class="fas fa-address-card prefix grey-text"></i>
          <input type="text" id="idproducto" name="idproducto" class="form-control validate">
          <label data-error="wrong" data-success="right" for="defaultForm-email">ID Producto</label>
        </div>

        <div class="md-form mb-5">
          <select class="browser-default custom-select" id="tipo" name="Tipo" required>
            <option value="" disabled selected>Tipo</option>
            <option value="1">Zapato-formal</option>
            <option value="2">Tenis</option>
            <option value="3">Tacones</option>
            <option value="4">Botas</option>
            <option value="5">Chanclas</option>
        </select>
        </div>

        <div class="md-form mb-5">
          <select class="browser-default custom-select" id="marca" name="Marca" required>
            <option value="" disabled selected>Marca</option>
            <option value="1">Nike</option>
            <option value="2">Adidas</option>
            <option value="3">Brahama</option>
            <option value="4">Croidon</option>
            <option value="5">Puma</option>
        </select>

        </div>

        <div class="md-form mb-5">
          <select class="browser-default custom-select" id="color" name="Color" required>
            <option value="" disabled selected>Color</option>
            <option value="1">azul</option>
            <option value="2">amarillo</option>
            <option value="3">rojo</option>
            <option value="4">verde</option>
            <option value="5">negro</option>
            <option value="6">morado</option>
            <option value="7">blanco</option>
            <option value="8">gris</option>
            <option value="9">cafe</option>
        </select>

        </div>

        <div class="md-form mb-5">
          <select class="browser-default custom-select" id="talla" name="Talla" required>
            <option value="" disabled selected>Talla</option>
            <option value="1">28</option>
            <option value="2">30</option>
            <option value="3">31</option>
            <option value="4">34</option>
            <option value="5">36</option>
            <option value="6">38</option>
            <option value="7">40</option>

        </select>

        </div>

      </div>

      <div class="modal-footer d-flex justify-content-center">
        
      </div>


    <div class="card-footer text-muted green lighten-3-color white-text" align="center">
            
            <input type="submit" class="btn btn-mdb-color"  value="Registrar"> 
            <a href="verCategoria.php" class="btn btn-danger">Cancelar </a>
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




