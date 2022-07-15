<?php

session_start();

include_once 'includes/dbh2.inc.php';


    $sql = "SELECT * FROM offices WHERE id = 9";
    $result = mysqli_query($conn, $sql);

    if($resultCheck = 0){
        header("Location: ../userReg.php?signup=usertanken");
        exit();

    } else {
        if ($row = mysqli_fetch_assoc($result)) {
            $_SESSION['offName'] = $row['offname'];
            $_SESSION['phone'] = $row['phone'];
            $_SESSION['fax'] = $row['fax'];
            $_SESSION['pobox'] = $row['pobox'];
            $_SESSION['address'] = $row['address'];
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
        <link href="css/busReg.css" rel="stylesheet">
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
                        include 'components/userNavNotLogged.com.php';
                    ?>
                </div>
                <!-- UserNav section ends here -->

                <div class="userRegSection row">
                    <div class="col-xs-8 col-sm-8 col-md-6 col-lg-6 col-xs-offset-2 col-sm-offset-2 col-md-offset-3 col-lg-offset-3 userRegArea">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                  <h1 class="text-center">Individual Account Creation</h1>
                            </div>
                            <div class="panel-body">
                                <form  action="includes/officeEdit.inc.php" method="POST">
                                    <div class="form-group">
                                        <label for="firstName">Office Name:</label>
                                        <input type="text" class="form-control" id="offName" name="offName"
                                         value="<?php echo("{$_SESSION['offName']}"); ?>">
                                    </div>

                                    <div class="form-group locDrop">
                                        <label for="pwd">Location:</label>
                                        <div class="btn-group">
                                          <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                           id="location" name="location">
                                            South Africa (Kwa Zulu Natal) <span class="caret"></span>  
                                          </button>
                                          <ul class="dropdown-menu">
                                            <li><a href="#">South Africa (All) </a></li>
                                            <li role="separator" class="divider"></li>
                                            <li><a href="#">South Africa (Kwa Zulu Natal) </a></li>
                                            <li><a href="#">South Africa (Eastern Cape) </a></li>
                                            <li><a href="#">South Africa (Free State) </a></li>
                                            <li><a href="#">South Africa (Gauteng) </a></li>
                                            <li><a href="#">South Africa (Limpopo) </a></li>
                                            <li><a href="#">South Africa (Mpumalanga)</a></li>
                                            <li><a href="#">South Africa (Northern Cape) </a></li>
                                            <li><a href="#">South Africa (North West) </a></li>
                                            <li><a href="#">South Africa (Western Cape) </a></li>
                                            <li role="separator" class="divider"></li>
                                            <li><a href="#">Botswana </a></li>
                                            <li><a href="#">Namibia </a></li>
                                            <li><a href="#">Zimbabwe </a></li>
                                            <li><a href="#">Mozambique </a></li>
                                            <li><a href="#">Other (All)</a></li>
                                            <li role="separator" class="divider"></li>
                                            <li><a href="#">Other (Africa) </a></li>
                                            <li><a href="#">Other (Europe) </a></li>
                                            <li><a href="#">Other (North America) </a></li>
                                            <li><a href="#">Other (Australia) </a></li>
                                            <li><a href="#">Other (South America) </a></li>
                                            <li><a href="#">Other (Asia) </a></li>
                                          </ul>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="lastName">Phone Number:</label>
                                        <input type="text" class="form-control" id="phone" name="phone"
                                        value="<?php echo("{$_SESSION['phone']}"); ?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="email">Fax:</label>
                                        <input type="text" class="form-control" id="fax" name="fax"
                                        value="<?php echo("{$_SESSION['fax']}"); ?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="conNumber">Physical Address:</label>
                                        <input type="text" class="form-control" id="address" name="address"
                                        value="<?php echo("{$_SESSION['address']}"); ?>">
                                    </div>

                                    <div class="form-group">
                                        <label for="pobox">Post Code:</label>
                                        <input type="text" class="form-control" id="pobox" name="pobox"
                                        value="<?php echo("{$_SESSION['pobox']}"); ?>">
                                    </div>
                                    
                                    <button type="submit" name="submit" class="btn btn-default">Register</button>
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