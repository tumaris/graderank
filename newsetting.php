<head>
	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, user-scalable=yes">
	<title>Settings</title>

	<!-- Latest compiled and minified CSS -->
 	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

 	<!-- Optional theme -->
 	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

 	<!-- Latest compiled and minified jQuery -->
	<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js"
	 integrity="sha256-/SIrNqv8h6QGKDuNoLGA4iret+kyesCkHGzVUUV0shc="
  	crossorigin="anonymous"></script>

 	<!-- Latest compiled and minified JavaScript -->
 	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

	<!-- Link the HTML to Font Awesome Icon (Bootstrap CDN) -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<!--Link to chart.JS CDN -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.1.3/Chart.min.js"></script>

	<!-- Link the HTML with CSS -->
	<link rel="stylesheet" href="settingstyle.css" type="text/css">

	<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300" rel="stylesheet">







	<!--=======================added by Tumaris (JQuery)=======================-->
	<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>

	<!--Function for slide down
	<script>
		$(function()   {
    $(".link").click(function(e) {
        e.preventDefault();
        $('div.panel:visible').hide();
        $(this).next('div.panel').show();
    });
	});
	</script>-->

	<!--Funciton for popup box
	<script>
	function myFunction() {
    	alert("A varification emial has been sent to your current email address:)");
		}
	</script>
	-->

	<style>

	#B1{
	    height: 400px;
	    width: 400px;
			text-align: center;
	    background-color: rgba(0, 0, 0, 0.2);
	    box-shadow: 0 4px 16px 0 rgba(0,0,0,0.2);
	    margin-top: 200px;
	    margin-left: 5%;
	    position: absolute;

	}

	#B1:hover{
	    box-shadow: 0 8px 32px 0 rgba(0,0,0,0.2);
	    cursor: pointer;
	}



	#C1{
			    height: 400px;
			    width: 600px;
			    background-color: rgba(0, 0, 0, 0.2);
			    box-shadow: 0 4px 16px 0 rgba(0,0,0,0.2);
			    margin-top: 200px;
			    margin-left: 45%;
			    position: absolute;

			}

	#C1:hover{
			    box-shadow: 0 8px 32px 0 rgba(0,0,0,0.2);
			    cursor: pointer;
			}


	.button{
	    background: rgba(0,0,0,0.5);
	    padding: 5px;
			height:40px;
			width: 110px;
	    border: none;
	    font-family: 'Roboto Condensed', sans-serif;
	    font-size: 15px;
	    color: white;
	    border-radius: 2px;
	    margin-top: 10px;

	}




	div.panel { display:fnone;
			padding: 25px;
			height:80px;
	    text-align: center;
			color: white;
			font-family: 'Roboto Condensed', sans-serif;
			font-size:14px;
			background-color: #4c4c4c;
	    border: solid 1px #c3c3c3;}
	div.panel.active {
			padding: 70px;
			height:350px;
	    text-align: center;
			color:#323232;
			font-size:14px;
	    background-color: #cccccc;
	    border: solid 1px #c3c3c3; }
	div.link{
			padding: 25px;
			height:80px;
	    text-align: center;
			color: white;
			font-family: 'Roboto Condensed', sans-serif;
			font-size: 20px;
	    background-color: #4c4c4c;
	    border: solid 1px #c3c3c3; }



	</style>


	<!--======================Tumaris' Part ended ==============================-->


</head>

<body>
	<!--<div id="Header"> GRADE RANK </div>-->
	<div id="A">
		<div id="A1">
			<a href="dashboard.php"><button id="Abtn"> DASHBOARD </button></a>
		</div>
		<div id="A2">
			<a href="searchpage.php"><button id="Abtn"> SEARCH CLASS</button></a>
		</div>
		<div id="A3">
			<a href="sorting.php"><button id="Abtn"> SORT </button></a>
		</div>
		<div id="A4">
			<a href="inputgrade.php"><button id="Abtn"> INPUT GRADE </button></a>
		</div>
		<div id="A5">
			<a href="setting.php"><button id="Abtn"> SETTINGS </button></a>
		</div>
		<div id="A6">
			<a href='mainpage.html'><button id="Abtn" name="logout"> LOGOUT </button></a>
		</div>
	</div>



		<!-- ===============Below is Tumaris' Code================================ -->
<div id="B1">

<!-- CHANGE PASSWORD SLIDE-->
<div class='link'> Edit Password </div>
<!--<div class='panel active'>-->
<div>
	<form action="#"> <!--There should be action="link" If you click the "Submit" button, the form-data will be sent to a page called-->
		<br><br>
		Current: &nbsp<input type="text" name="current">
		<br><br>
		New:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <input type="text" name="new">
		<br><br>
		Re-type: <input type="text" name="Re-type new">
		<br><br>

		<button class="button">Save changes</button>
		<button class="button">Cancel</button>

		<br>
		<a href="some link" style="font-family:'Roboto Condensed', sans-serif">Forgot your password? </a>
	</form>
</div>
<!--</div>-->

<!--
<!-- CHANGE USERNAME SLIDE
<div class='link'> <b> Change username </b></div>
<div class='panel'>
	<form action="#">
		<b>New username: </b>
		<input type="text" name="new name">
		<br><br>
		<input type="submit" value="Save changes">
		<input type="submit" value="Cancel">
	</form>
</div>


<!--CHANGE EMAIL SLIDE
<div class='link'> <b>Change email </b></div>
<div class='panel'>
	<form action="#">
		<b>Current email:</b>
		<input type="text" name="current email">
		<br><b>New email: &nbsp&nbsp&nbsp&nbsp</b>
		<input type="text" name="new email">
		<br><br>
		<input type="submit" value="Save changes" onclick="myFunction()">
		<input type="submit" value="Cancel">
	</form>
</div>
-->

</div>

<div id="C1">
	<div class='link'> Saved Classes </div>
	<div class='panel active'>my classes</div>
</div>
</body>
		<!-- ===============Tumaris' part eneded =================================-->
