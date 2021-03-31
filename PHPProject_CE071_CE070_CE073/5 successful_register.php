

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Successfully Register</title>

  <style>
    body {
            font-family: Arial, Helvetica, sans-serif;
            background-color: orange;
      }

      .success {
        height: 10em;
        position: relative;
        margin: 0;
        position: absolute;
        top: 50%;
        left: 50%;
        margin-right: -50%;
        transform: translate(-50%, -50%);
        font-size: xx-large;
      }

      .login {
          
          text-align: center;
      }

      .ibutton {
        background-color: #4CAF50;
        color: white;
        padding: 10px 10px;
        margin: 8px 0px;
        border: none;
        cursor: pointer;
        width: 20%;
        opacity: 0.9;

        height: 5em;
        position: absolute;
        top: 50%;
        left: 50%;
        margin-right: -50%;
        transform: translate(-50%, -50%);
      }
  </style>

</head>

<body bgcolor="orange">
  <div class="success">
    Congrats ! You have Suceesfully Registered.
  </div>

  <div class="login">

    <button type="submit" class="ibutton"> <a href="6 login.php" style="color: wheat; font-size:medium">Log in</a> </button> 

  </div>

</body>

</html>

<?php
  session_start();
?>