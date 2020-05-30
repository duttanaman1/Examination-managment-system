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
    <div class="container-fluid row">
        <div class="col-sm-12 col-md-7 my-5">
            <table class="table table-hover table-bordered table-responsive-md">
                <thead>
                    <tr>
                        <th scope="col">teacher_id</th>
                        <th scope="col">email</th>
                        <th scope="col">password</th>

                    </tr>
                </thead>
                <tbody>
                    <?php
                    require('connect.php');
                    $result = mysqli_query($con, "SELECT * FROM teacher");
                    while ($row = mysqli_fetch_assoc($result)) {
                        $teacher_id = $row['teacher_id'];
                        $email = $row['email'];
                        $password = $row['password']; ?>
                        <tr>
                            <th scope="row"><?php echo $teacher_id; ?></th>
                            <td><?php echo $email; ?></td>
                            <td><?php echo $password; ?></td>
                        </tr>
                    <?php
                    } ?>
                    <tr>
                        <th scope="row">2</th>
                        <td>Jacob</td>
                        <td>Thornton</td>

                    </tr>

                </tbody>
            </table>
        </div>
        <div class="col-sm-12 col-md-4 justify-content-center p-2">
            <br /><br />
            <div class="card">
                <div class="card-header">
                    <h4>Teacher Registration</h4>
                </div>
                <div class="card-body ">
                    <span id="message"></span>
                    <form method="post" id="user_register_form" action="sqlregisterteacher.php" style="width:25em;">
                        <div class="form-group">
                            <label>Enter Email Address</label>
                            <input type="text" id="user_email_address" class="form-control" data-parsley-checkemail data-parsley-checkemail-message='Email Address already Exists' name="email" />
                        </div>
                        <div class="form-group">
                            <label>Enter Password</label>
                            <input type="password" id="user_password" class="form-control" name="password" />
                        </div>
                        <div class="form-group">
                            <label>Enter Confirm Password</label>
                            <input type="password" id="confirm_user_password" class="form-control" />
                        </div>
                        <div class="form-group">

                            <input type="hidden" id="confirm_user_password" class="form-control" value="<?php echo  $_SESSION['username']; ?>" name="admin" />
                        </div>

                        <br />
                        <div class="form-group" align="center">
                            <input type="submit" id="user_register" class="btn btn-info" value="Register" name="submit" />
                        </div>
                    </form>

                </div>
            </div>
            <br /><br />
            <br /><br />
        </div>
    </div>
<?php } ?>

</body>
</head>