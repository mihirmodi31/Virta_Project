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
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            margin: 0;
        }

        html {
            box-sizing: border-box;
        }

        *,
        *:before,
        *:after {
            box-sizing: inherit;
        }

        .column {
            float: left;
            width: 33.3%;
            margin-bottom: 16px;
            padding: 0 8px;
        }

        .card {
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
            margin: 8px;
        }

        .about-section {
            padding: 50px;
            text-align: center;
            background-color: orange;
            color: white;
        }

        .container {
            padding: 0 16px;
        }

        .container::after,
        .row::after {
            content: "";
            clear: both;
            display: table;
        }

        .title {
            color: grey;
        }

        .button {
            border: none;
            outline: 0;
            display: inline-block;
            padding: 8px;
            color: white;
            background-color: #000;
            text-align: center;
            cursor: pointer;
            width: 100%;
        }

        .button:hover {
            background-color: #555;
        }

        @media screen and (max-width: 650px) {
            .column {
                width: 100%;
                display: block;
            }
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
  <a class = "active" href="14 contact.php">About us</a>
  <div class="topnav-right">
  	<a href="13 logout.php">Logout</a>
  </div>
</div><br>

    <div class="about-section">
        <h1>About Us</h1>
        <p></p>
    </div>

    <h2 style="text-align:center">Our Team</h2>
    <div class="row">
        <div class="column">
            <div class="card">
                <img src="about_us/ayarn1.jpeg" alt="Ayarn" style="width:100%" height="300px">
                <div class="container">
                    <h2>Ayarn Modi</h2>
                    <p class="title">Student</p>
                    <p>studies at Dharmsinh Desai University.</p>
                    <p>Computer Engineering.</p>
                    <p>Roll No. CE070</p>
                    <p>iamayarn2001@gmail.com</p>
                </div>
            </div>
        </div>

        <div class="column">
            <div class="card">
                <img src="about_us/mihir1.jpeg" alt="Mihir" style="width:100%" height="300px">
                <div class="container">
                    <h2>Mihir Modi</h2>
                    <p class="title">Student</p>
                    <p>studies at Dharmsinh Desai University.</p>
                    <p>Computer Engineering.</p>
                    <p>Roll No. CE071</p>
                    <p>mihirmodi31@gmail.com</p>
                </div>
            </div>
        </div>

        <div class="column">
            <div class="card">
                <img src="about_us/deep1.jpeg" alt="Deep" style="width:100%" height="300px">
                <div class="container">
                    <h2>Deep Morker</h2>
                    <p class="title">Student</p>
                    <p>studies at Dharmsinh Desai University.</p>
                    <p>Computer Engineering.</p>
                    <p>Roll No. CE073</p>
                    <p>morkerdeep11@gmail.com</p>
                </div>
            </div>
        </div>
    </div>

</body>

</html>