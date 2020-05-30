<!DOCTYPE html>
<html lang="en">

<head>
    <title>Online Examination System in PHP</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">


    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous" />
    <link href="https://fonts.googleapis.com/css?family=Muli:400,400i,800,800i" rel="stylesheet" />
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" />

    <script src="js/main.js"></script>

    <script src="https://use.fontawesome.com/05113e75b1.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <style>
        body {
            background: #06B4FF;
            background: -moz-linear-gradient(left, #06B4FF 0%, #00CBC4 70%, #0089FF 100%);
            background: -webkit-linear-gradient(left, #06B4FF 0%, #00CBC4 70%, #0089FF 100%);
            background: linear-gradient(to right, #06B4FF 0%, #00CBC4 70%, #0089FF 100%);
        }

        nav {
            background: #06B4FF;
            background: -moz-linear-gradient(left, #06B4FF 0%, #00CBC4 70%, #0089FF 100%);
            background: -webkit-linear-gradient(left, #06B4FF 0%, #00CBC4 70%, #0089FF 100%);
            background: linear-gradient(to right, #06B4FF 0%, #00CBC4 70%, #0089FF 100%);
            position: fixed;
        }

        .nav-link {
            color: #fff !important;
            font-size: 1.1em !important;
            padding: 0 0 5px 0 !important;
            display: unset;
            font-weight: 500;
            letter-spacing: .5px;
            text-shadow: 2px 4px 3px rgba(0, 0, 0, 0.3);
            transition: .3s linear;
            margin-right: 1em;
        }

        .nav-link:hover {
            /* -webkit-box-shadow: 1px -2px 16px 5px #00B1FF;
            box-shadow: 1px -2px 16px 5px #00B1FF;
            border-radius: 8px;
            background: #00B1FF; */
            border-bottom: 2px solid #fff;
        }

        p {
            color: whitesmoke;
            font-size: 1.1em;
            text-shadow: 1px 1px #010007;
        }

        section.container.my-2>div>div {
            -webkit-box-shadow: inset 1px 0px 5px 3px rgb(200, 198, 198);
            box-shadow: inset 1px 0px 5px 3px rgb(255, 255, 255);
            background-color: rgb(171, 228, 250, 0.5);
            padding: 0.5em;
        }
    </style>

</head>

<body>
    <!--Navbar-->
    <nav class="navbar navbar-expand-lg navbar-light">
        <a class="navbar-brand" href="index.php">LOGO</a>
        <form class="form-inline my-2 my-lg-0 mr-auto ml-4">
            <input class="form-control mr-2" type="search" placeholder="Search Courses" aria-label="Search" />
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">
                Search
            </button>
        </form>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                </li>

                <li class="nav-item" id="nav_aboutus">
                    <a class="nav-link" href="nav-links/about-us.php">About Us </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="nav-links/contact.php" id="nav_contactus">Contact Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="subject.php" id="nav_contactus">Subject</a>
                </li>
            </ul>
            <ul class="navbar-nav ml-2">
                <li class="nav-item mr-2">
                    <a href="login.php" class="btn btn-dark btn-lg">Login</a>
                </li>
                <li class="nav-item">
                    <a href="register.php" class="btn btn-warning btn-lg">Register</a>
                </li>
            </ul>
        </div>
    </nav>
    <section class="container my-2">
        <h1>Subject</h1>

        <div class="row">

            <div class="col-md-4 col-sm-6">
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
                <div class="col-md-4 col-sm-6">
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
            <div class="col-md-4 col-sm-6">
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



    </section>
    <footer class="footer-distributed">

        <div class="footer-left">

            <h3>Company <span>LOGO</span></h3>



            <p class="footer-company-name">LOGO &copy; 2019</p>
        </div>

        <div class="footer-center">

            <div>
                <i class="fa fa-map-marker"></i>
                <p><span>21 Revolution Street</span> Delhi, India</p>
            </div>

            <div>
                <i class="fa fa-phone"></i>
                <p>+1 555 123456</p>
            </div>

            <div>
                <i class="fa fa-envelope"></i>
                <p><a href="mailto:support@company.com">contact@webdevtrick.com</a></p>
            </div>

        </div>

        <div class="footer-right">

            <p class="footer-company-about">
                <span>About the company</span>
                graphic designers, web developers &amp; SEO Learner.
            </p>

            <div class="footer-icons">

                <a href="#"><i class="fa fa-facebook"></i></a>
                <a href="#"><i class="fa fa-twitter"></i></a>
                <a href="#"><i class="fa fa-linkedin"></i></a>
                <a href="#"><i class="fa fa-github"></i></a>

            </div>

        </div>

    </footer>
</body>

</html>