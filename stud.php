
<!DOCTYPE html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>SPORTS ACADEMY</title>
	<link rel="stylesheet" type="text/css" href="/sportacademy/css/style.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	

</head>
<body style= "background-color:white; margin:0px; padding:0px">
	<div id="color">
	<header>
		<span class="glyphicon glyphicon-envelope"></span>
		<a href="mailto:vijaymishravm99@gmail.com" style="text-align:right color:white ;text-decoration: none; color:white" >vijaymishravm99@gmail.com</a>&nbsp;&nbsp;
		&#9743;<a href="Mobile:555-555-1212" style="text-align:right; text-decoration: none;color:white">8009031061</a>
	
	</header>
		
		<div id="b">
		<nav id="nav">
    	<ul id="navigation">
		        	
        			<li><a href="who.html">Who We Are</a></li>
        			<li><a href="#">Sports</a>
            		<ul>
                		<li><a href="cricket.html" target="_self">Cricket</a></li>
                		<li><a href="football.html" >Football</a></li>
                		<li><a href="badminton.html">Badminton</a></li>
                		<li><a href="hockey.html">Hockey</a></li>
            		</ul>
        			</li>
        			
        			<li><a href="tournament.html">Tourment</a></li>
        			<li><a href="contact.html">Contact Us</a></li>

        			<li><a href="contact.html">Contact Us</a></li>
        			
        
        		</ul></li>
		</nav>
		</div>
		<br><br><br>








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
		<form method="POST" action="logout.php">
			<input type="submit" name = "Logout" , value="Logout" >
			
		</form>


		
