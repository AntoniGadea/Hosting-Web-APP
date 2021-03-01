<!--Header-->
<?php include 'templates/header.php';?>
<!--Barra superior-->
<?php include 'templates/nav.php';?>

<div class="container-fluid text-center">
  <!--Titulo-->
  <div class="container my-5">
    <h1 class="display-1 my-5 text-azul">Bienvenido! <?php if(isset($_SESSION['user'])){echo $_SESSION['user'];}?></h1>
  </div>
  <!--Titulo-->

  <!--Fila-->
    <div class="row sb-azul d-flex justify-content-center pt-5">

      <!--Col Inicio de sesion--> 
        <div class="col-3 mx-5">
          <a href="public/registrado.php">
            <img class="zoom" src="public/img/iniciar.png" alt="iniciar">
          </a>
          <p>Inicio de sesión</p>
        </div>
         
      <!--Col Registrarse--> 
      <div class="col-3 mx-5">
        <a href="public/registrar.php">
          <img class="zoom" src="public/img/registro.png" alt="registrarse">
        </a>
        <p>Registrarse</p>
      </div>
     
    </div>
    <!--Final Fila-->

  </div>

    
 <!--Footer-->
 <?php include 'templates/footer.php';?>
 <!--Final Footer-->
