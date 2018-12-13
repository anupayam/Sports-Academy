
<?php
			
			$conn = mysqli_connect("localhost","root","atul5314","project");
					$student_id = $_SESSION['user'];
					echo $student_id;

					$sql = "select * from student where S_Id = '$studen_id'";
					$result = mysqli_query($conn, $sql);
					if(mysqli_num_rows($result))
					{
						while($row = mysqli_fetch_assoc($result))
						{
							$S_Id = $row['S_Id'];
							echo $S_Id;
							$f_name = $row['F_Name'];
							$l_name = $row['L_Name'];
							$email = $row['Email'];
							$pass = $row['Password'];
							$Add = $row['addrs'];
							$contact = $row['Phone'];
							$age = $row['Age'];
							$gender = $row['Gender'];
						}

						
					}


	?>

<html>
	<head>
		<style>
		table,td,th{
			border:1px solid black;
			border-collapse: collapse;
			
		}
		th,td{
			padding: 2px;
			text-align: center;


		}
	</style>
	</head>
	<body>
		<h3 align = "center"> Student Personal Deatail<h3>
		<form>
			<table style = "width:100%">
				<tr><td>Student-Id</td> <td> <?php echo $S_Id; ?> </td></tr>
				<tr><th>first Name</th></tr>
				<tr><th>Last Name</th></tr>
				<tr><th>Email</th></tr>
				<tr><th>Password</th></tr>
				<tr><th>Address</th></tr>
				<tr><th>Contact</th></tr>
				<tr><th>Gender</th></tr>
				<tr><th>Age</th></tr>

				<?php



				?>
				<tr>
					
				</tr>
				
			</table>
		</form>
	</body>
</html>