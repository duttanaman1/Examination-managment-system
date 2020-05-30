<?php
require('connect.php');
if ($_POST['submit'] != NULL) {
    $subject_id = $_POST['subject_id'];
    $title = $_POST['title'];
    $teacher_id = $_POST['teacher_id'];


    if (mysqli_query($con, "INSERT INTO `subject` VALUES (' $subject_id',' $title',' $teacher_id'); ")) {
        header("Location: http://localhost/internship_project2_OEMS/viewadmin-exam.php");
    } else {
        echo "Error";
    }
}
