<?php
echo '<body style="background-color:orange">';
try{
	$dbhandler = new PDO('mysql:host=127.0.0.1;dbname=veerata','root','');
	//echo "<h2>Connection to the database is established...</h2><br/>";
	$dbhandler->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION); 	
}
catch(PDOException $e){
	echo $e->getMessage();
	die();
}
?>