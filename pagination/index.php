	<?php
		include_once 'db.conn.php';
		
		$sql = "SELECT * FROM country";
		$result = mysqli_query($conn, $sql);

		$resultCheck = mysqli_num_rows($result);
		echo "<p class='totRes'> Total Results : ".$resultCheck."</p><br>";

		$perPage = 10;

	?>




<!DOCTYPE html>
<html>
<head>
	<title>
		Countries of the World
	</title>

	<link href="style.css" rel="stylesheet">
</head>
<body>
	<div id="outer">
	<?php
	$pageNumber = 1;
		for ($x = 0; $x < $resultCheck; $x++) {
			
			if ($x % $perPage == 0) {

				

				echo 
				"
				<div class='inner'>
				<form method='POST' action='index.php'>
					<input class='btn' type='submit' value='".$pageNumber."' name='submit'>
				</form> 
				</div>
				";
				
				$pageNumber++;
			}
		}


	?>
	</div>

	<div class="contentArea">
		<?php
				if(isset($_POST['submit'])){
			$page = $_POST['submit'];
			

			$pageVar = $page * $perPage;
			$pageVarFin = $pageVar - $perPage;



			$sql = "SELECT * FROM country LIMIT ".$pageVarFin.", ".$perPage."";
			$result2 = mysqli_query($conn, $sql);

			$queryResult = mysqli_num_rows($result2);


			if ($queryResult > 0) {
				
				while ($row =  mysqli_fetch_assoc($result2)) {
					echo 
					"
					
					<div class='article-box'>
						<p>".$row['cc_fips']."</p>
						<p>".$row['country_name']."</p>
					</div>
					";
				}

			} else {
				echo "There are results found =(";
			}

		} else {
			$sql = "SELECT * FROM country LIMIT 0, ".$perPage."";
			$result2 = mysqli_query($conn, $sql);

			$queryResult = mysqli_num_rows($result2);


			if ($queryResult > 0) {
				
				while ($row =  mysqli_fetch_assoc($result2)) {
					echo 
					"
					
					<div class='article-box'>
						<p>".$row['cc_fips']."</p>
						<p>".$row['country_name']."</p>
					</div>
					";
				}

			} else {
				echo "There are results found =(";
			}

		}


		?>
	</div>

	<div id="outer">
	<?php
	$pageNumber = 1;
		for ($x = 0; $x < $resultCheck; $x++) {
			
			if ($x % $perPage == 0) {

				

				echo 
				"
				<div class='inner'>
				<form method='POST' action='index.php'>
					<input class='btn' type='submit' value='".$pageNumber."' name='submit'>
				</form> 
				</div>
				";
				
				$pageNumber++;
			}
		}


	?>
	</div>
</body>
</html>