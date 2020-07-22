<?php

  session_start();

  if (isset($_SESSION['user_id'])) {
    header('Location: /sistem');
  }
  require 'conexion.php';

  if (!empty($_POST['email']) && !empty($_POST['password']) && !empty($_POST['tipo'])) {
    $records = $conn->prepare('SELECT id, email, password, tipo FROM users WHERE email = :email');
    $records->bindParam(':email', $_POST['email']);
    $tipo=$_POST['tipo'];
    $records->execute();
    $results = $records->fetch(PDO::FETCH_ASSOC);

    $message = '';

    if (count($results) > 0 && $tipo == 'administrador' && password_verify($_POST['password'], $results['password']) && $tipo == 'administrador') {
      $_SESSION['user_id'] = $results['id'];
      header("Location: /sistem");
    } else {
      if($tipo == 'usuario'){

          header("Location: /sistem/usuVenta.php");

      }
      
      $message = '<script>alertify.error("TUS DATOS NO COINCIDEN");</script>';
    }
  }

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Inicio sesion</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
  </head>
  <body>
    <?php require 'estilos.php' ?>

    <?php if(!empty($message)): ?>
      <p> <?= $message ?></p>
    <?php endif; ?>



<br><br>
<br><br>
<br>


<div class="container">
  <div class="row">
    <div class="col">
      

    </div>
    <div class="col-5">
     
<form action="login.php" method="POST" class="text-center border border-elegant p-5 white-text">

<p class="h4 mb-4">Inicia sesión</p>

<p>¿No tienes cuenta? <a href="signup.php">Registrate</a></p>


<input type="text" id="email" name = "email" class="form-control mb-4" placeholder="E-mail" required>

<input type="password" id="password" name="password" class="form-control mb-4" placeholder="Contraseña" required>

<input type = "text" id="tipo" name="tipo" class="form-control mb-4" placeholder="tipo" required>


<button class="btn btn-rounded btn-danger" type="submit">Ingresar</button>




</form>

    </div>
    <div class="col">
      

    </div>
  </div>
</div>




  </body>
</html>