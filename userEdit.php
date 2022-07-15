<?php

session_start();

include_once 'includes/dbh.inc.php';
if (!isset($_SESSION['mask'])) {


} else {
    $mask = $_SESSION['mask'];

    $sql = "SELECT * FROM accounts WHERE mask='$mask'";
    $result = mysqli_query($conn, $sql);

    if($resultCheck = 0){
        header("Location: ../userReg.php?signup=usertanken");
        exit();

    } else {
        if ($row = mysqli_fetch_assoc($result)) {
            $_SESSION['mask'] = $row['mask'];
            $_SESSION['first'] = $row['first'];
            $_SESSION['surn'] = $row['surn'];
            $_SESSION['email'] = $row['email'];
            $_SESSION['type'] = $row['type'];
            $_SESSION['conNum'] = $row['contact'];
        }

    }

}
?>


<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Home | Take-off Aviation Marketplace</title>

        <!-- Bootstrap Core CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet">


        <link href="css/style.css" rel="stylesheet">
        <link href="css/userReg.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="components/sidebar.com.css">
        <link rel="stylesheet" type="text/css" href="components/search.com.css">
        <link rel="stylesheet" type="text/css" href="components/userNav.com.css">
        <link rel="stylesheet" type="text/css" href="components/footer.com.css">
        <link rel="stylesheet" type="text/css" href="components/pagination.com.css">
        <link rel="stylesheet" type="text/css" href="components/posts.com.css">
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

    </head>

    <body>
        <!-- Body Section starts Here -->
        <div class="bodySection row">

            <!-- Side Bar Section starts Here -->
            <div class="
                    sideBarSection 
                    col-xs-3 
                    col-sm-3 
                    col-md-2 
                    col-lg-2
            ">
            <?php
            include 'components/sidebar.com.php';
            ?>

            </div>
            <!-- Side Bar Section Ends Here -->


            <!-- Content of the Website starts Here -->
            <div class="
                    contentSection
                    col-xs-9
                    col-sm-9
                    col-md-10
                    col-lg-10
            ">

                <!-- Search Section starts here -->
                <div class="searchSection row">
                    <?php
                        include 'components/search.com.php';
                    ?>
                </div>
                <!-- Search Sections ends here -->


                <!-- UserNav Section Starts here -->
                <div class="userNavSection row">
                    <?php
                        include 'components/userNav.com.php';
                    ?>
                </div>
                <!-- UserNav section ends here -->

                <div class="userRegSection row">
                    <div class="col-xs-8 col-sm-8 col-md-6 col-lg-6 col-xs-offset-2 col-sm-offset-2 col-md-offset-3 col-lg-offset-3 userRegArea">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                  <h1 class="text-center">Individual Account Edit</h1>
                            </div>
                            <div class="panel-body">
                                <div class="errorArea">
                                    
                                    <div class="col-lg-12 text-center">
                                      <p class="text-center errorText" id="errorText1">Please insert your First Name</p>  
                                    </div>
                                    <div class="col-lg-12 text-center">
                                      <p class="text-center errorText" id="errorText2">First Name contains invalid characters</p> 
                                    </div>
                                    <div class="col-lg-12 text-center">
                                      <p class="text-center errorText" id="errorText3">Please insert your Last Name</p>  
                                    </div>
                                    <div class="col-lg-12 text-center">
                                      <p class="text-center errorText" id="errorText4">Last Name contains invalid characters</p> 
                                    </div>
                                    <div class="col-lg-12 text-center">
                                      <p class="text-center errorText" id="errorText7">Please insert your contact number</p>  
                                    </div>



                                <form action="includes/userEdit.inc.php" method="POST" onsubmit="return checkForm(this); ">
                                    
                                    <p><?php echo("{$_SESSION['email']}"); ?></p>
                                    <br>
                                    <div class="form-group">
                                        <label for="firstName">First Name:</label>
                                        <input type="text" class="form-control" placeholder="First Name" id="firstName" name="firstName"
                                         value="<?php echo("{$_SESSION['first']}"); ?>">
                                    </div>

                                    <div class="form-group">
                                        <label for="lastName">Last Name:</label>
                                        <input type="text" class="form-control" placeholder="Last Name" id="lastName" name="lastName"
                                        value="<?php echo("{$_SESSION['surn']}"); ?>">
                                    </div>

                                    <div class="form-group">
                                        <label for="conNumber">Contact Number:</label>
                                        <input type="text" class="form-control" placeholder="Contact Number" id="conNumber" name="conNumber" value="<?php echo("{$_SESSION['conNum']}"); ?>">
                                        
                                    </div>

                                    
                                    <button type="submit" class="btn btn-default" ><a href="userChangePass.php">Change Password</a></button>
                                    <button type="submit" name="submit" class="btn btn-default">Save Changes</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Content Section of the Website ends here -->

        </div>
        <!-- Body Section Ends here -->



        <div class="footerSection row">
            <?php
                include 'components/footer.com.php';
            ?>
        </div>

    <!-- jQuery -->
    <script type="text/javascript">
        // First Name validation on loss of focus
        firstName.onblur = function() {

            // Regular Expression
            var re = /^[\w ]+$/;

              // First Name Validation fails if the input is blank or contains invalid characters
            if (this.value =="") {
                var elem = document.getElementById("firstName");
                    elem.setAttribute("style","border: 1px solid red !important;");
                var elemError1 = document.getElementById("errorText1");    
                    elemError1.setAttribute("style","display: unset");
                var elemError2 = document.getElementById("errorText2");    
                    elemError2.setAttribute("style","display: hidden");

            } else if (!re.test(this.value)) {
                var elem = document.getElementById("firstName");
                    elem.setAttribute("style","border: 1px solid red !important;");
                var elemError1 = document.getElementById("errorText1");    
                    elemError1.setAttribute("style","display: hidden");
                var elemError2 = document.getElementById("errorText2");    
                    elemError2.setAttribute("style","display: unset");

            } else {
                var elem = document.getElementById("firstName");
                    elem.setAttribute("style","border: 1px solid green !important;");
                var elemError1 = document.getElementById("errorText1");    
                    elemError1.setAttribute("style","display: hidden");
                var elemError2 = document.getElementById("errorText2");    
                    elemError2.setAttribute("style","display: hidden");

            }
        };


        // Last Name validation on loss of focus
        lastName.onblur = function() {

            // Regular Expression
            var re = /^[\w ]+$/;

            // Last Name Validation fails if the input is blank or contains invalid characters
            if (this.value =="") {
                var elem = document.getElementById("lastName");
                    elem.setAttribute("style","border: 1px solid red !important;");
                var elemError3 = document.getElementById("errorText3");    
                    elemError3.setAttribute("style","display: unset");
                var elemError4 = document.getElementById("errorText4");    
                    elemError4.setAttribute("style","display: hidden");

            } else if (!re.test(this.value)) {
                var elem = document.getElementById("lastName");
                    elem.setAttribute("style","border: 1px solid red !important;");
                var elemError3 = document.getElementById("errorText3");    
                    elemError3.setAttribute("style","display: hidden");
                var elemError4 = document.getElementById("errorText4");    
                    elemError4.setAttribute("style","display: unset");

            } else {
                var elem = document.getElementById("lastName");
                    elem.setAttribute("style","border: 1px solid green !important;");
                var elemError3 = document.getElementById("errorText3");    
                    elemError3.setAttribute("style","display: hidden");
                var elemError4 = document.getElementById("errorText4");    
                    elemError4.setAttribute("style","display: hidden");
            }
        };

        // Contact Number Validation
        conNumber.onblur = function() {

            // Contact Number fails if it is empty
            if (this.value =="") {
                var elem = document.getElementById("conNumber");
                    elem.setAttribute("style","border: 1px solid red !important;");
                var elemError7 = document.getElementById("errorText7");    
                    elemError7.setAttribute("style","display: unset");
            } else {
                var elem = document.getElementById("conNumber");
                    elem.setAttribute("style","border: 1px solid green !important;");
                var elemError7 = document.getElementById("errorText7");    
                    elemError7.setAttribute("style","display: hidden");
            }  
        };


        //This is purely backup Validation
        function checkForm(form) {

            // Taken from here :  http://www.the-art-of-web.com/javascript/validate/
            var errors=[];

            // Regular Expression
            var re = /^[\w ]+$/;

            // Taken from here : https://stackoverflow.com/questions/46155/how-to-validate-email-address-in-javascript
            var regEmail = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;

            // First Name Validation fails if the input is blank or contains invalid characters
            if (form.firstName.value =="") {
                errors.push("Please insert your First Name");
                var elem = document.getElementById("firstName");
                    elem.setAttribute("style","border: 1px solid red !important;");
                var elemError1 = document.getElementById("errorText1");    
                    elemError1.setAttribute("style","display: unset");
                var elemError2 = document.getElementById("errorText2");    
                    elemError2.setAttribute("style","display: hidden");

            } else if (!re.test(form.firstName.value)) {
                errors.push("First Name contains invalid characters!");
                var elem = document.getElementById("firstName");
                    elem.setAttribute("style","border: 1px solid red !important;");
                var elemError1 = document.getElementById("errorText1");    
                    elemError1.setAttribute("style","display: hidden");
                var elemError2 = document.getElementById("errorText2");    
                    elemError2.setAttribute("style","display: unset");

            } else {
                var elem = document.getElementById("firstName");
                    elem.setAttribute("style","border: 1px solid green !important;");
                var elemError1 = document.getElementById("errorText1");    
                    elemError1.setAttribute("style","display: hidden");
                var elemError2 = document.getElementById("errorText2");    
                    elemError2.setAttribute("style","display: hidden");

            }

            // Last Name Validation fails if the input is blank or contains invalid characters
            if (form.lastName.value =="") {
                errors.push("Please insert your Last Name");
                var elem = document.getElementById("lastName");
                    elem.setAttribute("style","border: 1px solid red !important;");
                var elemError3 = document.getElementById("errorText3");    
                    elemError3.setAttribute("style","display: unset");
                var elemError4 = document.getElementById("errorText4");    
                    elemError4.setAttribute("style","display: hidden");

            } else if (!re.test(form.lastName.value)) {
                errors.push("Last Name contains invalid characters!");
                var elem = document.getElementById("lastName");
                    elem.setAttribute("style","border: 1px solid red !important;");
                var elemError3 = document.getElementById("errorText3");    
                    elemError3.setAttribute("style","display: hidden");
                var elemError4 = document.getElementById("errorText4");    
                    elemError4.setAttribute("style","display: unset");

            } else {
                var elem = document.getElementById("lastName");
                    elem.setAttribute("style","border: 1px solid green !important;");
                var elemError3 = document.getElementById("errorText3");    
                    elemError3.setAttribute("style","display: hidden");
                var elemError4 = document.getElementById("errorText4");    
                    elemError4.setAttribute("style","display: hidden");
            }

                        // Contact Number fails if it is empty
            if (form.conNumber.value =="") {
                errors.push("Please insert your contact number");
                var elem = document.getElementById("conNumber");
                    elem.setAttribute("style","border: 1px solid red !important;");
                var elemError7 = document.getElementById("errorText7");    
                    elemError7.setAttribute("style","display: unset");
            } else {
                var elem = document.getElementById("conNumber");
                    elem.setAttribute("style","border: 1px solid green !important;");
                var elemError7 = document.getElementById("errorText7");    
                    elemError7.setAttribute("style","display: hidden");
            }    




            //Listing all the errors
            if (errors.length > 0) {
                var msg = "";

                for (var i=0; i<errors.length; i++) {
                    msg+=errors[i] + "<br>";
                }

                
                return false;
            } else if ( errors.length === 0) {
                return true;
            }        
        }

    </script>
    <script src="js/jquery.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
    </body>
</html>