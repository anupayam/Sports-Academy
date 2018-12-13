<html>
	<head>
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

        			<li><a href="who.html">Who We Are</a></li>
        			<li><a href="#">Sports</a>
            		<ul>
                		<li><a href="cricket.html" target="_self">Cricket</a></li>
                		<li><a href="football.html" >Football</a></li>
                		<li><a href="badminton.html">Badminton</a></li>
                		<li><a href="hockey.html">Hockey</a></li>
            		</ul>
        			</li>
        			<li><a href="gallery.html">Gallery</a></li>
        			
        			<li><a href="contact.html">Contact Us</a></li>
        			
        
        		</ul></li>
		</nav>
		</div><br><br><br>

		<body>
			<h3 align="center"> Enter the student Roll number to Search his record</h3><br><br>
			<form align="center" method="POST">
					<td><input type="text" name = "sid" placeholder = "Student-id"></td> <br><br>
					<td><input type = "submit" name = "search1" value = "Search" ></td>
			</form>

</body>

</html>




<?php
			$conn = mysqli_connect("localhost","root","atul5314","project");

			if(isset($_POST['search1']))
			{
				$sid = $_POST['sid']; 
				//echo $sid;

				$sql = "select * from student where S_Id = '$sid'";
					
					$result = mysqli_query($conn, $sql);
				    if(mysqli_num_rows($result))
					{

						while($row1 = mysqli_fetch_assoc($result))
						{
							//$sid1 = $row11['S_Id'];
							$game = $row1['G_Id'];
							
							if($game == '1')
							{
								
								$prnt = "select * from Cricket where S_Id = '$sid'";
								$result1 = mysqli_query($conn, $prnt);
									
									if(mysqli_num_rows($result1))
									{

									
										while($row = mysqli_fetch_assoc($result1))
										{
						
											echo '<br><br><br><br><table style = "width:100%">
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
							elseif($game == '2')
							{
								
								$prnt = "select * from Tennis where S_Id = '$sid'";
								
								$result1 = mysqli_query($conn, $prnt);
									
									if(mysqli_num_rows($result1))
									{

										
										while($row = mysqli_fetch_assoc($result1))
										{
											echo'<br><br><br><br><table style = "width:100%">
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

							elseif($game == '3')
							{
								
								$prnt = "select * from Hockey where S_Id = '$sid'";
								$result1 = mysqli_query($conn, $prnt);
									
									if(mysqli_num_rows($result1))
									{

									
										while($row = mysqli_fetch_assoc($result1))
										{
						
											echo'<br><br><br><br><table style = "width:100%">
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
							elseif($game == '4')
							{
								
								$prnt = "select * from Football where S_Id = '$sid'";
								$result1 = mysqli_query($conn, $prnt);
									
									if(mysqli_num_rows($result1))
									{

									
										while($row = mysqli_fetch_assoc($result1))
										{
											
											echo'<br><br><br><br><table style = "width:100%">
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

						}
						
					}	

			}
			
		?>