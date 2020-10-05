<?php


require('connect.php');
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Online Examination System in PHP</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/main.css">

    <link rel="stylesheet" href="style/TimeCircles.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">

    <script src="js/main.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/guillaumepotier/Parsley.js@2.9.1/dist/parsley.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-smooth-scroll/1.5.5/jquery.smooth-scroll.min.js"></script>


    <script defer src="js/face-api.min.js"></script>
    <script defer src="js/script.js"></script>
</head>

<body>
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark position: sticky;">
        <a class="navbar-brand" href="index.php"><img src="img/logo.png" alt="LOGO" height="40em"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav">


                <li class="nav-item">
                    <a class="nav-link" href="change_password.php">Change Password</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="logout.php">Logout</a>
                </li>
            </ul>
        </div>
    </nav>
    <style>
        /* CSS comes here */
        #video {
            border: 1px solid black;
            width: 320px;
            height: 240px;
        }

        #photo {
            border: 1px solid black;
            width: 320px;
            height: 240px;
        }

        #canvas {
            display: none;
        }

        .camera {
            width: 340px;
            display: inline-block;
        }

        .output {
            width: 340px;
            display: inline-block;
        }

        #startbutton {
            display: block;
            position: relative;
            margin-left: auto;
            margin-right: auto;
            bottom: 36px;
            padding: 5px;
            background-color: #6a67ce;
            border: 1px solid rgba(255, 255, 255, 0.7);
            font-size: 14px;
            color: rgba(255, 255, 255, 1.0);
            cursor: pointer;
        }

        .contentarea {
            font-size: 16px;
            font-family: Arial;
            text-align: center;
        }
    </style>
    <div class="containter">
        <div class="d-flex ml-5">
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
            <div class="ml-5">
                <!-- Face capturing system -->
                <div class="contentarea">
                    <h1>
                        Capture Your Photo
                    </h1>
                    <div class="camera">
                        <video id="video" autoplay="true">Video stream not available.</video>
                    </div>
                    <div><button id="startbutton">Take photo</button></div>
                    <canvas id="canvas"></canvas>
                    <div class="output">
                        <img id="photo" alt="The screen capture will appear in this box and will be save automatically">
                    </div>
                    <br>
                    <div>
                        <center>
                            <button class="btn btn-danger" id="save" onclick="saving()">Save</button>
                            <br>
                            <button class="btn btn-success" id="saved" style="display:none">Saved</button>
                        </center>
                    </div>
                    <script>
                        function saving() {
                            document.getElementById("save").style.display = "none";
                            document.getElementById("saved").style.display = "block";
                        }
                    </script>
                </div>

                <script>
                    /* JS comes here */
                    (function() {

                        var width = 320; // We will scale the photo width to this
                        var height = 0; // This will be computed based on the input stream

                        var streaming = false;

                        var video = null;
                        var canvas = null;
                        var photo = null;
                        var startbutton = null;

                        function startup() {
                            video = document.getElementById('video');
                            canvas = document.getElementById('canvas');
                            photo = document.getElementById('photo');
                            startbutton = document.getElementById('startbutton');

                            navigator.mediaDevices.getUserMedia({
                                    video: true,
                                    audio: false
                                })
                                .then(function(stream) {
                                    video.srcObject = stream;
                                    video.play();
                                })
                                .catch(function(err) {
                                    console.log("An error occurred: " + err);
                                });

                            video.addEventListener('canplay', function(ev) {
                                if (!streaming) {
                                    height = video.videoHeight / (video.videoWidth / width);

                                    if (isNaN(height)) {
                                        height = width / (4 / 3);
                                    }

                                    video.setAttribute('width', width);
                                    video.setAttribute('height', height);
                                    canvas.setAttribute('width', width);
                                    canvas.setAttribute('height', height);
                                    streaming = true;
                                }
                            }, false);

                            startbutton.addEventListener('click', function(ev) {
                                takepicture();
                                ev.preventDefault();
                            }, false);

                            clearphoto();
                        }


                        function clearphoto() {
                            var context = canvas.getContext('2d');
                            context.fillStyle = "#AAA";
                            context.fillRect(0, 0, canvas.width, canvas.height);

                            var data = canvas.toDataURL('image/png');
                            photo.setAttribute('src', data);
                        }

                        function takepicture() {
                            var context = canvas.getContext('2d');
                            if (width && height) {
                                canvas.width = width;
                                canvas.height = height;
                                context.drawImage(video, 0, 0, width, height);

                                var data = canvas.toDataURL('image/png');
                                photo.setAttribute('src', data);
                            } else {
                                clearphoto();
                            }
                        }

                        window.addEventListener('load', startup, false);
                    })();
                </script>
            </div>
            <br /><br />
            <br /><br />
        </div>
</body>

</html>