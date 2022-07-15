<?php
	session_start();

	if(isset($_POST['submit'])){

		include_once 'dbh.inc.php';

		$first = mysqli_real_escape_string($conn,$_POST['firstName']);
		$last = mysqli_real_escape_string($conn,$_POST['lastName']);
		$conNumber = mysqli_real_escape_string($conn,$_POST['conNumber']);
		$email = $_SESSION['email'];

		
		echo $first;
		echo $last;
		echo $conNumber;
		echo $email;


		$sql = "UPDATE accounts SET first = '$first', surn = '$last', contact = '$conNumber' WHERE email = '$email' ";
		$result = mysqli_query($conn, $sql);

		mysqli_query($conn, $sql);

		header("Location: ../userEdit.php?update=success");
		exit();

	}

?>