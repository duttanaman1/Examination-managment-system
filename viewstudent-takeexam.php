<?php
include('header.php');
if ($_SESSION['username'] != "") {
    $usr = $_SESSION['username'];
    if ($_POST['submit'] != null) {
        $student_id = $_POST['student_id'];
        $exam_id = $_POST['exam_id'];
        $_SESSION['marks'] = 0;
        //echo "Exam Id:" . $exam_id . "and Student ID:" . $student_id;

        $exam = mysqli_fetch_assoc(mysqli_query($con, "SELECT * FROM exam where exam_id=$exam_id"));
        $duration = $exam['duration'];

?>


        <div class="container row">
            <form action="sqladdmarks.php" class="col-md-7 p-3 m-3 bg-info bg-light" method="POST">
                <?php
                require('connect.php');
                $result = mysqli_query($con, "SELECT * FROM question where exam_id=$exam_id");
                $count = 0;
                while ($row = mysqli_fetch_assoc($result)) {

                    $count = $count + 1;
                ?>
                    <div class="col-md-4 my-2 p-2"><label></label>
                        <input type="text" value="<?php echo $row['question_title']; ?>" disabled>
                    </div>
                    <div class="col-md-6 my-2 p-2">
                        <input type="radio" name="<?php echo "a" . $count ?>" value="<?php echo $row['ansopt1']; ?>"><?php echo $row['ansopt1']; ?><br>
                        <input type="radio" name="<?php echo "a" . $count ?>" value="<?php echo $row['ansopt2']; ?>"><?php echo $row['ansopt2']; ?><br>
                        <input type="radio" name="<?php echo "a" . $count ?>" value="<?php echo $row['ansopt3']; ?>"><?php echo $row['ansopt3']; ?><br>
                    </div>
                <?php
                }
                ?>
                <input type="hidden" name="count" value="<?php echo $count; ?>">
                <input type="hidden" name="student_id" value="<?php echo $student_id; ?>">
                <input type="hidden" name="exam_id" value="<?php echo $exam_id; ?>">
                <input type="submit" name="submit" value="Finish" class="btn btn-info my-3">
            </form>
            <div class="col-md-4 p-3 m-3">
                <p id="demo" style="text-align: center; font-size: 60px; color:red"></p>
                <script>
                    var countDownDate = new Date();
                    countDownDate.setMinutes(countDownDate.getMinutes() + <?php echo $duration; ?>);

                    var x = setInterval(function() {

                        // Get today's date and time
                        var now = new Date().getTime();

                        // Find the distance between now and the count down date
                        var distance = countDownDate - now;

                        // Time calculations for days, hours, minutes and seconds
                        var days = Math.floor(distance / (1000 * 60 * 60 * 24));
                        var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                        var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                        var seconds = Math.floor((distance % (1000 * 60)) / 1000);

                        // Output the result in an element with id="demo"
                        document.getElementById("demo").innerHTML = "Hurry Up" + days + "d " + hours + "h " +
                            minutes + "m " + seconds + "s ";

                        // If the count down is over, write some text 
                        if (distance < 0) {
                            clearInterval(x);
                            document.getElementById("demo").innerHTML = "EXPIRED";
                            window.open("http://localhost/internship_project2_OEMS/viewstudentscore.php")
                        }
                    }, 1000);
                </script>
            </div>
        </div>
    <?php
    } else {
        echo "ERROR";
    }
    ?>
<?php
} ?>