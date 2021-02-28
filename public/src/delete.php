<?php
session_start();
$email = $_SESSION["user"];
//DB
$servidor = '127.0.0.1';
$usuari = 'root';
$contrasenya = '';
$db = 'hosting_tonigadea';
$conexio = new mysqli($servidor, $usuari, $contrasenya, $db);
$sql = "DELETE FROM users WHERE correu ='$email'";
$conexio->query($sql);
$conexio->close();

$dia = date("Y")."/".date("n")."/".date("j");
$hora = date("G").":".date("i").":".date("s");
$fp = fopen("../../log/usuaris.log","a");
fputs($fp, "Usuari donat de baixa: $email - Dia: $dia - Hora: $hora \n");
fclose($fp);

header('Location: /public/src/logout.php?');
exit();

?>