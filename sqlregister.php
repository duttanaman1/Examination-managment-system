<?php
require('connect.php');
if ($_POST['submit'] != NULL) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $username = $_POST['username'];
    $gender = $_POST['gender'];
    $address = $_POST['address'];
    $mob = $_POST['mob'];
    if (mysqli_query($con, "INSERT INTO student VALUES ('$username',' $password',' $email',' $gender',' $address',' $mob',NULL); ")) {
        header("Location: http://localhost/internship_project2_OEMS/viewstudent.php");
    } else {
        echo "Error";
    }
}
