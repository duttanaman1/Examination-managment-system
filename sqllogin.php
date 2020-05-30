<?php
require('connect.php');
session_start();
if ($_POST['user_login'] != NULL) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $_SESSION['username'] = $email;
    echo $email;
    echo $password;

    echo mysqli_num_rows(mysqli_query($con, "SELECT * FROM student WHERE email='$email' AND password = '$password' "));
    if (mysqli_num_rows(mysqli_query($con, "SELECT * FROM student WHERE email='$email' AND password = '$password' ")) > 0) {

        header("Location: http://localhost/internship_project2_OEMS/viewstudent.php");
    } else if (mysqli_num_rows(mysqli_query($con, "SELECT * FROM teacher WHERE email='$email' AND password = '$password' ")) > 0) {

        header("Location: http://localhost/internship_project2_OEMS/viewteacher.php");
    } else if (mysqli_num_rows(mysqli_query($con, "SELECT * FROM admin_tbl WHERE email='$email' AND password = '$password' ")) > 0) {

        header("Location: http://localhost/internship_project2_OEMS/viewadmin.php");
    } else if ($email == "superadmin" && $password == "superadmin") {
        header("Location: http://localhost/internship_project2_OEMS/viewsuperadmin.php");
    } else {
        echo "Error";
    }
}
