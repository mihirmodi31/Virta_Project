<?php
	session_start();
	echo '<body style="background-color:orange">';
	if(!isset($_SESSION["username"]))
	{
		echo "Please Login here<a href='6 login.php'><h1>Login</h1></a>";
		exit();
	}
require_once "1 connection.php";
if ($_SERVER["REQUEST_METHOD"] == "POST") {

  try {
    $username = $_SESSION['username'];
    $bankname = $_POST['bankname'];
    $accountno = $_POST['account_no'];
    $ifsc = $_POST['ifsc'];
    $amount = $_POST['amount'];
    $state = $_POST['state'];
    $sql = "INSERT into donate (username,bankname,accountno,ifsc,amount,state) values ('$username','$bankname','$accountno','$ifsc','$amount','$state')";
    $query = $dbhandler->query($sql);
    header("Location:10 successful_donate.php");
    
  } catch (PDOException $e) {
    echo $e->getMessage();
    die();
  }
}
?>

<!DOCTYPE html>
<html>

<head>
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

        input[type=text] {
            width: 50%;
            padding: 15px;
            margin: 5px 0 15px 0;
            display: inline-block;
            border: none;
            background: #f1f1f1;
        }

        input[type=text]:focus {
            background-color: #ddd;
            outline: none;
        }

        .btn {
            background-color: #4CAF50;
            color: white;
            padding: 16px 20px;
            margin: 20px 20px;
            border: none;
            cursor: pointer;
            width: 20%;
            opacity: 0.9;
        }

        .btn:hover {
            opacity: 1;
        }

        a {
            color: dodgerblue;
        }

        .buttons {
            background-color: #f1f1f1;
            text-align: center;
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
            <img src="logo/v.svg" height="15" alt="Veerata">
        </a> 
  <a >veerata</a > 
  <a href="7 charity_head.php"><i class="fa fa-fw fa-home"></i>Home</a>
  <a href="15 proj.php">This Project</a >
  <a href="14 contact.php">About us</a>
  <div class="topnav-right">
  	<a href="13 logout.php">Logout</a>
  </div>
</div><br>

  <form action="9 payment.php" method="POST">

    <div class="heading">
      <h1>Donate Now</h1>

    </div>

    <div class="container">

      <label for="bankname"><b> Bank Name :</b></label>
      <select name="bankname" required>
            <option value="HDFC">HDFC</option>
            <option value="SBI">SBI</option>
            <option value="BOB">BOB</option>
            <option value="ICICI">ICICI</option>
            <option value="AXIS">AXIS</option>
            <option value="BOI">BOI</option>
      </select>
      <br><br>

      <label for="account_no"><b> Account Number :</b></label>
      <input type="text" name="account_no" placeholder="Enter Account no" />
      <br>

      <label for="ifsc"><b> IFSC Number :</b></label>
      <input type="text" name="ifsc" placeholder="Enter IFSC no" />
      <br>

      <label for="state"><b> State :</b></label>
      <select name="state" required>
            <option value="Andhra Pradesh">Andhra Pradesh</option>
            <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
            <option value="Arunachal Pradesh">Arunachal Pradesh</option>
            <option value="Assam">Assam</option>
            <option value="Bihar">Bihar</option>
            <option value="Chandigarh">Chandigarh</option>
            <option value="Chhattisgarh">Chhattisgarh</option>
            <option value="Dadar and Nagar Haveli">Dadar and Nagar Haveli</option>
            <option value="Daman and Diu">Daman and Diu</option>
            <option value="Delhi">Delhi</option>
            <option value="Lakshadweep">Lakshadweep</option>
            <option value="Puducherry">Puducherry</option>
            <option value="Goa">Goa</option>
            <option value="Gujarat">Gujarat</option>
            <option value="Haryana">Haryana</option>
            <option value="Himachal Pradesh">Himachal Pradesh</option>
            <option value="Jammu and Kashmir">Jammu and Kashmir</option>
            <option value="Jharkhand">Jharkhand</option>
            <option value="Karnataka">Karnataka</option>
            <option value="Kerala">Kerala</option>
            <option value="Madhya Pradesh">Madhya Pradesh</option>
            <option value="Maharashtra">Maharashtra</option>
            <option value="Manipur">Manipur</option>
            <option value="Meghalaya">Meghalaya</option>
            <option value="Mizoram">Mizoram</option>
            <option value="Nagaland">Nagaland</option>
            <option value="Odisha">Odisha</option>
            <option value="Punjab">Punjab</option>
            <option value="Rajasthan">Rajasthan</option>
            <option value="Sikkim">Sikkim</option>
            <option value="Tamil Nadu">Tamil Nadu</option>
            <option value="Telangana">Telangana</option>
            <option value="Tripura">Tripura</option>
            <option value="Uttar Pradesh">Uttar Pradesh</option>
            <option value="Uttarakhand">Uttarakhand</option>
            <option value="West Bengal">West Bengal</option>
          </select>
          <br><br>

          <label for="amount"><b> Amount :</b></label>
          <input type="text" name="amount" placeholder="Enter Amount in rupees" required /> &nbsp
          <button type="button" onclick="alert('Minimum Amount 1 ruppes')">i</button> 

    </div>

    <div class="buttons">
      <button type="submit" class="btn">Confirm </a> </button>
      <button type="reset" class="btn">Reset</button>
    </div>

  </form>
</body>

</html>