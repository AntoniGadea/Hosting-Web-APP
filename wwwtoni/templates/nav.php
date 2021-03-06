<?php session_start() ?>
<nav class="navbar navbar-expand-lg navbar-light bg-white" style="font-size: 1.5em">
<div class="container-fluid mx-5 px-5 pt-1">
    <!--Logo-->
    <a class="navbar-brand" href="/index.php">
        <img src="/public/img/logo.png" width="165" height="84" class="d-inline-block align-top" alt="logo">
    </a>
    <!--End Logo-->

    <!--Links-->
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mx-auto d-flex align-items-center">
            <li class="nav-item">
                <a class="nav-link px-4" href="/index.php">Inicio</a>
            </li>
            <li class="nav-item">
                <a class="nav-link px-4" href="http://localhost:5000">Administrador</a>
            </li>
            <li class="nav-item">
                <a class="nav-link px-4" href="#">Resources</a>
            </li>
            <li class="nav-item">
                <a class="nav-link px-4" href="#">FAQ</a>
            </li>
            <?php
            if(isset($_SESSION['user'])){echo "<li  class='nav-item'><a class='nav-link px-4 my-2 mx-5 btn btn-danger text-white' href='/public/src/logout.php'>LogOut</a></li>";}
           
            ?>

        </ul>
        <ul class="navbar-nav d-flex align-items-center">
            <?php
        if(isset($_SESSION['user'])){echo '<li class="nav-item">
                <img class="rounded-circle mx-5" style="width: 90px;" src="/imgPerfil/default.jpg">
            </li>';}
            ?>
            <li class="nav-item">
                <a href="/public/registrado.php" class="btn btn-rounded btn-azul text-white">
                <?php
                    if(isset($_SESSION['user'])){
                        echo "Ver perfil";
                         
                    }else{
                        echo "Iniciar sesión";
                    }
                ?>
                </a>
            </li>
        </ul>
    </div>
    <!--End Links-->
</div>
</nav>