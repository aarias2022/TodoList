<?php
    $bdhost= "localhost";
    $bduser= "root";
    $bdpass= "";
    $bdname= "todolist";

    $conexion = mysqli_connect($bdhost,$bduser,$bdpass,$bdname);

    if(!$conexion)
    {
        die("No hay conexion:" .mysqli_connect_error());
    }
?>