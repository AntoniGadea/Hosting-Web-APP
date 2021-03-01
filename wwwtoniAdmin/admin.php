<!--Header-->
<?php include 'templates/header.php';?>
<!--Barra superior-->
<?php include 'templates/nav.php';?>
<?php 
      $login = null;
        if(isset($_SESSION['user'])){
            $login = $_SESSION['user'];
            if($login != 'admin'){
                $login = null;
                session_destroy();
            }
        }
?>
<div class="container-fluid text-center">
  <!--Titulo-->
  <div class="container my-5">
    <h1 class="display-1 my-3 text-azul">Bienvenido! <?php if(isset($_SESSION['user'])){echo $_SESSION['user'];}?></h1>
  </div>
  <!--Titulo-->

  <!--Fila-->
    <div class="row  pt-5 d-flex justify-content-center">

      <!--Col Inicio de sesion--> 

     
        <?php
        $modificar = null;
        if(isset($_GET['modificar'])) $modificar = $_GET['modificar'];

        $add = null;
        if(isset($_GET['add'])) $add = $_GET['add'];
        
        if($add){
          include "./templates/registrar.php";
        } else if($modificar){
          include './templates/modificar.php';
        }else if($login){
          include "./templates/lista.php";
              }else{
                include './templates/login.php';
        }

        if(isset($_GET['error'])){
          $error = $_GET['error'];
          echo "<h5 class='text-danger text-center'>$error</h5>";
        }
        if(isset($_GET['msg'])){
          $msg = $_GET['msg'];
          echo "<h5 class='text-success text-center'>$msg</h5>";
        }
        ?>
         
      
    </div>
    <!--Final Fila-->

  </div>

    
 <!--Footer-->
 <?php include 'templates/footer.php';?>
 <!--Final Footer-->
