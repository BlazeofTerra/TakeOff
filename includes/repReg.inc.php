<?php
	if(isset($_POST['submit'])){

		include 'dbh2.inc.php';

		$busid = 5;
		$officeid = 1;
		$repName = mysqli_real_escape_string($conn,$_POST['repName']);
		$repPosition = mysqli_real_escape_string($conn,$_POST['repPosition']);
		$repEmail = mysqli_real_escape_string($conn,$_POST['repEmail']);
		$repNum = mysqli_real_escape_string($conn,$_POST['repNum']);
		


		 //Insert the user into the database
		$sql = "
		INSERT INTO representative (busid,    officeid,     repName,    repPosition,    repEmail,    repNum)
		VALUES               ('$busid', '$officeid', '$repName', '$repPosition', '$repEmail', '$repNum');";

		mysqli_query($conn, $sql);

		
		header("Location: ../index.php?office=success");
		exit();
	
		}

	

?>