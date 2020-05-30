<?php
include('header.php');
// echo $_SESSION['username'];
if ($_SESSION['username'] != "NULL") {


?>
    <nav class="navbar navbar-expand-sm bg-info navbar-dark ">

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav">

                <li class="nav-item">
                    <a class="nav-link" href="viewadmin.php">Announcement</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="viewadmin-teacher.php">Teacher Registration</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="viewadmin-exam.php">Subject and Exam</a>
                </li>

            </ul>
        </div>
    </nav>
    <!-- <section class="container my-2">
        <h1>Subject</h1>

        <div class="row">

            <div class="col-md-4 col-sm-6" style="
            box-shadow: inset 1px 0px 5px 3px rgb(255, 255, 255);
            background-color: rgb(171, 228, 250, 0.5);
            padding: 0.5em;">
                <div class="section-courses">
                    <div class="section-courses">

                        <div>
                            <a href="#">
                                <h3> Sample</h3>
                            </a>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                sed do eiusmod tempor incididunt ut labore et dolore magna
                                aliqua. Ut enim ad
                            </p>
                            <small>By : sample 1</small>
                        </div>
                    </div>
                </div>
            </div>
            <?php
            require("connect.php");

            $result = mysqli_query($con, "SELECT  * FROM `subject` ");
            while ($row = mysqli_fetch_assoc($result)) {
                $subject_id = $row['subject_id'];
                $title = $row['title'];
                $teacher_id = $row['teacher_id'];
                $teacher = mysqli_fetch_assoc(mysqli_query($con, "SELECT  * FROM `teacher` where teacher_id=' $teacher_id ' "));
                $email = $teacher['email'];

            ?>
                <div class="col-md-4 col-sm-6" style="
            box-shadow: inset 1px 0px 5px 3px rgb(255, 255, 255);
            background-color: rgb(171, 228, 250, 0.5);
            padding: 0.5em;">
                    <div class="section-courses">

                        <div>
                            <a href="#">
                                <h3><?php echo $subject_id . " " . $title; ?></h3>
                            </a>
                            <p>
                                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Explicabo beatae,
                                commodi natus accusamus quisquam alias corporis laborum ex blanditiis optio quasi tempore.
                                Quo, perspiciatis! Modi, reprehenderit corporis. Perspiciatis, iusto vero.
                            </p>
                            <small>
                                BY: <?php echo $teacher_id; ?><br>
                                <?php echo $email; ?>
                            </small>
                        </div>
                    </div>
                </div>
            <?php } ?>
            <div class="col-md-4 col-sm-6" style="
            box-shadow: inset 1px 0px 5px 3px rgb(255, 255, 255);
            background-color: rgb(171, 228, 250, 0.5);
            padding: 0.5em;">
                <div class="section-courses">
                    <div class="section-courses">

                        <div>
                            <a href="#">
                                <h3> Sample</h3>
                            </a>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                sed do eiusmod tempor incididunt ut labore et dolore magna
                                aliqua. Ut enim ad
                            </p>
                            <small>By : sample 1</small>
                        </div>
                    </div>
                </div>
            </div>

        </div>



    </section> -->
    <div class="row">
        <div class="col-sm-12 col-md-7 my-3">
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
                                <table class="table table-hover table-bordered table-responsive-md table-sm">
                                    <thead>
                                        <tr>
                                            <th scope="col">Exam id</th>
                                            <th scope="col">Title</th>
                                            <th scope="col">duration</th>
                                            <th scope="col">datetime</th>
                                            <th scope="col">price</th>

                                            <th scope="col">Update</th>
                                            <th scope="col">DELETE</th>

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
                                                        <form action="updateexam.php" method="POST">
                                                            <input type="hidden" name="exam_id" value="<?php echo $exam_id ?>">
                                                            <input type="hidden" name="duration" value="<?php echo $duration ?>">
                                                            <input type="hidden" name="datetime" value="<?php echo $datetime ?>">
                                                            <input type="hidden" name="price" value="<?php echo $price ?>">
                                                            <input type="submit" name="submit" value="Update" class="btn btn-warning">
                                                        </form>
                                                    </td>
                                                    <td>
                                                        <form action="sqldeleteexam.php" method="POST">
                                                            <input type="hidden" name="exam_id" value="<?php echo $exam_id ?>">

                                                            <input type="hidden" name="price" value="<?php echo $price ?>">
                                                            <input type="submit" name="submit" value="Delete" class="btn btn-danger">
                                                        </form>
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
        <div class="col-sm-12 col-md-4 my-3">
            <h2>Update Exam <?php echo $exam_id ?></h2>
            <form action="sqladdsubject.php" class="row my-5 bg-info bg-light" method="POST">

                <div class="col-md-4 my-3">subject_id</div>
                <div class="col-md-7 my-3"><input type="tel" name="subject_id"></div>
                <div class="col-md-4 my-3">title</div>
                <div class="col-md-7 my-3"><input type="text" name="title"></div>
                <div class="col-md-4 my-3">teacher_id</div>
                <div class="col-md-7 my-3"><input type="tel" name="teacher_id"></div>
                <div class="col-md-12 my-2"> <input type="submit" name="submit" value="ADD" class="btn btn-info"></div>
            </form>
        </div>
    </div>

<?php } ?>

</body>
</head>