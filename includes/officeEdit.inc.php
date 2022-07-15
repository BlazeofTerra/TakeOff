<?php
	session_start();

	if(isset($_POST['submit'])){

		include_once 'dbh2.inc.php';

		$busid = 5;
		$offname = mysqli_real_escape_string($conn,$_POST['offName']);
		$phone = mysqli_real_escape_string($conn,$_POST['phone']);
		$fax = mysqli_real_escape_string($conn,$_POST['fax']);
		$address = mysqli_real_escape_string($conn,$_POST['address']);
		$pobox = mysqli_real_escape_string($conn,$_POST['pobox']);
		$count = "South Africa";

		



		$sql = "UPDATE offices SET offname = '$offname', phone = '$phone', fax = '$fax', address = '$address', pobox = '$pobox', count = '$count' WHERE id = 9 ";
		$result = mysqli_query($conn, $sql);

		mysqli_query($conn, $sql);

		header("Location: ../index.php?update=success");
		exit();

	}

?>