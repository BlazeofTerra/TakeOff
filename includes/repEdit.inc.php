<?php
	if(isset($_POST['submit'])){

		include 'dbh2.inc.php';

		$busid = 5;
		$officeid = 1;
		$repName = mysqli_real_escape_string($conn,$_POST['repName']);
		$repPosition = mysqli_real_escape_string($conn,$_POST['repPosition']);
		$repEmail = mysqli_real_escape_string($conn,$_POST['repEmail']);
		$repNum = mysqli_real_escape_string($conn,$_POST['repNum']);
		
		



		$sql = "UPDATE representative SET busid = '$busid', officeid = '$officeid', repName = '$repName', repPosition = '$repPosition', repEmail = '$repEmail', repNum = '$repNum' WHERE id = 6 ";
		$result = mysqli_query($conn, $sql);

		mysqli_query($conn, $sql);

		header("Location: ../repEdit.php?update=success");
		exit();

	}

?>