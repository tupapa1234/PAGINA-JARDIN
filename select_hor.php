<?php
    include ('conex.php');
    
    $query = "SELECT `id`,`sala`, `turno`, `maestra`, `imagen` FROM `horarios` WHERE 1";
    $res = mysqli_query($conexion,$query);

?>