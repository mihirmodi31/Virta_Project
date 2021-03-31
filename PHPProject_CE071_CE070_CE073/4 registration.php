<?php
 if($_SERVER['REQUEST_METHOD']=='POST')
 {
  require_once "1 connection.php";
  try
  {
	$username=$_POST['username'];
	$password=$_POST['password1'];
	$firstname=$_POST['firstname'];
	$lastname=$_POST['lastname'];
	$mobileno=$_POST['mobile_no'];
	$managment_id=$_POST['managment_id'];
	$email=$_POST['email'];
	$gender=$_POST['gender'];
	
	$filtered_phone_number = filter_var($mobileno, FILTER_SANITIZE_NUMBER_INT);
        $phone_to_check = str_replace("-", "", $filtered_phone_number);

	// Validate password strength
	$uppercase = preg_match('@[A-Z]@', $password);
	$lowercase = preg_match('@[a-z]@', $password);
	$number    = preg_match('@[0-9]@', $password);
	$specialChars = preg_match('@[^\w]@', $password);

	
	if(!$uppercase || !$lowercase || !$number || !$specialChars || strlen($password) < 4) {
    		echo 'Password should be at least 4 characters in length and should include at least one upper case letter, one number, and one special character.';
	}
	elseif (strlen($phone_to_check) < 10 || strlen($phone_to_check) > 14) {
        	echo "Mobile number is invalid !";
        }
	elseif($managment_id == 0)
	{
		$sql="INSERT into register (managment_id,username,firstname,lastname,email,password,gender,mobileno) values ('$managment_id','$username','$firstname','$lastname','$email','$password','$gender','$mobileno')";
		$query=$dbhandler->query($sql);
		header("Location: 5 successful_register.php");
	}
	elseif($managment_id == 1101 || $managment_id == 2101 || $managment_id == 3101 || $managment_id == 4101)
	{
		$sql="INSERT into register (managment_id,username,firstname,lastname,email,password,gender,mobileno) values ('$managment_id','$username','$firstname','$lastname','$email','$password','$gender','$mobileno')";
		$query=$dbhandler->query($sql);
		header("Location: 5 successful_register.php");
	}
	else
	{
		echo "Managment_id is invalid !";
	}
  }
  catch(PDOException $e)
  {
	echo "username already exists !";
  }
 }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            background-color: black;
        }

        * {
            box-sizing: border-box;
        }

        .container {
            padding: 40px;
            background-color: white;
        }

        .heading {
            padding: 10px;
            background-color: orange;
            color: white;
            text-align: center;
            font-size: x-large;

        }

        input[type=text],
        input[type=password],
        input[type=email],
        input[type=tel] {
            width: 50%;
            padding: 15px;
            margin: 5px 0 15px 0;
            display: inline-block;
            border: none;
            background: #f1f1f1;
        }

        input[type=text]:focus,
        input[type=password]:focus,
        input[type=email]:focus,
        input[type=tel]:focus {
            background-color: #ddd;
            outline: none;
        }

        hr {
            border: 2px solid black;
            margin-bottom: 25px;
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

        a {
            color: dodgerblue;
        }

        .login {
            background-color: #f1f1f1;
            text-align: center;
        }
    </style>
</head>

<body>
    <script>
        function checkPassword(form) {
            password1 = form.password1.value;
            password2 = form.password2.value;
            if (password1 == "")
                alert("Please enter password");
            if (password2 == "")
                alert("Please reenter password");
            if (password1 != password2) {
                alert("Password did not match:try again");
                return false;
            } else {
                return true;
            }
        }
    </script>

    <form action="4 registration.php" method="POST" align="left" onsubmit="return checkPassword(this)">

        <div class="heading">
            <h1>Sign Up</h1>

        </div>
        <div class="container">
            <label for="username"><b> User Name :</b></label>
            <input type="text" name="username" required placeholder="Enter User Name" minlength=6 maxlength=10/>
            <button type="button" onclick="alert('Enter username between 6 to 10 characters')">i</button> <br>

            <label for="firstname"><b> First Name :</b></label>
            <input type="text" name="firstname" required placeholder="Enter First Name" /> <br>

            <label for="lastname"><b> Last Name :</b></label>
            <input type="text" name="lastname" required placeholder="Enter Last Name" /> <br>
            
            <label for="managment_id"><b> Managment Id:</b></label>
            <input type="text" name="managment_id" placeholder="Enter if you have" /> <br>

            <label for="email"><b> Email :</b></label>
            <input type="email" name="email" required placeholder="Enter Email" /> <br>

            <label for="password"><b> Password :</b></label>
            <input type="password" name="password1" required placeholder="Enter Password" minlength=3/> 
            <button type="button" onclick="alert('Password of minimum length 4. 1 Upper case letter,1 lower case letter,1 number,1 special character')">i</button><br>

            <label for="password"><b> Re-Enter Password :</b></label>
            <input type="password" name="password2" required placeholder="Re-Enter Password" /> <br>

            <label for="gender"><b> Gender :</b>
                <input type="radio" name="gender" value="male"/>Male
                <input type="radio" name="gender" value="female"/>Female
                <input type="radio" name="gender" value="other"/>Other <br> <br>
            </label>

            <label for="tel"><b> Mobile No :</b></label>
            <input type="tel" name="mobile_no" required placeholder="Enter Mobile Number" required /> <br>

        </div>

        <div class="login">

            <button type="submit" class="registerbtn">Sign Up</button> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp

            Already have an account? <a href="6 login.php">Log in</a>

        </div>

    </form>
</body>

</html>