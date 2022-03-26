
<html>
<head>
	<link rel="stylesheet" type="text/css" href="../css/def.css">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap/css/bootstrap.css">

	<style type="text/css">

	.modify {
		width: 25%;
		height: 75%;
		background: transparent;
		border-radius: 25px;
		margin-left: 35%;
		
	}

	.modify input{
		width: 80%;
		padding: 10px 0;
		margin: 5px 0;
		border-left: 0;
		border-top: 0;
		border-right: 0;
		border-bottom: 1px solid #999;
		background-color: white;
	}
	.modify button{
		width: 85%;
		padding: 10px 30px;
		cursor: pointer;
		display: block;
		margin: auto;
		background: green;
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
				<h1>Manage profile</h1>
			</div>
			<nav>
				<ul id = "MenuItems">
					<li><a href="../admin/admin.php">HOME</a></li>
				</ul>
			</nav>
		</div>

		<center class="modify">
			<form method="POST" action="manage.php">
				<input type="text" name="fname" placeholder="Freelancer First Name" required><br>
				<input type="text" name="mname" placeholder="Freelancer Middle Name"required><br>
				<input type="text" name="lname" placeholder="Freelancer Last Name" required><br>
				<input type="email" name="email" placeholder="Freelancer EMail" required><br>
				<input type="text" name="edu_st" placeholder="Freelancer Education Status" required><br>
				<input type="text" name="ph" placeholder="Freelancer Phone Number" required><br>
				<input type="text" name="city" placeholder="Freelancer City" required><br>
				<input type="text" name="country" placeholder="Freelancer Country" required><br>
				<input type="text" name="uname" placeholder="User Name" required><br>
				<input type="password" name="passw" placeholder="Password" required>
				<button type="submit" name="sub">UPDATE</button>
				
			</form>
		</center>
	</div>	
</body>
</html>