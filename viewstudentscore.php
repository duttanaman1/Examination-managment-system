<?php
include('header.php');
if ($_SESSION['username'] != "") {
    $usr = $_SESSION['username'];
?>
    <nav class="navbar navbar-expand-sm bg-info navbar-dark ">

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav">

                <li class="nav-item">
                    <a class="nav-link" href="viewstudent.php">HOME</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="viewstudent-exam.php">Exam</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="viewstudentscore.php">Student exam Record</a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="container row my-5">
        <h2>Your Score</h2>
        <table class="table table-hover table-bordered table-responsive-md">
            <thead>
                <tr>
                    <th scope="col">Score ID</th>
                    <th scope="col">Exam ID</th>
                    <th scope="col">marks</th>

                </tr>
            </thead>
            <tbody>
                <?php
                require('connect.php');
                $student = mysqli_fetch_assoc(mysqli_query($con, "SELECT * FROM student WHERE email='$usr'"));
                $std = $student['user_id'];
                $result = mysqli_query($con, "SELECT * FROM score WHERE student_id='$std'");
                while ($row = mysqli_fetch_assoc($result)) {
                    $score_id = $row['score_id'];
                    $exam_id = $row['exam_id'];
                    $marks = $row['marks']; ?>
                    <tr>
                        <th scope="row"><?php echo $score_id; ?></th>
                        <td><?php echo $exam_id; ?></td>
                        <td><?php echo $marks; ?></td>
                    </tr>
                <?php
                } ?>


            </tbody>
        </table>
    </div>

<?php }
?>