<?php

include 'databaseprin.php';

$tarea=$_POST['tarea'];

if(isset($_POST["tarea"]))
{
  $sqlgrabar = "INSERT INTO tareas(tarea) values ('$tarea')";

  if(mysqli_query($conexion,$sqlgrabar))
  {
    echo "<script> alert('Tarea grabada con exito:'); window.location='index.php' </script>";
  }else{
    
      echo "Error: ".$sql."<br>" .mysql_error($conexion);
  }
  
}

?>