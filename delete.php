		
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
		</div><br><br><br><br>
	</head>
<body>
	<h3 align="center"> Enter the student Roll number to delete his record</h3><br><br><br><br>
	<form align="center" method="POST">
			<td><input type="text" name = "sid" placeholder = "Student-id"></td> <br><br>
			<td><input type = "submit" name = "delete1" value = "Delete" ></td>
			</form>

</body>

</html>


		<?php

			$conn = mysqli_connect("localhost","root","atul5314","project");
		



			if(isset($_POST['delete1']))
			{
				$sid = $_POST['sid']; 

				$sql = "select S_Id from student";
					
					$result = mysqli_query($conn, $sql);
				    if(mysqli_num_rows($result))
					{
					
						while($row = mysqli_fetch_assoc($result))
						{
							$sid1 = $row['S_Id'];
							$temp = 0;
							if($sid == $sid1)
							{
								$temp = 1;
								$del = "DELETE FROM `student` WHERE S_Id = '$sid'";
								if(mysqli_query($conn,$del))
								echo "Data Deleted Successfully";
								header("location:show.php");
								break;
							}


						}
						if($temp == 0)
							echo "Data Not Found";
					}	

			}
			
		?>