<?php
include('header.php');
if ($_SESSION['username'] != "") {
    $usr = $_SESSION['username'];
?> <nav class="navbar navbar-expand-sm bg-info navbar-dark ">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="#">HOME</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="viewstudent-exam.php">Exam</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="viewstudentscore.php">Student exam Record</a>
            </li>
        </ul>
    </nav>
    <div class="container-fluid my-3">


        <div class="row">

            <div class="col-sm-12 col-md-3">
                <div class="bg-light border-right" id="sidebar-wrapper">
                    <div class="sidebar-heading">Annoucement </div>
                    <div class="list-group list-group-flush">
                        <?php
                        require('connect.php');
                        $result = mysqli_query($con, "SELECT * FROM announcement  LIMIT 10");
                        while ($row = mysqli_fetch_assoc($result)) {
                            $teacher_name = $row['teacher_name'];
                            $subject_name = $row['subject_name'];
                            $subject_id = $row['subject_id'];
                            $description = $row['description'];
                        ?>
                            <div class="list-group-item list-group-item-action bg-light">
                                <h5><?php echo  $subject_id . " " .  $subject_name; ?></h5>
                                <p style="font-size:0.8em;"><?php echo $description; ?></p>
                            </div>
                        <?php
                        } ?>
                        <a href="#" class="list-group-item list-group-item-action bg-light">Annoucement2</a>

                        <a href="#" class="list-group-item list-group-item-action bg-light">Annoucement top 10 only</a>
                    </div>
                </div>
            </div>

            <div class="col-sm-12 col-md-9">
                <div class="accordion" id="accordionExample">
                    <?php
                    require('connect.php');
                    $result = mysqli_query($con, "SELECT * FROM `subject` ");
                    while ($row = mysqli_fetch_assoc($result)) {
                        $subject_id = $row['subject_id'];
                        $title = $row['title'];
                        $teacher_id = $row['teacher_id'];
                    ?>
                        <div class="card">
                            <div class="card-header" id="<?php echo  "abc" . $subject_id . "_";  ?>">
                                <h2 class="mb-0">
                                    <button class="btn btn-link " type="button" data-toggle="collapse" data-target="#<?php echo  "abc" . $subject_id;  ?>" aria-expanded="true" aria-controls="<?php echo  "abc" . $subject_id;  ?>">
                                        <?php echo  $subject_id . " " . $title;  ?>
                                    </button>
                                </h2>
                            </div>
                            <div id="<?php echo  "abc" . $subject_id;  ?>" class="collapse show" aria-labelledby="<?php echo  "abc" . $subject_id . "_";  ?>" data-parent="#accordionExample">
                                <div class="card-body">
                                    <table class="table table-hover table-bordered table-responsive-md">
                                        <thead>
                                            <tr>
                                                <th scope="col">Exam id</th>
                                                <th scope="col">Title</th>
                                                <th scope="col">duration</th>
                                                <th scope="col">datetime</th>
                                                <th scope="col">price</th>
                                                <th scope="col">Enroll</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $exam = mysqli_query($con, "SELECT * FROM `exam` where subject_id =$subject_id");
                                            if (mysqli_num_rows($exam) > 0) {
                                                while ($res = mysqli_fetch_assoc($exam)) {
                                                    $exam_id = $res['exam_id'];

                                                    $title_exam = $res['title'];
                                                    $duration = $res['duration'];
                                                    $datetime = $res['datetime'];
                                                    $price = $res['price'];
                                                    $total_questions = $res['total_questions'];
                                            ?>
                                                    <tr>
                                                        <th scope="row"><?php echo $exam_id; ?></th>
                                                        <td><?php echo $title_exam; ?></td>
                                                        <td><?php echo $duration; ?></td>
                                                        <td><?php echo $datetime; ?></td>
                                                        <td><?php echo $price; ?></td>
                                                        <td>
                                                            <form action="sqlpayment.php" method="POST">
                                                                <input type="hidden" name="exam_id" value="<?php echo $exam_id ?>">
                                                                <input type="hidden" name="std_name" value="<?php echo $usr ?>">
                                                                <input type="hidden" name="price" value="<?php echo $price ?>">
                                                                <input type="hidden" name="subject_id" value="<?php echo $subject_id ?>">

                                                                <input type="submit" name="submit" value="Enroll" class="btn btn-info">

                                                            </form>
                                                            <!-- <div id=”paypal-button”></div> -->

                                                        </td>
                                                    </tr>
                                            <?php
                                                }
                                            }
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                        </div>
                    <?php
                    }
                    ?>

                    <div class="card">
                        <div class="card-header" id="headingTwo">
                            <h2 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Subject 2
                                </button>
                            </h2>
                        </div>
                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                            <div class="card-body">
                                Description
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="head">
                            <h2 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#coll" aria-expanded="false" aria-controls="collapseTwo">
                                    Subject 3
                                </button>
                            </h2>
                        </div>
                        <div id="coll" class="collapse" aria-labelledby="head" data-parent="#accordionExample">
                            <div class="card-body">
                                description
                            </div>
                        </div>
                    </div>

                </div>
            </div>


        </div>
    </div>

<?php }
?>
</div>
</div>
</body>

</html>