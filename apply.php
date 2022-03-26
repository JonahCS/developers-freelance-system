<?php include('../../includes/connection.php');?>
<html>
<head>

	<title>DFS</title>
	<link rel="stylesheet" type="text/css" href="../css/def.css">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap/css/bootstrap.css">

	<style type="text/css">

	.input-fields{
	width: 20%;
	padding: 10px 0;
	margin: 5px 0;
	border-left: 0;
	border-top: 0;
	border-right: 0;
	border-bottom: 1px solid #999;
	background-color: white;
	}
	.submit-btnn
	{
	width: 15%;
	padding: 10px 30px;
	cursor: pointer;
	display: block;
	margin: auto;
	background: darkgreen;
	border: 0;
	outline: none;
	border-radius: 30px;
	}
	h1 {
		color: green;
	}
	</style>
</head>
<body>

	<div class="full-page">
		<div class="nav-bar">
			<div>
				<h1>Apply for job</h1>
			</div>
			<nav>
				<ul id = "MenuItems">
					<li><a href="../emp/employeer.php">HOME</a></li>
				</ul>
			</nav>
		</div>
		<center class="">
			<form method="POST" action="">
				<input type="text" name="ffn" class="input-fields" placeholder="Freelancer User Name" required><br><br>
				<select name="un1" class="input-fields">
					<?php

					$query1 = mysqli_query($conn, "SELECT Organizations_Name from employeer");
					while ($data1 = mysqli_fetch_array($query1)) {
						echo "<option value='".$data1['Organizations_Name']."'>".$data1['Organizations_Name']."</option>";
					}
					?>
				</select><br>
				<select name="jti" class="input-fields">
					<?php

					$query1 = mysqli_query($conn, "SELECT jtitle from job_vacancy");
					while ($data1 = mysqli_fetch_array($query1)) {
						echo "<option value='".$data1['jtitle']."'>".$data1['jtitle']."</option>";
					}
					?>
				</select>
				<button type="submit" class="submit-btnn" name="sum">POST</button>
			</form>
		</center>
	</div>
	<?php

	if (isset($_POST['sum'])) {

		$fun = $_POST['ffn'];
		$or = $_POST['un1'];
		$jty = $_POST['jti'];

		$query = "INSERT INTO apply(User_Name,Organ_Name,jtitle) VALUES('$fun','$or','$jty')";
		$sql = mysqli_query($conn, $query);

		if ($sql) {
			echo "inserted";
		}else {
			echo "not inserted".mysqli_error($conn);
		}
	}
	?>
</body>
</html>