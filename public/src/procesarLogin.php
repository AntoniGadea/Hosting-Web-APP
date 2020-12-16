<?php
session_start();

if(isset($_POST['email'])){
    $email = $_POST['email'];
    }
if(isset($_POST['password'])){
    $password = $_POST['password'];
}

$servidor = '127.0.0.1';
$usuari = 'root';
$contrasenya = '';
$db = 'hosting_tonigadea';

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
            $_SESSION['user'] = $email;
            header('Location: /index.php');
            exit();
        }
      }  
}
    header('Location: /public/registrado.php?error=Email o contraseña no valida');
    exit();


$conexio->close();
?>