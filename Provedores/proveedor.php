<?php 
    include("conexion.php");
    $con=conectar();

    $sql="SELECT *  FROM provedores";
    $query=mysqli_query($con,$sql);

    $row=mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title> Proveedores</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>
    <body>
    <th><a href="formulario.php" class="btn btn-success">Agregar</a></th> 
                        <div class="col-md-8">
                        <table class="table" >
                                <thead class="table-success table-striped" ><br>
                                    <tr>
                                        <th>Codigo</th>
                                        <th>Nombres</th>
                                        <th>Apellidos</th>
                                        <th>Celular</th>
                                        <th>Correo</th>
                                        <th>Estado</th>
                                        <th>Accion</th>
                                        <th></th>
                                    </tr>
                                </thead>

                                <tbody>
                                        <?php
                                            while($row=mysqli_fetch_array($query)){
                                        ?>
                                            <tr>
                                                <th><?php  echo $row['Id']?></th>
                                                <th><?php  echo $row['Nombres']?></th>
                                                <th><?php  echo $row['Apellidos']?></th>
                                                <th><?php  echo $row['Celular']?></th> 
                                                <th><?php  echo $row['Correo']?></th>  
                                                <th>                                               
                                                <?php 
                                                    if($row['Estado']==0) {
                                                    echo '<button type="button" class="btn btn-outline-danger">Inactivo</button>';
                                                }
                                                    else {
                                                        echo '<button type="button" class="btn btn-outline-success">Activo</button>
                                                        ';
                                                    }
                                                ?>
                                                </th>
                                                <th><a href="actualizar.php?Id=<?php echo $row['Id'] ?>" class="btn btn-info">Editar</a></th>
                                                                                      
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