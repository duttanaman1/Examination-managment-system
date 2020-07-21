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
    <div class="containter-fluid row ">
        <!-- announcement view -->
        <div class="col-sm-12 col-md-3 my-3">
            <div class="bg-light border-right p-3">
                <div class="sidebar-heading">Announcement </div>
                <div class="list-group list-group-flush">
                    <?php
                    require('connect.php');
                    $result = mysqli_query($con, "SELECT * FROM announcement  ");
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
                    <a href="#" class="list-group-item list-group-item-action bg-light">Announcement2</a>

                    <a href="#" class="list-group-item list-group-item-action bg-light"></a>
                </div>
            </div>
        </div>
        <!-- announcement record -->
        <div class="col-sm-12 col-md-4 justify-content-center m-3" style="border: 1px solid grey;">

            <form method="post" id="user_register_form" action="sqlannouncement.php" style="width:25em;">
                <div class="form-group">
                    <h2 class=" px-5  my-3">Announceement</h2>
                </div>
                <div class="form-group">
                    <label>Teacher ID</label>
                    <input type="text" id="user_email_address" class="form-control" name="teacher_id" />
                </div>
                <div class="form-group">
                    <label>Teacher Name</label>
                    <input type="text" id="user_email_address" class="form-control" name="teacher_name" />
                </div>
                <div class="form-group">
                    <label>subject ID</label>
                    <input type="text" id="user_email_address" class="form-control" name="sub_id" />
                </div>
                <div class="form-group">
                    <label>subject name</label>
                    <input type="text" id="user_email_address" class="form-control" name="sub_name" />
                </div>
                <div class="form-group">
                    <label>Description</label>
                    <textarea class="form-control" name="description"></textarea>
                </div>
                <div class="form-group" align="center">
                    <input type="submit" id="user_register" class="btn btn-info" value="Register" name="submit" />
                </div>
            </form>
        </div>
        <div class="col-sm-12 col-md-4 justify-content-center my-3" style="border:1px solid grey">
            <div class="list-group m-3">
                <h3>List of Subjects Specified by teacher</h3>
                <?php
                $teach = mysqli_fetch_assoc(mysqli_query($con, "SELECT * FROM teacher where email='$usr'"));
                $teachid = $teach['teacher_id'];
                $subsql = mysqli_query($con, "SELECT * FROM subject where teacher_id='$teachid'");
                if (mysqli_num_rows($subsql) > 0) {
                    while ($sub = mysqli_fetch_assoc($subsql)) {
                ?>
                        <button type="button" class="list-group-item list-group-item-action">
                            <?php echo $sub['subject_id'] . " " . $sub['title']; ?>
                        </button>
                <?php
                    }
                }
                ?>


            </div>
        </div>


        </body>

        </html>
    <?php }
    ?>