<?php
session_start();

include "../src/BDInfo.php";

if(isset($_POST['email'])){
    $email = $_POST['email'];
    }
if(isset($_POST['password'])){
    $password = $_POST['password'];
}

$conexio = new mysqli($servidor, $usuari, $contrasenya, $db);

if($conexio->connect_error){
    die ("Error de connexió:".$conexio->connect_error);
}

$sql = "SELECT clauusuari FROM users WHERE correu='$email'";
$resultat = $conexio->query($sql);

if($resultat->num_rows > 0){
    while($row = $resultat->fetch_assoc()) {
        $hash = implode("",$row);
        if(password_verify($password,$hash)){
            $dia = date("Y")."/".date("n")."/".date("j");
            $hora = date("G").":".date("i").":".date("s");
            $fp = fopen("../log/admin.log","a");
            fputs($fp, "Usuari accedeix al sistema: $email - Dia: $dia - Hora: $hora \n");
            fclose($fp);

            $_SESSION['user'] = $email;
            header('Location:  /admin.php');
            exit();
        }else{
            $dia = date("Y")."/".date("n")."/".date("j");
            $hora = date("G").":".date("i").":".date("s");
            $fp = fopen("../log/admin.log","a");
            fputs($fp, "Intent de acces al sistema: $email - Dia: $dia - Hora: $hora \n");
            fclose($fp);

            header('Location: /admin.php?error=Contraseña no valida');
            exit();

        }
      }  
}
    $dia = date("Y")."/".date("n")."/".date("j");
    $hora = date("G").":".date("i").":".date("s");
    $fp = fopen("../log/admin.log","a");
    fputs($fp, "Intent de acces al sistema: $email - Dia: $dia - Hora: $hora \n");
    fclose($fp);
    header('Location: /admin.php?error=Email no valido');
    exit();


    $conexio->close();
?>