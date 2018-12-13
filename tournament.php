<?php

	$conn = new mysqli("localhost","root","atul5314","project");

		$sid =$_POST['sid'];
		$name =$_POST['name'];
		$date =$_POST['date'];
		$email =$_POST['email'];
		$cont =$_POST['cont'];
		$time =$_POST['call'];
		
		$sql = "INSERT INTO Tounament VALUES ('$sid','$name','$date','$email','$cont','$time')";

		if(mysqli_query($conn, $sql))
		{
			echo "Registration Completed Successfully";
		}
		else
		{
			echo "problem in Registration".mysqli_error($conn);
		}
	mysqli_close($conn);

?>