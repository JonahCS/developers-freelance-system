<?php
include('../../includes/connection.php');

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
	<title>Admin</title>
	<link rel="stylesheet" type="text/css" href="../css/def.css">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap/css/bootstrap.css">
	<style type="text/css">

	.sub-btn{
		width: 10%;
		font-size: 20px;
		color: white;
		float: left;
		padding: 10px 30px;
		cursor: pointer;
		display: block;
		margin-top: 220px;
		background: #23585a;
		border: 0;
		outline: none;
		border-radius: 30px;
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

/* Add a red background color to navbar links on hover */
.navbar a:hover, .dropdown:hover .dropbtn {
  background-color: #23585a;
}

/* Dropdown content (hidden by default) */
.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}


/* Links inside the dropdown */
.dropdown-content a {
  float: none;
  color: black;
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
				<h1>Administrator Page</h1>
			</div>
			<nav>
				<ul id = "MenuItems">
					<li><a href="#" onload="">HOME</a></li>
					<?php

					$sql = mysqli_query($conn, "SELECT i.Organ_Name,a.User_Name FROM invitation i join apply a ");
					

					$count = mysqli_num_rows($sql);
					if ($count) {
						echo "";
					}else{
						echo "wrong".mysqli_error($conn);
					}
					?>
					<?php

					$sqll = mysqli_query($conn, "SELECT name,email,msg FROM contact_us ");
					

					$countt = mysqli_num_rows($sqll);
					if ($countt) {
						echo "";
					}else{
						echo "wrong".mysqli_error($conn);
					}
					?>

					<li><a href="notify.php" class="notification">notification
						<span class="badge"><?php echo $count+$countt;?></span>
					</a>
				</li>
					<li><a href="#"></a><div class="dropdown">
						<button class="dropbtn">
							<?php if (isset($_SESSION['success'])) :?>
								<div class="error_success">
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
							<a href="remove.php">Remove Account</a>
							<a href="manage_content.php">manage profile</a>
							<a href="../index.php?logout='1'" style="color= red;">Log Out</a>
						</div>
						</div>
					</li>
				</ul>
			</nav>
		</div>
		<div class="db_content">
			<?php
			// Establish Connection with Database
			$con = mysqli_connect("localhost","root","","dfs");
			// Specify the query to execute
			$sql = "SELECT User_name,FPayment_hour,FEdu_status,FEmail,Fimage FROM freelancer WHERE fid>='15'";
			// Execute que
			$result = mysqli_query($con,$sql);
			// Loop through each records
			//var_dump($result);
			while($row = mysqli_fetch_array($result))
			{
				$UserName=$row['User_name'];
				$FPay=$row['FPayment_hour'];
				$Fedu=$row['FEdu_status'];
				$em = $row['FEmail'];
				$Fimg="<img src='{$row['Fimage']}' width='50%' height='50%'" ;

				?><h5>UserName: <?php echo $UserName;?></h5><br>
				<h5>Payment per hour: <?php echo $FPay;?></h5><br>
				<h5>Education Status:<?php echo $Fedu;?></h5><br>
				<h5>Email: <?php echo $em;?></h5><br>
				<?php echo $Fimg;?>

				<br>
				<?php
					
				}
				// Retrieve Number of records returned
				$records = mysqli_num_rows($result);
				?>

				<?php
				// Close the connection
				mysqli_close($con);
				?>


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
				<br><br><br>
				
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
	</div>
</body>
</html>