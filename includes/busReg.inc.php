<?php

	if (isset($_POST['submit'])) {

			include 'dbh.inc.php';
	
			echo "Account Images : <br>";
			// Logo Image Sections
			$file = $_FILES['file'];
			echo "Logo Image :<br>";
			print_r( $_FILES['file']);
			echo "<br>";
			$fileName = $_FILES['file']['name'];
			$fileTmpName = $_FILES['file']['tmp_name'];
			$fileSize = $_FILES['file']['size'];
			$fileError = $_FILES['file']['error'];
			$fileType = $_FILES['file']['type'];




			// First Car Image 
			///////////////////////////////////////////////////////////////////
			///////////////////////////////////////////////////////////////////
			$file1 = $_FILES['file1'];
			echo "<br>Carouselle Images :<br>";
			print_r( $_FILES['file1']);
			echo "<br>";
			$fileName1 = $_FILES['file1']['name'];
			$fileTmpName1 = $_FILES['file1']['tmp_name'];
			$fileSize1 = $_FILES['file1']['size'];
			$fileError1 = $_FILES['file1']['error'];
			$fileType1 = $_FILES['file1']['type'];



			// Second Car Image 
			///////////////////////////////////////////////////////////////////
			///////////////////////////////////////////////////////////////////
			$file2 = $_FILES['file2'];
			print_r( $_FILES['file2']);
			echo "<br>";
			$fileName2 = $_FILES['file2']['name'];
			$fileTmpName2 = $_FILES['file2']['tmp_name'];
			$fileSize2 = $_FILES['file2']['size'];
			$fileError2 = $_FILES['file2']['error'];
			$fileType2 = $_FILES['file2']['type'];



			// Third Car Image 
			///////////////////////////////////////////////////////////////////
			///////////////////////////////////////////////////////////////////
			$file3 = $_FILES['file3'];
			print_r( $_FILES['file3']);
			echo "<br>";
			$fileName3 = $_FILES['file3']['name'];
			$fileTmpName3 = $_FILES['file3']['tmp_name'];
			$fileSize3 = $_FILES['file3']['size'];
			$fileError3 = $_FILES['file3']['error'];
			$fileType3 = $_FILES['file3']['type'];




			// Fourth Car Image 
			///////////////////////////////////////////////////////////////////
			///////////////////////////////////////////////////////////////////
			$file4 = $_FILES['file4'];
			print_r( $_FILES['file4']);
			echo "<br>";
			$fileName4 = $_FILES['file4']['name'];
			$fileTmpName4 = $_FILES['file4']['tmp_name'];
			$fileSize4 = $_FILES['file4']['size'];
			$fileError4 = $_FILES['file4']['error'];
			$fileType4 = $_FILES['file4']['type'];



			// Fifth Car Image 
			///////////////////////////////////////////////////////////////////
			///////////////////////////////////////////////////////////////////
			$file5 = $_FILES['file5'];
			print_r( $_FILES['file5']);
			echo "<br>";
			$fileName5 = $_FILES['file5']['name'];
			$fileTmpName5 = $_FILES['file5']['tmp_name'];
			$fileSize5 = $_FILES['file5']['size'];
			$fileError5 = $_FILES['file5']['error'];
			$fileType5 = $_FILES['file5']['type'];




			// Sixth Car Image 
			///////////////////////////////////////////////////////////////////
			///////////////////////////////////////////////////////////////////
			$file6 = $_FILES['file6'];
			print_r( $_FILES['file6']);
			echo "<br>";
			$fileName6 = $_FILES['file6']['name'];
			$fileTmpName6 = $_FILES['file6']['tmp_name'];
			$fileSize6 = $_FILES['file6']['size'];
			$fileError6 = $_FILES['file6']['error'];
			$fileType6 = $_FILES['file6']['type'];




			//Decide which files to allow
			$fileExt = explode('.', $fileName );
			$fileActualExtension = strtolower(end($fileExt));
			$allowed = array('jpg', 'jpeg', 'png', 'pdf');



			//Basic Account Information
			///////////////////////////////////////////////////////////////////
			///////////////////////////////////////////////////////////////////
			$accName = mysqli_real_escape_string($conn,$_POST['accName']);
			$accCon = mysqli_real_escape_string($conn,$_POST['accCon']);
			$accEmail = mysqli_real_escape_string($conn,$_POST['accEmail']);
			$accPw1 = mysqli_real_escape_string($conn,$_POST['accPw1']);

			echo "<br>Account Information :<br>";
			echo "Account Owner Name : ".$accName. "<br>";
			echo "Account Contact Number : ".$accCon. "<br>";
			echo "Account Email : ".$accEmail. "<br>";
			echo "Account Password : ".$accPw1. "<br>";


			//Business Account Information
			///////////////////////////////////////////////////////////////////
			///////////////////////////////////////////////////////////////////
			$busName = mysqli_real_escape_string($conn,$_POST['busName']);
			$busConNum = mysqli_real_escape_string($conn,$_POST['busConNum']);
			$busEmail = mysqli_real_escape_string($conn,$_POST['busEmail']);
			$busAddress = mysqli_real_escape_string($conn,$_POST['busAddress']);
			$busPost = mysqli_real_escape_string($conn,$_POST['busPost']);
			$busAddress = mysqli_real_escape_string($conn,$_POST['busAddress']);
			$busWebSite = mysqli_real_escape_string($conn,$_POST['busWebSite']);
			$sel1 = mysqli_real_escape_string($conn,$_POST['sel1']);

			echo "<br>Account Business Information :<br>";
			echo "Account Business Name : ".$busName. "<br>";
			echo "Account Business Contact Number : ".$busConNum. "<br>";
			echo "Account Business Email : ".$busEmail. "<br>";
			echo "Account Business Address : ".$busAddress. "<br>";
			echo "Account Business PostalAddress : ".$busPost. "<br>";
			echo "Account Business Address : ".$busAddress. "<br>";
			echo "Account Business Website : ".$busWebSite. "<br>";
			echo "Account Business Location : ".$sel1. "<br>";

			//Account Business Cats and SubCats
			///////////////////////////////////////////////////////////////////
			///////////////////////////////////////////////////////////////////
			$cat1 = mysqli_real_escape_string($conn,$_POST['cat1']);
			$subcat1 = mysqli_real_escape_string($conn,$_POST['subcat1']);

			$cat2 = mysqli_real_escape_string($conn,$_POST['cat2']);
			$subcat2 = mysqli_real_escape_string($conn,$_POST['subcat2']);

			$cat3 = mysqli_real_escape_string($conn,$_POST['cat3']);
			$subcat3 = mysqli_real_escape_string($conn,$_POST['subcat3']);

			$cat4 = mysqli_real_escape_string($conn,$_POST['cat4']);
			$subcat4 = mysqli_real_escape_string($conn,$_POST['subcat4']);

			$cat5 = mysqli_real_escape_string($conn,$_POST['cat5']);
			$subcat5 = mysqli_real_escape_string($conn,$_POST['subcat5']);

			echo "<br>Account Business Cats and SubCats :<br>";
			echo "Account Business Cat and SubCat 1 : ".$cat1." ".$subcat1. "<br>";
			echo "Account Business Cat and SubCat 2 : ".$cat2." ".$subcat2. "<br>";
			echo "Account Business Cat and SubCat 3 : ".$cat3." ".$subcat3. "<br>";
			echo "Account Business Cat and SubCat 4 : ".$cat4." ".$subcat4. "<br>";
			echo "Account Business Cat and SubCat 5 : ".$cat5." ".$subcat5. "<br>";


	}
?>