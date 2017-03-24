<?php
session_start();
$_SESSION['message'] = '';

//Connecting to the mysql database accounts
$mysqli = new mysqli('10.246.251.204', 'team13', 'graderank', 'data13');

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
	if ($_POST['password'] == $_POST['confirmpassword']){

		//create variables
		$username = mysql_real_escape_string($_POST['username']);
		$email = mysql_real_escape_string($_POST['email']);
		$password = md5($_POST['password']); //hashing

		$class1 = mysql_real_escape_string($_POST['class1']);
		$letter1 = mysql_real_escape_string($_POST['letter1']);
		$year1 = mysql_real_escape_string($_POST['year1']);
		$class2 = mysql_real_escape_string($_POST['class2']);
		$letter2 = mysql_real_escape_string($_POST['letter2']);
		$year2 = mysql_real_escape_string($_POST['year2']);
		$class3 = mysql_real_escape_string($_POST['class3']);
		$letter3 = mysql_real_escape_string($_POST['letter3']);
		$year3 = mysql_real_escape_string($_POST['year3']);

		//Char letter grade conversion function
		if ($letter1 == "A")$letter1 = 4;
		if ($letter1 == "B")$letter1 = 3;
		if ($letter1 == "C")$letter1 = 2;
		if ($letter1 == "D")$letter1 = 1;
		if ($letter1 == "F")$letter1 = 0;

		if ($letter2 == "A")$letter2 = 4;
		if ($letter2 == "B")$letter2 = 3;
		if ($letter2 == "C")$letter2 = 2;
		if ($letter2 == "D")$letter2 = 1;
		if ($letter2 == "F")$letter2 = 0;

		if ($letter3 == "A")$letter3 = 4;
		if ($letter3 == "B")$letter3 = 3;
		if ($letter3 == "C")$letter3 = 2;
		if ($letter3 == "D")$letter3 = 1;
		if ($letter3 == "F")$letter3 = 0;

		//store varibles into database
		$_SESSION['username'] = $username;
		$sql = "INSERT INTO users(username, email, password)". "VALUES ('$username', '$email', '$password')";
		$sql1 = "INSERT INTO score2(class, grade, year)". "VALUES ('$class1', '$letter1', '$year1')";
		$sql2 = "INSERT INTO score2(class, grade, year)". "VALUES ('$class2', '$letter2', '$year2')";
		$sql3 = "INSERT INTO score2(class, grade, year)". "VALUES ('$class3', '$letter3', '$year3')";

		//if query is successful, redirect to welcome.php page
		if ($mysqli->query($sql)===true
			and $mysqli->query($sql1)===true
			and $mysqli->query($sql2)===true
			and $mysqli->query($sql3)===true){
			$_SESSION['message'] = "Registration successful.";
		header("location: dashboard.php");
		}

		else{
		$_SESSION['message'] = "Registration failed";
		}
	}
	else{
		$_SESSION['message'] = "Two password did not match!!!";
	}
}

?>

