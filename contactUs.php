<?php

session_start();
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
        <link rel="stylesheet" type="text/css" href="components/sidebar.com.css">
        <link rel="stylesheet" type="text/css" href="components/search.com.css">
        <link rel="stylesheet" type="text/css" href="components/userNav.com.css">
        <link rel="stylesheet" type="text/css" href="components/footer.com.css">
        <link rel="stylesheet" type="text/css" href="components/pagination.com.css">
        <link rel="stylesheet" type="text/css" href="components/posts.com.css">
        <link rel="stylesheet" type="text/css" href="components/bus.com.css">
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
        <script src='https://www.google.com/recaptcha/api.js'></script>
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

                <!-- PaginationSection starts here 
                <div class="paginationSection row">
                   <?php
                        //include 'components/pagination.com.php';
                    ?> 

                </div>
                 PaginationSection ends here 
                
                <div class="postSection row">
                    <?php
                       // include 'components/bus.com.php';
                    ?> 
                </div> -->

                <div class="infoArea" >
                    <br>
                    <div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 col-xs-12">
                        <div class="panel panel-primary">
                          <div class="panel-heading">
                            <h3 class="panel-title">Contact Us</h3>
                          </div>
                          <div class="panel-body">
                                <form>
                                    <div class="form-group">
                                        <label for="firstName">Your Email:</label>
                                        <input type="text" class="form-control" id="firstName">
                                    </div>
                                    <div class="form-group">
                                        <label for="lastName">Subject:</label>
                                        <input type="text" class="form-control" id="lastName">
                                    </div>
                                    <div class="form-group">
                                      <label for="comment">Comment:</label>
                                      <textarea class="form-control" rows="5" id="comment"></textarea>
                                    </div>
                                    <div class="g-recaptcha" data-sitekey="6LeoOjQUAAAAACL_7RWmk3FN_oQoSia3cA3Z4qJL"></div>
                                    <br>
                                    <button type="submit" class="btn btn-primary">Save Changes</button>
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
    <script src="js/jquery.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
    </body>
</html>