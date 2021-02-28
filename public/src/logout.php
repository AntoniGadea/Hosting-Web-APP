<?php 
session_start();

$email = $_SESSION["user"];
$dia = date("Y")."/".date("n")."/".date("j");
$hora = date("G").":".date("i").":".date("s");
$fp = fopen("../../log/usuaris.log","a");
fputs($fp, "Usuari es desconecta del sistema: $email - Dia: $dia - Hora: $hora \n");
fclose($fp);


session_destroy();

header("Location: /index.php ");

?>