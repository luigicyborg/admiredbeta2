<?php

    $con=@mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
    if(!$con){
        die("imposible conectarse: ".mysqli_error($con));
    }
    if (@mysqli_connect_errno()) {
        die("Conexión falló: ".mysqli_connect_errno()." : ". mysqli_connect_error());
    }

    $conrad=@mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME_RADIUS);
    if(!$conrad){
        die("imposible conectarse: ".mysqli_error($conrad));
    }
    if (@mysqli_connect_errno()) {
        die("Conexión falló: ".mysqli_connect_errno()." : ". mysqli_connect_error());
    }

?>
