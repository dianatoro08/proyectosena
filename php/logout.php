<?php
session_start();

// Destruye la sesión actual y redirecciona al usuario al formulario de inicio de sesión
session_destroy();
header("Location: formLogin.php");
exit();
?>