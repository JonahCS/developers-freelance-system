<?php
include('connection.php');

$name = $_POST['name'];
$email = $_POST['email'];
$msg = $_POST['message'];
$sql = "INSERT INTO contact_us(name,email,msg) values('$name','$email','$msg')";
 $insert = mysqli_query($conn , $sql);
if($insert){
	echo"mesage sent";
}
else{
echo"sorry no message received by this admin".mysqli_error($conn);
}
?>