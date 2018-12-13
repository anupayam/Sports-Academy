<html>
    <head>
        <title>Sport Academy</title>

        <link rel="stylesheet" type="text/css" href="/sportacademy/css/style.css">
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <style>
            table, td {
                        padding: 5px;
                        }
            table {
                    border-spacing: 15px;
                    border:solid blue;
                }
        </style>
    </head>

    <body style= "background-color:gray; margin:0px; padding:0px">
        <div id="color">
        <header>
            <span class="glyphicon glyphicon-envelope"></span>
            <a href="mailto:vijaymishravm99@gmail.com" style="text-align:right color:white ;text-decoration: none; color:white" >vijaymishravm99@gmail.com</a>&nbsp;&nbsp;
            &#9743;<a href="Mobile:8009031061" style="text-align:right; text-decoration: none;color:white">8009031061</a>
        
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
                        <li><a href="gallery.html">Gallery</a></li>
                        <li><a href="tournament.html">Tourment</a></li>
                        <li><a href="contact.html">Contact Us</a></li>
                        <li><a href="#">Login</a>
                            <ul>
                                <li><a href="stud.html">Student</a></li>
                                <li><a href="admin.html">Admin</a></li>
                            </ul>
                        </li>
                        <li><a href="Reg1.php">Registration</a></li>
            
                    </ul></li>
            </nav>
            <br><br><br>
            <form action="Reg.php" method="POST">
            <table align="center">
                <h1 align="center">Student Registation Page</h1>
                
                <tr>
                    <td>First Name:</td><td><input type="text" name="sfnm" required></td>
                </tr
                <tr>
                    <td>Last Name:</td><td><input type="text" name="slnm" required></td>
                </tr>
                <tr>
                    <td>Address :</td><td> <input type="text" name="add" required></td>
                </tr>
                <tr>
                    <td>E-mail  :</td><td><input type="email" name="email" required ></td>
                </tr>
                 <tr>
                    <td>Password  :</td><td><input type="Password" name="pass" required ></td>
                </tr>
                <tr>
                    <td>Phone  :</td><td><input type="text" name="phone" required></td>
                </tr>
                <tr>
                    <td>Sid  :</td><td><input type="text" name="sid"  required></td>
                </tr>
                
                <tr>
                     <td>Gender:</td>  
                        <td><select name="gender" >
                            <option value="male">Male</option>
                            <option value="Female">Female</option>
                        </select> 
                    </td>
                </tr>
                <tr>
                    <td>Age :</td><td><input type="number" name="age" required></td>
                </tr>
                <tr>
                    <td>Game:</td>  
                        <td><select name="game" >
                            <option value="1">Cricket</option>
                            <option value="2">Tennis</option>
                            <option value="3">Hockey</option>
                            <option value="4">Football</option>

                        </select> 



                    
                </tr>
                <tr>
                    <td></td><td><input type="submit" value="submit"></td>
                </tr>   
                
            </table>    
        </form>
    </body>
    
</html>