<?php
				session_start();
				//if(!$_SESSION['user'])
				//	header("location:stud1.php");
				$conn = mysqli_connect("localhost","root","atul5314","project");
				$studid =$_SESSION['user'];	

					$sql = "select * from student where S_Id = '$studid'"; 
					
					
					$result = mysqli_query($conn, $sql);
					if(mysqli_num_rows($result))
					{
					
						while($row = mysqli_fetch_assoc($result))
						{
							
							$sid=$row['S_Id'];
							$fname="";
							$lname="";
							$email="";
							$pass="";
							$add= "";
							$phn="";
							$age="";
							$gender="";
							$game=$row['G_Id'];


								
							echo '<table style = "width:100%">
							    <tr><td>Student-Id</td><td>'.$row['S_Id'].'</td></tr>
								<tr><td>First Name</td><td>'.$row['F_Name'].'</td></tr>
								<tr><td>Last Name</td><td>'.$row['L_Name'].'</td></tr>
								<tr><td>Email-Id</td><td>'.$row['Email'].'</td></tr>
								<tr><td>Password</td><td>'.$row['Password'].'</td></tr>
								<tr><td>Student Address</td><td>'.$row['addrs'].'</td></tr>
								<tr><td>Contact No.</td><td>'.$row['Phone'].'</td></tr>
								<tr><td>Student Age</td><td>'.$row['Age'].'</td></tr>
								<tr><td>Gender</td><td>'.$row['Gender'].'</td></tr>
								<tr><td>Game</td>';

								if($game == '1')
								{
									$gname = 'Cricket';
									//$S_Id = 'Cricket';
									echo "<td>$gname</a></td>";
									$gname = '1';
								}
								if($game == '2')
								{
									$gname = 'Tennis';
									//$S_Id = 'Tennis';
									echo "<td>$gname</a></td>";
									$gname = '2';
								}
								if($game == '4')
								{
									$gname = 'Football';
									//$S_Id = 'Football';
									echo "<td>$gname</a></td>";
									$gname = '4';
								}
								if($game == '3')
								{
									$gname = 'Hockey';
									//$S_Id = 'Hockey';
									echo "<td>$gname</a></td>";
									$gname = '3';
								}


								echo "</td>";

								echo "</tr>";
							?>
							<form method="POST" action="student.php">
								<input type="text" name="sid1" value=<?php echo $row['S_Id'] ?> hidden>
								<center><input type=submit value="click here to update your account"></center>
							</form>

							<?php

						}

						echo "</table>";
					}
			
				
	?><br><br>
		
		<h3 align = "center"> Student Academic Details<h3>
		
	<?php


		if($game == "1")
		{
			$prnt = "select * from Cricket where S_Id = '$sid'";



				$result = mysqli_query($conn, $prnt);
			
					if(mysqli_num_rows($result))
					{

					
						while($row = mysqli_fetch_assoc($result))
						{
		
							echo '<table style = "width:100%">
							    <tr><td>Student-Id</td><td>'.$row['S_Id'].'</td></tr>
								<tr><td>Student-Game-Name</td><td>Cricket</td></tr>
								<tr><td>TOtal Hundreads</td><td>'.$row['Hundreds'].'</td></tr>
								<tr><td>Total Fifty</td><td>'.$row['Fiftys'].'</td></tr>
								<tr><td>Total Wickets</td><td>'.$row['Wickets'].'</td></tr>
								<tr><td>Student Total Catches</td><td>'.$row['Catches'].'</td></tr>
								<tr><td>Best Score</td><td>'.$row['Best_score'].'</td></tr>';
								
							?>
							

							<?php

						}

						echo "</table>";
					}
			
					



		}
	?>

	<?php


		if($game == "2")
		{
			$prnt = "select * from Tennis where S_Id = '$sid'";



		$result = mysqli_query($conn, $prnt);
			
					if(mysqli_num_rows($result))
					{

					
						while($row = mysqli_fetch_assoc($result))
						{
		
							echo '<table style = "width:100%">
							    <tr><td>Student-Id</td><td>'.$row['S_Id'].'</td></tr>
								<tr><td>Student-Game-Name</td><td>Tennis</td></tr>
								<tr><td>TOtal Goal</td><td>'.$row['Goal'].'</td></tr>
								<tr><td>Current Rank</td><td>'.$row['Rank'].'</td></tr>
								<tr><td>Best Score</td><td>'.$row['Best_score'].'</td></tr>';
								
							?>
							

							<?php

						}

						echo "</table>";
					}
			
					



		}
	?>

	<?php


		if($game == "3")
		{
			$prnt = "select * from Hockey where S_Id = '$sid'";



		$result = mysqli_query($conn, $prnt);
			
					if(mysqli_num_rows($result))
					{

					
						while($row = mysqli_fetch_assoc($result))
						{
		
							echo '<table style = "width:100%">
							    <tr><td>Student-Id</td><td>'.$row['S_Id'].'</td></tr>
								<tr><td>Student-Game-Name</td><td>Hockey</td></tr>
								<tr><td>TOtal Goal</td><td>'.$row['Goal'].'</td></tr>
								<tr><td>Current Rank</td><td>'.$row['Rank'].'</td></tr>
								<tr><td>Best Score</td><td>'.$row['Best_score'].'</td></tr>';
								
							?>
							

							<?php

						}

						echo "</table>";
					}
			
					



		}
	?>

	<?php


		if($game == "4")
		{
			$prnt = "select * from Football where S_Id = '$sid'";



		$result = mysqli_query($conn, $prnt);
			
					if(mysqli_num_rows($result))
					{

					
						while($row = mysqli_fetch_assoc($result))
						{
		
							echo '<table style = "width:100%">
							    <tr><td>Student-Id</td><td>'.$row['S_Id'].'</td></tr>
								<tr><td>Student-Game-Name</td><td>Football</td></tr>
								<tr><td>TOtal Goal</td><td>'.$row['Goal'].'</td></tr>
								<tr><td>Current Rank</td><td>'.$row['Rank'].'</td></tr>
								<tr><td>Best Score</td><td>'.$row['Best_score'].'</td></tr>';
								
							?>
							

							<?php

						}

						echo "</table>";
					}
			
					



		}
	?>

	</body>
</html>

	