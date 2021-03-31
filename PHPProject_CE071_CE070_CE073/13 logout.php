<?php
    session_start();
    unset($_SESSION["username"]);
    header("Location:3 welcome.php");
?>