<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    <h3>HOME</h3>
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
</body>
</html>