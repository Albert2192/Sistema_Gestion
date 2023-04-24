<?php
require 'inc/funciones.php';
session_start();
if(!empty($_SESSION['session'])){
    $user = verificarLogin($_SESSION['session']);
    /* print_r('<div>'.$user->nick.'</div>') ; */
    if(!empty($user)){
        /* header( 'location:'.url().'panel.html' ); */
    }else{
        session_destroy();
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acceso al Sistema</title>
    <!-- Favicon -->
	<link rel="shortcut icon" href="images/icon/favicon.png" />
	<link rel="apple-touch-icon" href="img/apple-touch-icon.png">
    <!-- Icono de Google -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <!-- Fontawesome -->
    <link rel="stylesheet" href="vendor/fontawesome-free/css/all.min.css">
    <!-- Normalize -->
    <link rel="stylesheet" href="css/normalize.css">
    <!-- Estilos custom -->
    <link rel="stylesheet" href="css/custom.css">
</head>
<body>
    <div class="access_main_container">
        <form id="formulario">
            <div class="login_container">
                <div class="img_container">
                    <img src="images/systema/logo/logo.png" alt="logo_empresa" class="logo_empresa">
                </div>
                <div class="label_container">
                    <label for="user">Usuario</label>
                    <input type="text" id="user" autocomplete="off" autofocus>
                </div>
                <div class="label_container pass">
                    <label for="pass">Contaseña</label>
                    <input type="password" id="pass" autocomplete="off" > 
                    <i id="see_pass" class="fa fa-eye see_pass" aria-hidden="true"></i>
                </div>
                <button type="submit" class="acceder">
                    <p>Acceder</p>
                    <i class="fa fa-arrow-right" aria-hidden="true"></i>
                </button>
            </div>
        </form>
    </div>
    <footer class="footer">
        <p>Business Suite - Alberto Aquino</p>
        <p>® Copyright - 2023</p>
    </footer>
    <div class="alert">
        <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>
        <p id="alert_message">Error al acceder</p>
    </div>

    <!-- OVERLAY -->
    <div id="overlay" class="overlay">
        <div class="overlay_container">
            <i class="fa fa-spinner" aria-hidden="true"></i>
            <p>Ingresando...</p>
        </div>
    </div>
    <script src="js/plugins/jquery/jquery-3.2.1.min.js"></script>
    <script src="js/custom.js"></script>
    <script src="js/auth.js"></script>
</body>
</html>