<?php

  require 'conexion.php';

  $message = '';

  if (!empty($_POST['email']) && !empty($_POST['password']) && !empty($_POST['telefono']) && !empty($_POST['nick']) && !empty($_POST['tipo1'])) {
    $sql = "INSERT INTO users (nick,email, password,telefono,tipo) VALUES (:nick, :email, :password, :telefono, :tipo)";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':nick', $_POST['nick']);
    $stmt->bindParam(':email', $_POST['email']);
    $stmt->bindParam(':telefono', $_POST['telefono']);
    $stmt->bindParam(':tipo', $_POST['tipo1']);
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
    $stmt->bindParam(':password', $password);


    if ($stmt->execute()) {
      $message = '<script>alertify.success("USUARIO CREADO CON EXITO");</script>';
    } else {
      $message = '<script>alertify.error("ERROR AL REGISTRAR USUARIO");</script>';
    }
  }
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Registro</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
  </head>
  <body>

    <?php require 'estilos.php' ?>

    <?php if(!empty($message)): ?>
      <p> <?= $message ?></p>
    <?php endif; ?>



<br><br>
<br>

<div class="container">
  <div class="row">
    <div class="col">
      

    </div>
    <div class="col-5">
     
<form action="signup.php" method="POST" class="text-center border border-elegant p-5 white-text">

<p class="h4 mb-4">Registrate</p>

<p>Crea una cuenta o <a href="login.php">Inicia sesión</a></p>

<input type="text" id="nick" name = "nick" class="form-control mb-4" placeholder="Nombre de usuario">

<input type="text" id="email" name = "email" class="form-control mb-4" placeholder="E-mail">

<input type="password" id="password" name="password" class="form-control mb-4" placeholder="Contraseña">

<input type="number" id="telefono" name="telefono" class="form-control mb-4" placeholder="Ingresa tu telefono">

<input type = "text" id="tipo1" name="tipo1" class="form-control mb-4" placeholder="Ingrese tipo de usuario" required>

<button class="btn btn-rounded btn-danger" type="submit">Registrar</button>




</form>

    </div>
    <div class="col">
      

    </div>
  </div>
</div>




  </body>
</html>

  </body>
</html>

