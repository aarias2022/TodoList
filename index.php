<?php

include 'databaseprin.php';
#include 'guarda.php';

#$nombre=$_POST['usuario']; 


$conexion = mysqli_connect($bdhost,$bduser,$bdpass,$bdname);
#$activo = 1;

$comando = $conexion->prepare("SELECT id, tarea FROM tareas");
$comando->execute();

$resultado = $sqlgrabar->fetchAll(FETCH_ASSOC);

#$resultado = $comando->fetchAll(PDO::FETCH_ASSOC);

#$sqlgrabar = $comando->fetchAll(PDO::FETCH_ASSOC);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To Do List</title>

    <link rel="stylesheet" href="public/css/bootstrap.min.css">
    <link rel="stylesheet" href="public/css/estilos.css">
    
    <script src="public/js/bootstrap.bundle.min.js"></script>

   <!-- <script language="javascript" src ="public/js/jquery-3.6.0.min.js"></script>

    <script language="javascript">

            function filtrar(str){
                $(document).ready(function() {
                    $.get("buscar.php", {campo: str}, function(data) {
                        $("#cuerpoTabla").html(data);    
                    });           
                });  
            }
        </script> !-->
</head>

<body class="py-3">
    <main class="container contenedor">
        <div class="p-3 rounded">
            <div class="row">
                <div class="col-12">
                    <h4>Listado de Tareas 
                    <br/>
   <!-- <input type = "text" id="campo" size="35" onKeyUp="filtrar(this.value)"/> <button id="buscar" onClick="filtrar(campo.value)">Buscar</button> !-->

    <br/>
                        <a href="salir.php" class="btn btn-primary float-right">Salir</a>
                        <a href="nuevo.php" class="btn btn-primary float-left">Nuevo</a>
                    </h4>
                </div>
            </div>

            <div class="row py-3">
                <div class="col">
                    <table class="table table-border">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Tarea</th>
                                
                            </tr>
                        </thead>

                        <tbody>
                
                    <tr>
                        <td><?php echo $row["id"] ?></td>
                        <td><?php echo $row["tarea"] ?></td>
                      
                        <td>
                            <a href="editar.php?id=<?php echo $ID["id"] ?>" class="btn btn-warning">
                                Editar
                            </a>
                        </td>
                        <td>
                            <a href="eliminar.php?id=<?php echo $ID["id"] ?>" class="btn btn-danger">
                                Eliminar
                            </a>
                        </td>
                    </tr>
                <?php ?>
            </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>

</body>

</html>