<!-- _________________________ HTML PART _________________________  -->
<!DOCTYPE html>
<html lang = "en">
<html>
<head>
	<meta charset="utf-8">
 	<meta name = "viewport" content="width=device-wdith, initial-scale=1">
	<title> GradeRank Registration</title>

	<!-- Latest compiled and minified CSS for Bootstrap -->
 	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

 	<!-- Optional theme -->
 	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

 	<!-- Latest compiled and minified jQuery -->
	<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js"
	 integrity="sha256-/SIrNqv8h6QGKDuNoLGA4iret+kyesCkHGzVUUV0shc="
  	crossorigin="anonymous"></script>

  	<!-- jQuery 3.1.1 -->
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

 	<!-- Latest compiled and minified JavaScript -->
 	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

 	<!-- Link the HTML with CSS -->
	<link rel="stylesheet" href="registerstyle.css" type="text/css">

	<!-- Link the HTML to Font Awesome Icon (Bootstrap CDN) -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
	<div>
	    <form class="form form-group" action="register.php" method="post" enctype="multipart/form-data" autocomplete="off">
	    			<!-- __________________ FIRST DIV SHOWN __________________-->
		    <div id="account">
		    	<h1>Create an account</h1>
			    <div>
					<label for="username"> Username: </label>
			    	<input class="form-control" type="text" placeholder="User Name" name="username" required />
			    </div>
			    <div class="space">
			    	<label for="email"> Email: </label>
				    <input class="form-control" type="email" placeholder="Email" name="email" required />
				</div>
				<div id="flex-display" class= "space">
					<div id="pass1">
						<label for="password"> Password: </label>
				    	<input type="password" class="form-control" placeholder="Password" name="password" autocomplete="new-password" aria-describedby="passHelp" required />
					    <small id="passHelp" class="form-text text-muted"> Must be longer than 6 characters </small>
				    </div>
				    <div id = "pass2">
				    	<label for="confirmpassword"> Confirm Password: </label>
				    	<input type="password" class="form-control" placeholder="Confirm Password" name="confirmpassword" autocomplete="new-password" aria-describedby="passHelp2" required />
					    <small id="passHelp2" class="form-text text-muted"> Password must match </small>
				    </div>
				</div>
				<br> <!--Button to link to next page -->
				<div><a href="#" id="btn">Next &raquo</a></div>
			</div>

			<!--SECOND DIV SHOWN. FOR NOW DATALIST OPTION IS NOT WORKING!!!!! -->
			<div id="class">
				<div id="text-before-form">
					<h1> What Classes Have You Taken? </h1>
					<h4> Enter at least three class you have taken and your grade for that class. The information you provide is private and won't be shared without your consent (see Privacy Policy). </h4>
				</div>
			<!-- __________________FIRST ROW__________________ -->
				<div class="column">
					<div>
						<label> Class </label>
						<input class="form-control" type="text" placeholder="CS 171" name="class1" list="drexelclass" required />
					</div>
				</div>
				<div class="column">
					<label> Grade </label>
					<input type="text" class="form-control" name="letter1" placeholder="E.g: A+" list="grade" required />
				</div>
				<div class="column">
					<label> Year </label>
					<input type="number" class="form-control" name="year1"
					placeholder="E.g: 2014">
				</div>
			<!-- __________________SECOND ROW__________________ -->
				<div class="column">
					<div>
						<input class="form-control" type="text" placeholder="CS 171" name="class2" list="drexelclass" required />
					</div>
				</div>
				<div class="column">
					<input type="text" class="form-control" name="letter2" placeholder="E.g: A+" list="grade" required />
				</div>
				<div class="column">
					<input type="number" class="form-control" name="year2"
					placeholder="E.g: 2014">
				</div>
			<!-- __________________THIRD ROW__________________ -->
				<div class="column">
					<div>
						<input class="form-control" type="text" placeholder="CS 171" name="class3" list="drexelclass" required />
					</div>
				</div>
				<div class="column">
					<input type="text" class="form-control" name="letter3" placeholder="E.g: A+" list="grade" required />
				</div>
				<div class="column">
					<input type="number" class="form-control" name="year3"
					placeholder="E.g: 2014">
				</div>
				<!--Buttons to go back or create new account -->
				<div>
					<a href="#" id="btn2" class="inline">&laquo Back</a>
					<input type="submit" value="Register" name="register" class="reg-btn inline" />
				</div>
			</div>
		</form>



	<!--Source: http://jsfiddle.net/3XwZv/57/ -->
	<script>
	$('#btn').click(function(e){
		$('#account').fadeOut('slow',function(){
			$('#class').fadeIn('slow');
		});
	});

	$('#btn2').click(function(e){
		$('#class').fadeOut('slow', function(){
			$('#account').fadeIn('slow');
		});
	});
	</script>
</body>
</html>

<!--
<div class="alert alert-error"></div>
-->
