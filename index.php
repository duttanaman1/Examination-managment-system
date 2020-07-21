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
    </style>

</head>

<body>
    <!--Navbar-->
    <nav class="navbar navbar-expand-lg navbar-light">
        <a class="navbar-brand" href="index.php"><img src="img/logo.png" alt="LOGO" height="40em"></a>
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
    <!--/.Navbar-->

    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="img/slide1.jpg" alt="First slide">
                <div class="carousel-caption d-none d-md-block" style="color:black;background-color:rgb(0,0,0,0.5)">
                    <h1><span style="color:black;text-shadow: 1px 2px 2px #00E5FF;">TITLE</span></h1>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Animi ad voluptate aut voluptatum, odit nihil incidunt fugiat, dignissimos excepturi tenetur porro quisquam assumenda, deserunt repellendus officia quidem quam quae voluptates.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="img/slide2.jpg" alt="Second slide">
                <div class="carousel-caption d-none d-md-block" style="color:black;background-color:rgb(0,0,0,0.5)">
                    <h1><span style="color:black;text-shadow: 1px 2px 2px #00E5FF; ">TITLE</span></h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas asperiores, in dolorem maxime perferendis pariatur nam ab deserunt, illum obcaecati blanditiis magnam aperiam ipsa laudantium esse qui rerum quo numquam?</p>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="img/slide3.jpg" alt="Third slide">
                <div class="carousel-caption d-none d-md-block" style="color:black;background-color:rgb(0,0,0,0.5)">
                    <h1><span style="color:black;text-shadow: 1px 2px 2px #00E5FF;">TITLE</span></h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. At fugit ipsa in nihil sed aut neque, dolorum corrupti quam ullam quis eligendi, repellat quas distinctio voluptatum voluptatem tempora, deserunt minima.</p>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <section class="services-section spad" style="background-color:rbg(250,250,250,0.2)">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="section-title">
                        <h2>Our Program</h2>
                        <p>A wiki is a Web site that allows users to add and update content on the site using their own Web browser. This is made possible by Wiki software that runs on the Web server. Wikis end up being created mainly by a collaborative effort of the site visitors.</p>
                    </div>
                    <div class="services-items">
                        <div class="single-service-item">
                            <img src="img/slide3.jpg" alt="">
                            <h5>Examination 1</h5>
                            <p>We have a wide choice of classes that are a great complement to any training programme.
                            </p>
                        </div>
                        <div class="single-service-item color-1">
                            <img src="img/slide2.jpg" alt="">
                            <h5>Examination 2</h5>
                            <p>We have a wide choice of classes that are a great complement to any training programme.
                            </p>
                        </div>
                        <div class="single-service-item color-2">
                            <img src="img/slide3.jpg" alt="">
                            <h5>Examination 3</h5>
                            <p>We have a wide choice of classes that are a great complement to any training programme.
                            </p>
                        </div>
                        <div class="single-service-item color-3">
                            <img src="img/slide2.jpg" alt="">
                            <h5>Examination 4</h5>
                            <p>We have a wide choice of classes that are a great complement to any training programme.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 offset-lg-1">
                    <div class="service-video set-bg" data-setbg="img/video-bg.jpg" style="background-image: url(&quot;img/slide1.jpg&quot;);">
                        <div class="play-btn">
                            <a href="https://www.youtube.com/watch?v=SlPhMPnQ58k" class="service-video-popup"><i class="fa fa-play"></i></a>
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
                Web Dev Trick is a blog for web designers, graphic designers, web developers &amp; SEO Learner.
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