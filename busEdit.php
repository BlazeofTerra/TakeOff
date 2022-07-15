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
                        include 'components/userNav.com.php';
                    ?>
                </div>
                <!-- UserNav section ends here -->

                <div class="postCreationSection row">
                    <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10 col-xs-offset-1 col-sm-offset-1 col-md-offset-1 col-lg-offset-1 postCreationArea">
                        <div class="postCreationPanel panel panel-primary">
                          <div class="panel-heading">
                            <h3 class="panel-title">Business Registration</h3>
                          </div>
                          <div class="panel-body">
                            
                           

                            <!-- Post Details Section -->
                            <div class="postDetailsSection">
                              <h3 class="catSelectionHeader text-center">Basic Information</h3>
                              <div class="form-group">
                                <label for="email">Your name:</label>
                                <input type="email" class="form-control" id="email">
                              </div>
                           
                              <div class="form-group">
                                <label for="email">Contact Number:</label>
                                <input type="email" class="form-control" id="email">
                              </div>

                              <div class="form-group">
                                <label for="email">E-mail:</label>
                                <input type="email" class="form-control" id="email">
                              </div>

                              <div class="form-group">
                                <label for="email">Password:</label>
                                <input type="email" class="form-control" id="email">
                              </div>

                              <div class="form-group">
                                <label for="email">Confirm Password:</label>
                                <input type="email" class="form-control" id="email">
                              </div>

                              

                             
                            </div>


                            <div class="contactInfoSection"> 
                              <h3 class="catSelectionHeader text-center">Your Business Information</h3>
                              

                              <div class="form-group">
                                  <label for="email">Business Name :</label>
                                  <input type="email" class="form-control" id="email">
                              </div>

                              <div class="form-group">
                                  <label for="email">Business Contact Number :</label>
                                  <input type="email" class="form-control" id="email">
                              </div>

                              <div class="form-group">
                                  <label for="email">Business Email Address :</label>
                                  <input type="email" class="form-control" id="email">
                              </div>
                              <div class="form-group">
                                <label for="email">Business Address:</label>
                                <input type="email" class="form-control" id="email">
                              </div>

                              
                              <div class="form-group">
                                <label for="email">Business Postcode:</label>
                                <input type="email" class="form-control" id="email">
                              </div>

                              <div class="form-group">
                                <label for="email">Website:</label>
                                <input type="email" class="form-control" id="email">
                              </div>

                              <div class="form-group locDrop">
                                <label for="pwd">Country :</label>
                                <div class="btn-group">
                                  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
                            </div>

                            <h2 class="text-center catSelectionHeader"> Your Business Logo </h2>


                            <h2 class="text-center catSelectionHeader"> Category Selection </h2>
                            <div class="row catSelectionArea">
                              <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                <div class="dropdown">
                                  <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                    Aircraft
                                    <span class="caret"></span>
                                  </button>
                                  <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                                    <li><a href="#">Action</a></li>
                                    <li><a href="#">Another action</a></li>
                                    <li><a href="#">Something else here</a></li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="#">Separated link</a></li>
                                  </ul>
                                </div>
                              </div>

                              <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                <div class="dropdown">
                                  <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                    Aircraft
                                    <span class="caret"></span>
                                  </button>
                                  <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                                    <li><a href="#">Action</a></li>
                                    <li><a href="#">Another action</a></li>
                                    <li><a href="#">Something else here</a></li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="#">Separated link</a></li>
                                  </ul>
                                </div>
                              </div>
                            </div>

                            <div class="row catSelectionArea">
                              <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                <div class="dropdown">
                                  <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                    Aircraft
                                    <span class="caret"></span>
                                  </button>
                                  <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                                    <li><a href="#">Action</a></li>
                                    <li><a href="#">Another action</a></li>
                                    <li><a href="#">Something else here</a></li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="#">Separated link</a></li>
                                  </ul>
                                </div>
                              </div>

                              <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                <div class="dropdown">
                                  <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                    Aircraft
                                    <span class="caret"></span>
                                  </button>
                                  <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                                    <li><a href="#">Action</a></li>
                                    <li><a href="#">Another action</a></li>
                                    <li><a href="#">Something else here</a></li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="#">Separated link</a></li>
                                  </ul>
                                </div>
                              </div>
                            </div>

                            <div class="row catSelectionArea">
                              <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                <div class="dropdown">
                                  <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                    Aircraft
                                    <span class="caret"></span>
                                  </button>
                                  <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                                    <li><a href="#">Action</a></li>
                                    <li><a href="#">Another action</a></li>
                                    <li><a href="#">Something else here</a></li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="#">Separated link</a></li>
                                  </ul>
                                </div>
                              </div>

                              <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                <div class="dropdown">
                                  <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                    Aircraft
                                    <span class="caret"></span>
                                  </button>
                                  <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                                    <li><a href="#">Action</a></li>
                                    <li><a href="#">Another action</a></li>
                                    <li><a href="#">Something else here</a></li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="#">Separated link</a></li>
                                  </ul>
                                </div>
                              </div>
                            </div>

                            <div class="row catSelectionArea">
                              <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                <div class="dropdown">
                                  <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                    Aircraft
                                    <span class="caret"></span>
                                  </button>
                                  <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                                    <li><a href="#">Action</a></li>
                                    <li><a href="#">Another action</a></li>
                                    <li><a href="#">Something else here</a></li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="#">Separated link</a></li>
                                  </ul>
                                </div>
                              </div>

                              <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                <div class="dropdown">
                                  <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                    Aircraft
                                    <span class="caret"></span>
                                  </button>
                                  <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                                    <li><a href="#">Action</a></li>
                                    <li><a href="#">Another action</a></li>
                                    <li><a href="#">Something else here</a></li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="#">Separated link</a></li>
                                  </ul>
                                </div>
                              </div>
                            </div>

                            <div class="row catSelectionArea">
                              <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                <div class="dropdown">
                                  <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                    Aircraft
                                    <span class="caret"></span>
                                  </button>
                                  <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                                    <li><a href="#">Action</a></li>
                                    <li><a href="#">Another action</a></li>
                                    <li><a href="#">Something else here</a></li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="#">Separated link</a></li>
                                  </ul>
                                </div>
                              </div>

                              <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                <div class="dropdown">
                                  <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                    Helicopter - Piston Engine
                                    <span class="caret"></span>
                                  </button>
                                  <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                                    <li><a href="#">Action</a></li>
                                    <li><a href="#">Another action</a></li>
                                    <li><a href="#">Something else here</a></li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="#">Separated link</a></li>
                                  </ul>
                                </div>
                              </div>
                            </div>
                                
                             <h2 class="text-center catSelectionHeader"> Pictures of your Business (max 6) </h2>

                             <h2 class="text-center catSelectionHeader"> About your Business (Max 10 000 Chatacters) </h2> 
                            <!-- End Categories Section -->

                            <div class="input-group">
                              <span class="input-group-addon">
                                <input type="checkbox" aria-label="...">
                              </span>
                              <p> I have read and agree to the terms and conditions</p>
                            </div><!-- /input-group -->
                            <br>
                            <button type="button" class="btn btn-primary text-center submitButton">Save Changes</button>
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