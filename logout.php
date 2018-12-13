<?php
	session_start();
	$conn = mysqli_connect("localhost","root","atul5314","project");

	header("location:index.html");
	session_destroy();

?>

