<head>
	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, user-scalable=yes">
	<title>CS 171</title>

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
	<link rel="stylesheet" href="classpagestyle.css" type="text/css">

	<!-- Font style of Robot Condensed for ChartJs -->
	<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300" rel="stylesheet">
</head>

<body>
	<div id="A">
		<a href="dashboard.php"><div id="A1"></div></a>
		<a href="searchpage.php"><div id="A2"></div></a>
		<a href="dashboard.php"><div id="A3"></div></a>
		<a href="dashboard.php"><div id="A4"></div></a>
		<a href="dashboard.php"><div id="A5"></div></a>
		<a href="mainpage.html"><div id="A6"></div></a>
	</div>


	<h1> CS 171 </h1>
	<div id="B">
		<div id="B1">
			<div id="easy">
				<h3 id="jsondisplay"> EASY </h3>
			</div>
			<canvas id="canvas1" width="450" height="360"></canvas>
		</div>
	</div>

	<div id="C">
		<button id="C1B"> COMPUTER PROGRAMMING I </button>
		<div id="C1">
			Introduces fundamental concepts of computing including memory, instructions, function calls, and activation records. Covers fundamentals of structured computer programming in the language of instruction: variables, input and output, expressions, assignment statements, conditionals and branching, subprograms, parameter passing, repetition, arrays, top-down design, testing, and debugging. <br>
			<br>
			<b> Credits: </b> 3.00
			<br>
			<b> Prerequesites: </b> None
		</div>

		<br>

		<button id="C1B"> HAVE YOU TAKEN THIS CLASS BEFORE? </button>
		<div id="C2">
			<form action="" method="post">
				<div id="wrapper">
					<input type="text" id= "C2input" placeholder="Enter your grade here :) Your data helps us grow!" list="classes" required />
					<datalist id="classes">
						<option value="A+">
						<option value="A">
						<option value="A-">
						<option value="B+">
						<option value="B">
						<option value="B-">
						<option value="C+">
						<option value="C">
						<option value="C-">
						<option value="D+">
						<option value="D">
						<option value="F">
					</datalist>
					<button id="submit"> SUBMIT </button>
				</div>
			</form>
		</div>

		<div id="C3">
			<button id="review"> ADD REVIEW &#x2b</button>
			<button> SAVE CLASS &#x2605</button>
		</div>
		<div id="C4">
			<div id="target" style="display: none">
			<textarea id="C4input" placeholder="Write something here.... :)"></textarea>
		</div>

	</div>


<script>
  //----------------------------- SHOW AND HIDE REVIEW BOX -----------------------------
		$('#review').click(function(){
			$('#target').toggle('slow');
		});


  //---------------------------  JSON STUFF ---------------------------------------------
  //Create some global variables to be used
  var cs171 = 0;
  var a = 10;
  var b = 20;
  var c = 0;
  var d = 0;
  var f = 0;

  //Pulling data from internal json
  var jsondisplay = document.getElementById("jsondisplay");
  var request = new XMLHttpRequest();
  request.open('GET', 'file.php', true);
  request.onload = function(){
    var data = JSON.parse(request.responseText);
    var count = 0;

    //Looping through JSON data and do stuff
    for (var i = 0; i < data.length; i++){
      if (data[i].class == "CS 171"){
        cs171 += parseInt(data[i].grade);
        count++;
      }
      if (parseInt(data[i].grade) > 3.60){
        a++;
      }
      else if (parseInt(data[i].grade) > 2.60){
        b++;
      }
      else if (parseInt(data[i].grade) > 1.60){
        c++;
      }
      else if (parseInt(data[i].grade) > 0.60){
        d++;
      }
      else{
        f++;
      }
    }
    cs171 = cs171 / count;
    cs171 = Math.round(cs171 * 100) / 100;
    var average = "<h4>" + "Average: " + "<b>" + cs171 + "/4.00 </b><br>Sample Size: <b>" + count +  " users</b> <br> Passing rate: <b> 75% </b></h4>";
    jsondisplay.insertAdjacentHTML('beforeend', average);

  }
  request.send();

  //--------------------------- DISPLAYING PIE CHART -----------------------------
Chart.defaults.global.defaultFontFamily = "Roboto Condensed";
Chart.defaults.global.defaultFontSize = 14;


//Piechart thingy
var doughnut = $('#canvas1');
var doughnutoptions = {
  maintainAspectRatio: false,
  responsive: false,
  animateScale: true,
  cutoutPercentage: 70
}

var doughnutdata={
  labels: [
          "60% of users get A",
          "20% of users get B",
          "15% of users get C",
          "3% of users get D",
          "2% of users get F"
  ],
  datasets: [
      {
        data: [a,b,c,d,f],
        backgroundColor: [
          "#117864",
          "#48C9B0",
          "#A3E4D7",
          "#D1F2EB",
              "#E5E8E8"
          ],
          hoverBackgroundColor: [
              "#0E6655",
              "#1ABC9C",
              "#76D7C4",
              "#A3E4D7",
              "#E5E7E9"
          ]
      }],
};

var mydoughtnut = new Chart(doughnut, {
  type: "doughnut",
  data: doughnutdata,
  options: doughnutoptions
});

  </script>

</body>
