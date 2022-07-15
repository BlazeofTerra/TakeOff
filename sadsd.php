<?php

include 'includes/dbh2.inc.php';

$sql = "SELECT * FROM category";
$result = mysqli_query($conn, $sql);

$resultCheck = mysqli_num_rows($result);

    if ($resultCheck > 1) {
      

      while ($row =  mysqli_fetch_assoc($result)) {
          echo 
          // Start of the echo

          "
              <li>".$row['label']."<span class='arrow'> v </span>
                <ul>
                  <h4>".$row['label']." </h4>
                  <hr />";
                  
                  // Businesses
                  $sqlBus = "SELECT * FROM businesses WHERE catid = ".$row['id']."";
                  $resultBus = mysqli_query($conn, $sqlBus);

                  $resultCheckBus = mysqli_num_rows($resultBus);
                  if ($resultCheckBus > 1) {
                    echo 
                      "
                      <li>
                        <ul>
                          <h4> Businesses >> </h4>
                          <li> All</li>";
                    while ($rowBus =  mysqli_fetch_assoc($resultBus)) { 
                          echo 
                          "
                          <li>".$rowBus['label']."</li>";
                    }

                    echo "
                        </ul>
                      </li>
                      ";

                  }



                  // Sub-Categories
                  $sqlSub = "SELECT * FROM subcategory WHERE catid = ".$row['id']."";
                  $resultSub = mysqli_query($conn, $sqlSub);

                  $resultCheckSub = mysqli_num_rows($resultSub);
                  if ($resultCheckSub > 1) {
                    echo 
                      "
                      <li>
                        <ul>
                          <h4> For Sale  >> </h4>
                          <li> All</li>";
                    while ($rowSub =  mysqli_fetch_assoc($resultSub)) {
                      
                            echo 
                            "
                            <li>".$rowSub['subcatname']."</li>";

                      

                    }

                    echo "
                        </ul>
                      </li>
                      ";

                  }


    echo "</ul>
            </li> 
          ";
          // End of the echo
        }


    }


?>
