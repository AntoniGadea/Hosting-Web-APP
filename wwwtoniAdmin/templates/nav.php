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
        <ul class="navbar-nav mx-auto">
            <li class="nav-item">
                <a class="nav-link px-4" href="/">Inicio</a>
            </li>
            <?php
            $home = "0";
            if(isset($_GET['home'])){$home = $_GET['home'];}
            if($home){
                header("Location: localhost:80");
                exit();
            }
            ?>
            <li class="nav-item">
                <a class="nav-link px-4" href="http://localhost/index.php">Pagina Hosting</a>
            </li>
            <li class="nav-item">
                <a class="nav-link px-4" href="#">Resources</a>
            </li>
            <li class="nav-item">
                <a class="nav-link px-4" href="#">FAQ</a>
            </li>
        </ul>
        <ul class="navbar-nav">
            <li class="nav-item">
                <?php
                    if(isset($_SESSION['user'])){
                        echo "<li  class='nav-item'><a class='nav-link px-4 btn btn-danger text-white' href='/src/logout.php'>LogOut</a></li>";
                    }
                ?>
                
            </li>
        </ul>
    </div>
    <!--End Links-->
</div>
</nav>