<!--Header-->
 <?php include '../templates/header.php';?>
<!--Barra superior-->
<?php include '../templates/nav.php';?>
<!--Login-->
<?php
    if(!isset($_SESSION['user'])){
        include '../templates/login.php';
    }
?>

<!--Datos Usuario-->
<?php
    if(isset($_SESSION['user'])){
        include '../templates/datosUsuario.php';
    }

    //DB
    $servidor = '127.0.0.1';
    $usuari = 'root';
    $contrasenya = '';
    $db = 'hosting_tonigadea';

    $email = $_SESSION['user'];

    $conexio = new mysqli($servidor, $usuari, $contrasenya, $db);

    if($conexio->connect_error){
        die ("Error de connexió:".$conexio->connect_error);
    }

    $sql = "SELECT * FROM users WHERE correu ='$email'";
    $resultat = $conexio->query($sql);

    while($row = $resultat->fetch_assoc()) {
       echo "<td>".$row['nom']."</td>";
       echo "<td>".$row['cognoms']."</td>";
       echo "<td>".$email."</td>";
       echo "<td>".$row['tipuscompte']."</td>";
      } 
    
    echo " </tr>
        </table>
        </div>
        </div>";

    $conexio->close();
?>

<?php
if(isset($_GET['error'])){
        $error = $_GET['error'];
        echo "<h5 class='text-danger'>$error</h5>";
    }
?>

 <!--Footer-->
 <?php include '../templates/footer.php';?>
 <!--Final Footer-->
