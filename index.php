 <!--Header-->
 <?php include './views/templates/header.php';?>
<!--Barra superior-->
<?php include './views/templates/nav.php';?>

<div class="container text-center">
  <!--Titulo-->
    <h1 class="display-1 py-5 text-azul">Bienvenido!</h1>
  <!--Titulo-->

  <!--Fila-->
    <div class="row mt-5 sb-azul">

      <!--Col Inicio de sesion--> 
        <div class="py-3 px-3 col-sm-12 col-md-12 col-lg-4">
          <a href="/views/registrado.php">
            <img src="img/iniciar.png" href="/include/registrado.php" alt="iniciar">
          </a>
          <p>Inicio de sesión</p>
        </div>

      <!--Col Administrador--> 
      <div class="py-4 px-4 col-sm-12 col-md-12 col-lg-4">
        <a href="/views/admin.php">
          <img src="img/admin.png" alt="admin">
        </a>
        <p>Administrador</p>
      </div>
         
      <!--Col Registrarse--> 
      <div class="py-4 px-4 col-sm-12 col-md-12 col-lg-4">
        <a href="/views/registrar.php">
          <img src="img/registro.png" alt="registrarse">
        </a>
        <p>Registrarse</p>
      </div>
     
    </div>
    <!--Final Fila-->

  </div>

    
 <!--Footer-->
 <?php include './views/templates/footer.php';?>
 <!--Final Footer-->
