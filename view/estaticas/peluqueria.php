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
 
    <body>
            <?php
            require_once  '../plantillas/header.php';
            ?>
            <?php
            if(isset($_SESSION['user'])){
                $user = $_SESSION['user'];
                if($user == "peluquero" || $user == "admin"){
                    echo '
                <div class="row justify-content-md-center justify-content-xl-center justify-content-lg-center ">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 round border">
                <table class="table table-warning">
                <thead>
                   LISTADO DE CITA PELUQUERIA
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Cedula</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Fecha</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td>0923145678</td>
                    <td>MICHAEL PEREZ</td>
                    <td>2019/05/21</td>
                  </tr>
                  <tr style="background:#fff;">
                    <th scope="row">2</th>
                    <td>0923546874</td>
                    <td>MICHAEL PEREZ</td>
                    <td>2019/05/10</td>
                  </tr>
                  <tr>
                    <th scope="row">3</th>
                    <td>1025478954</td>
                    <td>MICHAEL PEREZ</td>
                    <td>2019/05/12</td>
                  </tr>
                  <tr style="background:#fff;">
                    <th scope="row">4</th>
                    <td>0923546874</td>
                    <td>MICHAEL PEREZ</td>
                    <td>2019/05/11</td>
                  </tr>
                </tbody>
              </table>
              </div>
              </div>';
                }
           }else{
                echo '  <div class="container">
                <?php
                    require_once  "../secciones/informacion_general.php"
                ?>
            </div>
            <div class="container-fluid">
                <?php
                    require_once  "../secciones/servicios.php"
                ?>
            </div>
        </main>

            <div class="container-fluid-black">
                <?php
                    require_once  "../secciones/caracteristicas.php"
                ?>
            </div>
            <div class="container-fluid">
                <?php
                    require_once  "../secciones/articulos_mascotas.php"
                ?>
            </div>';
           }   
       ?>
                <main>
                <div class="container">
                    <?php
                        require_once  '../secciones/peluqueria_imagenes.php'?>
                </div>
                <div class="container">
                    <?php
                        require_once  '../secciones/mensajeria_peluqueria.php'?>
                </div>
                </main>         
            <?php
            require_once  '../plantillas/footer.php';
            ?>
    </body>
</html>
