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
        <h2 class="m-2" align="center">List of Exam of specific teachers</h2>
        <table class="table table-hover table-bordered table-responsive-md table-primary">
            <caption>List of Exam of specific teachers</caption>
            <thead class="bg-info">
                <tr>
                    <th scope="col">exam_id</th>

                    <th scope="col">title</th>
                    <th scope="col">subject_id</th>
                    <th scope="col">duration</th>
                    <th scope="col">datetime</th>

                    <th scope="col">exam_status</th>
                    <th scope="col">total_questions</th>
                    <th scope="col">price</th>

                </tr>
            </thead>
            <tbody>
                <?php
                require('connect.php');
                $teacher = mysqli_fetch_assoc(mysqli_query($con, "SELECT * FROM teacher where email='$usr'  "));
                $teacher_id = $teacher['teacher_id'];
                $_SESSION['id'] = $teacher_id;
                $result = mysqli_query($con, "SELECT * FROM exam where teacher_id=' $teacher_id' ORDER BY subject_id");
                while ($row = mysqli_fetch_assoc($result)) {
                    $exam_id = $row['exam_id'];
                    $teacher_id = $row['teacher_id'];
                    $title = $row['title'];
                    $subject_id = $row['subject_id'];
                    $duration = $row['duration'];
                    $datetime = $row['datetime'];
                    $exam_created_on = $row['exam_created_on'];
                    $exam_status = $row['exam_status'];
                    $total_questions = $row['total_questions'];
                    $price = $row['price']; ?>
                    <tr>
                        <th scope="row"><?php echo $exam_id; ?></th>

                        <td><?php echo $title; ?></td>
                        <td><?php echo $subject_id; ?></td>
                        <td><?php echo $duration; ?></td>
                        <td><?php echo $datetime; ?></td>

                        <td><?php echo $exam_status; ?></td>
                        <td><?php echo $total_questions; ?></td>
                        <td><?php echo $price; ?></td>
                    </tr>
                <?php
                } ?>


            </tbody>
        </table>
    </div>
    <div class="col-sm-12 col-md-12 justify-content-center my-3" style="border:1px solid red">
        <form class="w-75 my-5" action="sqlexamadd.php" method="POST" enctype="multipart/form-data">
            <h2> Add Exam Details</h2>
            <?php
            $teacher_id = $_SESSION['id'];
            date_default_timezone_set('asia/Kathmandu');
            $curr_date = date('Y/m/d H:i:s');
            ?>
            <div class="row d-flex justify-content-center">
                <div class="col-md-2 my-2"><label>Exam ID</label></div>
                <div class="col-md-4 my-2"><input type="text" name="exam_id"></div>
                <input type="hidden" name="teacher_id" value="<?php echo  $teacher_id; ?>">

                <div class="col-md-2 my-2"><label>Title</label></div>
                <div class="col-md-4 my-2"><input type="text" name="title"></div>
                <div class="col-md-2 my-2"><label>Subject ID</label></div>
                <div class="col-md-4 my-2"><input type="text" name="subject_id"></div>
                <div class="col-md-2 my-2"><label>duration</label></div>
                <div class="col-md-4 my-2"><input type="tel" name="duration"></div>


                <div class="col-md-2 my-2"><label>Created on </label></div>
                <div class="col-md-4 my-2"><input type="text" name="exam_cretated_on" value="<?php echo  $curr_date; ?>"></div>
                <div class="col-md-2 my-2"><label>Total Questions</label></div>
                <div class="col-md-4 my-2"><input type="tel" name="total_questions"></div>
                <div class="col-md-2 my-2"><label>price</label></div>
                <div class="col-md-4 my-2"><input type="tel" name="price"></div>
                <div class="col-md-2 my-2"><label>Date and time</label></div>
                <div class="col-md-4 my-2"><input type="datetime-local" name="datetime"></div>
                <div class="row col-md-12">
                    <div class="col-md-4 mx-2 my-4"><input type="submit" value="Submit" name="submit" class="btn btn-success"></div>
                    <div class="col-md-4 mx-2 my-4"><input type="reset" Value="Reset" name="reset" class="btn btn-warning"></div>
                </div>



            </div>
        </form>

    </div>
    </body>

    </html>
<?php }
?>