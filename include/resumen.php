<!doctype html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Hosting</title>
  </head>
  <body>
    
    <!--Barra superior-->
    <nav class="navbar navbar-dark bg-dark fixed-top">
    <span class="navbar-brand mb-0 h1 text-white">Hosting de Toni</span>
    <div class="navbar-nav">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="../index.php">Inicio<span class="sr-only">(current)</span></a>                </li>
        </ul>
    </div>
    </nav>
    <!-- Barra superior -->

    <!--Resumen-->
    <div class="container mt-5 pt-5">
    <?php
    $nombre = $_POST['nombre'];
    $apellidos = $_POST['apellidos'];
    $email = $_POST['email'];
    $password1 = $_POST['password1'];
    $password2 = $_POST['password2'];
    $tipo = $_POST['tipo'];
    ?>
    </div>

    <h1 class="display-2 text-center">Datos Formulario</h1>

    <hr>

    <div class="container">
        <ul class="list-group">
            <li class="list-group-item"><?php echo $nombre ?></li>
            <li class="list-group-item"><?php echo $apellidos ?></li>
            <li class="list-group-item"><?php echo $email ?></li>
            <li class="list-group-item"><?php echo $password1 ?></li>
            <li class="list-group-item"><?php echo $password2 ?></li>
            <li class="list-group-item"><?php echo $tipo ?></li>
        </ul>
    </div>
    
    <!--Resumen-->

    <hr>
    <div class="container text-center">
        <a class="btn btn-info btn-lg mt-5" href="../index.php">Inicio</a>
    </div>
    <!-- Footer -->
    <footer class="footer bg-dark fixed-bottom">
      <div class="container text-white font-small">
        <div class="container-fluid py-3">
          <h5>2n DAW IES Lluis Simarro</h5>
        </div>
      </div>
    </footer>
    <!--Footer-->

      

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>