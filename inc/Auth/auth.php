<?php
require '../funciones.php';
session_start();
$_SESSION['sesion'] = 'sdfsdf';

$db         = DataBase::conectar();
$usuario    = $db->clearText($_POST['usuario']);
$password   = $db->clearText($_POST['pass']);

if(empty($usuario)){
    echo json_encode(['status' => 'error', 'mensaje' => 'Ingrese un usuario']);
    exit;
}
if(empty($password)){
    echo json_encode(['status' => 'error', 'mensaje' => 'Ingrese una contraseña']);
    exit;
}

$query = "SELECT `user_id`, 
                `user_name`, 
                `nick`, 
                `password`, 
                `status`, 
                `last_login` 
                FROM 
                `users` 
                WHERE `nick` = '$usuario' 
                AND `password` = '$password'
                AND `status` = 1;";
$db->setQuery($query);
$user = $db->loadObject();

if(!empty($user)){
    $_SESSION['sesion'] = $user->user_id;
    echo json_encode(['status'=>'ok', 'mensaje'=>'Ingresando...']);
    /* header( 'location:'.url().'panel.html'); */
}else{
    session_destroy();
    /* $_SESSION['sesion'] = ''; */
    echo json_encode(['status'=>'error', 'mensaje'=>'Credenciales Incorrectas']);
}
