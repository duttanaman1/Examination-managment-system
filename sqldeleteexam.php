<?php
require('connect.php');
if ($_POST['submit'] != null) {
    $price = $_POST['price'];
    $exam_id = $_POST['exam_id'];

    if (mysqli_query($con, "DELETE FROM exam WHERE exam_id = $exam_id AND price='$price'")) {
        mysqli_query($con, "DELETE FROM question WHERE exam_id = $exam_id ");
        header("location:http://localhost/internship_project2_OEMS/viewadmin-exam.php");
    } else {
        echo "ERROR";
    }
}
