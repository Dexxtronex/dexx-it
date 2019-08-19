<!DOCTYPE html>
<html>

<head>
    <title>Dexx-Veteri</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="Sistema generico de Sitio Web Veterinaría-Peluquería, se encarga de disponer un sitio el cual brinde reservaciones, control de citas, control médico hacia la mascota.">
    <meta name="keywords" content="Veterinaria, Peluqueria, Mascotas, Cita Mascota, Cita Peluqueria Canina ">
    <meta name="author" content="Anthony Tejada, Michael Pérez, Jorge Peña">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="/veteri/favicon.ico">
    <!--Links de Recursos Exteriores-web-->
    <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>
    <!--Links de Recursos -->
    <link rel="stylesheet" href="/veteri/assets/css/style.css">
    <link href="/veteri/assets/css/bootstrap-grid.css" rel="stylesheet" type="text/css" media="all" />
    <link href="/veteri/assets/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
</head>
<body>
<?php
            require_once '../plantillas/header.php';
            ?>
                <main>
                <div class="container">
                    <?php
                        require_once '../secciones/quienes_somos.php'?>
                </div>
                <div class="container">
                    <?php
                        require_once '../secciones/quienes_somos_suscribete.php'?>
                </div>
                </main>         
            <?php
            require_once '../plantillas/footer.php';
            ?>


    </body>
</html>
