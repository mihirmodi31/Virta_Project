<?php
echo '<body style="background-color:orange">';
require_once '1 connection.php';
try
{
	$sql="create table register( managment_id INT(6) UNSIGNED,
                                     username VARCHAR(20) PRIMARY KEY NOT NULL,
				     firstname VARCHAR(10) NOT NULL,
                                     lastname VARCHAR(10) NOT NULL,
                                     email VARCHAR(10) NOT NULL,
				     password VARCHAR(20) NOT NULL,
				     gender VARCHAR(8) NOT NULL DEFAULT 'other',
				     mobileno VARCHAR(10) NOT NULL)";
	$query=$dbhandler->query($sql);

	$sql="create table donate( id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
				   username VARCHAR(20) NOT NULL,
				   bankname VARCHAR(6) NOT NULL,
				   accountno VARCHAR(11) NOT NULL,
				   ifsc VARCHAR(11) NOT NULL,
				   amount VARCHAR(8) NOT NULL,
				   state VARCHAR(20) NOT NULL)";

	$query=$dbhandler->query($sql);
	echo "Register and Donate table created successfully.<br/>";
}
catch(PDOException $e)
{
	echo $e->getMessage();
	die();
}
?>