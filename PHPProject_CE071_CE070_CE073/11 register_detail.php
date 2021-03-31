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
	<title>register_detail</title>
	<style>
		.container {
			font-family: Arial;
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
require_once '1 connection.php';

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
}catch (PDOException $e) {
    echo $e->getMessage();
    die();
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
  ?>  <a href="15 proj.php">This Project</a >
  <a href="14 contact.php">About us</a>
  <div class="topnav-right">
  	<a href="13 logout.php">Logout</a>
  </div>
</div><br>

	<div class="container">
		<?php

		require_once "1 connection.php";
		try {
			$query = $dbhandler->query('select * from register');
			$count = 0;
			while ($r = $query->fetch()) {
				$count = $count + 1;
				echo "<b> [" . $count . "] </b><br/>";
				echo "<b>Managment_id: </b>" . $r['managment_id'] . "<br/>";
				echo "<b>Username: </b>" . $r['username'] . "<br/>";
				echo "<b>Firstname: </b>" . $r['firstname'] . "<br/>";
				echo "<b>Lastname: </b>" . $r['lastname'] . "<br/>";
				echo "<b>Email: </b>" . $r['email'] . "<br/>";
				echo "<b>Gender: </b>" . $r['gender'] . "<br/>";
				echo "<b>Mobile_no: </b>" . $r['mobileno'] . "<br/><br/>";
			}
			echo "<h2>Total Registrations till now: " . $count;
		} catch (PDOException $e) {
			echo $e->getMessage();
			die();
		}
		?>

	</div>
</body>

</html>