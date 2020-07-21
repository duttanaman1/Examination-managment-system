<?php
require('connect.php');
if ($_POST['submit'] != null) {

    $question_id = $_POST['question_id'];
    $exam_id = $_POST['exam_id'];
    $question_title = $_POST['question_title'];

    $ansopt1 = $_POST['ansopt1'];
    $ansopt2 = $_POST['ansopt2'];
    $ansopt3 = $_POST['ansopt3'];
    $ansopt = $_POST['ansopt'];
    echo "1- ";
    echo  $question_id . "- ";
    echo  $exam_id . "- ";
    echo  $question_title . "- ";
    echo  $ansopt1 . "- ";
    echo  $ansopt2 . "- ";
    echo  $ansopt3 . "- ";
    echo  $ansopt . "- ";

    if (mysqli_query($con, "INSERT INTO question VALUES(null , $exam_id , '$question_title' , '$ansopt1' , '$ansopt2' , '$ansopt3' , '$ansopt')")) {
        echo "12";
        header("location:http://localhost/internship_project2_OEMS/addquestion.php");
    } else {
        echo "  ERROR";
    }
    //header("location:http://localhost/internship_project2_OEMS/addquestion.php");
}
