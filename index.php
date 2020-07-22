<?php
  session_start();

  require 'conexion.php';

  if (isset($_SESSION['user_id'])) {
    $records = $conn->prepare('SELECT id, nick, email, telefono, password FROM users WHERE id = :id');
    $records->bindParam(':id', $_SESSION['user_id']);
    $records->execute();
    $results = $records->fetch(PDO::FETCH_ASSOC);

    $user = null;

    if (count($results) > 0) {
      $user = $results;
    }
  }

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Welcome to you WebAp</title>
    
    <?php
    include 'inicioestilo.php';//links estilos
    ?>
   
  </head>
  <body>

      

    <?php if(!empty($user)): ?>
      
     <?php echo('<script>alertify.success("BIENVENIDO");</script>'); ?>
     
     
     <?php require 'encabezado.php' ?>
      
     <?php require 'home.php' ?>

   

    <!--///////////////////////////////////////////////////////////////////////////////////////////////-->

    <?php else: ?>

      

      
<?php require 'estiloinicio.php' ?>



<br><br><br>

<!----------------------------------------------------------------->

<div class="container">
  <div class="row">
    <div class="col-md-3"></div>
    <div class="col-md-6">
      
<!----------------------------------------------------------------->


 <div class="card mdb-color text-center z-depth-2">

                <!--Card image-->
                <div class="view">
                  <img src="images/img.jpg" class="card-img-top" alt="photo">
                  <a href="#">
                    <div class="mask rgba-white-slight"></div>
                  </a>
                </div>

                <!--Card content-->
                <div class="card-body text-center">
                  <!--Title-->
                  <h4 class="card-title grey-text">BIENVENIDO</h4>
                  <!--Text-->
                  <p class="card-text white-text">Para mantenerte conectado con nosotros inicia sesion con tu informacion personal o crea una cuenta nueva</p>
                  <a  href="login.php" class="btn btn-blue-grey active" role="button" aria-pressed="true">Ingresar</a>
                  <a href="signup.php" class="btn btn-blue-grey active" role="button" aria-pressed="true">Registrarse</a>

                </div>

              </div>




<!----------------------------------------------------------------->

    </div>
    <div class="col-md-3"></div>
  </div>
</div>

<!----------------------------------------------------------------->






    <?php endif; ?>


  </body>
</html>