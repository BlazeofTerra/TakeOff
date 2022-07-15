<?php

session_start();


if (isset($_POST['submit'])){
	include 'dbh.inc.php';

	$email = mysqli_real_escape_string($conn,$_POST['emailAddress']);
	$pwd = mysqli_real_escape_string($conn,$_POST['pwd']);


	//Error Handlers

	//Check if inputs are empty
	if (empty($email) || empty($pwd)) {
		header("Location: ../index.php?login=empty");
		exit();
	}
	else {
		$sql = "SELECT * FROM accounts WHERE  email='$email' ";
		$result = mysqli_query($conn, $sql);

		$resultCheck = mysqli_num_rows($result);

		if ($resultCheck < 1) {
			header("Location: ../index.php?login=xxxxxx");
			exit();
		} else {
			if ($row = mysqli_fetch_assoc($result)) {

				// De-hashing the password
				$hashedPwdCheck = password_verify($pwd, $row['password']);

				if ($hashedPwdCheck == false) {
					header("Location: ../index.php?login=aaaaa");
					exit();
				} else if ($hashedPwdCheck == true) {

					//Log in the user here 
					$_SESSION['mask'] = $row['mask'];
					$_SESSION['first'] = $row['first'];
					$_SESSION['surn'] = $row['surn'];
					$_SESSION['email'] = $row['email'];
					$_SESSION['type'] = $row['type'];
  					header("Location: ../index.php?login=success");
					exit();
				}
			}
		}
	}
} else {
	header("Location: ../index.php?login=error");
	exit();
}

?>