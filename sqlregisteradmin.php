<?php
require('connect.php');
session_start();
if ($_POST['submit'] != NULL) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    if (mysqli_query($con, "INSERT INTO admin_tbl VALUES (NULL,'$email','$password'); ")) {
        header("Location: http://localhost/internship_project2_OEMS/viewsuperadmin.php");
    } else {
        echo "Error";
    }
}
