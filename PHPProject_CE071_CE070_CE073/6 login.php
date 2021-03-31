<?php

 if($_SERVER["REQUEST_METHOD"]=="POST")
 {
  require_once "1 connection.php";
  session_start();
  try
  {
	$username=$_POST['username'];
	$password=$_POST['password'];
    
	$query=$dbhandler->query('select * from register');
	while($r=$query->fetch())
	{
		if($r['username'] == $username && $r['password'] == $password)
		{	
			$_SESSION["username"]=$r["username"];
			$firstname=$r['firstname'];
			$lastname=$r['lastname'];
			$gender=$r['gender'];
            $_SESSION['m_id'] = $r['managment_id'];
			if($r['managment_id'] == 0)
			{
				header("Location: ./8 charity.php");
			}
			else
			{
				header("Location: ./7 charity_head.php");
			}
    	}
	}
	echo "<p style='color:red'>Username or password is invalid ! Try again</p>";
  }
  catch(PDOException $e)
  {
	echo $e->getMessage();
	die();
  }
 }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            background-color: orange;
        }

        * {
            box-sizing: border-box;
        }

        .heading {
            padding: 10px;
            background-color: orange;
            color: white;
            text-align: center;
            font-size: x-large;

        }

        .container {
            padding: 40px;
            background-color: white;
        }

        input[type=text],
        input[type=password]
         {
            width: 50%;
            padding: 15px;
            margin: 5px 0 15px 0;
            display: inline-block;
            border: none;
            background: #f1f1f1;
        }

        input[type=text]:focus,
        input[type=password]:focus
         {
            background-color: #ddd;
            outline: none;
        }

        a {
            color: dodgerblue;
        }

        .registerbtn {
            background-color: #4CAF50;
            color: white;
            padding: 16px 20px;
            margin: 8px 0;
            border: none;
            cursor: pointer;
            width: 20%;
            opacity: 0.9;
        }

        .registerbtn:hover {
            opacity: 1;
        }

        .login {
            background-color: #f1f1f1;
            text-align: center;
        }

    </style>
</head>
<body>
    <form action="6 login.php" method="POST" align="left">

        <div class="heading">
            <h1>Log In</h1>
        </div>

        <div class="container">
            <label for="username"><b> User Name :</b></label>
            <input type="text" name="username" required placeholder="Enter User Name" minlength=6 maxlength=10/>
            <br/><br/>

            <label for="password"><b> Password :</b></label>
            <input type="password" name="password" required placeholder="Enter Password" minlength=3/>

    	    <br/><br/>
	    
        </div>

        <div class="login">
            <button type="submit" class="registerbtn">Log in</a> </button> 

            <br> <br> 

            Are you a new user? <a href="4 registration.php">Sign Up</a>
            <br> <br> <br> <br>
        </div>
    </form>
</body>
</html>