  <!DOCTYPE html>
  <html lang="en">

  <head>
      <meta charset="UTF-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <title>Document</title>
      <link href="css/main.css" rel="stylesheet" />
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous" />
      <link href="https://fonts.googleapis.com/css?family=Muli:400,400i,800,800i" rel="stylesheet" />
      <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" />
      <style>
          body {
              background-color: rgb(228, 228, 228);
          }

          div.container {
              background-color: whitesmoke;
              width: 60%;

          }



          div.container h2 {
              text-align: center;

          }

          div.container>div>div {
              border-bottom: 0.5em solid rgb(228, 228, 228);
          }

          div.container p {
              text-align: justify;

          }

          nav {
              background: #06B4FF;
              background: -moz-linear-gradient(left, #06B4FF 0%, #00CBC4 70%, #0089FF 100%);
              background: -webkit-linear-gradient(left, #06B4FF 0%, #00CBC4 70%, #0089FF 100%);
              background: linear-gradient(to right, #06B4FF 0%, #00CBC4 70%, #0089FF 100%);
          }

          .nav-link {
              font-size: 1.1em;

          }

          .nav-link:hover {
              -webkit-box-shadow: 1px -2px 16px 5px #00B1FF;
              box-shadow: 1px -2px 16px 5px #00B1FF;
              border-radius: 8px;
              background: #00B1FF;
          }
      </style>
  </head>

  <body>
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
                      <a class="nav-link" href="aboutus.php">About Us </a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="contactus.php" id="nav_contactus">Contact Us</a>
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
      <div class="container my-5">
          <div class="row">
              <div class="col-lg-12">
                  <h2> Contact <span> Logo</span>
              </div>

              <div class="col-lg-12">
                  <div class="row mx-5 mt-5">
                      <div class="col-md-4 my-2"><i class="fa fa-address-card" aria-hidden="true"></i>Address</div>
                      <div class="col-md-8 my-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi incidunt eos suscipit tempora doloribus, </div>
                      <div class="col-md-4 my-2"><i class="fas fa-globe"></i>Website</div>
                      <div class="col-md-8 my-2">www.something.com</div>
                      <div class="col-md-4 my-2"><i class="fa fa-phone" aria-hidden="true"></i>Phone</div>
                      <div class="col-md-8 my-2">+12 3456 789</div>
                      <div class="col-md-4 my-2">contact-detail</div>
                      <div class="col-md-8 my-2">description</div>
                  </div>
              </div>
              <hr>
              <div class="col-lg-12">
                  <div class="row">
                      <form style="width:100%">
                          <table class="table table-hover table-responsive-md">
                              <thead>
                                  <h2>Fill in the details for contact</h2>
                                  <br>
                              </thead>
                              <tbody>
                                  <tr class="row">
                                      <td class="col col-md-4"><label>Your Name</label></td>
                                      <td class="col col-md-7"><input type="text" name="name" id="name" placeholder="name" class="w-75"></td>
                                  </tr>
                                  <tr class="row">
                                      <td class="col col-md-4"><label>Your email</label></td>
                                      <td class="col col-md-7"><input type="email" name="name" id="name" placeholder="email" class="w-75" required></td>
                                  </tr>
                                  <tr class="row">
                                      <td class="col col-md-4"><label>Subject</label></td>
                                      <td class="col col-md-7"><input type="text" name="name" id="name" placeholder="Subject" class="w-75 "></td>
                                  </tr>
                                  <tr class=" row">
                                      <td class="col col-md-4"><label>Message</label></td>
                                      <td class="col col-md-7"><textarea class="w-75" name="message" id="message" placeholder="message" style="height:10em"></textarea></td>
                                  </tr>
                                  <tr class="row">
                                      <td class="col col-md-5"><input type="submit" value="Submit" class="btn btn-success w-75"></td>
                                      <td class="col col-md-5"><input type="reset" value="Reset" class="btn btn-warning w-75"></td>
                                  </tr>
                              </tbody>

                          </table>
                      </form>
                  </div>
              </div>
              <hr>
              <div class="col-lg-12">
                  <h2>heading</h2>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Numquam voluptas repellat culpa nisi, nihil labore deleniti ut dicta! Fugiat deleniti sed aspernatur iure quibusdam laudantium similique ducimus, amet quam expedita.</p>
              </div>
              <hr>
          </div>

      </div>

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
  <script src="https://use.fontawesome.com/05113e75b1.js"></script>
  <script src="js/main.js"></script>
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

  </html>