<?php
include('header.php');
require('connect.php');
if ($_POST['submit'] != null) {

    $exam_id = $_POST['exam_id'];

    $teacher_id = $_POST['teacher_id'];


    $title = $_POST['title'];

    $subject_id = $_POST['subject_id'];

    $duration = $_POST['duration'];


    $datetime = $_POST['datetime'];


    $exam_cretated_on = $_POST['exam_cretated_on'];

    $total_questions = $_POST['total_questions'];

    $price = $_POST['price'];
    $str = "INSERT INTO exam (`exam_id`, `teacher_id`, `title`, `subject_id`, `duration`, `datetime`, `exam_created_on`, `exam_status`, `total_questions`, `price`) 
    VALUES ('$exam_id', '$teacher_id',' $title', '$subject_id',' $duration',' $datetime',' $exam_cretated_on',NULL,' $total_questions', '$price'); ";


    $sql = mysqli_query($con, $str);
    if ($sql) {
?>
        <h2> Exam Recorded sucessfully</h2>
        <form action="addquestion.php" method="POST">
            <?php
            $_SESSION['exam_id'] = $exam_id;
            $_SESSION['total_questions'] = $total_questions;
            $_SESSION['count'] = 0;

            ?>
            <input type="submit" name="submit" class="btn btn-primary" value="add questions">
        </form>
<?php
    } else {
        echo "ERROR";
    }
}
