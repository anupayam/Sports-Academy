<html>
<head>
  <title>change</title>
</head>



<body>

<div>
<form action="admin1.php" method="POST">		
<table border="0" align="center">
	<tr><td></td><td><h3><u>Change Password</u></h3></td></tr>

  <tr>
    <td>Old password</td>
    <td><input type="password" name="password1" size="30" placeholder="Old-Password" required></td>
  </tr>
  <tr>
    <td>New Password</td>
    <td><input type="password" name="password2" size="30" placeholder="New-Password" required></td>
  </tr>
  <tr>
    <td>Re-Enter password</td>
    <td><input type="password" name="password3" size="30" placeholder="Re-Enter Password" required></td>
  </tr>
  <tr><td></td><td><input type="submit" name = "submit1" value="submit">
  	<input type="submit" value="Forget"></td></tr>
</table></div>
</form>
</body>
</html>



  <?php
    session_start();

    $conn = mysqli_connect("localhost","root","atul5314","project");

    
    $email = $_SESSION['email'];

    $pass1 = $_POST['password1'];
    $pass2 = $_POST['password2'];
    $pass3 = $_POST['password3'];

    if(isset($_POST['submit1']))
    {

    $sql = "select * from Admin where Email_id = '$email'";

        $result = mysqli_query($conn, $sql);
          if(mysqli_num_rows($result))
          {
            while($row = mysqli_fetch_assoc($result))
            {   
              
              $pass = $row['Password'];
              if($pass == $pass1)
              {

                if($pass2 == $pass3)
                {
                  //echo $pass.$pass1;
                  $query="UPDATE Admin SET Password = '$pass2'";
                   $res=$conn->query($query);
                   //echo $query.$res;
                   if($res)
                    echo "Password Updated Successfully";
                    else
                      echo "Can't Update Password";
                   
                    
                }
                else
                  echo "Both Password Must be same";
              }
              else
                echo "Incorrect Old Password";
                
            }
              
          }

             
          //  echo "can not pritn";
        }
        




  ?>