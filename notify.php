<?php include('../../includes/connection.php');?>
<html>
<head>
	<meta charset="UTF-8">
	<title>Notification</title>
	<link rel="stylesheet" type="text/css" href="../css/def.css">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap/css/bootstrap.css">
</head>
<body>

	<div class="full-page">
		<div class="nav-bar">
			<div>
				<h1>Notification</h1>
			</div>
			<nav>
				<ul id = "MenuItems">
					<li><a href="../freelancer/freelancer.php">HOME</a></li>
				</ul>
			</nav>
		</div>

		<div class="container">
			<?php

			$query = "SELECT Username,Organ_Name,Description FROM invitation";
			$result = mysqli_query($conn, $query);

			while ($data = mysqli_fetch_array($result)) {
				
				$un=$data['Username'];
				$org=$data['Organ_Name'];
				$Desc = $data['Description'];
				

				?><h5><?php echo $org;?> sends invitation for you</h5>
				
				
				<?php
					
				}
				// Retrieve Number of records returned
				$records = mysqli_num_rows($result);
				if ($result) {
					echo "";
				}else{
					echo "not fetched".mysqli_error($conn);
				}
				?>


				<?php
				// Close the connection
				mysqli_close($conn);
				?>
		</div>
	</div>
</body>
</html>