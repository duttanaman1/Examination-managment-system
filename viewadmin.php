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
    <div class="containter-fluid row">
        <div class="col-sm-12 col-md-5">
            <div class="bg-light border-right p-3">
                <div class="card-header">
                    <h4>Annoucement</h4>
                </div>

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

        <div class="col-sm-12 col-md-6 justify-content-center m-3 card" style="border: 1px solid grey;">
            <div class="card-header">
                <h4 align="center">Annoucement</h4>
            </div>
            <div class="card-body ">
                <form method="post" id="user_register_form" action="sqlannouncement.php" style="width:25em;">

                    <div class="form-group">
                        <label>Admin ID</label>
                        <input type="text" id="user_email_address" class="form-control" name="teacher_id" />
                    </div>
                    <div class="form-group">
                        <label>Admin Name</label>
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
        </div>

    </div>
    </body>

    </html>
<?php } else {
    echo "error";
}
?>