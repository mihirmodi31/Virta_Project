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
    <title>Charity Trusts</title>

    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            background-color: orange;
        }

        .heading {
            padding: 10px;
            background-color: orange;
            color: white;
            text-align: center;
            font-size: x-large;

        }

        * {
            box-sizing: border-box;
        }

        .column1, .column2 {
            float: left;
            width: 50%; 
            padding: 5px;
            
        }

        .row1 {
            content: "";
            clear: both;
            display: table;
            text-align: center;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
            margin-bottom: 25px;
            background-color: #229954;
            
        }

        .row2 {
            content: "";
            clear: both;
            display: table;
            text-align: center;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
            margin-bottom: 25px;
            background-color: #229954;
        }

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
    width: 0px;
	height: 20px;
    left: 17px;
    max-height: 50px; /* height of the navbar */
}

    </style>
</head>
<body>

<div class="topnav">
        <a href="#" class="navbar-brand">
            <img src="logo/v.svg" height="15" border = "0px" alt="Veerata">
        </a>  
<a >veerata</a >
  <a href="7 charity_head.php"><i class="fa fa-fw fa-home"></i>Home</a>
  <a href="15 proj.php">This Project</a >
  <a href="14 contact.php">About us</a>
  <div class="topnav-right">
  	<a href="13 logout.php">Logout</a>
  </div>
</div><br>

    <div class="heading">
        <b style="font-size: 40px;"> Select Any Trust Of Your Choice</b> 
        
    </div>
    <hr>

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
?>

    <div class="row1">
        <div class="column1">
        <figure>
            <img src="charity_image/trust1.jpg" style="width:90%; border-radius:15px">
            <figcaption>
                <a href="9 payment.php" style="color: black; font-size:medium"> <b>Bharat Ke Veer</b> </a>
            </figcaption>
        </figure>
        </div>

        <div class="column1">
        <figure>
            <img src="charity_image/trust2.jpg" style="width:90%; border-radius:15px">
            <figcaption>
                <a href="9 payment.php" style="color: black; font-size:medium"> <b>Balidaan Trust of Charity</b> </a>
            </figcaption>
        </figure>
        </div>
        
    </div>


    <div class="row2">
        <div class="column2">
        <figure>
            <img src="charity_image/trust3.jpg" style="width:90%; border-radius:15px">
            <figcaption>
                <a href="9 payment.php" style="color: black; font-size:medium"> <b>Jai Jawan Trust</b> </a>
            </figcaption>
        </figure>
        </div>

        <div class="column2">
        <figure>
            <img src="charity_image/trust4.jpg" style="width:90%; border-radius:15px">
            <figcaption>
                <a href="9 payment.php" style="color: black; font-size:medium"> <b>Spirit of India</b> </a>
            </figcaption>
        </figure>
        </div>
        
    </div>
</body>
</html>