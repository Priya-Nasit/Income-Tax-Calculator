<?php
	$server_name="localhost";
	$username="root";
	$password="";
	$database="project";

	$con=mysqli_connect($server_name,$username,$password,$database);
	if(!$con)
	{
		mysqli_error(); 
	}

?>