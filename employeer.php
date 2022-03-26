<?php
include('../../includes/connection.php');
include('../freelancer/apply.php');

session_start();

if(!isset($_SESSION['un'])) {
	$_SESSION['msg'] = "you have to login first";
	header('location:../index.php');
}


if(isset($_POST['logout'])) {
	session_destroy();
	unset($_SESSION['un']);
	header('location:../index.php');
}
?>

<html>
<head>
	<title>Employeer</title>
	<link rel="stylesheet" type="text/css" href="../css/def.css">
	<style type="text/css">
	.submit-btn{
		width: 10%;
		font-size: 20px;
		color: white;
		float: left;
		padding: 10px 30px;
		cursor: pointer;
		display: block;
		margin-top: 1%;
		border: 0;
		outline: none;
		border-radius: 10px;
	}
	
	.dropdown {
  float: left;
  background-color:  #3a4d5f;
  overflow: block;
 }

/* Dropdown button */
.dropdown .dropbtn {
  font-size: 16px; 
  border: none;
  outline: none;
  background-color:  #3a4d5f;
  color: white;
  padding: 14px 16px;
}
h1{
	color: white;
}

/* Add a red background color to navbar links on hover */
.navbar a:hover, .dropdown:hover .dropbtn {
  background-color: #23585a;
}

/* Dropdown content (hidden by default) */
.dropdown-content {
  display: none;
  position: absolute;
  background-color: #23585a;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}


/* Links inside the dropdown */
.dropdown-content a {
  float: none;
  color: white;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

/* Add a grey background color to dropdown links on hover */
.dropdown-content a:hover {
  background-color: #23585a;
}

/* Show the dropdown menu on hover */
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
	color: #000;
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
				<h1>DEVELOPER FREELANCE SYSTEM</h1>
			</div>
			<nav>
				<ul id = "MenuItems">
					<li><a href="#">HOME</a></li>

					<?php

					$sql = mysqli_query($conn, "SELECT * FROM apply WHERE status = 0");
					$count = mysqli_num_rows($sql);
					?>

					<li><a href="notify.php" class="notification">notification
						<span class="badge"><?php echo $count;?></span>
					</a>
				</li>
					<li><a href="#"></a><div class="dropdown">
						<button class="dropbtn">
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
						</button>
						<div class="dropdown-content">
							<a href="post.php">Post Vacancies</a>
							<a href="manage_content.php">manage profile</a>
							<a href="../index.php?logout='1'" style="color= red;">Log Out</a>
						</div>
					</div>
				</ul>
			</nav>
		</div>

		<div class="db_content">
		<?php
				// Establish Connection with Database 
				$con = mysqli_connect("localhost","root","","dfs");

				// Specify the query to execute
				$sql = "SELECT FFirst_Name,FMiddle_Name,FLast_Name,FPayment_hour,FEdu_status,FEmail,FPhone_number,Fimage,Self_Description FROM freelancer ORDER BY fid DESC";
				// Execute que
				$result = mysqli_query($con,$sql);
				// Loop through each records
				//var_dump($result);
				while($row = mysqli_fetch_array($result))
				{
					$FFirst_Name=$row['FFirst_Name'];
					$FMiddle_Name=$row['FMiddle_Name'];
					$FPay=$row['FPayment_hour'];
					$Fedu=$row['FEdu_status'];
					$em = $row['FEmail'];
					$ph = $row['FPhone_number'];
					$Fimg='<img src="data:img/jpg;'.$row['Fimage'].'"width=40% height=40%/>' ;
					$sd = $row['Self_Description'];

					
					echo $FFirst_Name;?>
					<?php echo $FMiddle_Name;?><br>
					<?php echo $FPay;?><br>
					<?php echo $Fedu;?><br>
					<?php echo $em;?><br>
					<h4>Phone Number:  <?php echo $ph;?></h4><br>
					<?php echo $Fimg;?><br>
					<h6><?php echo $sd;?></h6>

					<form method="POST" action="invite.php">
						<a href="invite.php" class="btn btn-warning">Send Invitation</a>
					</form><br>
					<?php
					if (isset($_POST['sub'])) {
						header('location:invite.php');
					}
					?>
					<?php
					
				}
				// Retrieve Number of records returned
				$records = mysqli_num_rows($result);
				?>

				<?php
				// Close the connection
				mysqli_close($con);
				?>
			</div>
	</div>
</body>
</html>