<?php
	
	$servername="localhost";
	$username="root";
	$password="";
	$database="admin_db";

	$conn=mysqli_connect($servername,$username,$password,$database);

	if($conn){
		echo "Connection was sucessful: <br>";
	}

	$fname=$_POST['fname'];
	$lname=$_POST['lname'];
	$cno=$_POST['cno'];
	$email=$_POST['email'];

	$query="INSERT INTO  user_data VALUES('$fname','$lname',$cno,'$email')";
	mysqli_query($conn,$query);

	if($query){
		echo "Records have been added!";
	}

?>