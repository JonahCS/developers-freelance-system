<?php
include('connection.php');

if (isset($_POST['submit2'])) {


$ffn=$_POST['ffn'];
$fmn=$_POST['fmn'];
$fln=$_POST['fln'];
$fe=$_POST['femail'];
$gd=$_POST['gender'];
$dob=$_POST['dob'];
$edu=$_POST['edu'];
$ph=$_POST['fph'];
$payhour=$_POST['paymenthour'];
$img=$_POST["img"];
$prevw=$_POST['prevwork'];

$ci=$_POST['ci'];
$co=$_POST['co'];
$un=$_POST['un'];
$pw=$_POST['pw'];


$query = "INSERT INTO freelancer(FFirst_Name,FMiddle_Name,FLast_Name,FEmail,FGender,FDOB,FEdu_status,FPhone_number,FPayment_hour,Fimage,FPwork,Fcity,Fcountry,User_name,Password)
						     VALUES('$ffn','$fmn','$fln','$fe','$gd','$dob','$edu','$ph','$payhour','$img','$prevw','$ci','$co','$un','$pw')";

$sql = mysqli_query($conn,$query);
	
if (!$sql) {
	echo "data is not inserted!!".mysqli_error($conn);
}else{
	echo "data inserted!!";
} 
}
?>