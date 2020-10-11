 <!--Header-->
 <?php include './templates/header.php';?>
<!--Barra superior-->
<?php include './templates/nav.php';?>


    <!--Resumen-->
    <div class="container mt-5 pt-5">
    <?php
    $nombre = $_POST['nombre'];
    $apellidos = $_POST['apellidos'];
    $email = $_POST['email'];
    $password1 = $_POST['password1'];
    $password2 = $_POST['password2'];
    $tipo = $_POST['tipo'];
    ?>
    </div>

    <h1 class="display-2 text-center">Datos Formulario</h1>

    <hr>

    <div class="container">
        <ul class="list-group">
            <li class="list-group-item"><?php echo $nombre ?></li>
            <li class="list-group-item"><?php echo $apellidos ?></li>
            <li class="list-group-item"><?php echo $email ?></li>
            <li class="list-group-item"><?php echo $password1 ?></li>
            <li class="list-group-item"><?php echo $password2 ?></li>
            <li class="list-group-item"><?php echo $tipo ?></li>
        </ul>
    </div>
    
    <!--Resumen-->

    <hr>
    <div class="container text-center">
        <a class="btn btn-info btn-lg mt-5" href="../index.php">Inicio</a>
    </div>
 
  <!--Footer-->
 <?php include './templates/footer.php';?>
 <!--Final Footer-->
