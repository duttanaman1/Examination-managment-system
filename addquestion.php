<?php
include('header.php');

$total_questions = $_SESSION['total_questions'];
$exam_id = $_SESSION['exam_id'];
if ($_SESSION['count'] <= $_SESSION['total_questions']) {
    $_SESSION['count'] = $_SESSION['count'] + 1;
    $qno = $_SESSION['count'];
?>


    <form action="sqladdquestion.php" method="POST" class="row w-50">
        <input type="hidden" value="<?php echo $qno; ?>" name="question_id">
        <input type="hidden" value="<?php echo $exam_id; ?>" name="exam_id">
        <div class="col-md-4">Question <?php echo $qno; ?></div>
        <div class="col-md-7"><textarea name="question_title"></textarea></div>
        <div class="col-md-12">Options</div>
        <div class="col-md-3 mx-2"><input type="text" name="ansopt1"> </div>
        <div class="col-md-3 mx-2"><input type="text" name="ansopt2"> </div>
        <div class="col-md-3 mx-2"><input type="text" name="ansopt3"> </div>
        <div class="col-md-12">Corrrect</div>
        <div class="col-md-3 mx-2"><input type="text" name="ansopt"> </div>
        <div class="col-md-12"><input type="submit" name="submit" class="btn btn-info" value="submit"></div>
    </form>

<?php
} else
    header("location:viewteacher-exam.php")


?>




<?php
