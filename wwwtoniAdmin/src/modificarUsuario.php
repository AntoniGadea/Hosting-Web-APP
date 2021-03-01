<?php session_start();
include "../src/BDInfo.php";

        $nombre = $_POST['nombre'];
        $apellidos = $_POST['apellidos'];
        $email =  $_SESSION["user"];
        $password1 = $_POST['password1'];
        $password2 = $_POST['password2'];
        $tipo = $_POST['tipo'];
        $errorPaswd = "";
        $password;
        $algorisme = 'PASSWORD_BCRYPT';

        if($password1 != $password2){
            $errorPaswd = "Las contraseñas no coinciden";
            header('Location: /admin.php?error='.$errorPaswd);
            exit();
        }
        $password1 ? $password = password_hash ($password1, PASSWORD_BCRYPT) : null;

        $conexio = new mysqli($servidor, $usuari, $contrasenya, $db);

        if($conexio->connect_error){
            die ("Error de connexió:".$conexio->connect_error);
        }

        $date = date("Y/m/d");
       
        if($password1){
            $sql = "UPDATE users SET nom='$nombre', cognoms='$apellidos', clauusuari='$password', tipuscompte='$tipo', fecha='$date' WHERE correu='$email'";
            $msg = "Datos y contraseña modificados con exito!";
        }else{
            $sql = "UPDATE users SET nom='$nombre', cognoms='$apellidos', tipuscompte='$tipo', fecha='$date' WHERE correu='$email'";
            $msg = "Datos modificados con exito!";
        }
       
        $conexio->query($sql);
        $conexio->close();
        
        $email = $_SESSION["user"];
        $dia = date("Y")."/".date("n")."/".date("j");
        $hora = date("G").":".date("i").":".date("s");
        $fp = fopen("../log/admin.log","a");
        fputs($fp, "Usuari modificat: $email - Dia: $dia - Hora: $hora \n");
        fclose($fp);

        header('Location: /admin.php?msg='.$msg);
        exit();
    ?>