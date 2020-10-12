 <!--Header-->
 <?php include 'templates/header.php';?>
<!--Barra superior-->
<?php include 'templates/nav.php';?>

<div class="container text-center">
  <!--Titulo-->
    <h1 class="display-1 py-5 text-azul">Bienvenido!</h1>
  <!--Titulo-->

  <!--Fila-->
    <div class="row mt-5 sb-azul">

      <!--Col Inicio de sesion--> 
        <div class="py-3 px-3 col-sm-12 col-md-12 col-lg-4">
          <a href="public/registrado.php">
            <img src="public/img/iniciar.png" alt="iniciar">
          </a>
          <p>Inicio de sesión</p>
        </div>

      <!--Col Administrador--> 
      <div class="py-4 px-4 col-sm-12 col-md-12 col-lg-4">
        <a href="public/admin.php">
          <img src="public/img/admin.png" alt="admin">
        </a>
        <p>Administrador</p>
      </div>
         
      <!--Col Registrarse--> 
      <div class="py-4 px-4 col-sm-12 col-md-12 col-lg-4">
        <a href="public/registrar.php">
          <img src="public/img/registro.png" alt="registrarse">
        </a>
        <p>Registrarse</p>
      </div>
     
    </div>
    <!--Final Fila-->

  </div>

    
 <!--Footer-->
 <?php include 'templates/footer.php';?>
 <!--Final Footer-->
