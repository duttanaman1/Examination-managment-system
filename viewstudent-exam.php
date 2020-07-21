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
    <div class="container row">
        <div class="col-sm-12 col-md-7 my-5">
            <table class="table table-hover table-bordered table-responsive-md">
                <thead>
                    <tr>
                        <th scope="col">Enroll ID</th>
                        <th scope="col">Student ID</th>
                        <th scope="col">Subject ID</th>
                        <th scope="col">Exam ID</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    require('connect.php');
                    $row = mysqli_fetch_assoc(mysqli_query($con, "SELECT * FROM student where email = '$usr'"));
                    $std_id = $row['user_id'];
                    $result = mysqli_query($con, "SELECT * FROM enroll where student_id= '$std_id'");
                    if (mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            $enroll_id = $row['enroll_id'];
                            $student_id = $row['student_id'];
                            $subject_id = $row['subject_id'];
                            $exam_id = $row['exam_id']; ?>
                            <tr>
                                <th scope="row"><?php echo $enroll_id; ?></th>
                                <td><?php echo $student_id; ?></td>
                                <td><?php echo $subject_id; ?></td>
                                <td><?php echo $exam_id; ?></td>
                                <?php
                                if ($row['pay'] == "notpaid") {
                                ?><td>
                                        <form action="sqlpayment.php" method="POST">
                                            <input type="hidden" name="enrollid" value="<?php echo $row['enroll_id']; ?>">
                                            <input type="hidden" name="price" value="<?php echo $row['price']; ?>">
                                            <input type="submit" value="Pay Rs<?php echo $row['price']; ?>" name="register" class="btn btn-warning">

                                        </form>
                                    </td>
                                <?php
                                } else {
                                ?>
                                    <td>
                                        <form action="viewstudent-takeexam.php" method="POST">
                                            <input type="hidden" name="student_id" value="<?php echo $student_id; ?>">
                                            <input type="hidden" name="exam_id" value="<?php echo $exam_id; ?>">
                                            <input type="submit" value="Take Exam" name="submit" class="btn btn-success">

                                        </form>
                                    </td>
                                <?php
                                }
                                ?>

                            </tr>
                    <?php
                        }
                    } ?>


                </tbody>
            </table>
        </div>
    </div>

<?php } ?>