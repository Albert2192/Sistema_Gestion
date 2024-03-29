<?php
require 'inc/funciones.php';
session_start();
if(!empty($_SESSION['session'])){
    $user = verificarLogin($_SESSION['session']);
    /* print_r($user); */
    if(empty($user)){
        header( 'location:'.url().'index.php' );
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Principal</title>
        <!-- Favicon -->
	<link rel="shortcut icon" href="images/icon/favicon.png" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link rel="stylesheet" href="vendor/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/custom.css">
</head>
<body>
<div class="main_container">
        <!-- SIDEBAR INCIO -->
        <div class="sidebar">

            <div class="sidebar_head">
                <div class="sidebar_img_container">
                    <img src="./images/systema/logo/minimizado/logo.png" alt="logo">
                </div>
            </div>

            <div class="sidebar_profile">
                <div class="sidebar_profile_img">
                    <img src="./images/user.jpg" alt="photo">
                </div>
                <div class="sidebar_profile_text">
                    <p class="profile_text_first">Alberto Aquino</p>
                    <p class="profile_text_second">Asunción, Paraguay</p>
                </div>
            </div>

            <div class="sidebar_navigation">
                <nav>
                    <ul>
                        <li><a href="#" class="active"><i class="fa fa-home" aria-hidden="true"></i><span>Home</span> <span><i class="fa fa-chevron-up more" aria-hidden="true"></i></span></a></li>
                        <li><a href="#"><i class="fa fa-tachometer" aria-hidden="true"></i><span>Aplications</span></a></li>
                        <li><a href="#"><i class="fa fa-cog" aria-hidden="true"></i><span>Settings</span></a></li>
                        <li><a href="#"><i class="fa fa-paper-plane" aria-hidden="true"></i><span>Utilities</span></a></li>
                    </ul>
                </nav>
            </div>

        </div>
        <!-- SIDEBAR FINAL -->

        <div class="main">

            <div class="main_topbar">
                <div class="main_topbar_search">
                    <button class="sidebar_options"><i class="fa fa-bars" aria-hidden="true"></i></button>
                    <input class="search" type="search" placeholder="Buscar">
                </div>
                <div class="main_topbar_options">
                    <a href="#"><i class="fa fa-cog" aria-hidden="true"></i></a>
                    <a href="#"><i class="fa fa-cube" aria-hidden="true"></i></a>
                    <a href="#" id="direct_message_on" class="direct_messaje" data-count="!"><i class="fa fa-envelope" aria-hidden="true"></i></a>
                    <a href="#" class="notifications" data-count="11"><i class="fa fa-bell" aria-hidden="true"></i></a>
                    <div class="user_container"><img src="images/user.jpg" alt="perfil"></div>
                    
                    <!-- MENU PERFIL -->
                    <div id="menu_perfil" class="menu_perfil">
                        <div class="menu_perfil_header">
                            <div class="menu_perfil_img">
                                <img src="./images/user.jpg" alt="perfil_menu">
                            </div>
                            <div class="menu_perfil_text">
                                <p>Alberto Aquino</p>
                                <p>albertoaquino2192@gmail.com</p>
                            </div>
                        </div>
                        <div class="menu_perfil_body">
                            <ul>
                                <li><a href="#">Settings</a></li>
                                <li><a href="#">Profile</a></li>
                                <li><a href="#">Configuration</a></li>
                                <!-- <hr> -->
                                <li><a id="logout" href="#">Cerrar Sesión</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- MENU PERFIL -->

                </div>
            </div>

            <div class="main_containt">

            </div>

        </div>
    </div>

    <!-- MESSAGES SIDEBAR -->

    <div class="direct_message_container" id="direct_message">
        <div class="direct_message_top">
            <div class="direct_message_top_profile">
                <div class="direct_message_img">
                    <img src="images/profile.jpg" alt="message_profile">
                </div>
                <div>
                    <h5 class="direct_message_top_profile_name">Mavi González</h5>
                    <p>IT Director</p>
                </div>
            </div>
            <a href="#" id="direct_message_off"><i class="fa fa-times" aria-hidden="true"></i></a>
        </div>
        <div class="direct_message_body">
            <div class="direct_message_body_text">

                <div class="message_receibed" data-time="12:00 pm">
                    Hola amigo como estas??
                </div>
                <div class="message_send" data-time="12:00 pm">
                    Todo tranqui amiga...
                </div>
                <div class="message_receibed" data-time="12:00 pm">
                    It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.??
                </div>
                <div class="message_send" data-time="12:00 pm">
                    Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident...
                </div>
                <div class="message_receibed" data-time="12:00 pm">
                    It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.??
                </div>
                <div class="message_send" data-time="12:00 pm">
                    Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident...
                </div>
                <div class="message_receibed" data-time="12:00 pm">
                    It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.??
                </div>
                <div class="message_send" data-time="12:00 pm">
                    Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident...
                </div>

            </div>
            <div class="direct_message_body_send">
                <span></span>
                <textarea cols="30" rows="10"></textarea>
                <div class="send_options">
                    <button>Enviar</button>
                </div>
            </div>
            <div class="direct_message_body_contact">

                <div class="contact_globe_container">
                    <div class="contact_globe">
                        <img src="images/Contact/contact-1.jpg" alt="contact">
                    </div>
                    <div class="contact_globe_name">
                        <p>Josh Peter</p>
                        <span>Online</span>
                    </div>
                </div>

                <div class="contact_globe_container">
                    <div class="contact_globe">
                        <img src="images/Contact/contact-2.jpg" alt="contact">
                    </div>
                    <div class="contact_globe_name">
                        <p>Jhon Halift</p>
                        <span>Offline</span>
                    </div>
                </div>

                <div class="contact_globe_container">
                    <div class="contact_globe">
                        <img src="images/Contact/contact-3.jpg" alt="contact">
                    </div>
                    <div class="contact_globe_name">
                        <p>Rose Jackson</p>
                        <span>Offline</span>
                    </div>
                </div>

                <div class="contact_globe_container">
                    <div class="contact_globe">
                        <img src="images/Contact/contact-4.jpg" alt="contact">
                    </div>
                    <div class="contact_globe_name">
                        <p>Selina Galstrow</p>
                        <span>Offline</span>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- OVERLAY -->
    <div id="overlay" class="overlay">
        <div class="overlay_container">
            <i class="fa fa-spinner" aria-hidden="true"></i>
            <p>Cerrando session</p>
        </div>
    </div>
    
    <script src="js/plugins/jquery/jquery-3.2.1.min.js"></script>
    <script src="js/custom.js"></script>
    <script src="js/actions.js"></script>
    <script src="js/pages/dashboard.js"></script>
</body>
</html>