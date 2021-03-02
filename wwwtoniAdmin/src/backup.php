<?php

include "..\model\Usuari.php";

$servidor = '127.0.0.1';
$usuari = '2daw06_daw';
$contrasenya = '10261259';
$db = 'hosting_tonigadea';

$conexio = new mysqli($servidor, $usuari, $contrasenya, $db);

if($conexio->connect_error){
    die ("Error de connexió:".$conexio->connect_error);
}

$sql = "SELECT * FROM users";
$resultat = $conexio->query($sql);
$usuaris = [];

while($row = $resultat->fetch_assoc()) {
    
    $id = $row['idusuari'];
    $nom = $row['nom'];
    $cognom = $row['cognoms'];
    $correu = $row['correu'];
    $tipus = $row['tipuscompte'];
    $fecha = $row['fecha'];

    $usu = new Usuari();
    $usu->set_id($id);
    $usu->set_nom($nom);
    $usu->set_cognom($cognom);
    $usu->set_email($correu);
    $usu->set_tipo($tipus);
    $usu->set_fecha($fecha);
   
    array_push($usuaris, $usu) ;
  } 

$dia = date('jnY').date('_His');
$archivo = fopen("../backup/backup_$dia.txt", "w");

$fp = fopen($archivo,"w") ;

foreach($usuaris as $usuario){
    $text = $usuario->get_id()."::".$usuario->get_nom()."::".$usuario->get_cognom()."::".$usuario->get_email()."::".$usuario->get_tipo()."::".$usuario->get_fecha()."::\n";
    fwrite($archivo, $text);
}

fclose($archivo);

header('Location: /admin.php?backup=true');
exit();

?>