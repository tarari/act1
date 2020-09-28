<?php
    //iniciar sesion y mantener sesion
    session_start();
    // quitar valor a variables session
    session_unset();
    // se destruye variable de sesion y coookie
    session_destroy();
    //redirige a index.php
    header('Location:index.php');

