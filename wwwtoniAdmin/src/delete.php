<?php
session_start();
include "./BDInfo.php";

$email = $_GET["id"];
$conexio = new mysqli($servidor, $usuari, $contrasenya, $db);
$sql = "DELETE FROM users WHERE correu ='$email'";
$conexio->query($sql);
$conexio->close();

$dia = date("Y")."/".date("n")."/".date("j");
$hora = date("G").":".date("i").":".date("s");
$fp = fopen("../log/admin.log","a");
fputs($fp, "Usuari donat de baixa: $email - Dia: $dia - Hora: $hora \n");
fclose($fp);

header('Location: /');
exit();

?>