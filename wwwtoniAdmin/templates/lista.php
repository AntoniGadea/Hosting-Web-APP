<?php 
include "./src/getUsuaris.php";
$log = false;

if(isset($_GET['log'])){
   $log = $_GET['log'];
}

echo "<div class='container'><table class='table m-5'>
        <thead class='thead-dark'>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Apellidos</th>
                <th>Correu Electronico</th>
                <th>Tipo Cuenta</th>
                <th>Fecha Creación</th>
                <th>Acción</th>
            </tr>
        </thead>
        <tbody>";

        foreach($usuaris as $usuario){
            echo " <tr><td>".$usuario->get_id()."</td>";
            echo "<td>".$usuario->get_nom()."</td>";
            echo "<td>".$usuario->get_cognom()."</td>";
            echo "<td>".$usuario->get_email()."</td>";
            echo "<td>".$usuario->get_tipo()."</td>";
            echo "<td>".$usuario->get_fecha()."</td>";
if($usuario->get_id() > 0) echo "<td><a class='btn btn-danger' href='../src/delete.php?id=".$usuario->get_email()."'>Eliminar</a><a  class='btn btn-info' href='admin.php?modificar=".$usuario->get_email()."'>Modificar</a></td></tr>";
        }
    echo "
        <tr>
            <td colspan='7'>
            <a class='btn btn-success' href='/?add=1'>Añadir usuario</a>
            <a class='btn btn-secondary' href='#'>Backup</a>
            ";
           if($log){echo "<a class='btn btn-dark' href='/?log=0'>Log</a>";}else{ echo "<a class='btn btn-dark' href='/?log=1'>Log</a>";} 
            echo "</td>
        </tr>
    </tbody>
    </table></div>";
        
    if($log){
        echo "<div class='container'><ul>";
        $fp = fopen("./log/admin.log","r");
        if($fp){
            while(($bufer = fgets($fp, 4096)) !== false){
                echo "<li>$bufer</li>";
            }
            echo "</ul> </div>";
        }
    }
?>