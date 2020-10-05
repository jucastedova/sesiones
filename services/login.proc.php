<?php
include 'connection.php';

if(isset($_POST['email'])) {
    $email = $_POST['email'];
    $psw = md5($_POST['psw']);
    $query = "SELECT tbl_user.email, tbl_user.password FROM tbl_user WHERE tbl_user.email='{$email}' AND tbl_user.password='{$psw}'";
    $result = mysqli_query($conn, $query);

    // while ($row = mysqli_fetch_array($result)) {
        
    // }


} else {
    header('Location:../index.php');
}

?>