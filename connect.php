<?php
	//Database connection
	$conn = new mysqli('localhost','root','','test1');
	if($conn->connect_error){
		die('Connection Failed : '.$conn->connect_error);
	}
	
?>