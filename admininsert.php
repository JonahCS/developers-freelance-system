<?php
include('connection.php');
if (isset($_POST['submit'])) {

	$fn=$_POST['fn'];
	$mn=$_POST['mn'];
	$ln=$_POST['ln'];
	$gn=$_POST['gn'];
	$em=$_POST['em'];
	$edus=$_POST['edu'];
	$ph=$_POST['ph'];
	$ct=$_POST['ci'];
	$co=$_POST['co'];
	$un=$_POST['un'];
	$pw=$_POST['pw'];
	
	$query = "INSERT INTO admin(First_Name,Middle_Name,Last_Name,Gender,Email,Edu_status,Phone_number,City,Country,User_Name,Password)
						 VALUES('$fn','$mn','$ln','$gn','$em','$edus','$ph','$ct','$co','$un','$pw')";

	$ins = mysqli_query($conn,$query);

	if (!$ins) {
		echo "data not is inserted!!!".mysqli_error($conn);
	}else{
		echo "Data is inserted!!!";
	}	
}
?>