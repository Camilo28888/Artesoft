<?php 
    include("conexion.php");
    $con=conectar();

$id_compra=$_GET['id_compra'];

$sql="SELECT * FROM compras WHERE id_compra='$id_compra'";
$query=mysqli_query($con,$sql);

$row=mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <title>Actualizar</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>
    <body>
                <div class="container mt-5">
                    <form action="update.php" method="POST">
                    
                                <input type="hidden" name="id_compra" value="<?php echo $row['id_compra']  ?>">                               
                                <input type="text" class="form-control mb-3" name="Nombre" placeholder="Nombre" value="<?php echo $row['descripcion']  ?>">
                                <input type="text" class="form-control mb-3" name="Contrasena" placeholder="Contrasena" value="<?php echo $row['precio']  ?>">
                                <input type="text" class="form-control mb-3" name="Documento" placeholder="Documento" value="<?php echo $row['fecha']  ?>">
                                
                            <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
                    </form>
                    
                </div>
    </body>
</html>