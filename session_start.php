<?php

session_start();
if (isset($_session['$admin'])) {
	header('location:admin.php');
}
if (isset($_session['$emp'])) {
	header('location:employeer.php');
}
if (isset($_session['$free'])) {
	header('location:freelancer.php');
}
?>