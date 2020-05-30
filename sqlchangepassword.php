<?php
require("connect.php");
if ($_POST['submit'] != NULL) {
    $password = $_POST['password'];
    $newpassword = $_POST['newpassword'];
    if (mysqli_query($con, "UPDATE student SET password='$newpassword' WHERE password='$password' ")) {
        header("Location: http://localhost/internship_project2_OEMS/viewstudent.php");
    } else if (mysqli_query($con, "UPDATE teacher SET password='$newpassword' WHERE password='$password' ")) {
        header("Location: http://localhost/internship_project2_OEMS/viewteacher.php");
    } else  if (mysqli_query($con, "UPDATE admin SET password='$newpassword' WHERE password='$password'  ")) {
        header("Location: http://localhost/internship_project2_OEMS/viewadmin.php");
    } else {
        echo "error";
    }
}
