<?php
require('connect.php');
if ($_POST['submit'] != NULL) {
    $teacher_id = $_POST['teacher_id'];
    $teacher_name = $_POST['teacher_name'];
    $sub_id = $_POST['sub_id'];
    $sub_name = $_POST['sub_name'];
    $description = $_POST['description'];

    if (mysqli_query($con, "INSERT INTO announcement VALUES (NULL,' $teacher_id',' $teacher_name',' $sub_name',' $sub_id',' $description'); ")) {
        header("Location: http://localhost/internship_project2_OEMS/viewadmin.php");
    } else {
        echo "Error";
    }
}
