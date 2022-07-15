<?php

session_start();


if (isset($_POST['submit'])){
	include 'dbh.inc.php';

	$currPass = mysqli_real_escape_string($conn,$_POST['currPass']);
	$pwd1 = mysqli_real_escape_string($conn,$_POST['pwd']);
	$conPwd = mysqli_real_escape_string($conn,$_POST['conPwd']);
	$email = $_SESSION['email'];

	//Error Handlers

	$sql = "SELECT * FROM accounts WHERE email='$email'";
	$result = mysqli_query($conn, $sql);

	$resultCheck = mysqli_num_rows($result);

	if($resultCheck <= 0){
		header("Location: ../userReg.php?signup=usertanken");
		exit();

	} else {


			if ($row = mysqli_fetch_assoc($result)) {

				// De-hashing the password
				$hashedPwdCheck = password_verify($currPass, $row['password']);

				if ($hashedPwdCheck == false) {
					header("Location: ../index.php?login=aaaaa");
					exit();
				} else if ($hashedPwdCheck == true) {

							//Hashinh the password
							$hashedPwd = password_hash($pwd1, PASSWORD_DEFAULT );

							//Insert the user into the database
							$sql = "UPDATE accounts SET password = '$hashedPwd' WHERE email = '$email' ";
							$result = mysqli_query($conn, $sql);

							mysqli_query($conn, $sql);

							header("Location: ../index.php?signup=success");
							exit();

				}
			}	








		
	}


	
} else {
	header("Location: ../index.php?login=error");
	exit();
}

?>