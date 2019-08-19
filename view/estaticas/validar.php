<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php

        function logout(){
            session_destroy();
            header('Location:/veteri/index.php');
        }
        function login(){
            $user = $_POST['user'];
            $pass = $_POST['password'];
            if($user == "admin" && $pass == "123"){
                $_SESSION['user']=$user;
                /*ADMINISTRADOR */
                $_SESSION['rol']=1;
               header("Location:/veteri/index.php");
            }else if($user == "peluquero" && $pass == "123"){
                $_SESSION['user']=$user;
                /*SESION DE PELUQUERO */
                $_SESSION['rol']=2;
               header("Location:/veteri/index.php");
            }else if($user == "veterinario" && $pass == "123"){
                $_SESSION['user']=$user;
                /*SESION DE VETERINARIA */
                $_SESSION['rol']=3;
               header("Location:/veteri/index.php");
            }else{
                $_SESSION['user']='INVITADO';
                $_SESSION['mensaje']="Datos incorrectos";
               header("Location:/veteri/login.php");
            }
        }
        session_start();
        if(isset($_GET['op']) && $_GET['op']=='cerrar'){
            //unset($_SESSION['user']);//eliminar una variable de la sesión
            //session_unset();//elimina todas las variables que están en la sesión
            logout();
        }
        if(isset($_GET['op']) && $_GET['op']=='login'){
            login();
        }
        ?>
  </body>
</html>


