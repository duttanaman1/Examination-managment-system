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
                    <a class="nav-link" href="viewteacher.php">Announcement</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="viewteacher-exam.php">Exam</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="viewteacher-record.php">Student exam Record</a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="col-sm-12 col-md-12 justify-content-center my-3" align="center">
        <h2 class="m-2" align="center">List of Students Score</h2>
        <table class="table table-hover table-bordered table-responsive-md table-primary">
            <caption>Score</caption>
            <thead class="bg-info">
                <tr>
                    <th scope="col">Score ID</th>
                    <th scope="col">exam_id</th>

                    <th scope="col">student_id</th>
                    <th scope="col">marks</th>


                </tr>
            </thead>
            <tbody>
                <?php
                require('connect.php');


                $result = mysqli_query($con, "SELECT * FROM score ");
                while ($row = mysqli_fetch_assoc($result)) {
                    $score_id = $row['score_id'];
                    $exam_id = $row['exam_id'];
                    $student_id = $row['student_id'];
                    $marks = $row['marks'];
                ?>
                    <tr>
                        <th scope="row"><?php echo $score_id; ?></th>

                        <td><?php echo $exam_id; ?></td>
                        <td><?php echo $student_id; ?></td>
                        <td><?php echo $marks; ?></td>

                    </tr>
                <?php
                } ?>


            </tbody>
        </table>
    </div>
    </body>

    </html>
<?php }
?>