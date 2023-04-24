<?php
session_start();
require '../funciones.php';
$db         = DataBase::conectar();
$usuario    = $db->clearText($_POST['usuario']);
$password   = Password::hash($db->clearText($_POST['pass']));

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
                `rol_user_id`, 
                `password`, 
                `status`, 
                `last_login` 
                `token` 
                FROM 
                `users` 
                WHERE `nick` = '$usuario' 
                AND `password` = '$password'
                AND `status` = 1;";
$db->setQuery($query);
$user = $db->loadObject();

if(!empty($user)){
    /* $_SESSION['sesion'] = Password::hash($user->user_id); */
    $id_persona = $user->user_id;
    $hora       = date('YmdHis');
    $token      = Password::hash($id_persona . $hora);

    $db->setQuery("UPDATE `users` SET `last_login` = NOW(), `token` = '$token' WHERE `user_id` = $id_persona;");
    if ($db->alter()) {
        $_SESSION['session'] = $token;
        echo json_encode(["status" => "ok", "mensaje" => "Acceso Exitoso, redirigiendo...", "token" => $token]);
        exit;
    }else{
        echo json_encode(['status'=>'error', 'mensaje'=>'Error al ingresar.']);
    }
    /* header( 'location:'.url().'panel.html'); */
}else{
    session_destroy();
    /* $_SESSION['sesion'] = ''; */
    echo json_encode(['status'=>'error', 'mensaje'=>'Credenciales Incorrectas']);
}
