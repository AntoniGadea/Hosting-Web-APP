 <!--Header-->
 <?php include '../templates/header.php';?>
<!--Barra superior-->
<?php include '../templates/nav.php';?>


    <!--Resumen-->
    <div class="container mt-5 pt-5">
    <?php
    $nombre = $_POST['nombre'];
    $apellidos = $_POST['apellidos'];
    $email = $_POST['email'];
    $password1 = $_POST['password1'];
    $password2 = $_POST['password2'];
    $tipo = $_POST['tipo'];
    $error = "";

    $servidor = '127.0.0.1';
    $usuari = 'hosting_toniGadea';
    $contrasenya = $password1;
    $db = 'hosting_toniGadea';

    if($password1 != $password2){
        $error = "Las contraseñas no coinciden";
        header('Location: /public/registrar.php?error='.$error);  
    }else{
       


    }

    ?>
    </div>

    <h1 class="display-2 text-center text-azul">Datos Formulario</h1>

    <hr>

    <div class="container">
        <ul class="list-group">
            <li class="list-group-item">Nombre: <?php echo $nombre ?></li>
            <li class="list-group-item">Apellidos: <?php echo $apellidos ?></li>
            <li class="list-group-item">Email: <?php echo $email ?></li>
            <li class="list-group-item">Contraseña: <?php echo $password1 ?></li>
            <li class="list-group-item">Confirmacón contraseña: <?php echo $password2 ?></li>
            <li class="list-group-item">Tipo de cuenta: <?php echo $tipo ?></li>
            <?php 
        if ($tipo == "Normal"){
            echo "<li class='list-group-item text-center'><img src='/public/img/normal.jpg' alt='normal'/></li>";
        }else{
            echo "<li class='list-group-item text-center'><img src='/public/img/admin.jpg' alt='admin'/></li>";
        }
    ?>
        </ul>
    </div>
    
    <?php echo '<h3 class="text-center">Bienvenido '.$email.' !</h3>'?>
    <!--Resumen-->

    <hr>
    <div class="container text-center">
        <a class="btn btn-info btn-lg mt-5" href="../index.php">Inicio</a>
    </div>
 
  <!--Footer-->
 <?php include '../templates/footer.php';?>
 <!--Final Footer-->
