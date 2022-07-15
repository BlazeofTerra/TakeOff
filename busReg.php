<?php
  if(isset($_POST['submit'])) {
    session_start();
    require('includes/dbh.inc.php');

    $allowed = array('jpg', 'jpeg', 'png');

    //Image Handler
    foreach ($_FILES as $key => $file) {
      $name = $key;
      $size = $file['size'];
      $type = $file['type'];
      $tmpName = $file['tmp_name'];
      $fileExt = explode('.', $fileName );
      $fileActualExtension = strtolower(end($fileExt));

      $error = $file['error'];

      echo $name;
      echo "<br>";
      // Logo Image Sections
      echo "Size: ".$size;
      echo "<br>";
      echo "Type: ".$type;
      echo "<br>";
      echo "tmpName: ".$tmpName;
      echo "<br><br>";

      /*$fileName = $_FILES['logo']['name'];
      $fileTmpName = $_FILES['logo']['tmp_name'];
      $fileSize = $_FILES['logo']['size'];
      $fileError = $_FILES['logo']['error'];
      $fileType = $_FILES['logo']['type'];*/

      if($error != 0 and $error != 4) {
        echo $error;
      } else {
        if(in_array($fileActualExtension, $allowed)) {
          //If there is an error uploading this file
          if($fileError === 0) {

            //Checking for File Size
            if($fileSize < 50000000) {

              //Creating the name for the file
              $fileNameNew = "profile".$id.".".$fileActualExtension;
              $fileDestination = 'uploads/'.$fileNameNew;

              //Function that uploads the file
              move_uploaded_file($fileTmpName, $fileDestination);
              $sql = "UPDATE profileimg SET status = 0 WHERE userid='$id';";
              $result = mysqli_query($conn, $sql);
              header("Location: index.php?success");
            } else {
                echo "Your file is too big.";
            }
          } else {
              echo "There was an error uploading your file.";
          }
        } else {
            echo "You cannot upload files of this type.";
        }
      }
    }

    //Decide which files to allow
    /*$fileExt = explode('.', $fileName );
    $fileActualExtension = strtolower(end($fileExt));
    $allowed = array('jpg', 'jpeg', 'png');*/

    //Basic Account Information
    ///////////////////////////////////////////////////////////////////
    ///////////////////////////////////////////////////////////////////
    $accName = mysqli_real_escape_string($conn,$_POST['accName']);
    $accCon = mysqli_real_escape_string($conn,$_POST['accCon']);
    $accEmail = mysqli_real_escape_string($conn,$_POST['accEmail']);
    $accPw1 = mysqli_real_escape_string($conn,$_POST['accPw1']);

    echo "<br>Account Information :<br>";
    echo "Account Owner Name : ".$accName. "<br>";
    echo "Account Contact Number : ".$accCon. "<br>";
    echo "Account Email : ".$accEmail. "<br>";
    echo "Account Password : ".$accPw1. "<br>";


    //Business Account Information
    ///////////////////////////////////////////////////////////////////
    ///////////////////////////////////////////////////////////////////
    $busName = mysqli_real_escape_string($conn,$_POST['busName']);
    $busConNum = mysqli_real_escape_string($conn,$_POST['busConNum']);
    $busEmail = mysqli_real_escape_string($conn,$_POST['busEmail']);
    $busAddress = mysqli_real_escape_string($conn,$_POST['busAddress']);
    $busPost = mysqli_real_escape_string($conn,$_POST['busPost']);
    $busAddress = mysqli_real_escape_string($conn,$_POST['busAddress']);
    $busWebSite = mysqli_real_escape_string($conn,$_POST['busWebSite']);
    $sel1 = mysqli_real_escape_string($conn,$_POST['sel1']);

    echo "<br>Account Business Information :<br>";
    echo "Account Business Name : ".$busName. "<br>";
    echo "Account Business Contact Number : ".$busConNum. "<br>";
    echo "Account Business Email : ".$busEmail. "<br>";
    echo "Account Business Address : ".$busAddress. "<br>";
    echo "Account Business PostalAddress : ".$busPost. "<br>";
    echo "Account Business Website : ".$busWebSite. "<br>";
    echo "Account Business Location : ".$sel1. "<br>";

    //Account Business Cats and SubCats
    ///////////////////////////////////////////////////////////////////
    ///////////////////////////////////////////////////////////////////
    $cat1 = mysqli_real_escape_string($conn,$_POST['cat1']);
    $subcat1 = mysqli_real_escape_string($conn,$_POST['subcat1']);

    $cat2 = mysqli_real_escape_string($conn,$_POST['cat2']);
    $subcat2 = mysqli_real_escape_string($conn,$_POST['subcat2']);

    $cat3 = mysqli_real_escape_string($conn,$_POST['cat3']);
    $subcat3 = mysqli_real_escape_string($conn,$_POST['subcat3']);

    $cat4 = mysqli_real_escape_string($conn,$_POST['cat4']);
    $subcat4 = mysqli_real_escape_string($conn,$_POST['subcat4']);

    $cat5 = mysqli_real_escape_string($conn,$_POST['cat5']);
    $subcat5 = mysqli_real_escape_string($conn,$_POST['subcat5']);

    echo "<br>Account Business Cats and SubCats :<br>";
    echo "Account Business Cat and SubCat 1 : ".$cat1." ".$subcat1. "<br>";
    echo "Account Business Cat and SubCat 2 : ".$cat2." ".$subcat2. "<br>";
    echo "Account Business Cat and SubCat 3 : ".$cat3." ".$subcat3. "<br>";
    echo "Account Business Cat and SubCat 4 : ".$cat4." ".$subcat4. "<br>";
    echo "Account Business Cat and SubCat 5 : ".$cat5." ".$subcat5. "<br>";
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
        <!-- tinyMCE  -->
        <script src="components/tinymce/jquery.tinymce.min.js"></script>
        <script src="components/tinymce/tinymce.min.js"></script>

        <!-- tinyMCE settings -->
        <script>
          tinymce.init({
            menubar: false,
            statusbar: false,
            mode : "specific_textareas",
                editor_selector : "description",
            height : "500",
                plugins: "paste hr",
        
                toolbar1: "undo redo | bold italic underline strikethrough hr | alignleft aligncenter alignright alignjustify | bullist numlist | formatselect"
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
                        include 'components/userNav.com.php';
                    ?>
                </div>
                <!-- UserNav section ends here -->
                  

                      <form action='' method='POST' enctype='multipart/form-data'>
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
                                    <label for="accName">Your name:</label>
                                    <input type="text" class="form-control" id="accName" name ="accName">
                                  </div>
                               
                                  <div class="form-group">
                                    <label for="accCon">Contact Number:</label>
                                    <input type="text" class="form-control" id="accCon" name ="accCon">
                                  </div>

                                  <div class="form-group">
                                    <label for="accEmail">E-mail:</label>
                                    <input type="email" class="form-control" id="accEmail" name ="accEmail">
                                  </div>

                                  <div class="form-group">
                                    <label for="accPw1">Password:</label>
                                    <input type="password" class="form-control" id="accPw1" name ="accPw1">
                                  </div>

                                  <div class="form-group">
                                    <label for="accPw2">Confirm Password:</label>
                                    <input type="password" class="form-control" id="accPw2" name ="accPw2">
                                  </div>
                                </div>

                                <div class="contactInfoSection"> 
                                  <h3 class="catSelectionHeader text-center">Your Business Information</h3>
                                  

                                  <div class="form-group">
                                      <label for="busName">Business Name :</label>
                                      <input type="text" class="form-control" id="busName" name ="busName">
                                  </div>

                                  <div class="form-group">
                                      <label for="busConNum">Business Contact Number :</label>
                                      <input type="text" class="form-control" id="busConNum" name="busConNum">
                                  </div>

                                  <div class="form-group">
                                      <label for="email">Business Email Address :</label>
                                      <input type="email" class="form-control" id="email" name="busEmail">
                                  </div>
                                  <div class="form-group">
                                    <label for="busAddress">Business Address:</label>
                                    <input type="text" class="form-control" id="busAddress" name="busAddress">
                                  </div>

                                  
                                  <div class="form-group">
                                    <label for="busPost">Business Postcode:</label>
                                    <input type="text" class="form-control" id="busPost" name="busPost">
                                  </div>

                                  <div class="form-group">
                                    <label for="busWebSite">Website:</label>
                                    <input type="text" class="form-control" id="busWebSite" name="busWebSite">
                                  </div>

                                  <div class="form-group locDrop">
                                    <label for="sel1">Location Selection:</label>
                                      <select class="form-control" id="sel1" name="sel1">
                                        <option>South Africa (All)</option>
                                        <option>South Africa (Kwa Zulu Natal)</option>
                                        <option>South Africa (Free State)</option>
                                        <option>South Africa (Gauteng)</option>
                                        <option>South Africa (Limpopo)</option>
                                        <option>South Africa (Mpumalanga)</option>
                                        <option>South Africa (Northern Cape)</option>
                                        <option>South Africa (North West)</option>
                                        <option>South Africa (Western Cape)</option>
                                        <option>Botswana</option>
                                        <option>Namibia</option>
                                        <option>Zimbabwe</option>
                                        <option>Mozambique</option>
                                        <option>Other (All)</option>
                                        <option>Other (Africa)</option>
                                        <option>Other (Asia)</option>
                                        <option>Other (Europe)</option>
                                        <option>Other (North America)</option>
                                        <option>Other (Australasia)</option>
                                        <option>Other (South America)</option>                                        
                                      </select>
                                  </div>
                                </div>

                                <div class="busLogo">
                                <h2 class="text-center catSelectionHeader"> Your Business Logo </h2>
                                <input type='file' name='logo'>
                                </div>


                                <h2 class="text-center catSelectionHeader"> Category Selection </h2>
                                  <div class="row catSelectionArea">
                                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                      <label for="sel1">Category:</label>
                                      <select class="form-control" id="sel1" name="cat1">
                                        <!-- Still have to load this section up -->
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                        <option>6</option>
                                        <option>7</option>
                                        <option>8</option>
                                        <option>9</option>
                                      </select>
                                    </div>

                                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                      <label for="sel1">Business Sub Category:</label>
                                      <select class="form-control" id="sel1" name="subcat1">
                                        <option>A</option>
                                        <option>B</option>
                                        <option>C</option>
                                        <option>D</option>
                                        <option>E</option>
                                        <option>F</option>
                                        <option>G</option>
                                        <option>H</option>
                                        <option>I</option>
                                      </select>
                                    </div>
                                  </div>

                                  <div class="row catSelectionArea">
                                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                      <select class="form-control" id="sel1" name="cat2">
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                        <option>6</option>
                                        <option>7</option>
                                        <option>8</option>
                                        <option>9</option>
                                      </select>
                                    </div>

                                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                      <select class="form-control" id="sel1" name="subcat2">
                                        <option>A</option>
                                        <option>B</option>
                                        <option>C</option>
                                        <option>D</option>
                                        <option>E</option>
                                        <option>F</option>
                                        <option>G</option>
                                        <option>H</option>
                                        <option>I</option>
                                      </select>
                                    </div>
                                  </div>

                                  <div class="row catSelectionArea">
                                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                      <select class="form-control" id="sel1" name="cat3">
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                        <option>6</option>
                                        <option>7</option>
                                        <option>8</option>
                                        <option>9</option>
                                      </select>
                                    </div>

                                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                      <select class="form-control" id="sel1" name="subcat3">
                                        <option>A</option>
                                        <option>B</option>
                                        <option>C</option>
                                        <option>D</option>
                                        <option>E</option>
                                        <option>F</option>
                                        <option>G</option>
                                        <option>H</option>
                                        <option>I</option>
                                      </select>
                                    </div>
                                  </div>

                                  <div class="row catSelectionArea">
                                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                      <select class="form-control" id="sel1" name="cat4">
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                        <option>6</option>
                                        <option>7</option>
                                        <option>8</option>
                                        <option>9</option>
                                      </select>
                                    </div>

                                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                      <select class="form-control" id="sel1" name="subcat4">
                                        <option>A</option>
                                        <option>B</option>
                                        <option>C</option>
                                        <option>D</option>
                                        <option>E</option>
                                        <option>F</option>
                                        <option>G</option>
                                        <option>H</option>
                                        <option>I</option>
                                      </select>
                                    </div>
                                  </div>

                                  <div class="row catSelectionArea">
                                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                      <select class="form-control" id="sel1" name="cat5">
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                        <option>6</option>
                                        <option>7</option>
                                        <option>8</option>
                                        <option>9</option>
                                      </select>
                                    </div>

                                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                      <select class="form-control" id="sel1" name="subcat5">
                                        <option>A</option>
                                        <option>B</option>
                                        <option>C</option>
                                        <option>D</option>
                                        <option>E</option>
                                        <option>F</option>
                                        <option>G</option>
                                        <option>H</option>
                                        <option>I</option>
                                      </select>
                                    </div>
                                  </div>

                                  <h2 class="text-center catSelectionHeader"> Pictures of your Business (max 6) </h2>
                                  <input type='file' name='car1' accept="image/*" size="200000">
                                  <input type='file' name='car2' accept="image/*" size="200000">
                                  <input type='file' name='car3' accept="image/*" size="200000">
                                  <input type='file' name='car4' accept="image/*" size="200000">
                                  <input type='file' name='car5' accept="image/*" size="200000">
                                  <input type='file' name='car6' accept="image/*" size="200000">
                                  <h2 class="text-center catSelectionHeader"> About your Business (Max 10 000 Chatacters) </h2> 
                                  <!--tinyMCE textarea-->
                            <textarea class="description" name="description"></textarea>
                              <!-- End Categories Section -->

                              <div class="input-group">
                                <span class="input-group-addon">
                                  <input type="checkbox" aria-label="...">
                                </span>
                                <p> I have read and agree to the terms and conditions</p>
                              </div><!-- /input-group -->
                              <br>
                                <button type='submit' name='submit'>UPLOAD!</button>
                              </div>
                            </div>
                          </div>
                        </div>
                      </form>
                

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