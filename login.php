<?php
session_start();
$UserName=$_POST['un'];
$Password=$_POST['pw'];
$UserType=$_POST['se'];
$_SESSION['success']="";

if($UserType=="Freelancer")
{
	$con = mysqli_connect("localhost","root","","dfs");
	$sql = "select * from freelancer where User_name='".$UserName."' and Password='".$Password."'";
	$result = mysqli_query($con,$sql);
	$records = mysqli_num_rows($result);
	$row = mysqli_fetch_array($result);
	if ($records==0)
	{
		echo '<script type="text/javascript">alert("Wrong UserName or Password");window.location=\'index.php\';</script>';
	}
	else
	{
		$_SESSION['un']=$UserName;
		header("location:freelancer/freelancer.php");
	} 
	mysqli_close($con);
}
if ($UserType=="Employeer") {
	$con = mysqli_connect("localhost","root","","dfs");
	$sql = "select * from employeer where Organizations_Name='".$UserName."' and Password='".$Password."'";
	$result = mysqli_query($con,$sql);
	$records = mysqli_num_rows($result);
	$row = mysqli_fetch_array($result);
	if ($records==0)
	{
		echo '<script type="text/javascript">alert("Wrong Organizations Name or Password");window.location=\'index.php\';</script>';
	}
	else
	{
		$_SESSION['un']=$UserName;
		header("location:emp/employeer.php");
	} 
	mysqli_close($con);
}
if ($UserType=="Administrator") {
	
	$con = mysqli_connect("localhost","root","","dfs");
	$sql = "select * from admin where User_Name='".$UserName."' and Password='".$Password."'";
	$result = mysqli_query($con,$sql);
	$records = mysqli_num_rows($result);
	$row = mysqli_fetch_array($result);

	if ($records==0)
	{
		echo '<script type="text/javascript">alert("Wrong UserName or Password");window.location=\'index.php\';</script>';
	}
	else
	{
		$_SESSION['un']=$UserName;
		header("location:admin/admin.php");
	} 
	mysqli_close($con);
}
?>