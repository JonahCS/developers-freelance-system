<?php
include('connection.php');

if (isset($_POST['submit1'])) {
	$on=$_POST['orgname'];
	$e=$_POST['email'];
	$oci=$_POST['orgci'];
	$oco=$_POST['orgco'];
	$okk=$_POST['orgkk'];
	$ow=$_POST['orgwe'];
	$oh=$_POST['orgho'];
	$ph=$_POST['ph'];
	$pw=$_POST['pw'];

	$query = "INSERT INTO employeer(Organizations_Name,Organizations_email,Organization_city,Organization_country,Organization_kk,Organiztion_wereda,Organization_hno,Phone_number,Password)
					Values('$on','$e','$oci','$oco','$okk','$ow','$oh','$ph','$pw')";

	$sqll=mysqli_query($conn,$query);

	if (!$sqll) {
		echo "data not is inserted!!!".mysqli_error($conn);
	}else{
		echo "Data is inserted!!!";
	}
}
?>