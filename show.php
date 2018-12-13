


<html>
	<head>
		<style>
		
		table,th,td{
			border:2px solid black;
			border-collapse: collapse;
			text-align: center;
			
		}
		th{
			border:2px solid black;
			border-collapse: collapse;
			text-align: center;
			
		}

	</style>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>SPORTS ACADEMY</title>
	<link rel="stylesheet" type="text/css" href="/sportacademy/css/style.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	

</head>
<body style= "background-color:gray; margin:0px; padding:0px">
	<div id="color">
	<header>
		<span class="glyphicon glyphicon-envelope"></span>
		<a href="mailto:vijaymishravm99@gmail.com" style="text-align:right color:white ;text-decoration: none; color:white" >vijaymishravm99@gmail.com</a>&nbsp;&nbsp;
		&#9743;<a href="Mobile:555-555-1212" style="text-align:right; text-decoration: none;color:white">8009031061</a>
	
	</header>
		
		<div id="b">
		<nav id="nav">
    	<ul id="navigation">
		        	
        			<li><a href="admin1.php?id = $email">Change-Password</a></li>
        			<li><a href="search.php">Search</a></li>
        			<li><a href="delete.php">Delete</a></li>
        			
        			
        
        		</ul></li>
		</nav>
		<br><br><br>
		</div>
		<form align = "right" method="POST" action="logout.php">
			
			<input  type= "submit" name = "submit" value = "Logout" >
		</form>

		<h3 align = "center"> Student Deatail<h3>
		




		<form align = "center">
			<table style = "width:100%">
				<tr>
				<th>Student-Id</th>
				<th>first Name</th>
				<th>Last Name</th>
				<th>Email</th>
				<th>Password</th>
				<th>Address</th>
				<th>Contact</th>
				<th>Age</th>
				<th>Gender</th>
				<th>Game</th>
				
				</tr>
				<?php

					session_start();
					if(!$_SESSION['user1'])
					header("location:admin.php");
					$conn = mysqli_connect("localhost","root","atul5314","project");
					$sql = "select * from student";
					
					$result = mysqli_query($conn, $sql);
					if(mysqli_num_rows($result))
					{
						//echo $_SESSION['user'];
						while($row = mysqli_fetch_assoc($result))
						{   
							$S_Id = $row['S_Id'];
							$f_name = $row['F_Name'];
							$l_name = $row['L_Name'];
							$email = $row['Email'];
							$pass = $row['Password'];
							$Add = $row['addrs'];
							$contact = $row['Phone'];
							$gender = $row['Gender'];
							$age = $row['Age'];
							$gname = $row['G_Id'];
					//	echo "can not pritn";
							echo "
								<tr>
								<td>$S_Id</td>
								<td>$f_name</td>
								<td>$l_name</td>
								<td>$email</td>
								<td>$pass</td>
								<td>$Add</td>
								<td>$contact</td>
								<td>$age</td>
								<td>$gender</td>";
								
								//echo $gname;
								if($gname == '1')
								{
									$gname = 'Cricket';
									//$S_Id = 'Cricket';
									echo "<td><a href = 'Cricket.php?sid=".$S_Id."'>$gname</a></td>";
									$gname = '1';
								}
								if($gname == '2')
								{
									$gname = 'Tennis';
									//$S_Id = 'Tennis';
									echo "<td><a href ='tennis.php?sid=".$S_Id."'>$gname</a></td>";
									$gname = '2';
								}
								if($gname == '4')
								{
									$gname = 'Football';
									//$S_Id = 'Football';
									echo "<td><a href = 'Football.php?sid=".$S_Id."'>$gname</a></td>";
									$gname = '4';
								}
								if($gname == '3')
								{
									$gname = 'Hockey';
									//$S_Id = 'Hockey';
									echo "<td><a href = 'Hockey.php?sid=".$S_Id."'>$gname</a></td>";
									$gname = '3';
								}


								


								//echo "<td>Update</td>";
								echo "</tr>";
								
										
						}
					}


				?>
				<tr>
					
				</tr>
				
			</table>
		</form><br><br><br><br>


		
	</body>
</html>