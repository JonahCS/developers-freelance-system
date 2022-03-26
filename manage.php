<?php
$connection = mysqli_connect("localhost", "root", "", "dfs");

$fn=$_POST['fname'];
$mn=$_POST['mname'];
$ln=$_POST['lname'];
$em=$_POST['email'];
$edu_st=$_POST['edu_st'];
$ph=$_POST['ph'];
$ci=$_POST['city'];
$co=$_POST['country'];
$un=$_POST['uname'];
$pw=$_POST['passw'];

$query = "UPDATE admin SET First_Name='$fn', Middle_Name='$mn', Last_Name='$ln', EMail='$em', Edu_status='$edu_st', Phone_number='$ph',City='$ci', Country='$co', User_Name='$un', Password='$pw' WHERE ID=1";
$result = mysqli_query($connection, $query);

if ($result) {
	echo "profile updated!!";
}
else {
	echo "profile not updated".mysqli_error($connection);
}
?>