<?php
include "../src/BDInfo.php";

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

    if($password1 != $password2){
        $errorPaswd = "Las contraseñas no coinciden";
        header('Location: ../admin.php?add=1&errorPasswd='.$errorPaswd);
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
            header('Location: ../admin.php?add=1&errorEmail='.$errorEmail);
            exit();
        }

        $date = date("Y/m/d");
        $sql = "INSERT INTO users (nom, cognoms, correu, clauusuari, tipuscompte, fecha) VALUES ('$nombre', '$apellidos', '$email', '$password', '$tipo', '$date')";
        $conexio->query($sql);
        $conexio->close();

        $dia = date("Y")."/".date("n")."/".date("j");
        $hora = date("G").":".date("i").":".date("s");
        $fp = fopen("../log/admin.log","a");
        fputs($fp, "Usuari registrat al sistema: $email - Dia: $dia - Hora: $hora \n");
        fclose($fp);

        header('Location: ../admin.php');
        exit();

?>