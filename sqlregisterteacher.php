<?php
require('connect.php');
session_start();
if ($_POST['submit'] != NULL) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $admin_name = $_POST['admin'];

    $row = mysqli_fetch_assoc(mysqli_query($con, "SELECT * FROM admin_tbl WHERE email='$admin_name' "));
    $admin_id = $row['admin_id'];

    if (mysqli_query($con, "INSERT INTO teacher VALUES (NULL,'$email','$password','$admin_id'); ")) {
        header("Location: http://localhost/internship_project2_OEMS/viewadmin.php");
    } else {
        echo "Error";
    }
}
