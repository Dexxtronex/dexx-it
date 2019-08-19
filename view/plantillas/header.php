
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
    <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>
    <link rel="stylesheet" href="/veteri/assets/css/style.css">
    <link href="/veteri/assets/css/bootstrap-grid.css" rel="stylesheet" type="text/css" media="all" />
    <link href="/veteri/assets/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
    <script src="/veteri/assets/js/validaciones_form.js"></script>
</head>

<body>


<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="index.php">PetSalon</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
<?php               session_start(); ?>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="/veteri/index.php">Inicio <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/veteri/view/estaticas/qsomos.php">QUIENES SOMOS</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/veteri/view/estaticas/peluqueria.php">PELUQUERÍA</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/veteri/view/estaticas/veterinaria.php">VETERINARIA</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/veteri/view/estaticas/contactanos.php">CONTACTANOS</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/veteri/view/estaticas/videos.php">VIDEOS</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/veteri/view/estaticas/galeria.php">GALERÍA</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/veteri/view/estaticas/novedades.php">NOVEDADES</a>
      </li>
      <b>Hola
      <?php 
                //para verificar si una variable existe y no es nula se utiliza el metodo isset
                if(isset($_SESSION['user'])){
                     $user = $_SESSION['user'];
                     echo $user , '   ';
                     echo '<a href="/veteri/view/estaticas/validar.php?op=cerrar">Cerrar sesion</a>';
                }else{
                     echo '<li class="nav-item"> <a class="nav-link" href="/veteri/view/estaticas/login.php">Iniciar sesion</a> </li>';
                }   
      ?>
      </li>
    </ul>
    
  </div>
</nav>
</body>
</html>