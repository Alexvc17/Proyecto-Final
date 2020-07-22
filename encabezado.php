
  <nav class="navbar navbar-expand-lg navbar-dark black">
    <a class="navbar-brand" href="index.php"><img src="images/Logo-.jpg" width="180" height="70"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a class="nav-link" href="index.php">Inicio<span class="sr-only"></span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="verClientes.php">Cliente <span class="sr-only"></span></a>
        </li>
        <li class="nav-item">

          <a class="nav-link" href="verCategoria.php">Categoria</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="verProveedor.php">Proveedor</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="verProducto.php">Producto</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="verVentas.php">Ventas</a>
        </li>
      </ul>

      <ul class="navbar-nav nav-flex-icons">
        <li class="nav-item">
         
          <a type="button" class="btn-floating btn-lg blue-gradient" data-toggle="modal" data-target="#basicExampleModal"><i class="fas fa-user-tie" aria-hidden="true"></i></a>


        </li>
        
      </ul>
    </div>
  </nav>





<div class="modal fade" id="basicExampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog modal-notify modal-info" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">
         <h3>Bienvenido,&nbsp</h3> <a class="red-text">
        <h6 class="h3 pb-1"> <?= $user['nick']; ?></h6>
      </a>
          
            

          </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">


        <div class="alert alert-info" role="alert">
        Correo: <a href="#" class="alert-link"><?= $user['email']; ?></a><br><br>
        Teléfono: <a href="#" class="alert-link"><?= $user['telefono']; ?></a>
      </div>
      
      </div>
      <div  align="center">
      <a href="logout.php" class="btn blue-gradient" role="button" aria-pressed="true" align="center">Cerrar sesión</a>
      </div>
       <br>
      
    </div>
  </div>
</div>


