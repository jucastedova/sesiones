<?php
include 'connection.php';

if(isset($_POST['email'])) {
    $email = $_POST['email'];
    $psw = md5($_POST['psw']);
    $query = "SELECT tbl_user.email, tbl_user.password  FROM tbl_user WHERE tbl_user.email='{$email}' AND tbl_user.password='{$psw}'";
    $result = mysqli_query($conn, $query);
    if(mysqli_num_rows($result) == 1) {
        // Existe el usuario y la contraseña es correcta
        $row = mysqli_fetch_array($result); // Para guardar el registro obtenido de la consulta
        // Creamos una sesión
        session_start();
        // Creamos variables de la sesión
        $_SESSION['email'] = $row['email'];
        $_SESSION['id_user'] = $row['id_user'];
        header('Location:../view/home.php');
    }else {
        header('Location:../index.php');
    }

} else {
    header('Location:../index.php');
}

?>