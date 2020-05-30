<?php
require('connect.php');
if ($_POST['submit'] != NULL) {
    $exam_id = $_POST['exam_id'];
    $duration = $_POST['duration'];
    $datetime = $_POST['datetime'];
    $price = $_POST['price'];
    echo $exam_id;

    if (mysqli_query($con, "UPDATE exam SET duration=$duration, datetime='$datetime', price=$price WHERE exam_id='$exam_id'  ")) {
        header("Location: http://localhost/internship_project2_OEMS/viewadmin-exam.php");
    } else {
        echo "Error";
    }
}
