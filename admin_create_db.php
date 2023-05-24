<?php

	$servername="localhost";
	$username="root";
	$password="";
	$database="admin_db";

	$conn=mysqli_connect($servername,$username,$password,$database);

	if($conn){
		echo "Connection has been established!";
	}

	$query="CREATE TABLE user_data(Fname varchar(20),Lname varchar(20),contact int(10),email_id varchar(40))";
	mysqli_query($conn,$query);

	if($query){
		echo "Database has been created";
	}
?>