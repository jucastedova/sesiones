<?php
// Continuamos con la sesión creada en el login.proc.php
session_start();
if(!isset($_SESSION['email'])) {
    // Si no está definida (no estás logueado), entonces te manda de nuevo al form
    header('Location:../index.php');
}
echo '<h1>Bienvenid@ '.$_SESSION['email'].'</h1>';
echo '<a href="../services/logout.proc.php">Cerrar sesión</a>';
?>