<div class="userNavArea text-center">

    <!--<div class="totalGroup btn-group" role="group" aria-label="...">
        <button type="button" class="btn btn-default disabled">South African Airways</button>
        <button type="button" class="btn btn-default">Edit Profile</button>

         Single button 
        <div class="btn-group">
          <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Edit Offices &amp; Reps <span class="caret"></span>
          </button>
          <ul class="dropdown-menu">
            <li><h2 class="text-center"> Active Offices </li>
            <li><a href="#">FAVG - Parts Office</a></li>
            <li><a href="#">FAJS - Sales Office</a></li>
            <li><a href="#">FACT - Charter Office</a></li>
            <li role="separator" class="divider"></li>

            <li><h2 class="text-center"> Active Representatives </li>
            <li><a href="#">FAVG - Douglas Chambers</a></li>
            <li><a href="#">FAJS - John Chambers</a></li>
            <li><a href="#">FACT - Thomas Hunt</a></li>
            <li role="separator" class="divider"></li>


            <li><a href="#">Create New Office</a></li>
            <li><a href="#">Create New Representative</a></li>
          </ul>
        </div>
         Single button 
        <div class="btn-group">
          <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Edit Posts <span class="caret"></span>
          </button>
          <ul class="dropdown-menu">
            <li><h2 class="text-center"> Active Posts </li>
            <li><a href="#">1978 Piper Malibu</a></li>
            <li><a href="#">Senheizer Headset</a></li>
            <li><a href="#">Cessna 210 for spares</a></li>
            <li role="separator" class="divider"></li>
            <li><h2 class="text-center"> Expired Posts </li>
            <li><a href="#">1985 Cessna 152</a></li>
          </ul>
        </div>
        <button type="button" class="btn btn-default">Make a Post</button>
        <button type="button" class="btn btn-danger">Logout</button>
    </div>  -->


    <?php
        if (isset($_SESSION['type'])) {
            if ($_SESSION['type'] == 0) {
                /* This is the navigation bar for the individual user */
                echo '
                        <form action="includes/logout.inc.php" method="POST">
                            <div class="totalGroup btn-group" role="group" aria-label="...">
                            <button type="button" class="btn btn-default disabled">'.$_SESSION['first']." ".$_SESSION['surn'].'</button>
                            <button type="button" class="btn btn-default"><a href="userEdit.php">Edit Profile</a></button>

                         
                            <div class="btn-group">
                            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Edit Posts <span class="caret"></span>
                             </button>
                            <ul class="dropdown-menu">
                                <li><h2 class="text-center"> Active Posts </li>
                                <li><a href="#">1978 Piper Malibu</a></li>
                                <li><a href="#">Senheizer Headset</a></li>
                                <li><a href="#">Cessna 210 for spares</a></li>
                                <li role="separator" class="divider"></li>
                                <li><h2 class="text-center"> Expired Posts </li>
                                <li><a href="http://www.google.com">985 Cessna 152</a></li>
                            </ul>
                            </div>
                            <button type="button" class="btn btn-default">Make a Post</button>
                            <button type="submit" class="btn btn-danger" name="submit">Logout</button>
                        </form>
                    </div>
                ';
            } else if($_SESSION['type'] == 1) {
                echo '
                    <form action="includes/logout.inc.php" method="POST">
                        <div class="totalGroup btn-group" role="group" aria-label="...">
                            <button type="button" class="btn btn-default disabled">South African Airways</button>
                            <button type="button" class="btn btn-default">Edit Profile</button>

                             
                            <div class="btn-group">
                              <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Edit Offices &amp; Reps <span class="caret"></span>
                              </button>
                              <ul class="dropdown-menu">
                                <li><h2 class="text-center"> Active Offices </li>
                                <li><a href="#">FAVG - Parts Office</a></li>
                                <li><a href="#">FAJS - Sales Office</a></li>
                                <li><a href="#">FACT - Charter Office</a></li>
                                <li role="separator" class="divider"></li>

                                <li><h2 class="text-center"> Active Representatives </li>
                                <li><a href="#">FAVG - Douglas Chambers</a></li>
                                <li><a href="#">FAJS - John Chambers</a></li>
                                <li><a href="#">FACT - Thomas Hunt</a></li>
                                <li role="separator" class="divider"></li>


                                <li><a href="#">Create New Office</a></li>
                                <li><a href="#">Create New Representative</a></li>
                              </ul>
                            </div>
                            <div class="btn-group">
                              <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Edit Posts <span class="caret"></span>
                              </button>
                              <ul class="dropdown-menu">
                                <li><h2 class="text-center"> Active Posts </li>
                                <li><a href="#">1978 Piper Malibu</a></li>
                                <li><a href="#">Senheizer Headset</a></li>
                                <li><a href="#">Cessna 210 for spares</a></li>
                                <li role="separator" class="divider"></li>
                                <li><h2 class="text-center"> Expired Posts </li>
                                <li><a href="#">1985 Cessna 152</a></li>
                              </ul>
                            </div>
                            <button type="button" class="btn btn-default">Make a Post</button>
                            <button type="button" class="btn btn-danger">Logout</button>
                        </div>
                    </form>
                ';
            } else if ($_SESSION['type'] == 2) {
                 echo '
                    HELP2
                ';
            } else if ($_SESSION['type'] == 3) {
                echo '
                    HELP3
                ';
            } else {
                echo $_SESSION['type'];
            }



        } else {
            echo '
            <div class="userNavArea text-center">
                <form class="form-inline" action="includes/login.inc.php" method="POST">
                  <div class="form-group loginForm">
                    <label for="email">Email address:</label>
                    <input type="email" class="form-control" name="emailAddress" placeholder="E-mail Address">
                  </div>
                  <div class="form-group loginForm">
                    <label for="pwd">Password:</label>
                    <input type="password" class="form-control" name="pwd" placeholder="Password">
                  </div>
                  <div class="totalGroup btn-group" role="group" aria-label="...">
                    <button type="submit" class="btn btn-default" id="submit" name="submit">Login</button>
                    <button type="submit" class="btn btn-default">Forgotten Password</button>
                    <button type="submit" class="btn btn-default">Register</button>
                  </div>
                </form>
            </div>
            ';
        }
    ?>
</div>