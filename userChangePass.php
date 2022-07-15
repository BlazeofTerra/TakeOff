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

        <link href="css/userReg.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
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
                                  <h1 class="text-center">Change Password</h1>
                            </div>
                            <div class="panel-body">
                                <div class="errorArea">
                                    <div class="col-lg-12 text-center">
                                      <p class="text-center errorText" id="errorText7">Please insert your current password</p> 
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

                                    


                                </div>
                                <form action="includes/editPw.inc.php" method="POST" onsubmit="return checkForm(this); ">
                                    <div class="form-group">
                                        <label for="firstName">Current Password:</label>
                                        <input type="text" class="form-control" id="currPass" name="currPass">
                                    </div>
                                    <div class="form-group">
                                        <label for="pwd">New Password:</label>
                                        <input type="password" class="form-control" id="pwd2" name="pwd">
                                    </div>
                                    <div class="form-group">
                                        <label for="conPwd">Confirm New Password:</label>
                                        <input type="password" class="form-control" id="conPwd" name="conPwd">
                                    </div>
                                    <button type="submit" name="submit" class="btn btn-default">Change Password</button>
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



    <script>
        // Password validation on loss of focus
        currPass.onblur = function() {
            

            // Password Validation
            if (this.value == "" || document.getElementById("currPass").value == "") {
                var elem = document.getElementById("currPass");
                    elem.setAttribute("style","border: 1px solid red !important;");
                var elemError7 = document.getElementById("errorText7");    
                    elemError7.setAttribute("style","display: unset");  
                
            } else {
                var elem = document.getElementById("currPass");
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



        //This is purely backup Validation
        function checkForm(form) {

            // Taken from here :  http://www.the-art-of-web.com/javascript/validate/
            var errors=[];


            var pwdLength = document.getElementById("pwd2").value.length;
            var conPwdLength = document.getElementById("conPwd").value.length;
            
             // Password Validation
            if (form.currPass.value == "" || document.getElementById("currPass").value == "") {
                var elem = document.getElementById("currPass");
                    elem.setAttribute("style","border: 1px solid red !important;");
                var elemError7 = document.getElementById("errorText7");    
                    elemError7.setAttribute("style","display: unset");  
                
            } else {
                var elem = document.getElementById("currPass");
                    elem.setAttribute("style","border: 1px solid green !important;");
                var elemError7 = document.getElementById("errorText7");    
                    elemError7.setAttribute("style","display: hidden");  
            }



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
    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
    </body>
</html>