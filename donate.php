<!DOCTYPE html>
<html lang="en">
<head>
<title>Mission2n</title> 
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0" maximum-scale=1.0>
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <link rel="icon" href="img/favicon.png">
            <link rel="stylesheet" href="css/bootstrap.css">
            <link rel="stylesheet" href="css\donate.css">
            <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
            <link rel="stylesheet" href="css/navbar.css">
            <link rel="stylesheet" href="css/style.css">
            <link rel="stylesheet" href="css/footer.css">

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">
    <link rel="stylesheet" href="css/nouislider.min.css">

    <!-- Main css -->
  
</head>
<body>
 <?php include('include/navbar.php');?>
    <div class="main">

        <div class="container1">
            <div class="signup-content">
                <div class="signup-img">
                    <img src="img/pic37.jpg" alt="">
                    <div class="signup-img-content">
                        <h2>Donate Today! </h2>
                        <p>Help Our Cause With One Time or Monthly Donations !</p>
                    </div>
                </div>
                <div class="signup-form">
                    <form method="POST" class="register-form" id="register-form">
                        <p class="form-head">Donate Here <span class="color">!</span></p>
                        <div class="form-row">
                            <div class="form-group1">
                                <div class="form-input">
                                    <label for="first_name" class="required">First name</label>
                                    <input type="text" name="first_name" id="first_name" />
                                </div>
                                <div class="form-input">
                                    <label for="last_name" class="required">Last name</label>
                                    <input type="text" name="last_name" id="last_name" />
                                </div>
                                <div class="form-input">
                                    <label for="company" class="required">Company</label>
                                    <input type="text" name="company" id="company" />
                                </div>
                                <div class="form-input">
                                    <label for="email" class="required">Email</label>
                                    <input type="text" name="email" id="email" />
                                </div>
                                <div class="form-input">
                                    <label for="phone_number" class="required">Phone number</label>
                                    <input type="text" name="phone_number" id="phone_number" />
                                </div>
                            </div>
                            <div class="form-group1">
                                <div class="form-select">
                                    <div class="label-flex">
                                        <label for="meal_preference">Time Of Payment</label>
                                        
                                    </div>
                                    <div class="select-list">
                                        <select name="meal_preference" id="meal_preference">
                                            <option value="Vegetarian">One Time Payment</option>
                                            <option value="Kosher">Monthly</option>
                                            <option value="Asian Vegetarian">Yearly</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-radio">
                                    <div class="label-flex">
                                        <label for="payment">Payment Mode</label>
                                     
                                    </div>
                                    <div class="form-radio-group">            
                                        <div class="form-radio-item">
                                            <input type="radio" name="payment" id="cash" checked>
                                            <label for="cash">Credit Card</label>
                                            <span class="check"></span>
                                        </div>
                                        <div class="form-radio-item">
                                            <input type="radio" name="payment" id="cheque">
                                            <label for="cheque">Paypal</label>
                                            <span class="check"></span>
                                        </div>
                                        <div class="form-radio-item">
                                            <input type="radio" name="payment" id="demand">
                                            <label for="demand">Payoneer</label>
                                            <span class="check"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-input">
                                    <label for="chequeno">Credit Card No</label>
                                    <input type="text" name="chequeno" id="chequeno" />
                                </div>
                                <div class="form-input">
                                    <label for="blank_name"> Bank Name</label>
                                    <input type="text" name="blank_name" id="blank_name" />
                                </div>
                                <div class="form-input">
                                    <label for="payable">CVV No</label>
                                    <input type="text" name="payable" id="payable" />
                                </div>
                            </div>
                        </div>
                        <div class="donate-us">
                            <label>Donate us</label>
                            <div class="price_slider ui-slider ui-slider-horizontal">
                                <div id="slider-margin"></div>
                                <span class="donate-value" id="value-lower"></span>
                            </div>
                        </div>
                        <div class="form-submit">
                            <input type="submit" value="Submit" class="submit" id="submit" name="submit" />
                            <input type="submit" value="Reset" class="submit" id="reset" name="reset" />
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
    <?php include('include/footer.php');?>

    <!-- JS -->
    <script src="js/jquery.min.js"></script>
    <script src="js/nouislider.min.js"></script>
    <script src="js/wNumb.js"></script>
    <script src="js/dist/jquery.validate.min.js"></script>
    <script src="js/dist/additional-methods.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/jquery-3.4.1.js"></script>
            <script src="js/bootstrap.bundle.js"></script>
</body>
</html>