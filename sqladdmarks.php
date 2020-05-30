<?php
require('connect.php');
if ($_POST['submit'] != null) {
    $student_id = $_POST['student_id'];
    $exam_id = $_POST['exam_id'];
    $count = $_POST['count'];
    $marks = 0;
    for ($i = 1; $i <= $count; $i++) {
        $ans = "a" . $i;
        $answer = $_POST[$ans];
        if (mysqli_num_rows(mysqli_query($con, "SELECT * FROM question WHERE ansopt='$answer'")) > 0) {
            $marks = $marks + 1;
        }
    }
    if (mysqli_query($con, "SELECT * FROM question WHERE ansopt='$answer'")) {
        mysqli_query($con, "DELETE FROM enroll WHERE exam_id = $exam_id AND student_id=$student_id");
        mysqli_query($con, "INSERT INTO score VALUES (null,$exam_id, $student_id, $marks)");
        header("location:viewstudent.php");
    } else {
        echo "ERROR";
    }
}
