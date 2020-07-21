<?php
require('connect.php');
if ($_POST['submit'] != NULL) {
    $exam_id = $_POST['exam_id'];
    $std_name = $_POST['std_name'];
    $student = mysqli_fetch_assoc(mysqli_query($con, "SELECT * FROM student where email='$std_name'"));
    $std_id = $student['user_id'];
    $subject_id = $_POST['subject_id'];
    $price = $_POST['price'];
    if (mysqli_query($con, "INSERT INTO enroll VALUES(NULL,'$std_id','$subject_id','$exam_id',$price,'notpaid')")) {
        header("location: http://localhost/internship_project2_OEMS/viewstudent.php");
    } else {
        echo "ERROR";
    }
}
