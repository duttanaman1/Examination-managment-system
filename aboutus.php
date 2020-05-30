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
      <div class="container">
          <div class="row">
              <div class="col-lg-12 my-3">
                  <img src="img/about.jpg" class="img-fluid" alt="About.jpg">
              </div>
              <div class="col-lg-12 my-3">
                  <h2>About us</h2>
              </div>
              <div class="col-lg-12 my-3">
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus omnis optio, non adipisci blanditiis dicta suscipit voluptatem deserunt asperiores corporis! Laboriosam atque itaque ducimus necessitatibus officia dolor recusandae architecto ab.</p>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid impedit quod sit itaque enim maiores labore hic cupiditate minima similique architecto ad consectetur beatae, rerum eaque fugit? Esse, voluptate recusandae!</p>

              </div>
              <div class="col-lg-12 my-3 mr-auto" style="background-color:rgb(228, 228, 228);padding:1.5em; text-align: center;font-size: 1.5em;"><strong>40 million readers read 100 million pages every month</strong></div>

              <div class="col-lg-12 my-3">
                  <h2>Mission</h2>
              </div>
              <div class="col-lg-12 my-3">
                  <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Commodi dolorem magni, distinctio harum ducimus animi eveniet quibusdam tenetur illo id sunt odit nam nemo accusantium esse nisi est consequuntur deleniti.</p>
              </div>
              <div class="col-lg-12 my-3">
                  <h2>Terms of use</h2>
              </div>
              <div class="col-lg-12 my-3">
                  <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Numquam ab nisi magnam enim repellat fugiat, esse aspernatur explicabo inventore sunt quis, architecto, nobis reiciendis dolore libero ea molestiae et officiis.</p>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod illo, quaerat nemo officiis laborum eos magni facere modi accusantium deserunt laudantium eveniet debitis autem sapiente tempore voluptates animi et at?</p>
              </div>
              <div class="col-lg-12 my-3">
                  <h2>Privacy Policy </h2>
              </div>
              <div class="col-lg-12 my-3">
                  <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptate nostrum modi qui iusto magni mollitia similique libero delectus quidem totam commodi ipsam a aperiam odit quis, voluptas exercitationem id minus.</p>
              </div>
              <div class="col-lg-12 my-3">
                  <h2>Content of use</h2>
              </div>
              <div class="col-lg-12 my-3">
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo temporibus quia cumque laudantium eveniet ipsam. Fugit, quasi sunt enim ut esse perferendis voluptatem saepe at voluptate magni consectetur officiis tenetur!</p>
                  <ul>
                      <li>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sapiente, architecto, optio tempora consequatur id quo dolorem enim voluptatem consequuntur assumenda ipsam natus praesentium perferendis libero adipisci culpa maiores eius pariatur.</li>
                      <li>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Impedit, ratione? Et natus magnam sequi autem blanditiis iure, error, vel inventore temporibus quos quasi, alias rerum doloribus repudiandae soluta exercitationem in.</li>
                      <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi quae, voluptate eius omnis eum accusamus provident recusandae eos obcaecati sint neque nesciunt, blanditiis minus sequi, odit sapiente aliquid laudantium ad?</li>
                  </ul>
              </div>
              <div class="col-lg-12 my-3">
                  <h2>Heading</h2>
              </div>
              <div class="col-lg-12 my-3">Description</div>
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