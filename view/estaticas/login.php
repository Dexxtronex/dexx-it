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
 
<div class="container">
        <div class="row justify-content-md-center justify-content-xl-center justify-content-lg-center  border  rounded">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 ">
                <h4>¿Desea volver a la página?, esta es la forma.</h4>
                <a href="/veteri/index.php?op=1&a=guardar">Ingresar SIN CUENTA </a><br><br>

            </div>
            <div class="col-12 col-sm-12 col-md-6-center col-lg-6 col-xl-6">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                  <img class="img-fluid" src="/veteri/assets/img/logo.png" alt="logo petsalon" >
            </div>
                <form action="/veteri/view/estaticas/validar.php?op=login" onsubmit="" method="POST" name="formLogin">
                <?php 
                 session_start();
            
                if(isset($_SESSION['mensaje'])){
                    echo '<span style="color:red">'.$_SESSION['mensaje'].'</span><br>';
                    // unset($_SESSION['mensaje']);
                }
                 ?>
                    <div class="form-group">
                    <label >Usuario:</label>
                    <input type="text" class="form-control" name="user" placeholder="Ingresar Usuario" />
                    <small class="form-text text-muted">Ingrese un usuario ya registrado.</small>
                    </div>
                    <div class="form-group">
                        <label >Password:</label>
                        <input type="password" name="password" class="form-control" placeholder="Ingrese contraseña ">
                    </div>
                    <button type="submit" name="enviar" class="btn btn-success btn-block">INICIAR SESIÓN</button>
                </form>

            </div>
        </div>
    </div>
   
    </body>