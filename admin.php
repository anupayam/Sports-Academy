
<?php
	session_start();
	$conn = mysqli_connect("localhost","root","atul5314","project");
	
	if(isset($_POST['submit']))
	{
	
		$email =$_POST['email'];
		$passd =$_POST['password'];

		
		$_SESSION['email'] = $email;

		$sql = "select Password from Admin where Email_id = '".$email."' and Password='".$passd."'"; 
			
		 if($res=mysqli_query($conn, $sql))
	 	 {
			$result = mysqli_num_rows($res);
			
			if($result)
			{
				$_SESSION['user1'] = $email;
				header("location:show.php");
			}
		 	else
		 		echo "Login Error";
		 	
		}
	}

?>



<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Student</title>
	<link rel="stylesheet" type="text/css" href="/sportacademy/css/style.css">
	<style>
		table,td{
			padding:10px;
			margin-top: 100px;
			
		}
		table
    {
			border-spacing:10px;
			border:solid black;
			float:center;
    }
	</style>
</head>
<div id="color">
	<body style= "background-color:gray;margin:0px; padding:0px">
	<div id="color">
	<header>
		
		 
		&#9993;<a href="mailto:vijaymishravm99@gmail.com" style="text-align:right color:white ;text-decoration: none; color:white" >vijaymishravm99@gmail.com</a>&nbsp;&nbsp;
		&#9743;<a href="Mobile:8545097856" style="text-align:right; text-decoration: none;color:white">8545097856</a>
	
	</header>
	
		<div id="b">
		<nav id="nav">
    	<ul id="navigation">
        <li><a href="index.html" class="first">Home</a></li>
        <li><a href="who.html">Who We Are</a></li>
        <li><a href="#">Sports</a>
            <ul>
                <li><a href="cricket.html" target="_self">Cricket</a></li>
                <li><a href="football.html" >Foootball</a></li>
                <li><a href="badminton.html">Badminton</a></li>
                <li><a href="hockey.html">Hockey</a></li>
            </ul>
        </li>
        
        <li><a href="tournament.html">Tournament</a></li>
        <li><a href="contact.html">Contact Us</a></li>
        <li><a href="#">Login</a>
            <ul>
                <li><a href="stud.html">Student</a></li>
                
            </ul>
        </li>
        
        </ul>
		</nav></div>
</div><br><br><br>
	

<div>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">		
<table border="0" align="center">
	<tr><td></td><td><h3><u>Login Admin</u></h3></td></tr>
  <tr>
    <td>User Name</td>
    <td>
      <input type="email" name="email" size="30" placeholder="Email-id" required>
    </td>
  </tr>
  <tr>
    <td>Password</td>
    <td><input type="password" name="password" size="30" placeholder="Password" required></td>
  </tr>
  <tr><td></td><td><input type="submit" name = "submit" value="Login">
  	<input type="submit" value="Forget"></td></tr>
</table></div>
</form>
</body>
</html>



