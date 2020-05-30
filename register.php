<?php
include('header.php');
?>
<div class="containter">
    <div class="d-flex justify-content-center">
        <br /><br />
        <div class="card" style="margin-top:50px;margin-bottom: 100px;">
            <div class="card-header">
                <h4>User Registration</h4>
            </div>
            <div class="card-body ">
                <span id="message"></span>
                <form method="post" id="user_register_form" action="sqlregister.php" style="width:25em;">
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
                        <label>Enter Name</label>
                        <input type="text" id="user_name" class="form-control" name="username" />
                    </div>
                    <div class="form-group">
                        <label>Select Gender</label>
                        <select id="user_gender" class="form-control" name="gender">
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Enter Address</label>
                        <textarea id="user_address" class="form-control" name="address"></textarea>
                    </div>
                    <div class="form-group">
                        <label>Enter Mobile Number</label>
                        <input type="text" id="user_mobile_no" class="form-control" name="mob" />
                    </div>

                    <br />
                    <div class="form-group" align="center">
                        <input type="submit" id="user_register" class="btn btn-info" value="Register" name="submit" />
                    </div>
                </form>
                <div align="center">
                    <a href="login.php">Login</a>
                </div>
            </div>
        </div>
        <br /><br />
        <br /><br />
    </div>
</div>
</body>

</html>