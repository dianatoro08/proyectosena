<?php
if(!empty($_GET['tipo'])){
    $_SESSION['menu_seleccionado'] = $_GET['tipo'];    
    header("Location: formularioRe.php");
}

?>