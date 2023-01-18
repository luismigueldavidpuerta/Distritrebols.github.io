<?php

function Conectarse()
{
	$servername = "localhost";
	$username = "root";
	$pasword = "";
	$dbname = "ac";

	$conn =mysqli_connect($servername,$username,$pasword,$dbname);

	if (!$conn){
		die("connection failed: " . mysqli_connect_error());
	}

	return $conn;
}
?>