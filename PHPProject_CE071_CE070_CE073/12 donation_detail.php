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
	<title>donation_detail</title>

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

	<div class="container">
		<?php

		require_once "1 connection.php";
		try {
			$query = $dbhandler->query('select * from donate');
			$amount = 0;
			$count = 0;
			while ($r = $query->fetch()) {
				$count = $count + 1;
				$amount = $amount + $r['amount'];
				echo "<b>[" . $r['id'] . "] </b><br/>";
				echo "<b>Username: </b>" . $r['username'] . "<br/>";
				echo "<b>Bankname: </b>" . $r['bankname'] . "<br/>";
				echo "<b>Account_no: </b>" . $r['accountno'] . "<br/>";
				echo "<b>IFSC: </b>" . $r['ifsc'] . "<br/>";
				echo "<b>Amount: </b>" . $r['amount'] . "<br/>";
				echo "<b>State: </b>" . $r['state'] . "<br/><br/>";
			}
			echo "<h2>Total donation till now: " . $count;
			echo "<h2>Total donation amount till now: " . $amount;
		} catch (PDOException $e) {
			echo $e->getMessage();
			die();
		}
		?>
	</div>
</body>

</html>