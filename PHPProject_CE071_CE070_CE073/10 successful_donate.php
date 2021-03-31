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
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>successful_donate</title>

	<style>
		body {
            font-family: Arial, Helvetica, sans-serif;
            
        }

        * {
            box-sizing:content-box;
        }

		.head {
            padding: 20px;
            background-color: orange;
            color: white;
            text-align: center;
            font-size: medium;

        }

		.det {
			text-align: center;
			font-size: 20px;
			background-color: white;
			padding: 100px;
			
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

<?php

require_once "1 connection.php";

try {
	$username = $_SESSION['username'];
	$amount = 0;
	$query = $dbhandler->query('select * from register');
	while ($r = $query->fetch()) {
		if ($r['username'] == $username) {
			$firstname = $r['firstname'];
			$lastname = $r['lastname'];
			$m_id = $r['managment_id'];
		}
	}
	?>

<div class="topnav">
        <a href="#" class="navbar-brand">
            <img src="logo/v.svg" height="15" alt="Veerata">
        </a> 
  <a >veerata</a > 
  <?php
	if($m_id == 0)
	{
		echo "<a href='8 charity.php'><i class='fa fa-fw fa-home'></i>Home</a>";
	}
	else
	{
		echo "<a href='7 charity_head.php'><i class='fa fa-fw fa-home'></i>Home</a>";
	}
  ?>
  
  <a href="15 proj.php">This Project</a >
  <a href="14 contact.php">About us</a>
  <div class="topnav-right">
  	<a href="13 logout.php">Logout</a>
  </div>
</div><br>

	
		<?php
		$query = $dbhandler->query('select * from donate');
		while ($r = $query->fetch()) {
			if ($r['username'] == $username) {
				$id = $r['id'];
				$amount = $amount + $r['amount'];
			}
		}
		$query = $dbhandler->query("select * from donate WHERE id=$id");
		$r = $query->fetch();

		echo '<div class="head"> 
				<h1>Thank you so much ' . $firstname . ' ' . $lastname . ' for donating to our soldiers</h1>
			  </div>';

		echo "<br/>";

		echo '<div class="det">Bank name: ' . $r['bankname'] . '<br/>'.
			'Account no: ' . $r['accountno'] . '<br/>'.
			'ifsc: ' . $r['ifsc'] . '<br/>'.
			'Amount: ' . $r['amount']. ' Rs'.
			'<br/></br>'.
			'<h3>Total donation from you till now is: ' . $amount . ' Rs </h3> </div>';

	} catch (PDOException $e) {
		echo $e->getMessage();
		die();
	}
	?>

</body>

</html>