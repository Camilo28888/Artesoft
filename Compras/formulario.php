
                        <!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title></title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body>
        <div class="d-flex" id="wrapper">
            <!-- Sidebar-->
            <div class="border-end bg-white" id="sidebar-wrapper">
                <div class="sidebar-heading border-bottom bg-light">Artesoft</div>
                <div class="list-group list-group-flush">
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="#!">Inicio</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="../Usuarios/index.php">Usuarios</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="../Compras/index.php">Compras</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="../Insumos/index.php">Insumos</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="../Provedores/index.php">Proveedores</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="../Clientes/index.php">Clientes</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="../Productos/index.php">Productos</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="../Login/index.html">Cerrar sesion</a>
                </div>
            </div>
            <!-- Page content wrapper-->
            <div id="page-content-wrapper">
                <!-- Top navigation-->
                <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
                    <div class="container-fluid">
                        <button class="btn btn-primary" id="sidebarToggle">Corrrer</button>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav ms-auto mt-2 mt-lg-0">
                                <li class="nav-item active"><a class="nav-link" href="#!">Inicio</a></li>
                                <li class="nav-item"><a class="nav-link" href="#!">Link</a></li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>
                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="#!">Accion</a>
                                        <a class="dropdown-item" href="#!">Otra accion</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#!">Otros</a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
                <!-- Page content-->
                <div class="container mt-5">
                    <div class="row">
                        <div class="col-md-3">
                            <h1>Ingrese Datos</h1>
                            <form action="insertar_usuario.php" method="POST">

                                  
                                    <input type="text" class="form-control mb-3" name="Descripcion" placeholder="Descripcion" required>
                                    <input type="text" class="form-control mb-3" name="precio" placeholder="precio" required>
                                    <input type="date" class="form-control mb-3" name="fecha" step="2" value="<?php echo $row['fecha']  ?>">
                                  
                                    
                                    <input type="submit" class="btn btn-primary">
                                </form>
                        </div>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
