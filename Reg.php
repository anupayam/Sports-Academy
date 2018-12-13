<?php
	$x="";
	$conn = mysqli_connect("localhost","root","atul5314","project");

	if($conn)
		echo "Connct";
	else
		echo "Not connect";

		
		$f_name =$_POST['sfnm'];
		$l_name =$_POST['slnm'];
		$address =$_POST['add'];
		$email =$_POST['email'];
		$passd =$_POST['pass'];
		$phone =$_POST['phone'];
		$s_id =$_POST['sid'];
		$gender=$_POST['gender'];
		$age=$_POST['age'];
		$Game=$_POST['game'];
		                      if($Game == '1')
								{
									$gname = 'Cricket';
									$sql1="INSERT INTO Cricket VALUES  ('$s_id','$Game',0,0,0,0,0)";
									//echo $sql1;
								
							
								}
								else if($Game == '2')
								{
									$gname = 'Tennis';
									$sql1="INSERT INTO Tennis VALUES  ('$s_id','$Game',0,0,0)";
									//$S_Id = 'Tennis';
									
								}
								else if($Game == '4')
								{
									$gname = 'Football';
									$sql1="INSERT INTO Football VALUES  ('$s_id','$Game',0,0,0)";
									
								}
								else if($Game == '3')
								{
									$gname = 'Hockey';
									$sql1="INSERT INTO Hockey VALUES  ('$s_id','$Game',0,0,0)";
									
								}

		//echo $gender;

	

	$sql = "INSERT INTO student VALUES ('$s_id','$f_name','$l_name','$email','$passd','$address',$phone,$age,'$gender','$Game')";
	
	//echo $sql;
	if(mysqli_query($conn, $sql) and mysqli_query($conn, $sql1))
	{
		echo $x="Data Inserted Successfully";
	}
	else
	{
		echo $x="problem in adding data into the book library.....please re-enter data".mysqli_error($conn);
	}
	mysqli_close($conn);
?>