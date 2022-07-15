<?php require("includes/dbh.inc.php"); ?>
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
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
		<script src="js/jquery.js"></script>
    	<script>
			$(document).ready(function() {
				$("#email2").focusout(function() {
					var email = $("#email2").val().trim();
					
					if(email !== "") {
						$.post("ajax/emailCheck.php", {email: email})
						.done(function(data) {
							if(data == 1) {
								var elem = document.getElementById("email2");
				                    elem.setAttribute("style","border: 1px solid red !important;");
				                var elemError12 = document.getElementById("errorText12");    
				                    elemError12.setAttribute("style","display: unset");
							} else {
                                var elemError12 = document.getElementById("errorText12");    
                                    elemError12.setAttribute("style","display: hidden");           
                            }
				               /* var elem = document.getElementById("email2");
				                    elem.setAttribute("style","border: 1px solid green !important;");
				                var elemError12 = document.getElementById("errorText12");    
				                    elemError12.setAttribute("style","display: hidden");*/
							
						});
					}
				});
			});
		</script>
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
                        include 'components/userNavNotLogged.com.php';
                    ?>
                </div>
                <!-- UserNav section ends here -->

                <div class="userRegSection row" >
                    <div class="col-xs-8 col-sm-8 col-md-6 col-lg-6 col-xs-offset-2 col-sm-offset-2 col-md-offset-3 col-lg-offset-3 userRegArea">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                  <h1 class="text-center">Individual Account Creation</h1>
                            </div>
                            <div class="panel-body">
                                <div class="errorArea">
                                    <p>2 Known Issues : When Inserting - It does not check whether the Mask OR the email is taken AND Look into making the Password and Confirm Password Errors just a bit better.</p>
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
                                      <p class="text-center errorText" id="errorText5">Please insert your Email</p>  
                                    </div>
                                    <div class="col-lg-12 text-center">
                                      <p class="text-center errorText" id="errorText6">Your Email is invalid</p> 
                                    </div>
                                    <div class="col-lg-12 text-center">
                                      <p class="text-center errorText" id="errorText12">Email already in use</p> 
                                    </div>
                                    <div class="col-lg-12 text-center">
                                      <p class="text-center errorText" id="errorText7">Please insert your contact number</p>  
                                    </div>
                                    <div class="col-lg-12 text-center">
                                      <p class="text-center errorText" id="errorText8">Please fill out both Password fields</p> 
                                    </div>
                                    <div class="col-lg-12 text-center">
                                      <p class="text-center errorText" id="errorText9">Please make sure your password is bigger than 6 characters</p> 
                                    </div>
                                    <div class="col-lg-12 text-center">
                                      <p class="text-center errorText" id="errorText10">Passwords do not match</p> 
                                    </div>

                                    <div class="col-lg-12 text-center">
                                      <p class="text-center errorText" id="errorText11">Please accept the Terms and Conditions</p> 
                                    </div>
                                    


                                </div>
                                <form action="includes/signup.inc.php" method="POST" onsubmit="return checkForm(this); ">
                                    <div class="form-group">
                                        <label for="firstName">First Name:</label>
                                        <input type="text" class="form-control" placeholder="First Name" id="firstName" name="firstName">
                                    </div>
                                    <div class="form-group">
                                        <label for="lastName">Last Name:</label>
                                        <input type="text" class="form-control" placeholder="Last Name" id="lastName" name="lastName">
                                    </div>
                                    <div class="form-group">
                                        <label for="email">Email address:</label>
                                        <input type="email" class="form-control" placeholder="Email" id="email2" name="email">
                                    </div>
                                    <div class="form-group">
                                        <label for="conNumber">Contact Number:</label>
                                        <input type="text" class="form-control" placeholder="Contact Number" id="conNumber" name="conNumber">
                                    </div>
                                    <div class="form-group">
                                        <label for="pwd">Password:</label>
                                        <input type="password" class="form-control" id="pwd2" name="pwd">
                                    </div>
                                    <div class="form-group">
                                        <label for="conPwd">Confirm Password:</label>
                                        <input type="password" class="form-control" id="conPwd" name="conPwd">
                                    </div>
                                    <div class="input-group">
                                      <span class="input-group-addon" id="tscsCbGroup">
                                        <input type="checkbox" id="tscsCb" name="tscsCb" aria-label="...">
                                      </span>
                                      <p id="tscsCbText"> I have read and agree to the terms and conditions</p>
                                    </div><!-- /input-group -->
                                    <button type="submit" name="submit" class="btn btn-default" id="regButton">Register</button>
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



        // Last Name validation on loss of focus
        email2.onblur = function() {

            // Taken from here : https://stackoverflow.com/questions/46155/how-to-validate-email-address-in-javascript
            var regEmail = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;


            // Email fails if the input is blank or is invalid 
            if (this.value ==""){
                var elem = document.getElementById("email2");
                    elem.setAttribute("style","border: 1px solid red !important;");
                var elemError5= document.getElementById("errorText5");    
                    elemError5.setAttribute("style","display: unset");
                var elemError6 = document.getElementById("errorText6");    
                    elemError6.setAttribute("style","display: hidden");

            } else if (!regEmail.test(this.value)) {
                var elem = document.getElementById("email2");
                    elem.setAttribute("style","border: 1px solid red !important;");
                var elemError5= document.getElementById("errorText5");    
                    elemError5.setAttribute("style","display: hidden");
                var elemError6 = document.getElementById("errorText6");    
                    elemError6.setAttribute("style","display: unset");

            } else {
                var elem = document.getElementById("email2");
                    elem.setAttribute("style","border: 1px solid green !important;");
                var elemError5 = document.getElementById("errorText5");    
                    elemError5.setAttribute("style","display: hidden");
                var elemError6 = document.getElementById("errorText6");    
                    elemError6.setAttribute("style","display: hidden");
            }
        };


        // Contact Number validation on loss of focus
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


        // Password validation on loss of focus
        pwd2.onblur = function() {

            var pwdLength = document.getElementById("pwd2").value.length;
            var conPwdLength = document.getElementById("conPwd").value.length;
            

            // Password Validation
            if (this.value == "" || document.getElementById("conPwd").value == "") {
                var elem = document.getElementById("pwd2");
                    elem.setAttribute("style","border: 1px solid red !important;");
                var elem2 = document.getElementById("conPwd");
                    elem2.setAttribute("style","border: 1px solid red !important;");
                var elemError8 = document.getElementById("errorText8");    
                    elemError8.setAttribute("style","display: unset");
                var elemError9 = document.getElementById("errorText9");    
                    elemError9.setAttribute("style","display: hidden");
                var elemError10 = document.getElementById("errorText10");    
                    elemError10.setAttribute("style","display: hidden");    
                
            } else if(pwdLength < 6 || conPwdLength < 6) {
                var elem = document.getElementById("pwd2");
                    elem.setAttribute("style","border: 1px solid red !important;");
                var elem2 = document.getElementById("conPwd");
                    elem2.setAttribute("style","border: 1px solid red !important;");
                var elemError8 = document.getElementById("errorText8");    
                    elemError8.setAttribute("style","display: hidden");
                var elemError9 = document.getElementById("errorText9");    
                    elemError9.setAttribute("style","display: unset");
                var elemError10 = document.getElementById("errorText10");    
                    elemError10.setAttribute("style","display: hidden");

            }else if(this.value != document.getElementById("conPwd").value) {
                var elem = document.getElementById("pwd2");
                    elem.setAttribute("style","border: 1px solid red !important;");
                var elem2 = document.getElementById("conPwd");
                    elem2.setAttribute("style","border: 1px solid red !important;");
                var elemError8 = document.getElementById("errorText8");    
                    elemError8.setAttribute("style","display: hidden");
                var elemError9 = document.getElementById("errorText9");    
                    elemError9.setAttribute("style","display: hidden");
                var elemError10 = document.getElementById("errorText10");    
                    elemError10.setAttribute("style","display: unset");
            } else {
                var elem = document.getElementById("pwd2");
                    elem.setAttribute("style","border: 1px solid green !important;");
                var elem2 = document.getElementById("conPwd");
                    elem2.setAttribute("style","border: 1px solid green !important;");
                var elemError8 = document.getElementById("errorText8");    
                    elemError8.setAttribute("style","display: hidden");
                var elemError9 = document.getElementById("errorText9");    
                    elemError9.setAttribute("style","display: hidden");
                var elemError10 = document.getElementById("errorText10");    
                    elemError10.setAttribute("style","display: hidden");
            } 
        };


        // Password validation on loss of focus
        conPwd.onblur = function() {

            var pwdLength = document.getElementById("pwd2").value.length;
            var conPwdLength = document.getElementById("conPwd").value.length;
            

            // Password Validation
            if (this.value == "" || document.getElementById("pwd2").value == "") {
                var elem = document.getElementById("pwd2");
                    elem.setAttribute("style","border: 1px solid red !important;");
                var elem2 = document.getElementById("conPwd");
                    elem2.setAttribute("style","border: 1px solid red !important;");
                var elemError8 = document.getElementById("errorText8");    
                    elemError8.setAttribute("style","display: unset");
                var elemError9 = document.getElementById("errorText9");    
                    elemError9.setAttribute("style","display: hidden");
                var elemError10 = document.getElementById("errorText10");    
                    elemError10.setAttribute("style","display: hidden");

                
            } else if(pwdLength < 6 || conPwdLength < 6) {
                var elem = document.getElementById("pwd2");
                    elem.setAttribute("style","border: 1px solid red !important;");
                var elem2 = document.getElementById("conPwd");
                    elem2.setAttribute("style","border: 1px solid red !important;");
                var elemError8 = document.getElementById("errorText8");    
                    elemError8.setAttribute("style","display: hidden");
                var elemError9 = document.getElementById("errorText9");    
                    elemError9.setAttribute("style","display: unset");
                var elemError10 = document.getElementById("errorText10");    
                    elemError10.setAttribute("style","display: hidden");

            }else if(this.value != document.getElementById("pwd2").value) {
                var elem = document.getElementById("pwd2");
                    elem.setAttribute("style","border: 1px solid red !important;");
                var elem2 = document.getElementById("conPwd");
                    elem2.setAttribute("style","border: 1px solid red !important;");
                var elemError8 = document.getElementById("errorText8");    
                    elemError8.setAttribute("style","display: hidden");
                var elemError9 = document.getElementById("errorText9");    
                    elemError9.setAttribute("style","display: hidden");
                var elemError10 = document.getElementById("errorText10");    
                    elemError10.setAttribute("style","display: unset");
            } else {
                var elem = document.getElementById("pwd2");
                    elem.setAttribute("style","border: 1px solid green !important;");
                var elem2 = document.getElementById("conPwd");
                    elem2.setAttribute("style","border: 1px solid green !important;");
                var elemError8 = document.getElementById("errorText8");    
                    elemError8.setAttribute("style","display: hidden");
                var elemError9 = document.getElementById("errorText9");    
                    elemError9.setAttribute("style","display: hidden");
                var elemError10 = document.getElementById("errorText10");    
                    elemError10.setAttribute("style","display: hidden");
            } 
        };



        // Checkbox validation on loss of focus
        tscsCb.onblur = function() {

            // Checkbox Validation
            if (!this.checked) {
                var elem = document.getElementById("tscsCbGroup");
                    elem.setAttribute("style","border: 1px solid red !important;");
                var elem2 = document.getElementById("tscsCbText");
                    elem2.setAttribute("style","border: 1px solid red !important; border-left: none !important;");
                var elemError11 = document.getElementById("errorText11");    
                    elemError11.setAttribute("style","display: unset");
            } else {
                var elem = document.getElementById("tscsCbGroup");
                    elem.setAttribute("style","border: 1px solid green !important;");
                var elem2 = document.getElementById("tscsCbText");
                    elem2.setAttribute("style","border: 1px solid green !important; border-left: none !important;");
                var elemError11 = document.getElementById("errorText11");    
                    elemError11.setAttribute("style","display: hidden");
            } 
        };


        var errors=[];
        var text = "";
        //This is purely backup Validation
        function checkForm(form) {

            // Taken from here :  http://www.the-art-of-web.com/javascript/validate/
            

            // Regular Expression
            var re = /^[\w ]+$/;

            // Taken from here : https://stackoverflow.com/questions/46155/how-to-validate-email-address-in-javascript
            var regEmail = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;

			$(document).ready(function() {
				var email = $("#email2").val().trim();
				
				if(email !== "") {
					$.post("ajax/emailCheck.php", {email: email})
					.done(function(data) {
						if(data == 1) {
							var elem = document.getElementById("email2");
			                    elem.setAttribute("style","border: 1px solid red !important;");
			                var elemError12 = document.getElementById("errorText12");    
			                    elemError12.setAttribute("style","display: unset");

						} else {
                            var elemError12 = document.getElementById("errorText12");    
                            elemError12.setAttribute("style","display: hidden");      
                        }
			               /* var elem = document.getElementById("email2");
			                    elem.setAttribute("style","border: 1px solid green !important;");
			                var elemError12 = document.getElementById("errorText12");    
			                    elemError12.setAttribute("style","display: hidden");*/
						
					});
				}
			});

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

            // Email fails if the input is blank or is invalid 
            if (form.email.value ==""){
                errors.push("Please insert your Email");
                var elem = document.getElementById("email2");
                    elem.setAttribute("style","border: 1px solid red !important;");
                var elemError5= document.getElementById("errorText5");    
                    elemError5.setAttribute("style","display: unset");
                var elemError6 = document.getElementById("errorText6");    
                    elemError6.setAttribute("style","display: hidden");

            } else if (!regEmail.test(form.email.value)) {
                errors.push("Your Email is invalid");
                var elem = document.getElementById("email2");
                    elem.setAttribute("style","border: 1px solid red !important;");
                var elemError5= document.getElementById("errorText5");    
                    elemError5.setAttribute("style","display: hidden");
                var elemError6 = document.getElementById("errorText6");    
                    elemError6.setAttribute("style","display: unset");

            } else {
                var elem = document.getElementById("email2");
                    elem.setAttribute("style","border: 1px solid green !important;");
                var elemError5 = document.getElementById("errorText5");    
                    elemError5.setAttribute("style","display: hidden");
                var elemError6 = document.getElementById("errorText6");    
                    elemError6.setAttribute("style","display: hidden");
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


            var pwdLength = document.getElementById("pwd2").value.length;
            var conPwdLength = document.getElementById("conPwd").value.length;
            

            // Password Validation
            if (form.pwd2.value == "" || form.conPwd.value == "") {
                errors.push("Please fill out both Password fields");
                var elem = document.getElementById("pwd2");
                    elem.setAttribute("style","border: 1px solid red !important;");
                var elem2 = document.getElementById("conPwd");
                    elem2.setAttribute("style","border: 1px solid red !important;");
                var elemError8 = document.getElementById("errorText8");    
                    elemError8.setAttribute("style","display: unset");
                var elemError9 = document.getElementById("errorText9");    
                    elemError9.setAttribute("style","display: hidden");
                var elemError10 = document.getElementById("errorText10");    
                    elemError10.setAttribute("style","display: hidden");

                
            } else if(pwdLength < 6 || conPwdLength < 6) {
                
                errors.push("Please make sure your password is bigger than 6 characters");
                var elem = document.getElementById("pwd2");
                    elem.setAttribute("style","border: 1px solid red !important;");
                var elem2 = document.getElementById("conPwd");
                    elem2.setAttribute("style","border: 1px solid red !important;");
                var elemError8 = document.getElementById("errorText8");    
                    elemError8.setAttribute("style","display: hidden");
                var elemError9 = document.getElementById("errorText9");    
                    elemError9.setAttribute("style","display: unset");
                var elemError10 = document.getElementById("errorText10");    
                    elemError10.setAttribute("style","display: hidden");

            }else if(form.pwd2.value != form.conPwd.value) {
                errors.push("Passwords do not match");
                var elem = document.getElementById("pwd2");
                    elem.setAttribute("style","border: 1px solid red !important;");
                var elem2 = document.getElementById("conPwd");
                    elem2.setAttribute("style","border: 1px solid red !important;");
                var elemError8 = document.getElementById("errorText8");    
                    elemError8.setAttribute("style","display: hidden");
                var elemError9 = document.getElementById("errorText9");    
                    elemError9.setAttribute("style","display: hidden");
                var elemError10 = document.getElementById("errorText10");    
                    elemError10.setAttribute("style","display: unset");
            } else {
                var elem = document.getElementById("pwd2");
                    elem.setAttribute("style","border: 1px solid green !important;");
                var elem2 = document.getElementById("conPwd");
                    elem2.setAttribute("style","border: 1px solid green !important;");
                var elemError8 = document.getElementById("errorText8");    
                    elemError8.setAttribute("style","display: hidden");
                var elemError9 = document.getElementById("errorText9");    
                    elemError9.setAttribute("style","display: hidden");
                var elemError10 = document.getElementById("errorText10");    
                    elemError10.setAttribute("style","display: hidden");
            }


            // Checkbox Validation
            if (!form.tscsCb.checked) {
                errors.push("Please accept the terms and conditions");
                var elem = document.getElementById("tscsCbGroup");
                    elem.setAttribute("style","border: 1px solid red !important;");
                var elem2 = document.getElementById("tscsCbText");
                    elem2.setAttribute("style","border: 1px solid red !important; border-left: none !important;");
                var elemError11 = document.getElementById("errorText11");    
                    elemError11.setAttribute("style","display: unset");
            } else {
                var elem = document.getElementById("tscsCbGroup");
                    elem.setAttribute("style","border: 1px solid green !important;");
                var elem2 = document.getElementById("tscsCbText");
                    elem2.setAttribute("style","border: 1px solid green !important; border-left: none !important;");
                var elemError11 = document.getElementById("errorText11");    
                    elemError11.setAttribute("style","display: hidden");
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
    <!-- jQuery -->
    
    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
    </body>
</html>