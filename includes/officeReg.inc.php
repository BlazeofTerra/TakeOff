<?php
	if(isset($_POST['submit'])){

		include 'dbh2.inc.php';

		$busid = 5;
		$offname = mysqli_real_escape_string($conn,$_POST['offName']);
		$phone = mysqli_real_escape_string($conn,$_POST['phone']);
		$fax = mysqli_real_escape_string($conn,$_POST['fax']);
		$address = mysqli_real_escape_string($conn,$_POST['address']);
		$pobox = mysqli_real_escape_string($conn,$_POST['pobox']);
		$count = "South Africa";
		


		 //Insert the user into the database
		$sql = "
		INSERT INTO offices (busid,    offname,     phone,    fax,    address,    pobox,  count, prov)
		VALUES               ('$busid', '$offname', '$phone', '$fax', '$address', '$pobox', '$count', 0);";

		mysqli_query($conn, $sql);

		
		header("Location: ../index.php?office=success");
		exit();
	
		}

	

?>