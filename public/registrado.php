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

    if(isset($_GET['log'])){
        $log = $_GET['log'];
    }else{
        $log = false;
    }

    if(isset($_SESSION['user'])){
        include '../templates/datosUsuario.php';
    }

    //DB
    $servidor = '127.0.0.1';
    $usuari = '2daw06_daw';
    $contrasenya = '10261259';
    $db = 'hosting_tonigadea';
    
    if(isset($_SESSION['user'])){
        $email = $_SESSION['user'];
    }else{
        $email = "";
    }
   

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
       echo " </tr>
        </table>
        </div>
        <div class='text-center m-2 p-2'>
        <a class='btn btn-info' href=/public/modificarUsuario.php >Modificar datos</a>
        <a class='btn btn-danger' href='/public/src/delete.php?email=".$email."' >Dar de baja</a>";
       
       if($log == true){
        echo "<a class='btn btn-success' href='/public/registrado.php?log=0' >Esconder Logs</a>";
       }else{
        echo "<a class='btn btn-success' href='/public/registrado.php?log=1' >Ver Logs</a>";
       }
       
        echo "</div>
        </div>
        </div>";
      } 
      
      if($log == true){
        echo "<div class='container'><ul>";
        $fp = fopen("../log/usuaris.log","r");
        if($fp){
            while(($bufer = fgets($fp, 4096)) !== false){
                echo "<li>$bufer</li>";
            }
            echo "</ul> </div>";
        }

      

        

         
      }
    
    

    $conexio->close();
?>

<?php
if(isset($_GET['error'])){
        $error = $_GET['error'];
        echo "<h5 class='text-danger text-center'>$error</h5>";
    }

    if(isset($_GET['msg'])){
        $msg = $_GET['msg'];
        echo "<h5 class='text-success text-center ml-5'>$msg</h5>";
    }

    

    if($log){

    }
?>

 <!--Footer-->
 <?php include '../templates/footer.php';?>
 <!--Final Footer-->
