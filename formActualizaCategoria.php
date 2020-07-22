<?php
    include 'inicioestilo.php';
    include 'encabezado.php';
    include 'conect.php';
    include 'estiloinicio.php';

    $Idprod = $_GET["idprod"];  
    $sql = "SELECT * FROM categoria JOIN tipo on Tipo = idTipo  
                                    JOIN marca on Marca = idMarca
                                    JOIN color on Color = idColor
                                    JOIN talla on Talla = idTalla where idproducto = '$Idprod'"; 
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



<form id="editarRegistroCategoria" method="POST">

    <div class=" card-header green lighten-3-color white-text" align="center">
     <a href="verCategoria.php" class="fas fa-undo fa-sm"></a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbspACTUALIZAR DATOS CATEGORIA
    </div>

      <div class="modal-body mx-3">

        

        <div class="md-form">
            <input type="hidden" id="idproducto" name="idproducto" value="<?php echo $row['idproducto'] ?>" class="form-control"> 
        </div>

        <div class="md-form">
             <label for="pl">Id producto: <?php echo $row['idproducto'] ?></label>
        </div>


    
<br>
<br><br>
        <select class="browser-default custom-select" id="tipo" name="Tipo" value="<?php echo $row['nombreTipo'] ?>" required>
            <option value="" disabled selected>Tipo - <?php echo $row['nombreTipo'] ?></option>
            <option value="1">Zapato-formal</option>
            <option value="2">Tenis</option>
            <option value="3">Tacones</option>
            <option value="4">Botas</option>
            <option value="5">Chanclas</option>
        </select>
        <br>
        <br>

        <select class="browser-default custom-select" id="marca" name="Marca" value="<?php echo $row['nombreMarca'] ?>" required>
            <option value="" disabled selected>Marca - <?php echo $row['nombreMarca'] ?></option>
            <option value="1">Nike</option>
            <option value="2">Adidas</option>
            <option value="3">Brahama</option>
            <option value="4">Croidon</option>
            <option value="5">Puma</option>
        </select>
<br><br>
        <select class="browser-default custom-select" id="color" name="Color" value="<?php echo $row['nombreColor'] ?>" required>
            <option value="" disabled selected>Color - <?php echo $row['nombreColor'] ?></option>
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
<br><br>
        <select class="browser-default custom-select" id="talla" name="Talla" value="<?php echo $row['nombreTalla'] ?>" required>
            <option value="" disabled selected>Talla - <?php echo $row['nombreTalla'] ?></option>
            <option value="1">28</option>
            <option value="2">30</option>
            <option value="3">31</option>
            <option value="4">34</option>
            <option value="5">36</option>
            <option value="6">38</option>
            <option value="7">40</option>
        </select>
<br><br>
     
<br>

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
<br>
<br>









<?php
    include 'pie.php'
?>