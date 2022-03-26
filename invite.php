<?php include('../../includes/connection.php');?>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="../css/def.css">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap/css/bootstrap.css">

	<style type="text/css">

	.modify {
		width: 25%;
		height: 75%;
		background: transparent;
		
	}
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
				<h1>DEVELOPER FREELANCE SYSTEM</h1>
			</div>
			<nav>
				<ul id = "MenuItems">
					<li><a href="../emp/employeer.php">HOME</a></li>
				</ul>
			</nav>
		</div>

		<center>
			<h1>Send Invitation</h1>

			<form method="POST" action="invite.php">

				<label>User Name</label>
				<select name="un" class="input-fields">
					<?php

					$query = mysqli_query($conn, "SELECT User_name from freelancer");
					while ($data = mysqli_fetch_array($query)) {
						echo "<option value='".$data['User_name']."'>".$data['User_name']."</option>";
					}
					?>
				</select><br><br>
				<label>Sender</label>
				<select name="un1" class="input-fields">
					<?php

					$query1 = mysqli_query($conn, "SELECT Organizations_Name from employeer");
					while ($data1 = mysqli_fetch_array($query1)) {
						echo "<option value='".$data1['Organizations_Name']."'>".$data1['Organizations_Name']."</option>";
					}
					?>
				</select><br><br>
				<input type="text" name="desc" class="input-fields" placeholder="Write Something..."><br><br>
				<input type="submit" name="sub" class="submit-btnn" value="Invite">
				
			</form>
			<?php

			if (isset($_POST['sub'])) {

				$un = $_POST['un'];
				$on = $_POST['un1'];
				$des = $_POST['desc'];

				$query = "INSERT INTO invitation(Username, Organ_Name, Description) VALUES('$un', '$on', '$des')";
				$sql = mysqli_query($conn, $query);


			}
			?>
		</center>
	</div>	
</body>
</html>