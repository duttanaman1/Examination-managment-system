<?php
include('header.php');

$total_questions = $_SESSION['total_questions'];
$exam_id = $_SESSION['exam_id'];
if ($_SESSION['count'] < $_SESSION['total_questions']) {
    $_SESSION['count'] = $_SESSION['count'] + 1;
    $qno = $_SESSION['count'];
?>

    <div class="container m-2">
        <form action="sqladdquestion.php" method="POST" class="row w-75">
            <input type="hidden" value="<?php echo $qno; ?>" name="question_id">
            <input type="hidden" value="<?php echo $exam_id; ?>" name="exam_id">

            <div class="col-md-12">Question <?php echo $qno; ?></div>
            <div class="col-md-7"><textarea name="question_title" style="height:300px;" class="form-control"></textarea></div>
            <hr>
            <div class="col-md-12">Options</div>
            <div class="col-md-3 mx-2">Option a. <input type="text" name="ansopt1" class="form-control"> </div>
            <div class="col-md-3 mx-2">Option b.<input type="text" name="ansopt2" class="form-control"> </div>
            <div class="col-md-3 mx-2">Option c.<input type="text" name="ansopt3" class="form-control"> </div>
            <div class="col-md-12">Corrrect</div>
            <div class="col-md-3 mx-2"><input type="text" name="ansopt" class="form-control"> </div>

            <div class="col-md-12 mt-5"><input type="submit" name="submit" class="btn btn-info" value="Add questions"></div>
        </form>
    </div>


<?php
} else
    header("location:viewteacher-exam.php")


?>




<?php
