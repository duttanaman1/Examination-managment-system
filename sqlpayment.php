<?php
require("connect.php");
session_start();
$msg = '';
$success = false;
if ($_POST['pay'] = !NULL) {
    //echo 1;
    $enrollid = $_POST['enrollid'];
    $paid = $_POST['price'];
}
if ($_POST['success'] = !NULL) {
    mysqli_query($con, "UPDATE enroll SET pay='paid' WHERE enroll_id=$enrollid");
    $success = true;
    //header("location:http://localhost/internship_project2_OEMS/viewstudent-exam.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <title>Examination Payment Gateway</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,300" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="css/payment.css" />
</head>

<body>
    <div class="page-container">
        <div class="container">
            <div class="row">
                <div class="col text-center">
                    <a class="logo" href="pay.triip.me" title="Triip Pay"></a>
                    <h1 class="title">Welcome to Examination payment</h1>
                    <p>One of the safest payment gateway in the world</p>
                    <!-- <p>We support mostly all of the cards:</p>
					<ul class="payment-cards">
						<li class="visa"></li>
						<li class="mastercard"></li>
						<li class="amex"></li>
						<li class="discover"></li>
						<li class="paypal"></li>
					</ul> -->
                    <h2>
                        <div class="label">Payment amount:</div>
                        <span class="amount"><?php echo  $paid; ?></span>
                    </h2>
                    <br />
                </div>
            </div>
            <div class="row w-50 mx-auto">
                <div class="col">
                    <div class="card-checkout" id="card-checkout">
                        <div class="card-types">
                            <div class="card_type fa fa-cc-discover" id="discover"></div>
                            <div class="card_type fa fa-cc-amex" id="amex"></div>
                            <div class="card_type fa fa-cc-mastercard" id="mastercard"></div>
                            <div class="card_type fa fa-cc-visa" id="visa"></div>
                        </div>
                        <div class="card-options">
                            <form class="card-details" id="card-form">
                                <div class="form-group">
                                    <label for="cc-number">Card Number</label>
                                    <input id="cc-number" name="cc-number" class="cc-number" placeholder="XXXX XXXX XXXX XXXX" data-numeric required>
                                </div>
                                <div class="form-group">
                                    <label for="cc-name">Card Holder</label>
                                    <input id="cc-name" name="cc-name" class="cc-name" placeholder="Name Surname" required>
                                </div>
                                <div class="form-group">
                                    <label for="cc-expiry">Expiry</label>
                                    <div class="row">
                                        <div class="col-4">
                                            <input class="cc-expiry inline" placeholder="MM/YY" required>
                                        </div>
                                        <div class="col-4">
                                            <input class="cc-cvc" placeholder="CVC" data-numeric required>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="card-confirm">
                            <form method="POST">
                                <input type="submit" value="submit" id="submit-button" class="button-confirm" name="success">

                            </form>
                            <!-- <a href="sqlpayment.php?success=true"><button id="submit-button" class="button-confirm">
                                    <i class="fa fa-lock"></i> Submit
                                </button>
                            </a> -->

                        </div>
                    </div>
                    <div id="loading" class="loading hidden">
                        <div class="load-8">
                            <div class="line"></div>
                        </div>
                    </div>
                    <div id="success" class="success hidden">
                        <h4>Payment Succeeded !!</h4>
                        <p>
                            <?php echo $msg; ?>
                        </p>
                        <p>
                            <?php if ($success) {
                            ?>
                                <button class="btn btn-success" onclick="window.open('viewstudent-exam.php','_self')">Confirm</button>
                            <?php
                            }
                            ?> </p> <?php

                                    ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.payment/3.0.0/jquery.payment.min.js"></script>
    <script src="js/payment.js"></script>
</body>

</html>