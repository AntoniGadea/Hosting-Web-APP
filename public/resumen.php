 <!--Header-->
 <?php include '../templates/header.php';?>
<!--Barra superior-->
<?php include '../templates/nav.php';?>

    <?php
        $nombre = $_POST['nombre'];
        $apellidos = $_POST['apellidos'];
        $email = $_POST['email'];
        $password1 = $_POST['password1'];
        $password2 = $_POST['password2'];
        $tipo = $_POST['tipo'];
        $errorPaswd = "";
        $errorEmail = "";
        $password;
        $algorisme = 'PASSWORD_BCRYPT';
        //DB
        $servidor = '127.0.0.1';
        $usuari = '2daw06_daw';
        $contrasenya = '10261259';
        $db = 'hosting_tonigadea';

        if($password1 != $password2){
            $errorPaswd = "Las contraseñas no coinciden";
            header('Location: /public/registrar.php?errorPasswd='.$errorPaswd);
            exit();
        }
        $password = password_hash ($password1, PASSWORD_BCRYPT);

        $conexio = new mysqli($servidor, $usuari, $contrasenya, $db);

        if($conexio->connect_error){
            die ("Error de connexió:".$conexio->connect_error);
        }

        $sql = "SELECT * FROM users WHERE correu ='$email'";
        $resultat = $conexio->query($sql);
        
        if($resultat->num_rows > 0) {  
                $errorEmail = "Este correo ya ha sido registrado";
                header('Location: /public/registrar.php?errorEmail='.$errorEmail);
                exit();
            }

            $date = date("Y/m/d");
            $sql = "INSERT INTO users (nom, cognoms, correu, clauusuari, tipuscompte, fecha) VALUES ('$nombre', '$apellidos', '$email', '$password', '$tipo', '$date')";
            $conexio->query($sql);
        $conexio->close();

        $dia = date("Y")."/".date("n")."/".date("j");
        $hora = date("G").":".date("i").":".date("s");
        $fp = fopen("../log/usuaris.log","a");
        fputs($fp, "Usuari registrat al sistema: $email - Dia: $dia - Hora: $hora \n");
        fclose($fp);
    ?>
    <!--Resumen-->
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
