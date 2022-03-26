<?php
include('../../includes/connection.php');
include('../session_start.php');
session_start();

if(!isset($_SESSION['un'])) {
	$_SESSION['msg'] = "you have to login first";
	header('location:../index.php');
}


if(isset($_GET['logout'])) {
	session_destroy();
	unset($_SESSION['un']);
	header('location:../index.php');
}
?>
<html>
<head>
	<title>Freelancer</title>
	<link rel="stylesheet" type="text/css" href="../css/bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="../css/def.css">
	<style type="text/css">

	.input-fields{
	width: 100%;
	padding: 40px 0;
	margin: 5px 0;
	border-left: 0;
	border-top: 0;
	border-right: 20px;
	border-bottom: 5px auto #fff;
	
	}
	label{
		color: white;
		padding-left: 15%;
	}
	.submit-btnn
	{
	width: 40%;
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
		color: white;
		padding-left: 15px;
		padding-top: 10px;
	}
	.submit-btn{
		width: 10%;
		font-size: 20px;
		color: white;
		float: left;
		padding: 10px 30px;
		cursor: pointer;
		display: block;
		margin-top: 20px;
		border: 0;
		outline: none;
		border-radius: 30px;
	}

	.dropdown {
		float: left;
  		background-color: GRAY;
  		
 	}
 	.dropdown .dropbtn {
 		font-size: 16px; 
  		border: none;
  		outline: none;
  		background-color: #3a4d5f;
  		color: white;
  		padding: 14px 16px;
	}
	.dropdown-content {
		color: white;
 		display: none;
 		position: absolute;
  		background-color: #23585a;
  		min-width: 160px;
  		box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  		z-index: 1;
	}
	a:hover, .dropdown:hover .dropbtn {
		background-color: #23585a;
	}
	.dropdown-content a {
		float: none;
  		color: white;
 		padding: 12px 16px;
  		text-decoration: none;
  		display: block;
  		text-align: left;
	}

	.dropdown-content a:hover {
		background-color: #23585a;
	}

	.dropdown:hover .dropdown-content {
  		display: block;
	}
	.db_content {
	background-color: white;
	width: 100%;
	font-family: tahoma;
	font-size: 150%;
	padding-left: 5%;
	padding-top: 5%;
	color: green;
	}
	.notification {
  background-color: transparent;
  color: white;
  text-decoration: none;
  padding: 15px 26px;
  position: relative;
  display: inline-block;
  border-radius: 2px;
}

.notification:hover {
  background: darkred;
}

.notification .badge {
  position: absolute;
  top: -10px;
  right: -10px;
  padding: 5px 10px;
  border-radius: 50%;
  background: red;
  color: white;
}

	</style>
</head>
<body>
	<div class="full-page">
		<div class="nav-bar">
			<div>
				<h1>FREELANCER</h1>
			</div>
			<nav>
				<ul id = "MenuItems">
					<li><a href="#">HOME</a></li>

					<?php

					$sql = mysqli_query($conn, "SELECT * FROM invitation WHERE status = 0");
					$count = mysqli_num_rows($sql);
					?>

					<li><a href="notify.php" class="notification">notification
						<span class="badge"><?php echo $count;?></span>
					</a>
				</li>




					<li><a href="#"><div class="dropdown">
						<button class="dropbtn">
							<div class="content">
								<?php if (isset($_SESSION['success'])) :?>
								<div class="error success">
									<h3>
										<?php
										echo $_SESSION['success'];
										unset($_SESSION['success']);
										?>
									</h3>
								</div>
								<?php endif ?>

								<?php if (isset($_SESSION['un'])) :?>
								<p>
									<strong>
										<?php echo $_SESSION['un'];?>
									</strong>
								</p>
								<?php endif ?>
							</div>
						</button>
						<div class="dropdown-content">
							<a href="manage_content.php" style="color= red;">Manage Profile</a>
							<a href="../index.php?logout='1'" style="color= red;">Log Out</a>
						</div>
					</div></a></li>
				</ul>
			</nav>
		</div>

		<div class="db_content">

			<?php

			$query = "SELECT jtitle,jtype,period_of_work,Job_Requirement FROM job_vacancy,employeer";
			$result = mysqli_query($conn, $query);

			while ($data = mysqli_fetch_array($result)) {
				
				$jobtitle=$data['jtitle'];
				$jobtype=$data['jtype'];
				$periodofwork=$data['period_of_work'];
				$jobrequirement = $data['Job_Requirement'];
				

				?><h5>JOB TITLE:<?php echo $jobtitle;?></h5>
				<h5>JOB TYPE:<?php echo $jobtype;?></h5>
				<h5>PERIOD OF WORK:<?php echo $periodofwork;?>
				<h5>JOB REQUIREMENT:<?php echo $jobrequirement;?><h5>
				

				<form method="POST" action="invite.php">
					<a href="apply.php" class="submit-btn">APPLY</a>
				</form><br><br><br>
				
				<?php
					
				}
				// Retrieve Number of records returned
				$records = mysqli_num_rows($result);
				?>


				<?php
				// Close the connection
				mysqli_close($conn);
				?>
		</div>
		<div style="float:right; margin-top:-50%; width:30%; background-color: darkblue; color: white; border-radius:20px; height: 30%; margin-right: 5%;">

			<form method="POST" action="deliver.php">
				<h1 style="font-size:25px">DELIVER PROJECT</h1>

				<h6 style="margin-left:3%">Organization Name:
				<select style="width:45%; margin-left:3%" name="org">
					<?php
					include('../../includes/connection.php');
					$que = mysqli_query($conn, "SELECT Organizations_Name from employeer");
					while ($data2 = mysqli_fetch_array($que)) {
						echo "<option value='".$data2['Organizations_Name']."'>".$data2['Organizations_Name']."</option>";
					}
					?>
				</select></h6>
				<h6 style="margin-left:3%;">File:
					<input type="file" name="file" class="btn btn-success" placeholder="Insert the file" style="margin-left:5%; margin-top:5%;">
				</h6>
				<button type="submit" name="upload" class="btn btn-success" style="float:right; margin-right:20%;margin-top:5%;">UPLOAD</button>
			</form>
		</div>
	</div>
	
</body>
</html>