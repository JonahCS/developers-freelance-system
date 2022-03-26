<?php
include('../../includes/connection.php');
	if (isset($_POST['upload'])) {

		$name=$_POST['org'];
		$file=$_POST['file'];

		if ($name == $data[0]) {
			
		}
		$query = "INSERT INTO job_vacancy(file) VALUES('$file')";
		$sql=mysqli_query($conn, $query);

		if ($sql) {
			echo "file inserted!!";
		}else{
			echo "".mysqli_error($conn);
		}
	}
?>