<?php
include ("databaseprin.php");

$nombre=$_POST['usuario'];
$contraseña=$_POST['contraseña'];

//login
if(isset($_POST["btningresar"]))
{
$query = mysqli_query($conexion,"SELECT*FROM usuarios where usuario='$nombre' and contraseña='$contraseña'");
$nr = mysqli_num_rows($query);

if($nr==1)
{
  echo "<script> alert('Bienvenido $nombre'); window.location='index.php' </script>"; 
  #header("location:index.php");
}else{
  
  echo "<script> alert('Usuario no existe'); window.location='index.html' </script>";
  #include("index.html");


}
}

//registrar
if(isset($_POST["btnregistrar"]))
{
  $sqlgrabar = "INSERT INTO usuarios(usuario,contraseña) values ('$nombre','$contraseña')";

  if(mysqli_query($conexion,$sqlgrabar))
  {
    echo "<script> alert('Usuario registrado con exito: $nombre'); window.location='index.html' </script>";
  }else{
    
      echo "Error: ".$sql."<br>" .mysql_error($conexion);
  }
}

?>