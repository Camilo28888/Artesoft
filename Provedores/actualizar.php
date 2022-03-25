<?php 
    include("conexion.php");
    $con=conectar();

$Id=$_GET['Id'];

$sql="SELECT * FROM provedores WHERE Id='$Id'";
$query=mysqli_query($con,$sql);

$row=mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="../css/styles.css" rel="stylesheet">
        <title>Actualizar</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>
    <body><br>
                <div class="container mt-5">
                <br>
                    <form action="update.php" method="POST"><br>
                    
                                <input type="hidden" name="Id" value="<?php echo $row['Id']  ?>">
                                <h5>Nombres</h5>
                                <input type="text" class="form-control mb-3" name="Nombres" placeholder="Nombres" value="<?php echo $row['Nombres']  ?>" required>
                                <h5>Apellidos</h5>
                                <input type="text" class="form-control mb-3" name="Apellidos" placeholder="Apellidos" value="<?php echo $row['Apellidos']  ?>"required>
                                <h5>Celular</h5>
                                <input type="text" class="form-control mb-3" name="Celular" placeholder="Celular" value="<?php echo $row['Celular']  ?>"required>
                                <h5>Correo</h5>
                                <input type="text" class="form-control mb-3" name="Correo" placeholder="Correo" value="<?php echo $row['Correo']  ?>"required>
                                <h5>Estado</h5>
                                <select  class="form-select" name="Estado">
                                <option value="<?php echo $row['Estado'] ?>"><?php echo $row['Estado']==0 ? 'Inactivo' : 'Activo' ?></option>      
                                <option value="1">Activo</option>
                                <option value="0">Inactivo</option>  
                                </select> 

                                
                                <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
                                

                                
                            <input type="submit" class="btn btn-primary " value="Actualizar">
                            <th><a href="index.php" class="btn btn-danger">Cancelar</a></th>
                    </form>
                    
                </div>
    </body>
</html>