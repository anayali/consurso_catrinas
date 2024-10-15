<?php
    $mysqli = new mysqli('127.0.0.1','root','','diplomas2');

    if($mysqli->connect_error)
    {
       echo "Error en la conexion" . $mysqli->connect_error;
       exit;
    }
?>