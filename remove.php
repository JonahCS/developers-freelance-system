
<html>
<head>
	<title>DFS</title>
	<link rel="stylesheet" type="text/css" href="../css/def.css">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap/css/boostrap.css">

	<style type="text/css">

	.input-field-un{
		width: 25%;
		padding: 10px 0;
		margin: 5px 0;
		border-left: 0;
		border-top: 0;
		border-right: 0;
		border-bottom: 1px solid #999;
		background-color: black;
		color: white;
		border-radius: 10px;
	}
	.submit{
		width: 15%;
		padding: 10px 30px;
		cursor: pointer;
		display: block;
		margin: auto;
		background: #F3C693;
		border: 0;
		outline: none;
		border-radius: 30px;
	}
	</style>
</head>
<body>
	<div class="full-page">
		<div class="nav-bar">
			<div>
				<h1>Remove Account</h1>
			</div>
			<nav>
				<ul id = "MenuItems">
					<li><a href="../admin/admin.php">HOME</a></li>
				</ul>
			</nav>
		</div>
	<center>
		<form method="POST">
			<input type="text" name="username" class="input-field-un" placeholder="User Name">
		<input type="submit" name="submit-btn" class="submit" value="DELETE ACCOUNT">
		</form>
	</center>
</div>
</body>
</html>

<?php
$connection = mysqli_connect("localhost", "root", "", "dfs");
if (isset($_POST['submit-btn'])) {
	$un=$_POST['username'];


	$query = "DELETE From admin WHERE User_Name='$un'";
	$query1 = "DELETE From employeer WHERE Organizations_Name='$un'";
	$query2 = "DELETE From freelancer WHERE User_name='$un'";

	$res = mysqli_query($connection, $query1);
	if ($res) {
		echo "profile delete!!";
	}
	else {
		echo "profile not deleted".mysqli_error($connection);
	}
	$result = mysqli_query($connection, $query);
	if ($result) {
		echo "profile delete!!";
	}
	else {
		echo "profile not deleted".mysqli_error($connection);
	}

	$result1 = mysqli_query($connection, $query2);
	if ($result1) {
		echo "profile delete!!";
	}
	else {
		echo "profile not deleted".mysqli_error($connection);
	}
}
?>