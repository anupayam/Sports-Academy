
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
		        	<li><a href="index.html" class="first">Home</a></li>
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
        			
        
        		</ul></li>
		</nav>
		</div>
		<br><br><br>





<?php
$sid="";
$fname="";
$lname="";
$email="";
$pass="";
$add= "";
$phn="";
$age="";
$gender="";
$game="";
$conn = new mysqli("localhost","root","atul5314","project");
   if(!$conn){
   	die("connection failed");
   }
				$studid =$_POST['sid1'];
						

					$sql = "select * from student where S_Id = '$studid'";
					
					$result = mysqli_query($conn, $sql);
				    if(mysqli_num_rows($result))
					{
					
						while($row = mysqli_fetch_assoc($result))
						{
							$sid = $row['S_Id'];
							$fname= $row['F_Name'];
							$lname= $row['L_Name'];
							$email = $row['Email'];
							$pass= $row['Password'];
							$add= $row['addrs'];
							$phn= $row['Phone'];
							$age= $row['Age'];
							$gender= $row['Gender'];
							$game= $row['G_Id'];

						}
					}
			
	?>



<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Update</title>
	<style>
		table,td{
			padding:10px;
			margin-top: 10px;
			
		}
		table{
			border-spacing:10px;
			border:solid black;
			float:center;


		}
	</style>
	
</head>

<body>
<center>
    <form method="POST" action="">
	<table><h3>Student Information</h3>
	    <tr><td>Student Id:</td><td><input type="text" name="sid" placeholder ="sid" value= <?php echo $sid;?> readonly></td></tr>
		<tr><td>First Name:</td><td><input type="text" name="fname" value= <?php echo $fname; ?> placeholder ="First Name" readonly></td></tr>
		<tr><td>Last Name:</td><td><input type="text" name="lname" value= <?php echo $lname; ?> readonly></td></tr>
		<tr><td>Email-Id:</td><td><input type="text" name="email" value= <?php echo $email; ?> ></td></tr>
		<tr><td>Password:</td><td><input type="password" name="password" value= <?php echo $pass; ?> ></td></tr>
		<tr><td>Address:</td><td><input type="text" name="address" value= <?php echo $add; ?> ></td></tr>
		<tr><td>Contact No.:</td><td><input type="text" name="phone" value= <?php echo $phn; ?> ></td></tr>
		<tr><td>Age:</td><td><input type="text" name="age" value= <?php echo $age; ?> readonly></td></tr>
		<tr><td>Gender:</td><td><input type="text" name="gender" value= <?php echo $gender; ?> readonly></td></tr>
		<tr><td>Game:</td><td><input type="text" name="game" value= <?php echo $game; ?> readonly></td></tr>
		
		<tr><td></td><td><input type="submit" name="update1" value="submit"></td></tr>
		
	
		<br><br><center><?php echo $x; ?></center>
	</table>
    </form>
	</center>

	</body>
	</html>

	<?php
		if(isset($_POST['update1']))
		{
			$sid=$_POST['sid'];
			//$fname=$_POST['fname'];
			//$lname=$_POST['lname'];
			$email=$_POST['email'];
			$pass=$_POST['password'];
			$add= $_POST['address'];
			$phn=$_POST['phone'];
			//$age=$_POST['age'];
			//$gender=$_POST['gender'];
			//$game=$_POST['game'];
			//echo $email." ".$pass." ".$add." ".$phn;

			$sql = "UPDATE `student` SET `Email`='$email',`Password`='$pass',`addrs`='$add',`Phone`='$phn' WHERE `S_Id` = '$sid'";
			//echo $sql;
			if(mysqli_query($conn,$sql))
			{
				echo "Data Updated Sucessfully";
				header("location:stud.php");
			}
			else
				echo "Error While Updating";
		}
		mysqli_close($conn);
	?>