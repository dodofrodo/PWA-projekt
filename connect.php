<?php

    $dsn = 'mysql:host=localhost;dbname=barbershop';
	$user = 'root';
	$pass = '';
	$option = array(
		PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'
	);

	
	
	try
	{
		$con = new PDO($dsn,$user,$pass,$option);
		$con->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
		//echo 'Good Very Good !';
	}
	catch(PDOException $ex)
	{
		echo "Došlo je do greške prilikom spajanja sa bazom podataka ! ".$ex->getMessage();
		die();
	}
?>