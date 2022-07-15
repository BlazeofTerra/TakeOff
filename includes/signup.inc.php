<?php
	if(isset($_POST['submit'])){

		

		$first = mysqli_real_escape_string($conn,$_POST['firstName']);
		$last = mysqli_real_escape_string($conn,$_POST['lastName']);
		$email = mysqli_real_escape_string($conn,$_POST['email']);
		$conNumber = mysqli_real_escape_string($conn,$_POST['conNumber']);
		$pwd1 = mysqli_real_escape_string($conn,$_POST['pwd']);
		
		$mask = rand(100000, 999999);

		$code = rand(1000000, 9999999);

					$sql = "SELECT * FROM accounts WHERE email='$email'";
					$result = mysqli_query($conn, $sql);

					$resultCheck = mysqli_num_rows($result);

					if($resultCheck > 0){
						header("Location: ../userReg.php?signup=usertanken");
						exit();

					} else {

						//Hashinh the password
						$hashedPwd = password_hash($pwd1, PASSWORD_DEFAULT );

							//Insert the user into the database
							$sql = "
							INSERT INTO accounts (mask,    first,     surn,    contact,    email,    password,  type, email_code, active, recruiter, posts)
							VALUES               ('$mask', '$first', '$last', '$conNumber', '$email', '$hashedPwd', 0, '$code', 0, 0, 0);";

							mysqli_query($conn, $sql);

							header("Location: ../index.php?signup=success");
							exit();

					}

	}

?>