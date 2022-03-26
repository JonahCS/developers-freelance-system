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
				<h1>POST JOB VACANCIES</h1>
			</div>
			<nav>
				<ul id = "MenuItems">
					<li><a href="../emp/employeer.php">HOME</a></li>
				</ul>
			</nav>
		</div>
		<center>
			
			<form method="POST" action="">
				<input type="text" name="jt" class="input-fields" placeholder="Jop Title" required><br><br>
				<input type="text" name="jty" class="input-fields" placeholder="Jop type" required><br><br>
				<input type="text" name="pr" class="input-fields" placeholder="Period of work" required><br><br>
				<input type="text" name="job_req" class="input-fields" placeholder="JOB REQUIREMENT" required><br><br>
				<select name="un1" class="input-fields">
					<?php

					$query1 = mysqli_query($conn, "SELECT Organizations_Name from employeer");
					while ($data1 = mysqli_fetch_array($query1)) {
						echo "<option value='".$data1['Organizations_Name']."'>".$data1['Organizations_Name']."</option>";
					}
					?>
				</select>
				<button type="submit" class="submit-btnn" name="sum">POST</button>
			</form>
		</center>
	</div>
	<?php

	if (isset($_POST['sum'])) {

		$jt = $_POST['jt'];
		$jty = $_POST['jty'];
		$pr = $_POST['pr'];
		$jr = $_POST['job_req'];

		$query = "INSERT INTO job_vacancy(jtitle, jtype, period_of_work, Job_Requirement) VALUES('$jt', '$jty', '$pr', '$jr')";
		$sql = mysqli_query($conn, $query);
	}
	?>
</body>
</html>