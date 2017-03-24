<?php

//Get value from form
	$username = $_POST['username'];
	$password = md5($_POST['password']);

//Prevent mySQL injection
	$username = stripcslashes($username);
	$password = stripcslashes($password);
	$username = mysql_real_escape_string($username);
	$password = mysql_real_escape_string($password);

//Connect to the database on graderank
	//mysql_connect("localhost", "root", "");
	//mysql_select_db("graderank");

//Connecting to the database on Drexel
	mysql_connect("10.246.251.204", "team13", "graderank");
	mysql_select_db("data13");

//Query the scrath database for table user
	$result = mysql_query("select * from users where username = '$username' and password='$password'") or die("Failure to query database" .mysql_error());
	$row = mysql_fetch_array($result);

//Redirect to dashboard
	if ($row['username'] == $username && $row['password'] == $password){
		header("location: dashboard.php");
	}
	else{
		echo "Failed to login";
	}

?>
