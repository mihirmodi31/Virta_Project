<?php 
	session_start();
	echo '<body style="background-color:orange">';
	if(!isset($_SESSION["username"]))
	{
		echo "Please Login here<a href='6 login.php'><h1>Login</h1></a>";
		exit();
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>charity_head</title>

	<style>
		body {
            font-family: Arial, Helvetica, sans-serif;
            background-color: orange;
        }

        * {
            box-sizing: border-box;
        }

		.container {
            padding: 10px;
            background-color: orange;
            color: black;
            text-align: center;
            font-size: x-large;

        }

		.heading {
            padding: 10px;
            background-color: orange;
            color: white;
            text-align: center;
            font-size: xx-large;

        }
/* h */
		.topnav {
  overflow: hidden;
  background-color: #333;
}

.topnav a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #4CAF50;
  color: white;
}

.topnav-right {
  float: right;
}

.navbar-brand
{
    position: left;
    width: 25px;
	height: 45px;
    left: 17px;
    max-height: 50px; /* height of the navbar */
}

	</style>
</head>

<body>

<div class="topnav">
        <a href="#" class="navbar-brand">
            <img src="logo/v.svg" height="15" alt="Veerata">
        </a>  
  <a >veerata</a >
  <a class="active" href="#"><i class="fa fa-fw fa-home"></i>Home</a>
  <a href="15 proj.php">This Project</a >
  <a href="14 contact.php">About us</a>
  <div class="topnav-right">
  	<a href="13 logout.php">Logout</a>
  </div>
</div>

	<div class="heading">
	<?php

	require_once "1 connection.php";
	if($_SERVER["REQUEST_METHOD"]=="GET")
	{
		try
		{
			$query=$dbhandler->query('select * from register');
			while($r=$query->fetch())
			{
				if($r['username'] == $_SESSION['username'])
				{
					if($r['gender'] == 'male')
					{
						echo "<h3>Welcome Mr ".$r['firstname']." ".$r['lastname']."</h3>";				
					}
					elseif($r['gender'] == 'female')
					{
						
						echo "<h3>Welcome Ms ".$r['firstname']." ".$r['lastname']."</h3>";				
					}
					else
					{
						echo "<h3>Welcome ".$r['firstname']." ".$r['lastname']."</h3>";				
					}
				}
			}
		}
		catch(PDOException $e)
		{
			echo $e->getMessage();
			die();
		}
	}
	require_once "1 connection.php";
	
?>
	</div>

	<div class="container">
		1. To see the details of Registration till now click <a href='11 register_detail.php'><b>Here</b></a>
		<br>
		<br>
		2. To see the details of Donation till now click <a href='12 donation_detail.php'><b>Here</b></a>
		<br>
		<br>
		3. If you want to Donate then click <a href='8 charity.php'> <b>Here</b></a>

	</div>
	
</body>
</html>