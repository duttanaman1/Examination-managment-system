<?php
require('connect.php');
if ($_POST['submit'] != null) {
    $duration = $_POST['duration'];
    $exam_id = $_POST['exam_id'];
    $datetime = $_POST['datetime'];
    $price = $_POST['price'];
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

        <script src="style/TimeCircles.js"></script>
    </head>
    </body>
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark position: sticky;">
        <a class="navbar-brand">LOGO</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav">



            </ul>
        </div>
    </nav>
    <div class="container my-5" style="border:1px solid grey;">
        <center>
            <h2>Update Exam <?php echo $exam_id ?></h2>
            <form action="sqlupdateexam.php" class="row my-5 bg-info bg-light w-50" method="POST">
                <input type="hidden" value="<?php echo $exam_id ?>" name="exam_id">
                <div class="col-md-4 my-4">duration</div>
                <div class="col-md-7 my-4"><input type="tel" name="duration" placeholder="<?php echo $duration ?>"></div>
                <div class="col-md-4 my-4">datetime</div>
                <div class="col-md-7 my-4"><input type="datetime-local" name="datetime" placeholder="<?php echo $datetime ?>"></div>
                <div class="col-md-4 my-4">price</div>
                <div class="col-md-7 my-4"><input type="tel" name="price" placeholder="<?php echo $price ?>"></div>
                <div class="col-md-12 my-2"> <input type="submit" name="submit" value="Update" class="btn btn-warning"></div>
            </form>
        </center>
    </div>
    </body>

    </html>


<?php
}
