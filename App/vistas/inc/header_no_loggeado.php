<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo RUTA_URL ?>/css/estilos.css">
    <title>
        <?php echo NOMBRE_SITIO ?>
    </title>
</head>

<body>
    <script src="<?php echo RUTA_URL?>/js/main.js"></script>
    <header>
        <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
            <div class="container-fluid">
                <a href="<?php echo RUTA_URL ?>" class="navbar-brand">
                    <?php echo NOMBRE_SITIO ?>
                </a>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="navbar-nav me-auto mb-2 mb-md-0">
                        <a class="nav-link" aria-current="page" href="<?php echo RUTA_URL ?>/usuarios">Usuarios</a>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <br><br><br>