<?php 
    include("conexion.php");
    $con=conectar();

    $sql="SELECT *  FROM factura";
    $query=mysqli_query($con,$sql);

    $row=mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title> PAGINA ALUMNO</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>
    <body>
    <th><a href="formulario.php" class="btn btn-success">Agregar</a></th> 
                        <div class="col-md-8">
                        <table class="table" >
                                <thead class="table-success table-striped" >
                                    <tr>
                                        <th>Codigo</th>
                                        <th>Fecha</th>
                                        <th>Valor</th>
                                  

                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>

                                <tbody>
                                        <?php
                                            while($row=mysqli_fetch_array($query)){
                                        ?>
                                            <tr>
                                                <th><?php  echo $row['Id_factura']?></th>
                                                <th><?php  echo $row['Fecha']?></th>
                                                <th><?php  echo $row['Valor']?></th>
                                               

                                                <th><a href="actualizar.php?Id=<?php echo $row['Id_factura'] ?>" class="btn btn-info">Editar</a></th>
                                                <th><a href="delete.php?Id=<?php echo $row['Id_factura'] ?>" class="btn btn-danger">Eliminar</a></th>                                        
                                            </tr>
                                        <?php 
                                            }
                               
?>
                                        
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
    </body>
</html>