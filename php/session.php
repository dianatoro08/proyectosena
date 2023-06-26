<?php
session_start();

// Verifica si el usuario ha iniciado sesión
if (!isset($_SESSION["nombresUsuario"])) {
  // Si no ha iniciado sesión, redirecciona al usuario al formulario de inicio de sesión
  header("Location: formLogin.php");
  exit();
}

// Si el usuario ha iniciado sesión, muestra el panel de control
?>