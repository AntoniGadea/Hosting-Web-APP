<?php
include "./src/BDInfo.php";

    $errorPasswd = "";

    if(isset($_GET['errorPasswd'])){
    $errorPasswd = $_GET['errorPasswd'];
    }
    
    if(isset($_SESSION['user'])){
        $email = $_GET['modificar'];
    }else{
        $email = "";
    }
   

    $conexio = new mysqli($servidor, $usuari, $contrasenya, $db);

    if($conexio->connect_error){
        die ("Error de connexió:".$conexio->connect_error);
    }

    $sql = "SELECT * FROM users WHERE correu ='$email'";
    $resultat = $conexio->query($sql);
    
    echo '<div class="container mt-5">
            <form action="/src/modificarUsuario.php" method="POST">';

    while($row = $resultat->fetch_assoc()) {
        echo "<div class='form-group'> <label for='nombre'>Nombre</label>";
       echo "<input class='form-control' name='nombre' type='text' value='".$row['nom']."'/>  </div>";
       echo "<div class='form-group'> <label for='apellidos'>Apellidos</label>";
       echo "<input class='form-control' name='apellidos' type='text' value='".$row['cognoms']."'/>  </div>";
       echo "<div class='form-group'> <label for='email'>Email</label>";
       echo "<input  class='form-control' name='email' type='email' value='".$email."' readonly/> </div>";
       echo "<div class='form-group'> <label for='contraseña'>Contraseña</label>";
       echo "<input class='form-control' name='password1' type='password' value=''/> ";
       echo "<input class='form-control' name='password2' type='password' value=''/>  </div>";
       echo '<span class="text-danger">'.$errorPasswd.'</span>';
       echo "<div class='form-group'> <label for='tipo'>Tipo cuenta</label>";
       echo "<select name='tipo' class='form-control' value='".$row['tipuscompte']."'>";
       echo "<option value='Normal'>Normal</option>";
       echo "<option value='Premium'>Premium</option>";
       echo "</select> </div>";
      } 
    
    echo " <div class='form-group'>
                <button type='submit' class='btn btn-primary'>Modificar</button>
                <a class='btn btn-danger' href='/' >Cancelar</a> </div>
            </form>
            </div>";

    $conexio->close();
?>

<?php
if(isset($_GET['error'])){
        $error = $_GET['error'];
        echo "<h5 class='text-danger'>$error</h5>";
    }
?>