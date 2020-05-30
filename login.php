<?php
include('header.php');

?>
<div class="container">

    <div class="row">
        <div class="col-md-3">

        </div>
        <div class="col-md-6" style="margin-top:100px;">
            <div class="card">
                <div class="card-header">User Login</div>
                <div class="card-body">
                    <form method="post" id="user_login_form" action="sqllogin.php">
                        <div class="form-group">
                            <label>Enter Email Address</label>
                            <input type="text" name="email" id="email" class="form-control" />
                        </div>
                        <div class="form-group">
                            <label>Enter Password</label>
                            <input type="password" name="password" id="password" class="form-control" />
                        </div>
                        <div class="form-group">
                            <input type="submit" name="user_login" id="user_login" class="btn btn-info" value="Login" name="submit" />
                        </div>
                    </form>
                    <div align="center">
                        <a href="register.php">Register</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">

        </div>
    </div>
</div>

</body>

</html>