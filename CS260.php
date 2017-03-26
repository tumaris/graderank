<head>
	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, user-scalable=yes">
	<title>CS 260</title>

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


	<h1> CS 260 </h1>
	<div id="B">
		<div id="B1">
			<div id="easy">
				<h3 style="color:#922B21"> HARD </h3>
				<h4> Average: <b>2.00/4.00</b><br>
				Most student got a <b>C</b><br>
				Passing rate: <b>75%</b><br>
				Sample size: <b> 40 users </b> </h4>
			</div>
			<canvas id="canvas1" width="450" height="360"></canvas>
		</div>
	</div>

	<div id="C">
		<button id="C1B"> DATA STRUCTURE </button>
		<div id="C1">
			Covers stacks, queues, linked allocation, binary trees, internal searching and sorting, hashing, and applications. Data structures form the basics for the programmer's toolbox.  You will become familiar with the basic common data structures, and learn to modify them or create your own.  Further, the notion of data abstraction is important from several aspects. <br>
			<br>
			<b> Credits: </b> 3.00
			<br>
			<b> Prerequesites: </b> CS 265
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
			<button id="review" style="background-color:#C0392B"> ADD REVIEW &#x2b</button>
			<button  style="background-color:#C0392B"> SAVE CLASS &#x2605</button>
		</div>
		<div id="C4">
			<div id="target" style="display: none">
			<textarea id="C4input" placeholder="Write something here.... :)"></textarea>
		</div>
	</div>


<script>
	Chart.defaults.global.defaultFontFamily = "Roboto Condensed";
	Chart.defaults.global.defaultFontSize = 14;
	var doughnut = $('#canvas1');
	var doughnutoptions = {
		maintainAspectRatio: false,
		responsive: false,
		animateScale: true,
		cutoutPercentage: 70
	}

	var doughnutdata={
		labels: [
		        "5% of users get A",
		        "20% of users get B",
		        "50% of users get C",
		        "20% of users get D",
		        "5% of users get F"
		],
		datasets: [
		    {
		    	data: [5, 20, 50, 20, 5],
		    	backgroundColor: [
				    "#7B241C",
				    "#C0392B",
				    "#EC7063",
				    "#F5B7B1",
		            "#E5E8E8"
		        ],
		        hoverBackgroundColor: [
		            "#78281F",
		            "#B03A2E ",
		            "#C0392B",
		            "#F1948A",
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
<script>
		$('#review').click(function(){
			$('#target').toggle('slow');
		});
	</script>
</body>
