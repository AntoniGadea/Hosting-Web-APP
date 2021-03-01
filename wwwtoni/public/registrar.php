<?php
    $errorPasswd = "";
    $errorEmail = "";

    if(isset($_GET['errorPasswd'])){
    $errorPasswd = $_GET['errorPasswd'];
    }
    if(isset($_GET['errorEmail'])){
        $errorEmail = $_GET['errorEmail'];
    }
?>

 <!--Header-->
 <?php include '../templates/header.php';?>
<!--Barra superior-->
<?php include '../templates/nav.php';?>

    <!--Formulario-->
    <div class="container mt-5 pt-5">
    <form action="/public/resumen.php" method="POST">
        <div class="form-row">
            <div class="form-group col-md-6">
            <label for="inputNombre">Nombre</label>
            <input name="nombre" type="text" class="form-control" id="inputNombre" placeholder="Nombre" required>
            </div>
            <div class="form-group col-md-6">
            <label for="inputApellidos">Apellidos</label>
            <input name="apellidos" type="text" class="form-control" id="inputApellidos" placeholder="Apellidos" required>
            </div>
        </div>
        <div class="form-group">
            <label for="Email">Email</label>
            <input name="email" type="email" class="form-control" id="inputEmail" placeholder="ejemplo@dominio.com" required>
            <?php 
                echo '<span class="text-danger">'.$errorEmail.'</span>';
            ?>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6 col-sm-2">
                <label for="inputPassword">Contraseña</label>
                <input name="password1" type="password" class="form-control" id="inputPassword" placeholder="********" minlength="6" required>
            </div>
            <div class="form-group col-md-6 col-sm-2">
            <label for="inputPassword2">Confirmar Contraseña</label>
            <input name="password2" type="password" class="form-control" id="inputPassword2" placeholder="********"  minlength="6" required>
            </div>
            <?php 
                echo '<span class="text-danger">'.$errorPasswd.'</span>';
            ?>
        </div>
        <div class="form-group">
            <div class="form-group">
            <label for="inputTipo">Tipo de cuenta</label>
                <select name="tipo" id="inputTipo" class="form-control">
                    <option selected>Normal</option>
                    <option>Premium</option>
                </select>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
    </div>
    <!--Formulario-->

 <!--Footer-->
 <?php include '../templates/footer.php';?>
 <!--Final Footer-->
